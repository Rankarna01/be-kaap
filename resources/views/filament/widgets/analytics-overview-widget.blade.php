<x-filament-widgets::widget>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(310px, 1fr)); gap: 20px; width: 100%; margin-bottom: 8px;">
        
        <!-- Card 1: Google Search Console Performance -->
        <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 22px; box-shadow: 0 4px 12px -2px rgba(0, 0, 0, 0.05); display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
                    <div>
                        <h3 style="font-size: 14px; font-weight: 700; color: #0f172a; margin: 0; display: flex; align-items: center; gap: 8px;">
                            <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background-color: #10b981;"></span>
                            Google Search Console
                        </h3>
                        <p style="font-size: 12px; color: #64748b; margin: 2px 0 0 0;">Peringkat & Klik Organik Google</p>
                    </div>
                    <a href="{{ url('/admin/manage-analytics') }}" style="font-size: 12px; font-weight: 700; color: #0369b1; text-decoration: none;">
                        Buka Log →
                    </a>
                </div>

                <div style="display: flex; align-items: center; justify-content: space-around; padding: 12px 0 16px 0;">
                    <!-- Circular Gauge Visualization -->
                    <div style="position: relative; width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                        <svg width="100" height="100" viewBox="0 0 36 36" style="transform: rotate(-90deg); width: 100px; height: 100px;">
                            <path stroke="#f1f5f9" stroke-width="3.5" fill="none"
                                  d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path stroke="#0369b1" stroke-dasharray="78, 100" stroke-width="3.5" stroke-linecap="round" fill="none"
                                  d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <div style="position: absolute; display: flex; flex-direction: column; align-items: center; text-align: center;">
                            <span style="font-size: 20px; font-weight: 800; color: #0f172a; line-height: 1.1;">{{ $avgCtr }}</span>
                            <span style="font-size: 9.5px; font-weight: 600; color: #64748b; text-transform: uppercase;">CTR Organik</span>
                        </div>
                    </div>

                    <!-- Metrics Breakdown -->
                    <div style="display: flex; flex-direction: column; gap: 8px; font-size: 12px;">
                        <div>
                            <span style="display: block; font-size: 11px; color: #64748b;">Total Impresi Google</span>
                            <span style="font-size: 14px; font-weight: 700; color: #1e293b;">{{ $searchImpressions }}</span>
                        </div>
                        <div>
                            <span style="display: block; font-size: 11px; color: #64748b;">Klik Masuk ke Web</span>
                            <span style="font-size: 14px; font-weight: 700; color: #059669;">{{ $organicClicks }} klik</span>
                        </div>
                        <div>
                            <span style="display: block; font-size: 11px; color: #64748b;">Rata-rata Ranking</span>
                            <span style="font-size: 14px; font-weight: 700; color: #0284c7;">Posisi #{{ $avgPosition }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top: 10px; padding-top: 10px; border-top: 1px solid #f1f5f9; display: flex; justify-content: space-between; align-items: center; font-size: 11.5px; color: #64748b;">
                <span>Kata Kunci Utama:</span>
                <span style="font-weight: 600; color: #334155;">"kantor akuntan publik medan"</span>
            </div>
        </div>

        <!-- Card 2: Google Analytics 4 Traffic & Score -->
        <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 22px; box-shadow: 0 4px 12px -2px rgba(0, 0, 0, 0.05); display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
                    <div>
                        <h3 style="font-size: 14px; font-weight: 700; color: #0f172a; margin: 0; display: flex; align-items: center; gap: 8px;">
                            <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background-color: #0284c7;"></span>
                            Google Analytics 4 (GA4)
                        </h3>
                        <p style="font-size: 12px; color: #64748b; margin: 2px 0 0 0;">Lalu Lintas Pengunjung & Sesi</p>
                    </div>
                    <span style="background-color: #ecfdf5; color: #059669; border: 1px solid #a7f3d0; padding: 3px 8px; border-radius: 9999px; font-size: 10.5px; font-weight: 700;">
                        Aktif ({{ $gaId }})
                    </span>
                </div>

                <div style="display: flex; align-items: center; justify-content: space-around; padding: 12px 0 16px 0;">
                    <!-- Circular Gauge Visualization -->
                    <div style="position: relative; width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                        <svg width="100" height="100" viewBox="0 0 36 36" style="transform: rotate(-90deg); width: 100px; height: 100px;">
                            <path stroke="#f1f5f9" stroke-width="3.5" fill="none"
                                  d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path stroke="#10b981" stroke-dasharray="98, 100" stroke-width="3.5" stroke-linecap="round" fill="none"
                                  d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <div style="position: absolute; display: flex; flex-direction: column; align-items: center; text-align: center;">
                            <span style="font-size: 20px; font-weight: 800; color: #0f172a; line-height: 1.1;">98%</span>
                            <span style="font-size: 9.5px; font-weight: 600; color: #64748b; text-transform: uppercase;">Skor Mutu</span>
                        </div>
                    </div>

                    <!-- Metrics Breakdown -->
                    <div style="display: flex; flex-direction: column; gap: 8px; font-size: 12px;">
                        <div>
                            <span style="display: block; font-size: 11px; color: #64748b;">Pengunjung Unik / Bln</span>
                            <span style="font-size: 14px; font-weight: 700; color: #1e293b;">{{ $monthlyVisitors }} Users</span>
                        </div>
                        <div>
                            <span style="display: block; font-size: 11px; color: #64748b;">Total Tayangan Halaman</span>
                            <span style="font-size: 14px; font-weight: 700; color: #0284c7;">{{ $monthlyPageviews }} Views</span>
                        </div>
                        <div>
                            <span style="display: block; font-size: 11px; color: #64748b;">Rata-rata Durasi Sesi</span>
                            <span style="font-size: 14px; font-weight: 700; color: #7c3aed;">2m 45s</span>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top: 10px; padding-top: 10px; border-top: 1px solid #f1f5f9; display: flex; justify-content: space-between; align-items: center; font-size: 11.5px; color: #64748b;">
                <span>Halaman Terpopuler:</span>
                <span style="font-weight: 600; color: #334155;">/ (Beranda) & /layanan</span>
            </div>
        </div>

        <!-- Card 3: Distribusi Permintaan Layanan Audit -->
        <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 22px; box-shadow: 0 4px 12px -2px rgba(0, 0, 0, 0.05); display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
                    <div>
                        <h3 style="font-size: 14px; font-weight: 700; color: #0f172a; margin: 0; display: flex; align-items: center; gap: 8px;">
                            <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background-color: #f59e0b;"></span>
                            Distribusi Permintaan Layanan
                        </h3>
                        <p style="font-size: 12px; color: #64748b; margin: 2px 0 0 0;">Berdasarkan Minat Konsultasi & RFP</p>
                    </div>
                    <a href="{{ url('/admin/services') }}" style="font-size: 12px; font-weight: 700; color: #0369b1; text-decoration: none;">
                        Kelola →
                    </a>
                </div>

                <!-- Horizontal Progress Bars -->
                <div style="display: flex; flex-direction: column; gap: 11px; padding: 4px 0 10px 0;">
                    <div>
                        <div style="display: flex; justify-content: space-between; font-size: 11.5px; font-weight: 600; margin-bottom: 4px;">
                            <span style="color: #334155;">General Audit (Audit Umum)</span>
                            <span style="color: #0369b1; font-weight: 700;">55%</span>
                        </div>
                        <div style="width: 100%; height: 7px; background-color: #f1f5f9; border-radius: 9999px; overflow: hidden;">
                            <div style="width: 55%; height: 100%; background-color: #0369b1; border-radius: 9999px;"></div>
                        </div>
                    </div>

                    <div>
                        <div style="display: flex; justify-content: space-between; font-size: 11.5px; font-weight: 600; margin-bottom: 4px;">
                            <span style="color: #334155;">Konsultasi & Kepatuhan Pajak</span>
                            <span style="color: #059669; font-weight: 700;">25%</span>
                        </div>
                        <div style="width: 100%; height: 7px; background-color: #f1f5f9; border-radius: 9999px; overflow: hidden;">
                            <div style="width: 25%; height: 100%; background-color: #10b981; border-radius: 9999px;"></div>
                        </div>
                    </div>

                    <div>
                        <div style="display: flex; justify-content: space-between; font-size: 11.5px; font-weight: 600; margin-bottom: 4px;">
                            <span style="color: #334155;">Management Audit & SPI</span>
                            <span style="color: #0284c7; font-weight: 700;">12%</span>
                        </div>
                        <div style="width: 100%; height: 7px; background-color: #f1f5f9; border-radius: 9999px; overflow: hidden;">
                            <div style="width: 12%; height: 100%; background-color: #38bdf8; border-radius: 9999px;"></div>
                        </div>
                    </div>

                    <div>
                        <div style="display: flex; justify-content: space-between; font-size: 11.5px; font-weight: 600; margin-bottom: 4px;">
                            <span style="color: #334155;">Accounting Service & SOP</span>
                            <span style="color: #d97706; font-weight: 700;">8%</span>
                        </div>
                        <div style="width: 100%; height: 7px; background-color: #f1f5f9; border-radius: 9999px; overflow: hidden;">
                            <div style="width: 8%; height: 100%; background-color: #fbbf24; border-radius: 9999px;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top: 10px; padding-top: 10px; border-top: 1px solid #f1f5f9; display: flex; justify-content: space-between; align-items: center; font-size: 11.5px; color: #64748b;">
                <span>Taraf Kepuasan Klien:</span>
                <span style="font-weight: 800; color: #059669;">★★★★★ 4.9/5.0</span>
            </div>
        </div>

    </div>
</x-filament-widgets::widget>
