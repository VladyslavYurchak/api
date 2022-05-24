<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name' => $this->name,
            'description' => $this->detail,
            'rating' => $this->reviews->count()>0
                ?
                round($this->reviews->sum('star')/$this->reviews->count(), 2)
                :
                'No rating',
            'stock' => $this->stock == 0 ? 'Out of stock' : $this->stock,
            'price' => $this->price,
            'discount' => $this->discount,
            'totalPrice' => round(((100-$this->discount)/100)*$this->price, 2),
            'href' =>
                [
                    'reviews'=> route('reviews.index', $this->id)
                ]
        ];
    }
}
