<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Client::where('is_active', true);

        if ($request->boolean('homepage_only')) {
            $query->where('show_in_homepage', true);
        }

        if ($request->filled('industry')) {
            $query->where('industry_sector', $request->input('industry'));
        }

        $clients = $query->orderBy('order_priority')
            ->get()
            ->map(fn ($c) => [
                'id' => $c->id,
                'company_name' => $c->company_name,
                'slug' => $c->slug,
                'logo' => $c->logo ? (str_starts_with($c->logo, 'http') || str_starts_with($c->logo, '/') ? $c->logo : asset('storage/' . $c->logo)) : null,
                'industry' => $c->industry_sector,
                'service' => $c->service_provided,
                'pic' => [
                    'name' => $c->pic_name,
                    'position' => $c->pic_position,
                    'phone' => $c->pic_phone,
                    'email' => $c->pic_email,
                ],
                'website' => $c->website_url,
                'year_engaged' => $c->year_engaged,
                'show_in_homepage' => (bool) $c->show_in_homepage,
            ]);

        return response()->json([
            'success' => true,
            'total' => $clients->count(),
            'data' => $clients,
        ]);
    }

    public function show(string $slug): JsonResponse
    {
        $client = Client::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return response()->json([
            'success' => true,
            'data' => [
                'id' => $client->id,
                'company_name' => $client->company_name,
                'slug' => $client->slug,
                'logo' => $client->logo ? (str_starts_with($client->logo, 'http') || str_starts_with($client->logo, '/') ? $client->logo : asset('storage/' . $client->logo)) : null,
                'industry' => $client->industry_sector,
                'service' => $client->service_provided,
                'pic' => [
                    'name' => $client->pic_name,
                    'position' => $client->pic_position,
                    'phone' => $client->pic_phone,
                    'email' => $client->pic_email,
                ],
                'website' => $client->website_url,
                'year_engaged' => $client->year_engaged,
            ],
        ]);
    }
}

