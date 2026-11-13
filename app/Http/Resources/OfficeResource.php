<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OfficeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'slug' => $this->slug,
            'city' => $this->city,
            'name' => $this->name,
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
            'whatsapp' => $this->whatsapp_number,
            'mapUrl' => $this->map_embed_url,
            'directMapLink' => $this->direct_map_link,
            'isHeadquarters' => (bool) $this->is_headquarters,
        ];
    }
}

