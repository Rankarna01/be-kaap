<x-filament-widgets::widget>
    <style>
        .kd-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(290px, 1fr)); gap: 16px; width: 100%; }
        .kd-card {
            background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 18px 18px 14px;
            box-shadow: 0 1px 3px rgba(15, 23, 42, 0.04); display: flex; flex-direction: column; justify-content: space-between;
            transition: box-shadow .2s ease, transform .2s ease, border-color .2s ease;
        }
        .kd-card:hover { box-shadow: 0 8px 24px -12px rgba(3, 105, 177, .25); transform: translateY(-2px); border-color: #bae6fd; }
        .kd-head { display: flex; align-items: flex-start; justify-content: space-between; gap: 10px; margin-bottom: 12px; }
        .kd-title { font-size: 13px; font-weight: 700; color: #0f172a; margin: 0; display: flex; align-items: center; gap: 7px; white-space: nowrap; }
        .kd-dot { width: 7px; height: 7px; border-radius: 50%; display: inline-block; flex-shrink: 0; }
        .kd-sub { font-size: 11px; color: #64748b; margin: 2px 0 0 0; }
        .kd-link { font-size: 11px; font-weight: 700; color: #0369b1; text-decoration: none; white-space: nowrap; flex-shrink: 0; }
        .kd-link:hover { text-decoration: underline; }
        .kd-pill { font-size: 10px; font-weight: 700; color: #059669; background: #ecfdf5; border: 1px solid #a7f3d0; padding: 2px 8px; border-radius: 9999px; display: inline-flex; align-items: center; gap: 5px; white-space: nowrap; }
        .kd-body { display: flex; align-items: center; justify-content: space-between; gap: 12px; padding: 4px 0 12px; }
        .kd-gauge { position: relative; width: 74px; height: 74px; flex-shrink: 0; }
        .kd-gauge svg { width: 74px; height: 74px; transform: rotate(-90deg); }
        .kd-gauge-center { position: absolute; inset: 0; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; }
        .kd-gauge-value { font-size: 13px; font-weight: 800; color: #0f172a; line-height: 1.1; }
        .kd-gauge-label { font-size: 7.5px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: .05em; margin-top: 2px; }
        .kd-metrics { display: grid; gap: 7px; flex: 1; min-width: 0; }
        .kd-metric-label { display: block; font-size: 10px; color: #64748b; }
        .kd-metric-value { display: block; font-size: 12px; font-weight: 700; color: #0f172a; line-height: 1.3; }
        .kd-foot { margin-top: 6px; padding-top: 9px; border-top: 1px solid #f1f5f9; display: flex; justify-content: space-between; align-items: center; gap: 8px; font-size: 10.5px; color: #64748b; }
        .kd-foot-value { font-weight: 600; color: #1e293b; text-align: right; }
        .kd-code { background: #f1f5f9; padding: 1px 5px; border-radius: 4px; color: #0369b1; font-size: 10px; }
        .kd-bars { display: grid; gap: 10px; padding: 2px 0 8px; }
        .kd-bar-row { display: flex; justify-content: space-between; font-size: 11px; font-weight: 600; margin-bottom: 4px; gap: 8px; }
        .kd-bar-label { color: #334155; min-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
        .kd-bar-pct { font-weight: 800; flex-shrink: 0; }
        .kd-track { width: 100%; height: 6px; background: #f1f5f9; border-radius: 9999px; overflow: hidden; }
        .kd-fill { height: 100%; border-radius: 9999px; }
        .dark .kd-card { background: #111827; border-color: rgba(255,255,255,.1); }
        .dark .kd-title, .dark .kd-gauge-value, .dark .kd-metric-value { color: #f8fafc; }
        .dark .kd-sub, .dark .kd-gauge-label, .dark .kd-metric-label, .dark .kd-foot { color: #94a3b8; }
        .dark .kd-track { background: rgba(255,255,255,.08); }
        .dark .kd-bar-label, .dark .kd-foot-value { color: #e2e8f0; }
        .dark .kd-foot { border-color: rgba(255,255,255,.08); }
        .dark .kd-code { background: rgba(255,255,255,.06); }
    </style>

    <div class="kd-grid">

        <!-- Card 1: Google Search Console -->
        <div class="kd-card">
            <div>
                <div class="kd-head">
                    <div>
                        <h3 class="kd-title"><span class="kd-dot" style="background:#10b981"></span>Google Search Console</h3>
                        <p class="kd-sub">Kinerja penelusuran &amp; peringkat organik</p>
                    </div>
                    <a href="{{ url('/admin/manage-analytics') }}" class="kd-link">Buka Log →</a>
                </div>

                <div class="kd-body">
                    <div class="kd-gauge">
                        <svg viewBox="0 0 36 36">
                            <defs>
                                <linearGradient id="kd-grad-blue" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#38bdf8" />
                                    <stop offset="100%" stop-color="#0369b1" />
                                </linearGradient>
                            </defs>
                            <path pathLength="100" stroke="#e2e8f0" stroke-width="3.2" fill="none"
                                  d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path pathLength="100" stroke="url(#kd-grad-blue)" stroke-dasharray="78 100" stroke-width="3.2" stroke-linecap="round" fill="none"
                                  d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <div class="kd-gauge-center">
                            <span class="kd-gauge-value">{{ $avgCtr }}</span>
                            <span class="kd-gauge-label">CTR Organik</span>
                        </div>
                    </div>

                    <div class="kd-metrics">
                        <div>
                            <span class="kd-metric-label">Total impresi</span>
                            <span class="kd-metric-value">{{ $searchImpressions }}</span>
                        </div>
                        <div>
                            <span class="kd-metric-label">Klik masuk organik</span>
                            <span class="kd-metric-value" style="color:#059669">{{ $organicClicks }} klik</span>
                        </div>
                        <div>
                            <span class="kd-metric-label">Rata-rata ranking</span>
                            <span class="kd-metric-value" style="color:#0369b1">Posisi #{{ $avgPosition }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="kd-foot">
                <span>Kata kunci teratas</span>
                <span class="kd-foot-value">"kantor akuntan publik medan"</span>
            </div>
        </div>

        <!-- Card 2: Google Analytics 4 -->
        <div class="kd-card">
            <div>
                <div class="kd-head">
                    <div>
                        <h3 class="kd-title"><span class="kd-dot" style="background:#0284c7"></span>Google Analytics 4</h3>
                        <p class="kd-sub">Lalu lintas pengunjung &amp; sesi</p>
                    </div>
                    <span class="kd-pill"><span class="kd-dot" style="background:#10b981;width:5px;height:5px"></span>Aktif</span>
                </div>

                <div class="kd-body">
                    <div class="kd-gauge">
                        <svg viewBox="0 0 36 36">
                            <defs>
                                <linearGradient id="kd-grad-green" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#6ee7b7" />
                                    <stop offset="100%" stop-color="#059669" />
                                </linearGradient>
                            </defs>
                            <path pathLength="100" stroke="#e2e8f0" stroke-width="3.2" fill="none"
                                  d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path pathLength="100" stroke="url(#kd-grad-green)" stroke-dasharray="98 100" stroke-width="3.2" stroke-linecap="round" fill="none"
                                  d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <div class="kd-gauge-center">
                            <span class="kd-gauge-value">98%</span>
                            <span class="kd-gauge-label">Skor mutu</span>
                        </div>
                    </div>

                    <div class="kd-metrics">
                        <div>
                            <span class="kd-metric-label">Pengunjung unik / bulan</span>
                            <span class="kd-metric-value">{{ $monthlyVisitors }} users</span>
                        </div>
                        <div>
                            <span class="kd-metric-label">Tayangan halaman</span>
                            <span class="kd-metric-value" style="color:#0284c7">{{ $monthlyPageviews }} views</span>
                        </div>
                        <div>
                            <span class="kd-metric-label">Rata-rata durasi sesi</span>
                            <span class="kd-metric-value" style="color:#7c3aed">2m 45s</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="kd-foot">
                <span>Halaman terpopuler</span>
                <span class="kd-foot-value">
                    <code class="kd-code">/ (Beranda)</code> &amp; <code class="kd-code">/layanan</code>
                </span>
            </div>
        </div>

        <!-- Card 3: Distribusi Permintaan Layanan -->
        <div class="kd-card">
            <div>
                <div class="kd-head">
                    <div>
                        <h3 class="kd-title"><span class="kd-dot" style="background:#f59e0b"></span>Distribusi Permintaan Layanan</h3>
                        <p class="kd-sub">Berdasarkan minat konsultasi &amp; RFP</p>
                    </div>
                    <a href="{{ url('/admin/services') }}" class="kd-link">Kelola →</a>
                </div>

                <div class="kd-bars">
                    <div>
                        <div class="kd-bar-row">
                            <span class="kd-bar-label">General Audit (Audit Umum)</span>
                            <span class="kd-bar-pct" style="color:#0369b1">55%</span>
                        </div>
                        <div class="kd-track"><div class="kd-fill" style="width:55%; background: linear-gradient(90deg,#38bdf8,#0369b1)"></div></div>
                    </div>
                    <div>
                        <div class="kd-bar-row">
                            <span class="kd-bar-label">Konsultasi &amp; Kepatuhan Pajak</span>
                            <span class="kd-bar-pct" style="color:#059669">25%</span>
                        </div>
                        <div class="kd-track"><div class="kd-fill" style="width:25%; background: linear-gradient(90deg,#6ee7b7,#059669)"></div></div>
                    </div>
                    <div>
                        <div class="kd-bar-row">
                            <span class="kd-bar-label">Management Audit &amp; SPI</span>
                            <span class="kd-bar-pct" style="color:#0284c7">12%</span>
                        </div>
                        <div class="kd-track"><div class="kd-fill" style="width:12%; background: linear-gradient(90deg,#7dd3fc,#0284c7)"></div></div>
                    </div>
                    <div>
                        <div class="kd-bar-row">
                            <span class="kd-bar-label">Accounting Service &amp; SOP</span>
                            <span class="kd-bar-pct" style="color:#d97706">8%</span>
                        </div>
                        <div class="kd-track"><div class="kd-fill" style="width:8%; background: linear-gradient(90deg,#fde68a,#d97706)"></div></div>
                    </div>
                </div>
            </div>

            <div class="kd-foot">
                <span>Taraf kepuasan klien</span>
                <span class="kd-foot-value" style="color:#059669">★★★★★ 4.9 / 5.0</span>
            </div>
        </div>

    </div>
</x-filament-widgets::widget>
