<x-filament-widgets::widget>
    <div style="position: relative; overflow: hidden; border-radius: 20px; background: linear-gradient(135deg, #02385e 0%, #035591 35%, #0369b1 75%, #0284c7 100%); color: #ffffff; padding: 30px 32px; box-shadow: 0 12px 30px -8px rgba(3, 105, 177, 0.4); margin-bottom: 8px;">
        <!-- Background Decorative Glow Elements -->
        <div style="position: absolute; right: -40px; top: -50px; width: 280px; height: 280px; border-radius: 50%; background: radial-gradient(circle, rgba(255,255,255,0.18) 0%, rgba(255,255,255,0) 70%); pointer-events: none;"></div>
        <div style="position: absolute; left: 35%; bottom: -60px; width: 240px; height: 240px; border-radius: 50%; background: radial-gradient(circle, rgba(56,189,248,0.2) 0%, rgba(56,189,248,0) 70%); pointer-events: none;"></div>

        <div style="position: relative; z-index: 10; display: flex; flex-direction: row; justify-content: space-between; align-items: center; gap: 28px; flex-wrap: wrap;">
            
            <!-- Left Information & Action Section -->
            <div style="flex: 1 1 560px; min-width: 280px;">
                <!-- Date & Brand Pill -->
                <div style="display: inline-flex; align-items: center; gap: 8px; padding: 6px 14px; border-radius: 9999px; background: rgba(255, 255, 255, 0.16); border: 1px solid rgba(255, 255, 255, 0.25); font-size: 12px; font-weight: 600; color: #ffffff; margin-bottom: 14px; backdrop-filter: blur(8px);">
                    <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background-color: #34d399; box-shadow: 0 0 8px #34d399;"></span>
                    <span>{{ $todayDate }}</span>
                    <span style="opacity: 0.5;">•</span>
                    <span style="color: #e0f2fe;">KAP Drs. Selamat Sinuraya & Rekan</span>
                </div>

                <!-- Main Greeting Heading -->
                <h1 style="color: #ffffff; font-size: 26px; font-weight: 800; line-height: 1.25; margin: 0 0 10px 0; letter-spacing: -0.02em;">
                    Selamat Datang Kembali, {{ $userName }}! 👋
                </h1>

                <!-- Subtitle / Description -->
                <p style="color: #e0f2fe; font-size: 13.5px; line-height: 1.6; margin: 0 0 20px 0; max-width: 720px; opacity: 0.95;">
                    Portal terpadu untuk mengelola seluruh konten landing page, 4 pilar penugasan audit, database klien korporasi, publikasi artikel wawasan, serta memonitor analitik Google Search Console secara real-time.
                </p>

                <!-- Quick Action Buttons -->
                <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 10px;">
                    <!-- Inbox Consultation Button -->
                    <a href="{{ url('/admin/contact-submissions') }}"
                       style="display: inline-flex; align-items: center; gap: 8px; background-color: #ffffff; color: #0369b1; padding: 9px 16px; border-radius: 10px; font-size: 13px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.12); transition: transform 0.15s ease;"
                       onmouseover="this.style.transform='translateY(-1px)'" onmouseout="this.style.transform='translateY(0)'">
                        <svg style="width: 16px; height: 16px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>Inbox Permohonan RFP</span>
                        @if($newSubmissions > 0)
                            <span style="background-color: #ef4444; color: #ffffff; padding: 2px 8px; border-radius: 9999px; font-size: 11px; font-weight: 800;">
                                {{ $newSubmissions }} Baru
                            </span>
                        @endif
                    </a>

                    <!-- Client Portfolio Button -->
                    <a href="{{ url('/admin/clients') }}"
                       style="display: inline-flex; align-items: center; gap: 8px; background-color: rgba(255, 255, 255, 0.16); color: #ffffff; padding: 9px 16px; border-radius: 10px; font-size: 13px; font-weight: 600; text-decoration: none; border: 1px solid rgba(255, 255, 255, 0.28); backdrop-filter: blur(8px); transition: background-color 0.15s ease;"
                       onmouseover="this.style.backgroundColor='rgba(255,255,255,0.26)'" onmouseout="this.style.backgroundColor='rgba(255,255,255,0.16)'">
                        <svg style="width: 16px; height: 16px; color: #bae6fd;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <span>Daftar Klien (Portofolio)</span>
                    </a>

                    <!-- Google Analytics & Search Console Button -->
                    <a href="{{ url('/admin/manage-analytics') }}"
                       style="display: inline-flex; align-items: center; gap: 8px; background-color: rgba(255, 255, 255, 0.16); color: #ffffff; padding: 9px 16px; border-radius: 10px; font-size: 13px; font-weight: 600; text-decoration: none; border: 1px solid rgba(255, 255, 255, 0.28); backdrop-filter: blur(8px); transition: background-color 0.15s ease;"
                       onmouseover="this.style.backgroundColor='rgba(255,255,255,0.26)'" onmouseout="this.style.backgroundColor='rgba(255,255,255,0.16)'">
                        <svg style="width: 16px; height: 16px; color: #86efac;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        <span>Google Analytics & Search Console</span>
                    </a>

                    <!-- View Live Website Button -->
                    <a href="http://localhost:3000" target="_blank"
                       style="display: inline-flex; align-items: center; gap: 6px; background-color: rgba(10, 40, 73, 0.55); color: #bae6fd; padding: 9px 14px; border-radius: 10px; font-size: 13px; font-weight: 600; text-decoration: none; border: 1px solid rgba(255, 255, 255, 0.18); transition: background-color 0.15s ease;"
                       onmouseover="this.style.backgroundColor='rgba(10, 40, 73, 0.8)'" onmouseout="this.style.backgroundColor='rgba(10, 40, 73, 0.55)'">
                        <span>Lihat Website</span>
                        <svg style="width: 14px; height: 14px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Status Card -->
            <div style="flex: 0 0 230px; background: rgba(255, 255, 255, 0.13); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.25); border-radius: 16px; padding: 18px 20px; text-align: center; color: #ffffff; display: flex; flex-direction: column; gap: 10px;">
                <div style="width: 44px; height: 44px; margin: 0 auto; border-radius: 50%; background: rgba(255, 255, 255, 0.2); display: flex; align-items: center; justify-content: center; color: #ffffff;">
                    <svg style="width: 22px; height: 22px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <div>
                    <p style="font-size: 11px; font-weight: 500; color: #bae6fd; margin: 0; text-transform: uppercase; letter-spacing: 0.05em;">Status Legalitas</p>
                    <p style="font-size: 14px; font-weight: 800; color: #ffffff; margin: 3px 0 2px 0;">Izin Usaha KAP Aktif</p>
                    <p style="font-size: 11px; color: rgba(224, 242, 254, 0.8); margin: 0;">Terdaftar di Kemenkeu & IAPI</p>
                </div>
                <div style="padding-top: 8px; border-top: 1px solid rgba(255, 255, 255, 0.2); display: flex; justify-content: space-between; align-items: center; font-size: 11.5px;">
                    <span style="color: #e0f2fe;">Kantor Medan & Pekanbaru</span>
                    <span style="font-weight: 700; color: #6ee7b7; display: flex; align-items: center; gap: 4px;">
                        <span style="display: inline-block; width: 6px; height: 6px; border-radius: 50%; background-color: #34d399;"></span>
                        Aktif
                    </span>
                </div>
            </div>

        </div>
    </div>
</x-filament-widgets::widget>
