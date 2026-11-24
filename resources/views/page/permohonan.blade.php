
@extends('Layout.navbar')

@section('navbar')
@include('Layout.sepak-style')

<div class="sepak-page">

    <div class="sp-page-head">
        <div>
            <div class="sp-eyebrow">Peminjaman / Permohonan</div>
            <h1 class="sp-title">Permohonan Peminjaman</h1>
            <p class="sp-subtitle">
                Pantau proses permohonan barang dan lihat pembaruan status dari Petugas Aset.
            </p>
        </div>

        <a href="{{ url('/formulir-peminjaman') }}" class="sp-btn sp-btn-primary">
            ＋ Buat Permohonan
        </a>
    </div>

    <!-- Statistik -->
    <div class="sp-stat-grid">

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">◷</div>
            <div>
                <div class="sp-stat-label">Menunggu Persetujuan</div>
                <div class="sp-stat-value">02</div>
                <div class="sp-stat-foot">Menanti verifikasi petugas</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">↻</div>
            <div>
                <div class="sp-stat-label">Sedang Diproses</div>
                <div class="sp-stat-value">01</div>
                <div class="sp-stat-foot">Dalam tahap pemeriksaan</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">✓</div>
            <div>
                <div class="sp-stat-label">Disetujui</div>
                <div class="sp-stat-value">07</div>
                <div class="sp-stat-foot">Siap atau sudah diambil</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">▤</div>
            <div>
                <div class="sp-stat-label">Total Permohonan</div>
                <div class="sp-stat-value">10</div>
                <div class="sp-stat-foot">Seluruh periode</div>
            </div>
        </div>

    </div>

    <!-- Filter -->
    <div class="sp-toolbar">

        <div class="sp-toolbar-group">
            <button type="button" class="sp-btn sp-btn-primary">
                Semua Permohonan (10)
            </button>

            <button type="button" class="sp-btn sp-btn-outline">
                Menunggu (2)
            </button>

            <button type="button" class="sp-btn sp-btn-outline">
                Diproses (1)
            </button>

            <button type="button" class="sp-btn sp-btn-outline">
                Selesai (7)
            </button>
        </div>

        <div class="sp-toolbar-group">
            <input class="sp-input sp-search" type="search"
                placeholder="⌕ Cari barang atau nomor pengajuan...">

            <select class="sp-select" style="width:140px">
                <option>Urutan Terbaru</option>
                <option>Urutan Terlama</option>
            </select>
        </div>

    </div>

    <div class="sp-two-col">

        <!-- Daftar Permohonan -->
        <div class="d-flex flex-column gap-3">

            <div class="sp-request-card" style="border-left:4px solid #d9a441">

                <div class="sp-request-top">
                    <div>
                        <div class="sp-item-code">
                            REQ-20261124-0086 · Diajukan 24 Nov 2026, 09:42 WIB
                        </div>

                        <div class="sp-item-name mt-1">
                            Apple MacBook Pro 15” · 1 Unit
                        </div>

                        <div class="sp-small sp-muted mt-1">
                            Peralatan IT · AST-00124
                        </div>
                    </div>

                    <span class="sp-badge sp-badge-yellow">
                        Menunggu Persetujuan
                    </span>
                </div>

                <div class="sp-request-meta">
                    <span>▦ 25 Nov – 29 Nov 2026</span>
                    <span>◷ 5 hari kalender</span>
                    <span>⌖ Gudang Sarpras 02</span>
                </div>

                <div class="sp-timeline">
                    <span class="done"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="d-flex justify-content-between sp-small sp-muted mt-2">
                    <span>Pengajuan dikirim</span>
                    <span>Verifikasi petugas</span>
                    <span>Persetujuan</span>
                    <span>Pengambilan</span>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    <button class="sp-btn sp-btn-outline sp-btn-sm" type="button">
                        Lihat Detail →
                    </button>
                </div>

            </div>

            <div class="sp-request-card" style="border-left:4px solid #4b78d1">

                <div class="sp-request-top">
                    <div>
                        <div class="sp-item-code">
                            REQ-20261123-0081 · Diajukan 23 Nov 2026, 15:30 WIB
                        </div>

                        <div class="sp-item-name mt-1">
                            Kamera Canon EOS 80D · 1 Unit
                        </div>

                        <div class="sp-small sp-muted mt-1">
                            Elektronik · AST-00127
                        </div>
                    </div>

                    <span class="sp-badge sp-badge-blue">
                        Dalam Verifikasi
                    </span>
                </div>

                <div class="sp-request-meta">
                    <span>▦ 27 Nov – 28 Nov 2026</span>
                    <span>◷ 2 hari kalender</span>
                    <span>⌖ Ruang Administrasi</span>
                </div>

                <div class="sp-timeline">
                    <span class="done"></span>
                    <span class="done"></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="d-flex justify-content-between sp-small sp-muted mt-2">
                    <span>Pengajuan dikirim</span>
                    <span>Verifikasi petugas</span>
                    <span>Persetujuan</span>
                    <span>Pengambilan</span>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    <button class="sp-btn sp-btn-outline sp-btn-sm" type="button">
                        Lihat Detail →
                    </button>
                </div>

            </div>

            <div class="sp-request-card" style="border-left:4px solid #2e9b65">

                <div class="sp-request-top">
                    <div>
                        <div class="sp-item-code">
                            REQ-20261118-0072 · Diajukan 18 Nov 2026, 10:05 WIB
                        </div>

                        <div class="sp-item-name mt-1">
                            Apple iPad 9th Gen · 1 Unit
                        </div>

                        <div class="sp-small sp-muted mt-1">
                            Peralatan IT · AST-00125
                        </div>
                    </div>

                    <span class="sp-badge sp-badge-green">Disetujui</span>
                </div>

                <div class="sp-request-meta">
                    <span>▦ 19 Nov – 21 Nov 2026</span>
                    <span>◷ 3 hari kalender</span>
                    <span>Petugas: Budi Santoso</span>
                </div>

                <div class="sp-timeline">
                    <span class="done"></span>
                    <span class="done"></span>
                    <span class="done"></span>
                    <span class="done"></span>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    <button class="sp-btn sp-btn-outline sp-btn-sm" type="button">
                        Lihat Detail →
                    </button>
                </div>

            </div>

        </div>

        <!-- SOP -->
        <div class="sp-card sp-card-pad">

            <h2 class="sp-card-title">SOP Alur Persetujuan</h2>
            <p class="sp-card-note mb-3">
                Tahapan pemrosesan permohonan peminjaman.
            </p>

            <div class="sp-step">
                <div class="sp-step-number">1</div>
                <div>
                    <div class="sp-step-title">Pengajuan oleh Karyawan</div>
                    <div class="sp-step-text">
                        Karyawan mengisi formulir, memilih barang, dan menentukan rentang waktu.
                    </div>
                </div>
            </div>

            <div class="sp-step">
                <div class="sp-step-number">2</div>
                <div>
                    <div class="sp-step-title">Pengecekan Ketersediaan</div>
                    <div class="sp-step-text">
                        Petugas memeriksa stok, kondisi barang, dan jadwal penggunaan.
                    </div>
                </div>
            </div>

            <div class="sp-step">
                <div class="sp-step-number">3</div>
                <div>
                    <div class="sp-step-title">Validasi Kuota Pinjaman</div>
                    <div class="sp-step-text">
                        Sistem memeriksa batas jumlah unit aktif milik karyawan.
                    </div>
                </div>
            </div>

            <div class="sp-step">
                <div class="sp-step-number">4</div>
                <div>
                    <div class="sp-step-title">Persetujuan Petugas Aset</div>
                    <div class="sp-step-text">
                        Petugas menyetujui, menolak, atau meminta klarifikasi.
                    </div>
                </div>
            </div>

            <div class="sp-step">
                <div class="sp-step-number">5</div>
                <div>
                    <div class="sp-step-title">Pengambilan Barang</div>
                    <div class="sp-step-text">
                        Karyawan menerima barang sesuai jadwal dan lokasi penyerahan.
                    </div>
                </div>
            </div>

            <div class="mt-3 p-3 rounded-3" style="background:#f4f6fc">
                <div class="sp-small fw-bold">Informasi</div>
                <div class="sp-small sp-muted mt-1">
                    Perubahan status permohonan dapat dipantau melalui halaman ini.
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
