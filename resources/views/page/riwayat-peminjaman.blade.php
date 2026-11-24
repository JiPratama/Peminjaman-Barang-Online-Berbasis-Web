
@extends('Layout.navbar')

@section('navbar')
@include('Layout.sepak-style')

<div class="sepak-page">

    <div class="sp-page-head">
        <div>
            <div class="sp-eyebrow">Peminjaman / Arsip</div>
            <h1 class="sp-title">Riwayat Peminjaman</h1>
            <p class="sp-subtitle">
                Lihat catatan peminjaman dan pengembalian barang yang pernah Anda lakukan.
            </p>
        </div>

        <button type="button" class="sp-btn sp-btn-outline">
            ⇩ Unduh Riwayat
        </button>
    </div>

    <!-- Filter -->
    <div class="sp-toolbar">

        <div class="sp-toolbar-group">

            <input class="sp-input sp-search" type="search"
                placeholder="⌕ Cari barang, kode, atau nomor permohonan...">

            <select class="sp-select" style="width:145px">
                <option>Semua Kategori</option>
                <option>Peralatan IT</option>
                <option>Elektronik</option>
                <option>Furnitur</option>
            </select>

            <select class="sp-select" style="width:135px">
                <option>Periode 2026</option>
                <option>2025</option>
                <option>2024</option>
            </select>

            <select class="sp-select" style="width:135px">
                <option>Semua Status</option>
                <option>Tuntas</option>
                <option>Dibatalkan</option>
            </select>

        </div>

        <button type="button" class="sp-btn sp-btn-outline">
            Reset Filter
        </button>

    </div>

    <div class="sp-two-col">

        <!-- Daftar Riwayat -->
        <div class="d-flex flex-column gap-3">

            <!-- Riwayat 1 -->
            <div class="sp-request-card" style="border-left:4px solid #2e9b65">

                <div class="sp-request-top">

                    <div class="d-flex gap-3">
                        <div class="sp-icon-box" style="width:46px;height:46px;font-size:20px">
                            ▣
                        </div>

                        <div>
                            <div class="sp-item-name">
                                Sony Alpha A7 III Kit 28–70mm
                            </div>
                            <div class="sp-item-code">
                                REQ-20240408-0508 · Elektronik / Kamera
                            </div>
                        </div>
                    </div>

                    <span class="sp-badge sp-badge-green">
                        Tuntas · Kondisi Baik
                    </span>

                </div>

                <div class="row g-3 mt-2">

                    <div class="col-md-4">
                        <div class="sp-small sp-muted">Tanggal Peminjaman</div>
                        <strong class="sp-small">14 Apr 2024, 15:30 WIB</strong>
                    </div>

                    <div class="col-md-4">
                        <div class="sp-small sp-muted">Tanggal Pengembalian</div>
                        <strong class="sp-small">18 Apr 2024, 10:15 WIB</strong>
                    </div>

                    <div class="col-md-4">
                        <div class="sp-small sp-muted">Petugas Penerima</div>
                        <strong class="sp-small">Budi Santoso</strong>
                    </div>

                </div>

                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span class="sp-small sp-muted">✓ BAST telah diverifikasi</span>
                    <button class="sp-btn sp-btn-outline sp-btn-sm" type="button">
                        Rincian Lagi ↗
                    </button>
                </div>

            </div>

            <!-- Riwayat 2 -->
            <div class="sp-request-card" style="border-left:4px solid #2e9b65">

                <div class="sp-request-top">

                    <div class="d-flex gap-3">
                        <div class="sp-icon-box" style="width:46px;height:46px;font-size:20px">
                            ▣
                        </div>

                        <div>
                            <div class="sp-item-name">
                                MacBook Air M2 13.6” 512GB (Midnight)
                            </div>
                            <div class="sp-item-code">
                                REQ-20240321-0432 · Peralatan IT
                            </div>
                        </div>
                    </div>

                    <span class="sp-badge sp-badge-green">
                        Tuntas · Tepat Waktu
                    </span>

                </div>

                <div class="row g-3 mt-2">

                    <div class="col-md-4">
                        <div class="sp-small sp-muted">Tanggal Peminjaman</div>
                        <strong class="sp-small">21 Mar 2024, 14:15 WIB</strong>
                    </div>

                    <div class="col-md-4">
                        <div class="sp-small sp-muted">Tanggal Pengembalian</div>
                        <strong class="sp-small">25 Mar 2024, 09:30 WIB</strong>
                    </div>

                    <div class="col-md-4">
                        <div class="sp-small sp-muted">Petugas Penerima</div>
                        <strong class="sp-small">Agus Setiawan</strong>
                    </div>

                </div>

                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span class="sp-small sp-muted">✓ BAST telah diverifikasi</span>
                    <button class="sp-btn sp-btn-outline sp-btn-sm" type="button">
                        Rincian Lagi ↗
                    </button>
                </div>

            </div>

            <!-- Riwayat 3 -->
            <div class="sp-request-card" style="border-left:4px solid #2e9b65">

                <div class="sp-request-top">

                    <div class="d-flex gap-3">
                        <div class="sp-icon-box" style="width:46px;height:46px;font-size:20px">
                            ▤
                        </div>

                        <div>
                            <div class="sp-item-name">
                                Proyektor Epson EB-X500
                            </div>
                            <div class="sp-item-code">
                                REQ-20240212-0318 · Elektronik
                            </div>
                        </div>
                    </div>

                    <span class="sp-badge sp-badge-green">
                        Tuntas · Kondisi Baik
                    </span>

                </div>

                <div class="row g-3 mt-2">

                    <div class="col-md-4">
                        <div class="sp-small sp-muted">Tanggal Peminjaman</div>
                        <strong class="sp-small">12 Feb 2024, 08:00 WIB</strong>
                    </div>

                    <div class="col-md-4">
                        <div class="sp-small sp-muted">Tanggal Pengembalian</div>
                        <strong class="sp-small">13 Feb 2024, 16:00 WIB</strong>
                    </div>

                    <div class="col-md-4">
                        <div class="sp-small sp-muted">Petugas Penerima</div>
                        <strong class="sp-small">Budi Santoso</strong>
                    </div>

                </div>

                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span class="sp-small sp-muted">✓ BAST telah diverifikasi</span>
                    <button class="sp-btn sp-btn-outline sp-btn-sm" type="button">
                        Rincian Lagi ↗
                    </button>
                </div>

            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center">
                <span class="sp-small sp-muted">Menampilkan 3 dari 18 riwayat</span>

                <div class="d-flex gap-1">
                    <button class="sp-btn sp-btn-outline sp-btn-sm">‹</button>
                    <button class="sp-btn sp-btn-primary sp-btn-sm">1</button>
                    <button class="sp-btn sp-btn-outline sp-btn-sm">2</button>
                    <button class="sp-btn sp-btn-outline sp-btn-sm">›</button>
                </div>
            </div>

        </div>

        <!-- Informasi Samping -->
        <div class="d-flex flex-column gap-3">

            <div class="sp-card sp-card-pad">

                <h2 class="sp-card-title">Skor Integritas Peminjaman</h2>
                <p class="sp-card-note">
                    Ringkasan kepatuhan pengembalian barang Anda.
                </p>

                <div class="d-flex align-items-center gap-3 mt-3">

                    <div style="
                        width:82px;
                        height:82px;
                        border-radius:50%;
                        border:8px solid #d8f1e3;
                        border-top-color:#2e9b65;
                        display:grid;
                        place-items:center;
                    ">
                        <strong style="font-size:21px;color:#16834a">96.5</strong>
                    </div>

                    <div>
                        <div class="sp-badge sp-badge-green">Sangat Baik</div>
                        <div class="sp-small sp-muted mt-2">
                            Berdasarkan ketepatan waktu dan kondisi barang.
                        </div>
                    </div>

                </div>

                <hr class="sp-divider">

                <div class="sp-info-row">
                    <span>Pengembalian tepat waktu</span>
                    <strong>17 / 18</strong>
                </div>

                <div class="sp-info-row">
                    <span>Kondisi barang baik</span>
                    <strong>18 / 18</strong>
                </div>

                <div class="sp-info-row">
                    <span>BAST terverifikasi</span>
                    <strong>18 / 18</strong>
                </div>

            </div>

            <div class="sp-card sp-card-pad">

                <h2 class="sp-card-title">Bantuan & Koreksi Data</h2>
                <p class="sp-card-note">
                    Temukan ketidaksesuaian pada catatan riwayat peminjaman?
                </p>

                <div class="p-3 rounded-3 mt-3" style="background:#f4f6fc">
                    <div class="sp-small fw-bold">Helpdesk Sarpras</div>
                    <div class="sp-small sp-muted mt-1">
                        Sampaikan nomor permohonan dan detail data yang perlu diperiksa.
                    </div>
                    <div class="sp-small mt-2">
                        <strong>Ext. 402 / Support</strong>
                    </div>
                </div>

                <button class="sp-btn sp-btn-outline w-100 mt-3" type="button">
                    Hubungi Petugas
                </button>

            </div>

        </div>

    </div>

</div>
@endsection
