<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuizResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $this->title == null ? [
            'id' => $this->id,
            'question' => $this->question,
            'type' => $this->quizType->toResource(),
        ] : [
            'id' => $this->id,
            'title' => $this->title,
            'question' => $this->question,
            'type' => $this->quizType->toResource(),
        ];
    }
}
