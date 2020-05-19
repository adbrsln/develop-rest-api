<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // dd($request->all());
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' =>  $this->title,
            'body' => $this->body,
            'created_at' => $this->created_at->format('d-m-Y H:i:s')
        ];
    }
}
