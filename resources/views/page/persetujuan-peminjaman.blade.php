
@extends('Layout.navbar')

@section('navbar')
@include('Layout.sepak-style')

<div class="sepak-page">

    <div class="sp-page-head">
        <div>
            <div class="sp-eyebrow">Peminjaman / Verifikasi Admin</div>
            <h1 class="sp-title">Persetujuan Peminjaman</h1>
            <p class="sp-subtitle">
                Verifikasi kebutuhan, ketersediaan aset, dan periode permohonan dari karyawan.
            </p>
        </div>

        <button type="button" class="sp-btn sp-btn-outline">
            ⇩ Export Permohonan
        </button>
    </div>

    <!-- Statistik -->
    <div class="sp-stat-grid">

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">◷</div>
            <div>
                <div class="sp-stat-label">Menunggu Persetujuan</div>
                <div class="sp-stat-value">08</div>
                <div class="sp-stat-foot">Perlu ditinjau</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">↻</div>
            <div>
                <div class="sp-stat-label">Dalam Verifikasi</div>
                <div class="sp-stat-value">04</div>
                <div class="sp-stat-foot">Sedang diperiksa</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">✓</div>
            <div>
                <div class="sp-stat-label">Disetujui Hari Ini</div>
                <div class="sp-stat-value">12</div>
                <div class="sp-stat-foot">Permohonan diterima</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">×</div>
            <div>
                <div class="sp-stat-label">Ditolak Hari Ini</div>
                <div class="sp-stat-value">02</div>
                <div class="sp-stat-foot">Tidak memenuhi ketentuan</div>
            </div>
        </div>

    </div>

    <!-- Filter -->
    <div class="sp-toolbar">

        <div class="sp-toolbar-group">
            <button class="sp-btn sp-btn-primary" type="button">Semua Permohonan (14)</button>
            <button class="sp-btn sp-btn-outline" type="button">Menunggu (8)</button>
            <button class="sp-btn sp-btn-outline" type="button">Dalam Verifikasi (4)</button>
            <button class="sp-btn sp-btn-outline" type="button">Selesai (2)</button>
        </div>

        <div class="sp-toolbar-group">
            <input class="sp-input sp-search" type="search"
                placeholder="Cari nomor permohonan / nama pegawai...">
        </div>

    </div>

    <div class="sp-two-col">

        <!-- Daftar Permohonan -->
        <div class="d-flex flex-column gap-3">

            <div class="sp-request-card" style="border-left:4px solid #d9a441">

                <div class="sp-request-top">
                    <div>
                        <span class="sp-badge sp-badge-yellow">Menunggu Persetujuan</span>
                        <div class="sp-item-name mt-2">
                            REQ-20261124-0086 · Apple MacBook Pro 15”
                        </div>
                        <div class="sp-item-code">Diajukan 24 Nov 2026, 09:42 WIB</div>
                    </div>

                    <button class="sp-btn sp-btn-outline sp-btn-sm" type="button">
                        Lihat Detail ↗
                    </button>
                </div>

                <div class="row g-3 mt-1">

                    <div class="col-md-6">
                        <div class="sp-small sp-muted">Peminjam / Pemohon</div>
                        <strong class="sp-small">Ayu Anisa Pratama</strong>
                        <div class="sp-item-code">Divisi Sistem Informasi & Teknologi</div>
                    </div>

                    <div class="col-md-6">
                        <div class="sp-small sp-muted">Rentang Waktu Peminjaman</div>
                        <strong class="sp-small">25/11/2026 – 29/11/2026</strong>
                        <div class="sp-item-code">Durasi 5 hari kalender</div>
                    </div>

                    <div class="col-md-6">
                        <div class="sp-small sp-muted">Lokasi Penyerahan</div>
                        <strong class="sp-small">Gudang Sarpras 02</strong>
                    </div>

                    <div class="col-md-6">
                        <div class="sp-small sp-muted">Petugas Aset</div>
                        <strong class="sp-small">Budi Santoso</strong>
                    </div>

                </div>

                <hr class="sp-divider">

                <div class="sp-small sp-muted mb-1">Tujuan & Keperluan Pengajuan</div>
                <p class="sp-small mb-0">
                    Kebutuhan perbaikan instalasi ruang arsip digital dan pemeliharaan berkala
                    berkas dokumen perusahaan.
                </p>

                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mt-3">
                    <span class="sp-small sp-muted">Prioritas: <strong>Normal</strong></span>

                    <div class="d-flex gap-2">
                        <button type="button" class="sp-btn sp-btn-outline sp-btn-sm">
                            Minta Klarifikasi
                        </button>

                        <button type="button" class="sp-btn sp-btn-danger sp-btn-sm">
                            Tolak
                        </button>

                        <button type="button" class="sp-btn sp-btn-success sp-btn-sm">
                            ✓ Setujui
                        </button>
                    </div>
                </div>

            </div>

            <div class="sp-request-card">

                <div class="sp-request-top">
                    <div>
                        <span class="sp-badge sp-badge-yellow">Menunggu Persetujuan</span>
                        <div class="sp-item-name mt-2">
                            REQ-20261124-0084 · Proyektor Epson EB-X500
                        </div>
                        <div class="sp-item-code">Diajukan 24 Nov 2026, 08:15 WIB</div>
                    </div>

                    <button class="sp-btn sp-btn-outline sp-btn-sm" type="button">
                        Lihat Detail ↗
                    </button>
                </div>

                <div class="sp-request-meta">
                    <span>♙ Rofid Kamaludin</span>
                    <span>▣ Divisi Operasional</span>
                    <span>25–26 Nov 2026</span>
                    <span>1 unit</span>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-3">
                    <button type="button" class="sp-btn sp-btn-outline sp-btn-sm">Minta Klarifikasi</button>
                    <button type="button" class="sp-btn sp-btn-danger sp-btn-sm">Tolak</button>
                    <button type="button" class="sp-btn sp-btn-success sp-btn-sm">✓ Setujui</button>
                </div>

            </div>

            <div class="sp-request-card">

                <div class="sp-request-top">
                    <div>
                        <span class="sp-badge sp-badge-blue">Dalam Verifikasi</span>
                        <div class="sp-item-name mt-2">
                            REQ-20261124-0081 · Kamera Canon EOS 80D
                        </div>
                        <div class="sp-item-code">Diajukan 23 Nov 2026, 15:30 WIB</div>
                    </div>

                    <button class="sp-btn sp-btn-outline sp-btn-sm" type="button">
                        Lihat Detail ↗
                    </button>
                </div>

                <div class="sp-request-meta">
                    <span>♙ Hanif Ibrahim</span>
                    <span>▣ Divisi Dokumentasi</span>
                    <span>27–28 Nov 2026</span>
                    <span>1 unit</span>
                </div>

            </div>

        </div>

        <!-- Panduan -->
        <div class="d-flex flex-column gap-3">

            <div class="sp-card sp-card-pad">

                <h2 class="sp-card-title">Panduan Verifikasi</h2>
                <p class="sp-card-note">
                    Pastikan seluruh aspek berikut diperiksa sebelum keputusan.
                </p>

                <div class="sp-list mt-3">

                    <div class="sp-step">
                        <div class="sp-step-number">1</div>
                        <div>
                            <div class="sp-step-title">Validasi Identitas Karyawan</div>
                            <div class="sp-step-text">
                                Periksa nama, NIP, divisi, dan status akun pemohon.
                            </div>
                        </div>
                    </div>

                    <div class="sp-step">
                        <div class="sp-step-number">2</div>
                        <div>
                            <div class="sp-step-title">Pengecekan Fisik & Logistik</div>
                            <div class="sp-step-text">
                                Pastikan jumlah dan kondisi barang tersedia untuk periode tersebut.
                            </div>
                        </div>
                    </div>

                    <div class="sp-step">
                        <div class="sp-step-number">3</div>
                        <div>
                            <div class="sp-step-title">Validasi Kuota Pinjaman</div>
                            <div class="sp-step-text">
                                Periksa batas maksimal unit aktif dan pinjaman yang belum dikembalikan.
                            </div>
                        </div>
                    </div>

                    <div class="sp-step">
                        <div class="sp-step-number">4</div>
                        <div>
                            <div class="sp-step-title">Keputusan Permohonan</div>
                            <div class="sp-step-text">
                                Setujui, tolak dengan alasan, atau minta klarifikasi kepada pemohon.
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="sp-card sp-card-pad">

                <h2 class="sp-card-title">Ringkasan Permohonan Terpilih</h2>

                <div class="sp-info-row">
                    <span>Nomor permohonan</span>
                    <strong>REQ-20261124-0086</strong>
                </div>

                <div class="sp-info-row">
                    <span>Jumlah barang</span>
                    <strong>1 unit</strong>
                </div>

                <div class="sp-info-row">
                    <span>Periode</span>
                    <strong>5 hari</strong>
                </div>

                <div class="sp-info-row">
                    <span>Prioritas</span>
                    <strong><span class="sp-badge sp-badge-gray">Normal</span></strong>
                </div>

            </div>

        </div>

    </div>

</div>
@endsection
