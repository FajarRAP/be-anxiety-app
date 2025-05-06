<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        if ($validator->fails()) {
            return response()->json(
                ['errors' => $validator->errors()],
                422
            );
        }

        $user = User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);
        Profile::create([
            'user_id' => $user->id,
        ]);

        event(new Registered($user));

        return response()->json([
            'message' => 'User registered successfully',
            'data' => [
                'user' => $user->toResource(),
            ],
        ], 201);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::where('username', $request->username)->first();

        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        $checkPassword = Hash::check($request->password, $user->password);

        if (!$checkPassword) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }

        return response()->json([
            'message' => 'User logged in successfully',
            'data' => [
                'token' => $user->createToken($user->username)->plainTextToken,
                'user' => $user->toResource(),
            ],
        ]);
    }

    public function user(Request $request)
    {
        $user = $request->user();

        return response()->json([
            'message' => 'User retrieved successfully',
            'data' => [
                'user' => $user->toResource(),
            ],
        ]);
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete();

        return response()->json([
            'message' => 'User logged out successfully',
        ]);
    }

    public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['nullable', 'string'],
            'age' => ['nullable', 'integer'],
            'height' => ['nullable', 'numeric'],
            'weight' => ['nullable', 'numeric'],
            'genders' => ['nullable', 'string'],
            'education' => ['nullable', 'string'],
            'occupation' => ['nullable', 'string'],
            'marriage' => ['nullable', 'string'],
            'duration' => ['nullable', 'string'],
            'history' => ['nullable', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $user = $request->user();
        $profile = $user->profile;

        $profile->update($request->all());

        return response()->json([
            'message' => 'Profile updated successfully',
            'data' => [
                'user' => $user->toResource(),
            ],
        ]);
    }
}
