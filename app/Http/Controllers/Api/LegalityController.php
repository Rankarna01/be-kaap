<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Legality;
use Illuminate\Http\JsonResponse;

class LegalityController extends Controller
{
    public function index(): JsonResponse
    {
        $legalities = Legality::where('is_active', true)
            ->orderBy('order_priority')
            ->get()
            ->map(fn ($l) => [
                'id' => $l->id,
                'title' => $l->title,
                'issuer' => $l->issuer,
                'license_number' => $l->license_number,
                'desc' => $l->description,
                'file_url' => $l->file_path ? asset('storage/' . $l->file_path) : null,
                'logo' => $l->logo ? asset('storage/' . $l->logo) : null,
            ]);

        return response()->json([
            'success' => true,
            'data' => $legalities,
        ]);
    }
}

