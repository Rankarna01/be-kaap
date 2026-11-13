<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PartnerResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'role' => $this->role,
            'isLeader' => (bool) $this->is_leader,
            'avatar' => $this->avatar_image ? asset('storage/' . $this->avatar_image) : null,
            'license' => $this->license_number,
            'links' => [
                'linkedin' => $this->linkedin_url ?? 'https://www.linkedin.com',
                'portfolio' => $this->portfolio_url ?? '/#about',
                'email' => $this->email ? 'mailto:' . $this->email : 'mailto:Kapdrsselamatsinurayadanrekan@gmail.com',
            ],
            'order' => $this->order_priority,
        ];
    }
}

