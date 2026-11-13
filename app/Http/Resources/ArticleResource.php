<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => (string) $this->id,
            'slug' => $this->slug,
            'title' => $this->title,
            'category' => $this->category?->name ?? 'Wawasan Akuntansi',
            'category_slug' => $this->category?->slug ?? 'umum',
            'date' => $this->published_at ? $this->published_at->translatedFormat('d F Y') : $this->created_at->translatedFormat('d F Y'),
            'readTime' => $this->read_time ?? '5 min read',
            'author' => $this->author ?? 'Published on KAP DSSR',
            'imageUrl' => $this->cover_image && !str_starts_with($this->cover_image, 'http')
                ? asset('storage/' . $this->cover_image)
                : ($this->cover_image ?? 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=800&q=80'),
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'featured' => (bool) $this->is_featured,
        ];
    }
}

