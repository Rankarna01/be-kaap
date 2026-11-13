<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Article::with('category')
            ->where('status', 'published');

        if ($request->filled('category')) {
            $catSlug = $request->input('category');
            if ($catSlug !== 'all' && $catSlug !== 'semua') {
                $query->whereHas('category', function ($q) use ($catSlug) {
                    $q->where('slug', $catSlug)->orWhere('name', $catSlug);
                });
            }
        }

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $articles = $query->orderBy('published_at', 'desc')->get();
        $categories = ArticleCategory::orderBy('order_priority')->get();

        return response()->json([
            'success' => true,
            'categories' => $categories->map(fn ($c) => [
                'id' => $c->id,
                'name' => $c->name,
                'slug' => $c->slug,
            ]),
            'data' => ArticleResource::collection($articles),
        ]);
    }

    public function show(string $slug): JsonResponse
    {
        $article = Article::with('category')
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        $related = Article::with('category')
            ->where('id', '!=', $article->id)
            ->where('status', 'published')
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        return response()->json([
            'success' => true,
            'data' => new ArticleResource($article),
            'related' => ArticleResource::collection($related),
        ]);
    }
}

