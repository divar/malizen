<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NeighborhoodAssociationResource extends JsonResource
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
            'name' => $this->name,
            'village' => $this->village,
            'citizen_association' => $this->citizenAssociation,
            'created_by' => $this->creator(),
            'updated_by' => $this->updater(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
