<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed review
 * @property mixed star
 * @property mixed customer
 * @property mixed id
 */
class ReviewResource extends JsonResource
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
            'customer' => $this->customer,
            'body' => $this->review,
            'star' => $this->star
        ];
    }
}
