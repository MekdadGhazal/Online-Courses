<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' =>$this->id,
            'title' => $this->title,
            'body' => $this->body,
            'user' =>isset(User::find($this->user_id)->name)?User::find($this->user_id)->name:0,
            'created_at' => isset($this->created_at)? $this->created_at->diffForHumans() : 0,
        ];
    }
}
