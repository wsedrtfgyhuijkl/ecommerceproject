<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Productcollection extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'name' => $this->name,
            'totalprice' => round((1 - ($this->dicount / 100)) * $this->price, 2),
            'discount'=>$this->discount,
            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star') / $this->reviews->count(), 2) : 'No rating yet',
            'href' => [
                'review' => route('review.index', $this->id)
            ],
            'href'=>[
                'link'=>route('product.show',$this->id)
            ],
        ];
    }
}
