<x-filament-panels::page>
    <!-- 1. Header Integration Banner (Bulletproof Inline Styling) -->
    <div style="position: relative; overflow: hidden; border-radius: 20px; background: linear-gradient(135deg, #02385e 0%, #035591 35%, #0369b1 75%, #0284c7 100%); color: #ffffff; padding: 26px 30px; box-shadow: 0 10px 25px -8px rgba(3, 105, 177, 0.4); margin-bottom: 24px;">
        <!-- Background Accents -->
        <div style="position: absolute; right: -40px; top: -50px; width: 260px; height: 260px; border-radius: 50%; background: radial-gradient(circle, rgba(255,255,255,0.18) 0%, rgba(255,255,255,0) 70%); pointer-events: none;"></div>
        
        <div style="position: relative; z-index: 10; display: flex; flex-direction: row; justify-content: space-between; align-items: center; gap: 24px; flex-wrap: wrap;">
            <div style="max-width: 680px;">
                <div style="display: inline-flex; align-items: center; gap: 8px; padding: 5px 12px; border-radius: 9999px; background: rgba(255, 255, 255, 0.16); border: 1px solid rgba(255, 255, 255, 0.25); font-size: 11.5px; font-weight: 600; color: #ffffff; margin-bottom: 12px; backdrop-filter: blur(8px);">
                    <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background-color: #34d399; box-shadow: 0 0 8px #34d399;"></span>
                    <span>Status Integrasi: Terhubung & Aktif</span>
                    <span style="opacity: 0.5;">•</span>
                    <span style="color: #e0f2fe;">Google Search Console & GA4</span>
                </div>

                <h1 style="color: #ffffff; font-size: 24px; font-weight: 800; line-height: 1.25; margin: 0 0 8px 0; letter-spacing: -0.02em;">
                    Log Google Analytics 4 & Search Console
                </h1>

                <p style="color: #e0f2fe; font-size: 13.5px; line-height: 1.6; margin: 0; opacity: 0.95;">
                    Pusat kendali untuk menghubungkan verifikasi kepemilikan Google Search Console, memantau trafik organik kata kunci audit, serta menjalankan uji koneksi meta tag dan sitemap secara real-time.
                </p>
            </div>

            <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 10px;">
                <a href="{{ $ga4DashboardUrl ?? 'https://analytics.google.com/' }}" target="_blank"
                   style="display: inline-flex; align-items: center; gap: 8px; background-color: #ffffff; color: #0f172a; padding: 9px 16px; border-radius: 10px; font-size: 12.5px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.15s ease;">
                    <svg style="width: 16px; height: 16px; color: #f59e0b;" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                    </svg>
                    <span>Buka Google Analytics</span>
                    <svg style="width: 12px; height: 12px; color: #64748b;" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>

                <a href="{{ $gscDashboardUrl ?? 'https://search.google.com/search-console' }}" target="_blank"
                   style="display: inline-flex; align-items: center; gap: 8px; background-color: rgba(255, 255, 255, 0.16); color: #ffffff; padding: 9px 16px; border-radius: 10px; font-size: 12.5px; font-weight: 600; text-decoration: none; border: 1px solid rgba(255, 255, 255, 0.28); backdrop-filter: blur(8px);">
                    <svg style="width: 16px; height: 16px; color: #bae6fd;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <span>Buka Search Console</span>
                    <svg style="width: 12px; height: 12px; color: #e0f2fe;" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- 2. High Level Metrics Cards (4-Column Grid) -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(210px, 1fr)); gap: 16px; width: 100%; margin-bottom: 24px;">
        <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 20px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);">
            <span style="font-size: 12px; font-weight: 600; color: #64748b; display: block; margin-bottom: 4px;">Total Klik Organik (GSC)</span>
            <div style="display: flex; align-items: baseline; gap: 8px;">
                <span style="font-size: 24px; font-weight: 800; color: #0f172a;">{{ $metrics['totalClicks'] }}</span>
                <span style="font-size: 12px; font-weight: 700; color: #059669;">+14.2%</span>
            </div>
            <span style="font-size: 11px; color: #94a3b8; display: block; margin-top: 4px;">Dari penelusuran Google</span>
        </div>

        <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 20px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);">
            <span style="font-size: 12px; font-weight: 600; color: #64748b; display: block; margin-bottom: 4px;">Total Impresi Penelusuran</span>
            <div style="display: flex; align-items: baseline; gap: 8px;">
                <span style="font-size: 24px; font-weight: 800; color: #0369b1;">{{ $metrics['totalImpressions'] }}</span>
                <span style="font-size: 12px; font-weight: 700; color: #059669;">+22.8%</span>
            </div>
            <span style="font-size: 11px; color: #94a3b8; display: block; margin-top: 4px;">Tampil di hasil pencarian</span>
        </div>

        <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 20px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);">
            <span style="font-size: 12px; font-weight: 600; color: #64748b; display: block; margin-bottom: 4px;">Rata-rata CTR Organik</span>
            <div style="display: flex; align-items: baseline; gap: 8px;">
                <span style="font-size: 24px; font-weight: 800; color: #d97706;">{{ $metrics['avgCtr'] }}</span>
                <span style="font-size: 12px; font-weight: 700; color: #059669;">+1.5%</span>
            </div>
            <span style="font-size: 11px; color: #94a3b8; display: block; margin-top: 4px;">Rasio klik per impresi</span>
        </div>

        <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 20px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);">
            <span style="font-size: 12px; font-weight: 600; color: #64748b; display: block; margin-bottom: 4px;">Rata-rata Posisi Ranking</span>
            <div style="display: flex; align-items: baseline; gap: 8px;">
                <span style="font-size: 24px; font-weight: 800; color: #7c3aed;">#{{ $metrics['avgPosition'] }}</span>
                <span style="font-size: 11.5px; font-weight: 700; color: #059669; background: #ecfdf5; padding: 2px 6px; border-radius: 6px;">Halaman 1</span>
            </div>
            <span style="font-size: 11px; color: #94a3b8; display: block; margin-top: 4px;">Kata kunci relevan KAP</span>
        </div>
    </div>

    <!-- 3. Testing & Live Diagnostics Panel (Interactive Testing Action) -->
    <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 22px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04); margin-bottom: 24px;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; margin-bottom: 16px;">
            <div>
                <h3 style="font-size: 15px; font-weight: 700; color: #0f172a; margin: 0; display: flex; align-items: center; gap: 8px;">
                    <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background-color: #0284c7;"></span>
                    Uji & Diagnosa Koneksi Google Search Console
                </h3>
                <p style="font-size: 12.5px; color: #64748b; margin: 3px 0 0 0;">
                    Sistem akan memverifikasi format token, ketersediaan tag HTML pada website, serta kesiapan URL sitemap.xml.
                </p>
            </div>

            <div>
                <button type="button"
                        wire:click="testConnection"
                        wire:loading.attr="disabled"
                        style="display: inline-flex; align-items: center; gap: 8px; background-color: #0369b1; color: #ffffff; padding: 9px 18px; border-radius: 10px; font-size: 13px; font-weight: 700; border: none; cursor: pointer; box-shadow: 0 2px 6px rgba(3, 105, 177, 0.3); transition: background-color 0.15s ease;">
                    <span wire:loading.remove wire:target="testConnection">🔍 Jalankan Uji & Verifikasi Koneksi</span>
                    <span wire:loading wire:target="testConnection">⏳ Memeriksa Koneksi...</span>
                </button>
            </div>
        </div>

        @if($hasTested && $testResults)
            <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 16px; margin-top: 14px;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px; font-size: 12px; color: #64748b; border-bottom: 1px solid #e2e8f0; padding-bottom: 8px;">
                    <span>Waktu Pengujian Terakhir: <strong style="color: #0f172a;">{{ $testResults['tested_at'] }}</strong></span>
                    <span>Target URL: <code style="color: #0369b1;">{{ $testResults['site_url'] }}</code></span>
                </div>

                <div style="display: flex; flex-direction: column; gap: 10px;">
                    @foreach($testResults['items'] as $item)
                        <div style="display: flex; justify-content: space-between; align-items: center; gap: 12px; background-color: #ffffff; border: 1px solid #f1f5f9; padding: 10px 14px; border-radius: 8px;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                @if($item['status'] === 'pass')
                                    <span style="color: #059669; font-size: 16px;">✔</span>
                                @elseif($item['status'] === 'warn')
                                    <span style="color: #d97706; font-size: 16px;">⚠</span>
                                @else
                                    <span style="color: #0284c7; font-size: 16px;">ℹ</span>
                                @endif
                                <div>
                                    <span style="font-size: 12.5px; font-weight: 700; color: #1e293b; display: block;">{{ $item['title'] }}</span>
                                    <span style="font-size: 11.5px; color: #64748b;">{{ $item['message'] }}</span>
                                </div>
                            </div>
                            <div>
                                @if($item['status'] === 'pass')
                                    <span style="background-color: #ecfdf5; color: #059669; border: 1px solid #a7f3d0; padding: 3px 8px; border-radius: 9999px; font-size: 10.5px; font-weight: 700;">
                                        {{ $item['badge'] }}
                                    </span>
                                @elseif($item['status'] === 'warn')
                                    <span style="background-color: #fffbeb; color: #d97706; border: 1px solid #fde68a; padding: 3px 8px; border-radius: 9999px; font-size: 10.5px; font-weight: 700;">
                                        {{ $item['badge'] }}
                                    </span>
                                @else
                                    <span style="background-color: #f0f9ff; color: #0284c7; border: 1px solid #bae6fd; padding: 3px 8px; border-radius: 9999px; font-size: 10.5px; font-weight: 700;">
                                        {{ $item['badge'] }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>

    <!-- 4. Panduan Langkah-demi-Langkah Setup Google Search Console -->
    <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 22px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04); margin-bottom: 24px;">
        <h3 style="font-size: 14.5px; font-weight: 700; color: #0f172a; margin: 0 0 14px 0; display: flex; align-items: center; gap: 8px;">
            <span>📘</span>
            Panduan Menghubungkan ke Google Search Console (5 Langkah Cepat)
        </h3>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 14px; font-size: 12.5px;">
            <div style="background-color: #f8fafc; border-left: 3px solid #0369b1; padding: 12px 14px; border-radius: 0 8px 8px 0;">
                <strong style="color: #0369b1; display: block; margin-bottom: 2px;">1. Tambah Properti</strong>
                Buka <a href="https://search.google.com/search-console" target="_blank" style="color: #0284c7; font-weight: 600; text-decoration: underline;">Google Search Console</a>, lalu pilih opsi <strong>URL prefix</strong> (misal: <code>https://kapdssr.com</code>).
            </div>

            <div style="background-color: #f8fafc; border-left: 3px solid #0369b1; padding: 12px 14px; border-radius: 0 8px 8px 0;">
                <strong style="color: #0369b1; display: block; margin-bottom: 2px;">2. Pilih Metode HTML Tag</strong>
                Pada menu verifikasi kepemilikan, pilih metode <strong>HTML tag</strong> dan salin kode <code>google-site-verification=...</code>.
            </div>

            <div style="background-color: #f8fafc; border-left: 3px solid #0369b1; padding: 12px 14px; border-radius: 0 8px 8px 0;">
                <strong style="color: #0369b1; display: block; margin-bottom: 2px;">3. Tempelkan di Form Bawah</strong>
                Masukkan token tersebut pada kolom form di bawah ini, lalu klik tombol <strong>Simpan Konfigurasi</strong>.
            </div>

            <div style="background-color: #f8fafc; border-left: 3px solid #0369b1; padding: 12px 14px; border-radius: 0 8px 8px 0;">
                <strong style="color: #0369b1; display: block; margin-bottom: 2px;">4. Uji & Klik Verify</strong>
                Klik tombol <strong>Uji & Verifikasi Koneksi</strong> di atas, lalu kembali ke Search Console dan klik tombol <strong>Verify</strong>.
            </div>

            <div style="background-color: #f8fafc; border-left: 3px solid #059669; padding: 12px 14px; border-radius: 0 8px 8px 0;">
                <strong style="color: #059669; display: block; margin-bottom: 2px;">5. Submit Sitemap.xml</strong>
                Setelah terverifikasi, masuk ke menu <strong>Sitemaps</strong> di GSC, lalu submit URL: <code>sitemap.xml</code>.
            </div>
        </div>
    </div>

    <!-- 5. Form Konfigurasi Google Analytics & Search Console -->
    <form wire:submit="submit" style="margin-bottom: 28px;">
        {{ $this->form }}

        <div style="margin-top: 16px; display: flex; justify-content: flex-end;">
            <x-filament::button type="submit" size="lg">
                Simpan Konfigurasi Analitik & SEO
            </x-filament::button>
        </div>
    </form>

    <!-- 6. Tabel Log Kata Kunci Google Search Console (Top Queries) -->
    <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 22px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04); margin-bottom: 24px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
            <div>
                <h3 style="font-size: 15px; font-weight: 700; color: #0f172a; margin: 0; display: flex; align-items: center; gap: 8px;">
                    <svg style="width: 18px; height: 18px; color: #0369b1;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                    Log Kata Kunci Terpopuler (Google Search Console)
                </h3>
                <p style="font-size: 12px; color: #64748b; margin: 3px 0 0 0;">Query penelusuran yang menghasilkan klik terbanyak ke situs KAP DSSR</p>
            </div>
            <span style="background-color: #f0f7fd; color: #0369b1; border: 1px solid #bae6fd; padding: 3px 10px; border-radius: 9999px; font-size: 11.5px; font-weight: 700;">
                {{ count($topQueries) }} Kata Kunci Terpantau
            </span>
        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; text-align: left; font-size: 12px; border-collapse: collapse;">
                <thead style="background-color: #f8fafc; color: #64748b; font-size: 11px; text-transform: uppercase; letter-spacing: 0.05em; border-top: 1px solid #f1f5f9; border-bottom: 1px solid #e2e8f0;">
                    <tr>
                        <th style="padding: 10px 14px;">Kata Kunci Penelusuran (Query)</th>
                        <th style="padding: 10px 14px; text-align: center;">Klik Masuk</th>
                        <th style="padding: 10px 14px; text-align: center;">Total Impresi</th>
                        <th style="padding: 10px 14px; text-align: center;">CTR (%)</th>
                        <th style="padding: 10px 14px; text-align: center;">Posisi Ranking</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($topQueries as $q)
                        <tr style="border-bottom: 1px solid #f1f5f9;">
                            <td style="padding: 12px 14px; font-weight: 700; color: #0f172a;">
                                <span style="color: #94a3b8; font-weight: 400; margin-right: 6px;">#{{ $loop->iteration }}</span>
                                <span>{{ $q['keyword'] }}</span>
                            </td>
                            <td style="padding: 12px 14px; text-align: center; font-weight: 700; color: #059669;">
                                {{ number_format($q['clicks']) }}
                            </td>
                            <td style="padding: 12px 14px; text-align: center; color: #475467;">
                                {{ number_format($q['impressions']) }}
                            </td>
                            <td style="padding: 12px 14px; text-align: center; font-weight: 700; color: #0369b1;">
                                {{ $q['ctr'] }}
                            </td>
                            <td style="padding: 12px 14px; text-align: center;">
                                <span style="background-color: {{ $q['position'] <= 2.0 ? '#ecfdf5' : '#f1f5f9' }}; color: {{ $q['position'] <= 2.0 ? '#059669' : '#334155' }}; padding: 2px 8px; border-radius: 9999px; font-weight: 700; font-size: 11px;">
                                    Posisi {{ $q['position'] }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- 7. Tabel Log Halaman Terpopuler (Google Analytics 4) -->
    <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 22px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
            <div>
                <h3 style="font-size: 15px; font-weight: 700; color: #0f172a; margin: 0; display: flex; align-items: center; gap: 8px;">
                    <svg style="width: 18px; height: 18px; color: #0284c7;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Log Halaman Terpopuler (Google Analytics 4)
                </h3>
                <p style="font-size: 12px; color: #64748b; margin: 3px 0 0 0;">Halaman yang paling banyak dibaca dan dikunjungi oleh calon klien</p>
            </div>
            <span style="font-size: 11.5px; color: #94a3b8; font-weight: 500;">Data 30 Hari Terakhir</span>
        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; text-align: left; font-size: 12px; border-collapse: collapse;">
                <thead style="background-color: #f8fafc; color: #64748b; font-size: 11px; text-transform: uppercase; letter-spacing: 0.05em; border-top: 1px solid #f1f5f9; border-bottom: 1px solid #e2e8f0;">
                    <tr>
                        <th style="padding: 10px 14px;">Alamat Halaman (URL Path)</th>
                        <th style="padding: 10px 14px; text-align: center;">Total Tayangan (Views)</th>
                        <th style="padding: 10px 14px; text-align: center;">Pengunjung Unik</th>
                        <th style="padding: 10px 14px; text-align: center;">Rata-rata Durasi</th>
                        <th style="padding: 10px 14px; text-align: center;">Bounce Rate</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($topPages as $p)
                        <tr style="border-bottom: 1px solid #f1f5f9;">
                            <td style="padding: 12px 14px; font-family: monospace; font-weight: 600; color: #0369b1;">
                                {{ $p['path'] }}
                            </td>
                            <td style="padding: 12px 14px; text-align: center; font-weight: 700; color: #0f172a;">
                                {{ $p['views'] }}
                            </td>
                            <td style="padding: 12px 14px; text-align: center; color: #475467;">
                                {{ $p['users'] }}
                            </td>
                            <td style="padding: 12px 14px; text-align: center; font-weight: 700; color: #059669;">
                                {{ $p['avgTime'] }}
                            </td>
                            <td style="padding: 12px 14px; text-align: center; color: #64748b;">
                                {{ $p['bounce'] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-filament-panels::page>
