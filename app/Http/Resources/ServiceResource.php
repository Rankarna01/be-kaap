<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->slug,
            'number' => $this->number ?? '',
            'title' => $this->title,
            'subtitle' => $this->subtitle ?? '',
            'short_desc' => $this->short_desc ?? '',
            'description' => $this->full_desc ?? $this->short_desc ?? '',
            'scope' => is_array($this->scope) ? array_values(array_filter($this->scope)) : [],
            'image' => $this->mascot_image ? asset('storage/' . $this->mascot_image) : ($this->fallback_image ?? '/images/services/mascot-audit.jpg'),
            'icon' => $this->icon_name ?? $this->slug,
            'show_in_core_features' => (bool) $this->show_in_core_features,
            'order' => $this->order_priority,
        ];
    }
}

