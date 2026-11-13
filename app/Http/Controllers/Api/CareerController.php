<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\JsonResponse;

class CareerController extends Controller
{
    public function index(): JsonResponse
    {
        $careers = Career::where('is_open', true)
            ->orderBy('order_priority')
            ->get()
            ->map(fn ($c) => [
                'id' => $c->id,
                'role' => $c->role,
                'location' => $c->location,
                'type' => $c->job_type,
                'requirements' => $c->requirements,
                'responsibilities' => $c->responsibilities,
                'application_email' => $c->application_email ?? 'Kapdrsselamatsinurayadanrekan@gmail.com',
                'deadline' => $c->deadline_date ? $c->deadline_date->translatedFormat('d F Y') : null,
            ]);

        return response()->json([
            'success' => true,
            'data' => $careers,
        ]);
    }
}

