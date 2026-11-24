
@extends('Layout.navbar')

@section('navbar')
@include('Layout.sepak-style')

<div class="sepak-page">

    <div class="sp-page-head">
        <div>
            <div class="sp-eyebrow">Peminjaman / Formulir</div>
            <h1 class="sp-title">Formulir Peminjaman Barang</h1>
            <p class="sp-subtitle">
                Pilih inventaris yang dibutuhkan dan lengkapi detail periode serta keperluan peminjaman.
            </p>
        </div>
        <span class="sp-badge sp-badge-blue">Pengajuan Baru</span>
    </div>

    <div class="sp-two-col">

        <div class="d-flex flex-column gap-3">

            <!-- Pilih Barang -->
            <div class="sp-card sp-card-pad">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h2 class="sp-card-title">1. Pilih Barang</h2>
                        <p class="sp-card-note">Pilih barang yang tersedia untuk dipinjam.</p>
                    </div>
                    <span class="sp-badge sp-badge-green">Stok tersedia</span>
                </div>

                <div class="sp-field">
                    <label class="sp-label">Cari barang inventaris</label>
                    <input class="sp-input" type="search"
                        placeholder="Cari nama barang, kode, atau kategori...">
                </div>

                <div class="sp-request-card mb-2"
                    style="border-color:#9aace4;background:#f9faff">

                    <div class="d-flex align-items-center gap-3">
                        <div class="sp-icon-box" style="width:48px;height:48px;font-size:20px">▣</div>

                        <div class="flex-grow-1">
                            <div class="sp-item-name">Apple MacBook Pro 15”</div>
                            <div class="sp-item-code">AST-00124 · Peralatan IT · Kondisi baik</div>
                            <div class="sp-small sp-muted mt-1">Tersedia 3 unit</div>
                        </div>

                        <span class="sp-badge sp-badge-green">Dipilih</span>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <span class="sp-small sp-muted">Jumlah yang dipinjam</span>

                        <div class="d-flex align-items-center gap-2">
                            <button type="button" class="sp-btn sp-btn-outline sp-btn-sm">−</button>
                            <strong>1</strong>
                            <button type="button" class="sp-btn sp-btn-outline sp-btn-sm">＋</button>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3 py-2">
                    <div class="sp-icon-box">▤</div>
                    <div class="flex-grow-1">
                        <div class="sp-item-name">Proyektor Epson EB-X500</div>
                        <div class="sp-item-code">AST-00126 · Elektronik</div>
                    </div>
                    <span class="sp-badge sp-badge-yellow">Sedang diajukan</span>
                </div>

                <div class="d-flex align-items-center gap-3 py-2">
                    <div class="sp-icon-box">▣</div>
                    <div class="flex-grow-1">
                        <div class="sp-item-name">Apple iPad 9th Gen</div>
                        <div class="sp-item-code">AST-00125 · Peralatan IT</div>
                    </div>
                    <span class="sp-badge sp-badge-green">Tersedia</span>
                </div>

            </div>

            <!-- Data Pegawai -->
            <div class="sp-card sp-card-pad">

                <h2 class="sp-card-title">2. Data Pegawai & Keperluan Peminjaman</h2>
                <p class="sp-card-note mb-3">
                    Lengkapi identitas peminjam dan tujuan penggunaan barang.
                </p>

                <div class="row g-3">

                    <div class="col-md-6">
                        <div class="sp-field mb-0">
                            <label class="sp-label">Nama Lengkap Pegawai</label>
                            <input class="sp-input" value="Ayu Anisa Pratama" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="sp-field mb-0">
                            <label class="sp-label">Nomor Induk Pegawai (NIP)</label>
                            <input class="sp-input" value="19890420 202001 2 004" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="sp-field mb-0">
                            <label class="sp-label">Divisi / Unit Kerja</label>
                            <select class="sp-select">
                                <option>Divisi Sistem Informasi & Teknologi</option>
                                <option>Administrasi</option>
                                <option>Operasional</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="sp-field mb-0">
                            <label class="sp-label">Kontak / Nomor HP</label>
                            <input class="sp-input" placeholder="08xx-xxxx-xxxx">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="sp-field mb-0">
                            <label class="sp-label">Keperluan / Alasan Peminjaman</label>
                            <textarea class="sp-textarea" rows="3"
                                placeholder="Jelaskan kebutuhan dan tujuan penggunaan barang..."></textarea>
                            <div class="sp-help">
                                Tuliskan kegiatan atau pekerjaan yang membutuhkan inventaris tersebut.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Periode -->
            <div class="sp-card sp-card-pad">

                <h2 class="sp-card-title">3. Periode Peminjaman</h2>
                <p class="sp-card-note mb-3">
                    Tentukan tanggal mulai dan tanggal rencana pengembalian.
                </p>

                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="sp-label">Tanggal Peminjaman</label>
                        <input type="date" class="sp-input" value="2026-11-25">
                    </div>

                    <div class="col-md-6">
                        <label class="sp-label">Tanggal Pengembalian</label>
                        <input type="date" class="sp-input" value="2026-11-29">
                    </div>

                </div>

                <div class="mt-3 p-3 rounded-3" style="background:#f4f6fc">
                    <div class="sp-small sp-muted">Rentang waktu peminjaman</div>
                    <strong>25 Nov 2026 – 29 Nov 2026</strong>
                    <span class="sp-badge sp-badge-blue ms-2">5 hari kalender</span>
                </div>

            </div>

        </div>

        <!-- Ringkasan -->
        <div class="d-flex flex-column gap-3">

            <div class="sp-card sp-card-pad">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="sp-card-title mb-0">Ringkasan Pengajuan</h2>
                    <span class="sp-badge sp-badge-blue">Draft</span>
                </div>

                <div class="sp-info-row">
                    <span>Barang dipilih</span>
                    <strong>1 jenis</strong>
                </div>

                <div class="sp-info-row">
                    <span>Total unit</span>
                    <strong>1 unit</strong>
                </div>

                <div class="sp-info-row">
                    <span>Durasi pinjam</span>
                    <strong>5 hari</strong>
                </div>

                <div class="sp-info-row">
                    <span>Status pengajuan</span>
                    <strong>Belum dikirim</strong>
                </div>

                <hr class="sp-divider">

                <div class="d-flex gap-2">
                    <div class="sp-icon-box">▣</div>
                    <div>
                        <div class="sp-item-name">Apple MacBook Pro 15”</div>
                        <div class="sp-item-code">1 unit · Kondisi baik</div>
                    </div>
                </div>

                <div class="mt-3">
                    <label class="sp-label">Lokasi Pengambilan Barang</label>
                    <select class="sp-select">
                        <option>Gudang Sarpras Lantai 2</option>
                        <option>Ruang Administrasi</option>
                    </select>
                </div>

                <button type="button" class="sp-btn sp-btn-primary w-100 mt-3">
                    Kirim Pengajuan Peminjaman →
                </button>

                <p class="sp-help text-center mt-2">
                    Pengajuan akan diteruskan kepada Petugas Aset untuk diverifikasi.
                </p>

            </div>

            <div class="sp-card sp-card-pad">
                <h2 class="sp-card-title">Kebijakan Peminjaman</h2>

                <div class="sp-list mt-3">
                    <div class="d-flex gap-2">
                        <span class="sp-badge sp-badge-blue">01</span>
                        <span class="sp-small">Pastikan barang tersedia sebelum mengirim pengajuan.</span>
                    </div>

                    <div class="d-flex gap-2">
                        <span class="sp-badge sp-badge-blue">02</span>
                        <span class="sp-small">Masa pinjam mengikuti tanggal yang disetujui petugas aset.</span>
                    </div>

                    <div class="d-flex gap-2">
                        <span class="sp-badge sp-badge-blue">03</span>
                        <span class="sp-small">Barang wajib dikembalikan beserta seluruh aksesorinya.</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
