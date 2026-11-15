<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\FaqResource;
use App\Http\Resources\OfficeResource;
use App\Http\Resources\PartnerResource;
use App\Http\Resources\ServiceResource;
use App\Http\Resources\TestimonialResource;
use App\Models\Article;
use App\Models\Faq;
use App\Models\HeroSection;
use App\Models\Office;
use App\Models\Partner;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\StatsMetric;
use App\Models\Testimonial;
use Illuminate\Http\JsonResponse;

class LandingPageController extends Controller
{
    public function index(): JsonResponse
    {
        $site = [
            'firm_name' => SiteSetting::get('firm_name', 'KAP DRS. SELAMAT SINURAYA DAN REKAN'),
            'firm_short_name' => SiteSetting::get('firm_short_name', 'KAP DSSR'),
            'tagline' => SiteSetting::get('tagline', 'Independensi, Integritas, Objektivitas, dan Standar Mutu Profesional Tertinggi'),
            'license_kemenkeu' => SiteSetting::get('license_kemenkeu', 'Izin Usaha KAP Kemenkeu RI No. KEP-918/KM.1/2019'),
            'iapi_registration' => SiteSetting::get('iapi_registration', 'Anggota Terdaftar Institut Akuntan Publik Indonesia (IAPI)'),
            'working_hours' => SiteSetting::get('working_hours', 'Senin - Jumat: 08:30 - 17:00 WIB'),
            'email' => SiteSetting::get('email_primary', 'Kapdrsselamatsinurayadanrekan@gmail.com'),
            'phone' => SiteSetting::get('phone_primary', '+62 852-7665-3453'),
            'whatsapp' => SiteSetting::get('whatsapp_primary', '6285276653453'),
            'linkedin' => SiteSetting::get('linkedin_url', 'https://www.linkedin.com'),
            'analytics' => [
                'ga4_measurement_id' => SiteSetting::get('ga4_measurement_id', 'G-DSSR2026XX'),
                'gsc_verification_tag' => SiteSetting::get('gsc_verification_tag', 'google-site-verification=KAPDSSR_SearchConsole_Token_2026'),
                'enable_tracking' => (bool) SiteSetting::get('enable_tracking', true),
            ],
        ];

        $hero = HeroSection::where('is_active', true)->first() ?? new HeroSection([
            'headline' => 'KAP DRS. SINURAYA DAN REKAN',
            'badge_text' => 'JLN. PASUNDAN 29A, MEDAN',
            'cta_primary_label' => 'Konsultasi Sekarang',
            'cta_primary_url' => '/#contact',
            'cta_primary_active' => true,
            'cta_secondary_label' => 'Lihat Layanan Kami',
            'cta_secondary_url' => '/#services',
            'cta_secondary_active' => true,
            'banner_image_light' => '/images/hero/hero-img.jpg',
            'banner_image_dark' => '/images/hero/hero-img-dark.png',
        ]);

        $stats = StatsMetric::where('is_active', true)
            ->orderBy('order_priority')
            ->get()
            ->map(fn ($m) => [
                'id' => $m->metric_key,
                'count' => $m->count_value,
                'suffix' => $m->count_suffix,
                'highlight' => $m->highlight_title,
                'description' => $m->description,
                'icon' => $m->icon_type,
            ]);

        $services = Service::where('is_active', true)
            ->orderBy('order_priority')
            ->get();

        $featuredArticles = Article::with('category')
            ->where('status', 'published')
            ->where('is_featured', true)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        $partners = Partner::where('is_active', true)
            ->orderBy('order_priority')
            ->get();

        $testimonialsRow1 = Testimonial::where('is_active', true)
            ->where('marquee_row', 'row1')
            ->orderBy('order_priority')
            ->get();

        $testimonialsRow2 = Testimonial::where('is_active', true)
            ->where('marquee_row', 'row2')
            ->orderBy('order_priority')
            ->get();

        $faqs = Faq::where('is_active', true)
            ->orderBy('order_priority')
            ->get();

        $offices = Office::where('is_active', true)
            ->orderBy('order_priority')
            ->get();

        $clients = \App\Models\Client::where('is_active', true)
            ->orderBy('order_priority')
            ->get()
            ->map(fn ($c) => [
                'id' => $c->id,
                'company_name' => $c->company_name,
                'slug' => $c->slug,
                'logo' => $c->logo ? (str_starts_with($c->logo, 'http') || str_starts_with($c->logo, '/') ? $c->logo : asset('storage/' . $c->logo)) : null,
                'industry' => $c->industry_sector,
                'service' => $c->service_provided,
                'website' => $c->website_url,
                'show_in_homepage' => (bool) $c->show_in_homepage,
            ]);

        return response()->json([
            'success' => true,
            'data' => [
                'site' => $site,
                'hero' => [
                    'headline' => $hero->headline,
                    'badge' => $hero->badge_text,
                    'cta_primary' => [
                        'label' => $hero->cta_primary_label,
                        'url' => $hero->cta_primary_url,
                        'active' => (bool) $hero->cta_primary_active,
                    ],
                    'cta_secondary' => [
                        'label' => $hero->cta_secondary_label,
                        'url' => $hero->cta_secondary_url,
                        'active' => (bool) $hero->cta_secondary_active,
                    ],
                    'banner_image_light' => $hero->banner_image_light ? (str_starts_with($hero->banner_image_light, 'http') || str_starts_with($hero->banner_image_light, '/') ? $hero->banner_image_light : asset('storage/' . $hero->banner_image_light)) : '/images/hero/hero-img.jpg',
                    'banner_image_dark' => $hero->banner_image_dark ? (str_starts_with($hero->banner_image_dark, 'http') || str_starts_with($hero->banner_image_dark, '/') ? $hero->banner_image_dark : asset('storage/' . $hero->banner_image_dark)) : '/images/hero/hero-img-dark.png',
                ],
                'stats' => $stats,
                'core_features' => ServiceResource::collection($services->where('show_in_core_features', true)),
                'services' => ServiceResource::collection($services),
                'featured_articles' => ArticleResource::collection($featuredArticles),
                'partners' => PartnerResource::collection($partners),
                'testimonials' => [
                    'row1' => TestimonialResource::collection($testimonialsRow1),
                    'row2' => TestimonialResource::collection($testimonialsRow2),
                ],
                'faqs' => FaqResource::collection($faqs),
                'offices' => OfficeResource::collection($offices),
                'clients' => $clients,
            ],
        ]);
    }
}

