<?php

namespace App\Http\Resources\Subsc;

use Illuminate\Http\Resources\Json\JsonResource;

class SubscResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
