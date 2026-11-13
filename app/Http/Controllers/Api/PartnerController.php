<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartnerResource;
use App\Models\Partner;
use Illuminate\Http\JsonResponse;

class PartnerController extends Controller
{
    public function index(): JsonResponse
    {
        $partners = Partner::where('is_active', true)
            ->orderBy('order_priority')
            ->get();

        return response()->json([
            'success' => true,
            'data' => PartnerResource::collection($partners),
        ]);
    }
}

