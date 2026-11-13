<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TestimonialResource;
use App\Models\Testimonial;
use Illuminate\Http\JsonResponse;

class TestimonialController extends Controller
{
    public function index(): JsonResponse
    {
        $row1 = Testimonial::where('is_active', true)
            ->where('marquee_row', 'row1')
            ->orderBy('order_priority')
            ->get();

        $row2 = Testimonial::where('is_active', true)
            ->where('marquee_row', 'row2')
            ->orderBy('order_priority')
            ->get();

        return response()->json([
            'success' => true,
            'data' => [
                'row1' => TestimonialResource::collection($row1),
                'row2' => TestimonialResource::collection($row2),
            ],
        ]);
    }
}

