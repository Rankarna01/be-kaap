<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TestimonialResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => 't-' . $this->id,
            'name' => $this->client_name,
            'role' => $this->role,
            'company' => $this->company,
            'image' => $this->avatar_image ? asset('storage/' . $this->avatar_image) : '/images/users/user-1.png',
            'service' => $this->service_category ?? 'General Audit & Asurans',
            'quote' => $this->quote,
            'marquee_row' => $this->marquee_row,
            'rating' => $this->rating,
        ];
    }
}

