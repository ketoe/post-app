<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User;
use App\Models\Post;
use App\Http\Resources\UserResource;
use App\Http\Resources\PostResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'content' => $this->content,
            'post' => new PostResource(Post::findOrFail($this->post_id)),
            'author' => new UserResource(User::findOrFail($this->author)),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
