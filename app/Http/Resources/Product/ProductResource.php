<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name'=>$this->name,
            'description'=>$this->details,
            'price'=>$this->price,
            'stock'=>$this->stock==0 ?'out of stock':$this->stock,
            'discount'=>$this->discount,
            'totalprice'=>round((1-($this->dicount/100))*$this->price,2),
            'rating'=>$this->reviews->count()> 0 ?round( $this->reviews->sum('star')/$this->reviews->count(),2):'No rating yet',
            'href'=>[
                'review'=>route('review.index',$this->id)
            ],
        ];
    }
}
