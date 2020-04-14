<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'sorting_order' => $this->sorting_order,
            'introduction' => ImageOptimizer::optimize($this->introduction),
            'head_img' => $this->head_img,
            'tags' => $this->tags,
        ];
    }
}
