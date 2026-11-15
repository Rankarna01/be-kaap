<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\CareerController;
use App\Http\Controllers\Api\ContactSubmissionController;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\LandingPageController;
use App\Http\Controllers\Api\LegalityController;
use App\Http\Controllers\Api\PartnerController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\TestimonialController;
use App\Http\Middleware\CorsForFrontend;
use Illuminate\Support\Facades\Route;

Route::middleware([CorsForFrontend::class])->prefix('v1')->group(function () {
    // 1. Flagship: All-in-One Landing Page Bundle
    Route::get('/landing-page', [LandingPageController::class, 'index']);

    // 2. Layanan (Services)
    Route::get('/services', [ServiceController::class, 'index']);
    Route::get('/services/{slug}', [ServiceController::class, 'show']);

    // 3. Berita & Artikel (News / Articles)
    Route::get('/articles', [ArticleController::class, 'index']);
    Route::get('/articles/{slug}', [ArticleController::class, 'show']);

    // 4. Partner & Rekan KAP
    Route::get('/partners', [PartnerController::class, 'index']);

    // 5. Testimoni Klien
    Route::get('/testimonials', [TestimonialController::class, 'index']);

    // 6. Tanya Jawab (FAQ)
    Route::get('/faqs', [FaqController::class, 'index']);

    // 7. Legalitas & Dokumen
    Route::get('/legalities', [LegalityController::class, 'index']);

    // 8. Galeri Kegiatan
    Route::get('/galleries', [GalleryController::class, 'index']);

    // 9. Lowongan Karir
    Route::get('/careers', [CareerController::class, 'index']);

    // 10. Daftar Klien & Portofolio
    Route::get('/clients', [\App\Http\Controllers\Api\ClientController::class, 'index']);
    Route::get('/clients/{slug}', [\App\Http\Controllers\Api\ClientController::class, 'show']);

    // 11. Form Kontak & Permintaan Konsultasi / RFP (POST)
    Route::post('/contact', [ContactSubmissionController::class, 'store']);
});
