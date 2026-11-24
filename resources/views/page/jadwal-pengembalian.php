
@extends('Layout.navbar')

@section('navbar')
@include('Layout.sepak-style')

<div class="sepak-page">

    <div class="sp-page-head">
        <div>
            <div class="sp-eyebrow">Peminjaman / Kalender</div>
            <h1 class="sp-title">Jadwal Pengembalian</h1>
            <p class="sp-subtitle">
                Lihat kalender pengembalian dan persiapkan proses serah terima barang.
            </p>
        </div>

        <button type="button" class="sp-btn sp-btn-outline">
            ▦ Tampilan Bulanan
        </button>
    </div>

    <!-- Statistik -->
    <div class="sp-stat-grid">

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">▦</div>
            <div>
                <div class="sp-stat-label">Total Jadwal Bulan Ini</div>
                <div class="sp-stat-value">18</div>
                <div class="sp-stat-foot">Jadwal pengembalian tercatat</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">◷</div>
            <div>
                <div class="sp-stat-label">Akan Jatuh Tempo</div>
                <div class="sp-stat-value">05</div>
                <div class="sp-stat-foot">Dalam 7 hari ke depan</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">!</div>
            <div>
                <div class="sp-stat-label">Terlambat</div>
                <div class="sp-stat-value">01</div>
                <div class="sp-stat-foot">Perlu tindak lanjut</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">✓</div>
            <div>
                <div class="sp-stat-label">Selesai Dikembalikan</div>
                <div class="sp-stat-value">12</div>
                <div class="sp-stat-foot">Telah diverifikasi petugas</div>
            </div>
        </div>

    </div>

    <div class="sp-two-col">

        <!-- Kalender -->
        <div class="sp-card sp-card-pad">

            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                <div>
                    <h2 class="sp-card-title">Kalender Pengembalian</h2>
                    <p class="sp-card-note">November 2026 · Jadwal pengembalian terdaftar</p>
                </div>

                <div class="d-flex gap-2">
                    <button class="sp-btn sp-btn-outline sp-btn-sm">‹</button>
                    <button class="sp-btn sp-btn-outline sp-btn-sm">Hari Ini</button>
                    <button class="sp-btn sp-btn-outline sp-btn-sm">›</button>
                </div>
            </div>

            <div class="sp-calendar">

                <div class="sp-calendar-head">MIN</div>
                <div class="sp-calendar-head">SEN</div>
                <div class="sp-calendar-head">SEL</div>
                <div class="sp-calendar-head">RAB</div>
                <div class="sp-calendar-head">KAM</div>
                <div class="sp-calendar-head">JUM</div>
                <div class="sp-calendar-head">SAB</div>

                <div class="sp-calendar-day muted">26</div>
                <div class="sp-calendar-day muted">27</div>
                <div class="sp-calendar-day muted">28</div>
                <div class="sp-calendar-day muted">29</div>
                <div class="sp-calendar-day muted">30</div>
                <div class="sp-calendar-day muted">31</div>
                <div class="sp-calendar-day">1</div>

                <div class="sp-calendar-day">2</div>
                <div class="sp-calendar-day">3</div>
                <div class="sp-calendar-day">4</div>
                <div class="sp-calendar-day">5</div>
                <div class="sp-calendar-day">6</div>
                <div class="sp-calendar-day">7</div>
                <div class="sp-calendar-day">8</div>

                <div class="sp-calendar-day">9</div>
                <div class="sp-calendar-day">10</div>
                <div class="sp-calendar-day">11</div>
                <div class="sp-calendar-day">12</div>
                <div class="sp-calendar-day">13</div>
                <div class="sp-calendar-day">14</div>
                <div class="sp-calendar-day">15</div>

                <div class="sp-calendar-day">16</div>
                <div class="sp-calendar-day">17</div>
                <div class="sp-calendar-day">18</div>
                <div class="sp-calendar-day">19</div>
                <div class="sp-calendar-day">20</div>
                <div class="sp-calendar-day">21</div>
                <div class="sp-calendar-day">22</div>

                <div class="sp-calendar-day">23</div>
                <div class="sp-calendar-day">24</div>

                <div class="sp-calendar-day today">
                    25
                    <span class="sp-calendar-event">2 jadwal</span>
                </div>

                <div class="sp-calendar-day">
                    26
                    <span class="sp-calendar-event red">Terlambat</span>
                </div>

                <div class="sp-calendar-day">
                    27
                    <span class="sp-calendar-event">1 jadwal</span>
                </div>

                <div class="sp-calendar-day">28</div>

                <div class="sp-calendar-day">
                    29
                    <span class="sp-calendar-event">2 jadwal</span>
                </div>

                <div class="sp-calendar-day">30</div>
                <div class="sp-calendar-day muted">1</div>
                <div class="sp-calendar-day muted">2</div>
                <div class="sp-calendar-day muted">3</div>
                <div class="sp-calendar-day muted">4</div>
                <div class="sp-calendar-day muted">5</div>
                <div class="sp-calendar-day muted">6</div>

            </div>

            <div class="d-flex flex-wrap gap-3 mt-3 sp-small">
                <span>
                    <span class="sp-badge sp-badge-blue">●</span>
                    Jadwal akan datang
                </span>

                <span>
                    <span class="sp-badge sp-badge-red">●</span>
                    Terlambat
                </span>

                <span>
                    <span class="sp-badge sp-badge-green">●</span>
                    Selesai
                </span>
            </div>

            <hr class="sp-divider">

            <h3 class="sp-card-title">Jadwal Terdekat</h3>

            <div class="sp-list mt-3">

                <div class="sp-list-row">
                    <div class="d-flex gap-2 align-items-center">
                        <div class="sp-avatar">25</div>
                        <div>
                            <div class="sp-item-name">Apple MacBook Pro 15”</div>
                            <div class="sp-item-code">Ayu Anisa Pratama · 10.00 WIB</div>
                        </div>
                    </div>
                    <span class="sp-badge sp-badge-blue">Besok</span>
                </div>

                <div class="sp-list-row">
                    <div class="d-flex gap-2 align-items-center">
                        <div class="sp-avatar">26</div>
                        <div>
                            <div class="sp-item-name">Proyektor Epson EB-X500</div>
                            <div class="sp-item-code">Hanif Ibrahim · 13.00 WIB</div>
                        </div>
                    </div>
                    <span class="sp-badge sp-badge-red">Terlambat</span>
                </div>

                <div class="sp-list-row">
                    <div class="d-flex gap-2 align-items-center">
                        <div class="sp-avatar">27</div>
                        <div>
                            <div class="sp-item-name">Kamera Canon EOS 80D</div>
                            <div class="sp-item-code">Rofid Kamaludin · 09.00 WIB</div>
                        </div>
                    </div>
                    <span class="sp-badge sp-badge-blue">3 hari lagi</span>
                </div>

            </div>

        </div>

        <!-- Alur Pengembalian -->
        <div class="sp-card sp-card-pad">

            <h2 class="sp-card-title">Alur Pengembalian</h2>
            <p class="sp-card-note mb-3">
                Tahapan yang dilakukan saat barang dikembalikan.
            </p>

            <div class="sp-step">
                <div class="sp-step-number">1</div>
                <div>
                    <div class="sp-step-title">Konfirmasi Jadwal</div>
                    <div class="sp-step-text">
                        Karyawan memastikan waktu pengembalian kepada Petugas Aset.
                    </div>
                </div>
            </div>

            <div class="sp-step">
                <div class="sp-step-number">2</div>
                <div>
                    <div class="sp-step-title">Cek Fisik & Aksesori</div>
                    <div class="sp-step-text">
                        Petugas memeriksa kondisi barang dan kelengkapan aksesori.
                    </div>
                </div>
            </div>

            <div class="sp-step">
                <div class="sp-step-number">3</div>
                <div>
                    <div class="sp-step-title">Pencatatan Inspeksi</div>
                    <div class="sp-step-text">
                        Hasil pemeriksaan dicatat pada formulir pengembalian.
                    </div>
                </div>
            </div>

            <div class="sp-step">
                <div class="sp-step-number">4</div>
                <div>
                    <div class="sp-step-title">Verifikasi & Berita Acara</div>
                    <div class="sp-step-text">
                        Petugas membuat Berita Acara Serah Terima (BAST).
                    </div>
                </div>
            </div>

            <div class="sp-step">
                <div class="sp-step-number">5</div>
                <div>
                    <div class="sp-step-title">Kuota Pinjam Pulih</div>
                    <div class="sp-step-text">
                        Status inventaris diperbarui dan kuota peminjaman karyawan dipulihkan.
                    </div>
                </div>
            </div>

            <div class="mt-4 p-3 rounded-3" style="background:#f4f6fc">
                <div class="sp-small fw-bold">Pengingat</div>
                <div class="sp-small sp-muted mt-1">
                    Kembalikan barang sesuai jadwal untuk menghindari keterlambatan
                    dan memastikan ketersediaan aset bagi karyawan lain.
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
