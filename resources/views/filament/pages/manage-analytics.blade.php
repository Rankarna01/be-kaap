<x-filament-panels::page>
    <!-- Header Integration Banner -->
    <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-emerald-600 via-teal-700 to-[#0369b1] p-6 text-white shadow-lg">
        <div class="relative z-10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <div class="space-y-1">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/20 text-xs font-bold tracking-wide">
                    <span class="size-2 rounded-full bg-emerald-300 animate-pulse"></span>
                    <span>Status: Terhubung & Aktif</span>
                </div>
                <h2 class="text-xl sm:text-2xl font-black">Google Analytics 4 & Search Console Console</h2>
                <p class="text-xs sm:text-sm text-emerald-100 max-w-xl">
                    Pantau kinerja visibilitas kata kunci audit di Google Search serta statistik kunjungan halaman website secara langsung dari portal backoffice ini.
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-2 shrink-0">
                <a href="https://analytics.google.com/" target="_blank"
                   class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-white text-gray-900 hover:bg-emerald-50 text-xs font-bold shadow transition">
                    <svg class="size-4 text-amber-500" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                    </svg>
                    <span>Google Analytics</span>
                    <svg class="size-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>

                <a href="https://search.google.com/search-console" target="_blank"
                   class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-white/20 hover:bg-white/30 border border-white/25 text-white text-xs font-bold transition">
                    <svg class="size-4 text-sky-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <span>Search Console</span>
                    <svg class="size-3 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- 4 High Level Metrics Cards -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="p-5 rounded-2xl bg-white dark:bg-gray-900 border border-gray-200/80 dark:border-gray-800 shadow-xs">
            <span class="text-xs font-medium text-gray-400 block mb-1">Total Klik Organik (GSC)</span>
            <div class="flex items-baseline gap-2">
                <span class="text-2xl font-black text-gray-900 dark:text-white">{{ $metrics['totalClicks'] }}</span>
                <span class="text-xs font-bold text-emerald-600">+14.2%</span>
            </div>
            <span class="text-[11px] text-gray-400 mt-1 block">Dari penelusuran Google</span>
        </div>

        <div class="p-5 rounded-2xl bg-white dark:bg-gray-900 border border-gray-200/80 dark:border-gray-800 shadow-xs">
            <span class="text-xs font-medium text-gray-400 block mb-1">Total Impresi Penelusuran</span>
            <div class="flex items-baseline gap-2">
                <span class="text-2xl font-black text-primary-600 dark:text-primary-400">{{ $metrics['totalImpressions'] }}</span>
                <span class="text-xs font-bold text-emerald-600">+22.8%</span>
            </div>
            <span class="text-[11px] text-gray-400 mt-1 block">Tampil di hasil pencarian</span>
        </div>

        <div class="p-5 rounded-2xl bg-white dark:bg-gray-900 border border-gray-200/80 dark:border-gray-800 shadow-xs">
            <span class="text-xs font-medium text-gray-400 block mb-1">Rata-rata CTR Organik</span>
            <div class="flex items-baseline gap-2">
                <span class="text-2xl font-black text-amber-600 dark:text-amber-400">{{ $metrics['avgCtr'] }}</span>
                <span class="text-xs font-bold text-emerald-600">+1.5%</span>
            </div>
            <span class="text-[11px] text-gray-400 mt-1 block">Rasio klik per impresi</span>
        </div>

        <div class="p-5 rounded-2xl bg-white dark:bg-gray-900 border border-gray-200/80 dark:border-gray-800 shadow-xs">
            <span class="text-xs font-medium text-gray-400 block mb-1">Rata-rata Posisi Ranking</span>
            <div class="flex items-baseline gap-2">
                <span class="text-2xl font-black text-purple-600 dark:text-purple-400">#{{ $metrics['avgPosition'] }}</span>
                <span class="text-xs font-bold text-emerald-600">Halaman 1</span>
            </div>
            <span class="text-[11px] text-gray-400 mt-1 block">Kata kunci relevan KAP</span>
        </div>
    </div>

    <!-- Form Konfigurasi Google Analytics & Search Console -->
    <form wire:submit="submit">
        {{ $this->form }}

        <div class="mt-4 flex justify-end">
            <x-filament::button type="submit" size="lg">
                Simpan Konfigurasi Analitik & SEO
            </x-filament::button>
        </div>
    </form>

    <!-- Tabel 1: Log Kata Kunci Google Search Console (Top Queries) -->
    <div class="p-6 rounded-2xl bg-white dark:bg-gray-900 border border-gray-200/80 dark:border-gray-800 shadow-sm space-y-4">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-base font-bold text-gray-900 dark:text-white flex items-center gap-2">
                    <svg class="size-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                    Log Kata Kunci Terpopuler (Google Search Console)
                </h3>
                <p class="text-xs text-gray-500 dark:text-gray-400">Query penelusuran yang menghasilkan klik terbanyak ke situs KAP DSSR</p>
            </div>
            <span class="px-2.5 py-1 rounded-full bg-primary-50 dark:bg-primary-950 text-primary-700 dark:text-primary-300 text-xs font-bold">
                {{ count($topQueries) }} Kata Kunci Terpantau
            </span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-gray-50 dark:bg-gray-800/50 text-gray-500 uppercase tracking-wider text-[11px] font-semibold border-y border-gray-100 dark:border-gray-800">
                    <tr>
                        <th class="py-3 px-4">Kata Kunci Penelusuran (Query)</th>
                        <th class="py-3 px-4 text-center">Klik Masuk</th>
                        <th class="py-3 px-4 text-center">Total Impresi</th>
                        <th class="py-3 px-4 text-center">CTR (%)</th>
                        <th class="py-3 px-4 text-center">Posisi Ranking</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                    @foreach($topQueries as $q)
                        <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-800/30 transition">
                            <td class="py-3.5 px-4 font-bold text-gray-900 dark:text-white flex items-center gap-2">
                                <span class="text-gray-400 font-normal">#{{ $loop->iteration }}</span>
                                <span>{{ $q['keyword'] }}</span>
                            </td>
                            <td class="py-3.5 px-4 text-center font-bold text-emerald-600 dark:text-emerald-400">
                                {{ number_format($q['clicks']) }}
                            </td>
                            <td class="py-3.5 px-4 text-center text-gray-600 dark:text-gray-300">
                                {{ number_format($q['impressions']) }}
                            </td>
                            <td class="py-3.5 px-4 text-center font-semibold text-primary-600 dark:text-primary-400">
                                {{ $q['ctr'] }}
                            </td>
                            <td class="py-3.5 px-4 text-center">
                                <span class="px-2 py-0.5 rounded-full {{ $q['position'] <= 2.0 ? 'bg-emerald-100 dark:bg-emerald-950/60 text-emerald-800 dark:text-emerald-300 font-bold' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300' }}">
                                    Posisi {{ $q['position'] }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tabel 2: Log Halaman Terpopuler (Google Analytics 4 Top Pages) -->
    <div class="p-6 rounded-2xl bg-white dark:bg-gray-900 border border-gray-200/80 dark:border-gray-800 shadow-sm space-y-4">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-base font-bold text-gray-900 dark:text-white flex items-center gap-2">
                    <svg class="size-5 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Log Halaman Terpopuler (Google Analytics 4)
                </h3>
                <p class="text-xs text-gray-500 dark:text-gray-400">Halaman yang paling banyak dibaca dan dikunjungi oleh calon klien</p>
            </div>
            <span class="text-xs font-semibold text-gray-400">Data 30 Hari Terakhir</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-gray-50 dark:bg-gray-800/50 text-gray-500 uppercase tracking-wider text-[11px] font-semibold border-y border-gray-100 dark:border-gray-800">
                    <tr>
                        <th class="py-3 px-4">Alamat Halaman (URL Path)</th>
                        <th class="py-3 px-4 text-center">Total Tayangan (Views)</th>
                        <th class="py-3 px-4 text-center">Pengunjung Unik</th>
                        <th class="py-3 px-4 text-center">Rata-rata Durasi</th>
                        <th class="py-3 px-4 text-center">Bounce Rate</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                    @foreach($topPages as $p)
                        <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-800/30 transition">
                            <td class="py-3.5 px-4 font-mono font-medium text-primary-600 dark:text-primary-400">
                                {{ $p['path'] }}
                            </td>
                            <td class="py-3.5 px-4 text-center font-bold text-gray-900 dark:text-white">
                                {{ $p['views'] }}
                            </td>
                            <td class="py-3.5 px-4 text-center text-gray-600 dark:text-gray-300">
                                {{ $p['users'] }}
                            </td>
                            <td class="py-3.5 px-4 text-center text-emerald-600 font-semibold">
                                {{ $p['avgTime'] }}
                            </td>
                            <td class="py-3.5 px-4 text-center text-gray-500">
                                {{ $p['bounce'] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-filament-panels::page>

