<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FaqResource;
use App\Models\Faq;
use Illuminate\Http\JsonResponse;

class FaqController extends Controller
{
    public function index(): JsonResponse
    {
        $faqs = Faq::where('is_active', true)
            ->orderBy('order_priority')
            ->get();

        return response()->json([
            'success' => true,
            'data' => FaqResource::collection($faqs),
        ]);
    }
}

