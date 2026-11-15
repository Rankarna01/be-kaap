<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Gallery::with('category')->where('is_active', true);

        if ($request->filled('category') && $request->input('category') !== 'Semua') {
            $catFilter = $request->input('category');
            $query->where(function ($q) use ($catFilter) {
                $q->where('category', $catFilter)
                  ->orWhereHas('category', function ($sub) use ($catFilter) {
                      $sub->where('slug', $catFilter)->orWhere('name', $catFilter);
                  });
            });
        }

        $galleries = $query->orderBy('order_priority')
            ->orderBy('activity_date', 'desc')
            ->get()
            ->map(fn ($g) => [
                'id' => $g->id,
                'title' => $g->title,
                'category' => $g->category?->name ?? $g->category ?? 'Audit Lapangan',
                'category_slug' => $g->category?->slug ?? 'audit-lapangan',
                'image' => str_starts_with($g->image_path, 'http') || str_starts_with($g->image_path, '/') ? $g->image_path : asset('storage/' . $g->image_path),
                'description' => $g->description,
                'date' => $g->activity_date ? $g->activity_date->translatedFormat('d F Y') : null,
            ]);

        $dbCategories = GalleryCategory::orderBy('order_priority')->pluck('name')->toArray();
        $categoriesList = array_merge(['Semua'], !empty($dbCategories) ? $dbCategories : ['Audit Lapangan', 'Pelatihan & CPD', 'Kegiatan Kantor', 'Visitasi Klien']);

        return response()->json([
            'success' => true,
            'categories' => array_values(array_unique($categoriesList)),
            'data' => $galleries,
        ]);
    }
}
