<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'height' => $this->height,
            'weight' => $this->weight,
            'gender' => $this->gender,
            'education' => $this->education,
            'occupation' => $this->occupation,
            'marriage' => $this->marriage,
            'duration' => $this->duration,
            'history' => $this->history,
        ];
    }
}
