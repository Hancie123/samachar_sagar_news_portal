<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'news_category_id'=>$this->news_category_id,
            'title'=>$this->title,
            'slug'=>$this->slug,
            'user_id'=>$this->user_id,
            'excerpt'=>$this->excerpt,
            'description'=>$this->description,
            'status'=>$this->status,
            'news_image'=>$this->getFirstMediaUrl('news_image'),
            'created_at'=>$this->created_at,

        ];

    }
}