<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Gallery::where('is_active', true);

        if ($request->filled('category') && $request->input('category') !== 'Semua') {
            $query->where('category', $request->input('category'));
        }

        $galleries = $query->orderBy('order_priority')
            ->orderBy('activity_date', 'desc')
            ->get()
            ->map(fn ($g) => [
                'id' => $g->id,
                'title' => $g->title,
                'category' => $g->category,
                'image' => str_starts_with($g->image_path, 'http') || str_starts_with($g->image_path, '/') ? $g->image_path : asset('storage/' . $g->image_path),
                'description' => $g->description,
                'date' => $g->activity_date ? $g->activity_date->translatedFormat('d F Y') : null,
            ]);

        return response()->json([
            'success' => true,
            'categories' => ['Semua', 'Audit Lapangan', 'Pelatihan & CPD', 'Kegiatan Kantor', 'Visitasi Klien'],
            'data' => $galleries,
        ]);
    }
}

