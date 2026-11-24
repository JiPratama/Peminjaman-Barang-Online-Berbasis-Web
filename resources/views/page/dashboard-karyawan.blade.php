
@extends('Layout.navbar')

@section('navbar')
@include('Layout.sepak-style')

<div class="sepak-page">

    <div class="sp-page-head">
        <div>
            <div class="sp-eyebrow">Dashboard / Karyawan</div>
            <h1 class="sp-title">Selamat Datang, Ayu Anisa 👋</h1>
            <p class="sp-subtitle">
                Pantau peminjaman barang, status permohonan, dan jadwal pengembalian Anda.
            </p>
        </div>

        <a href="{{ url('/formulir-peminjaman') }}" class="sp-btn sp-btn-primary">
            ＋ Ajukan Peminjaman Baru
        </a>
    </div>

    <!-- Statistik -->
    <div class="sp-stat-grid">

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">▣</div>
            <div>
                <div class="sp-stat-label">Barang Sedang Dipinjam</div>
                <div class="sp-stat-value">2 <span class="sp-small sp-muted">unit</span></div>
                <div class="sp-stat-foot">Dari kuota maksimal 3 unit</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">◷</div>
            <div>
                <div class="sp-stat-label">Menunggu Persetujuan</div>
                <div class="sp-stat-value">1</div>
                <div class="sp-stat-foot">Permohonan sedang ditinjau</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">!</div>
            <div>
                <div class="sp-stat-label">Jatuh Tempo Mendekat</div>
                <div class="sp-stat-value">1</div>
                <div class="sp-stat-foot">Dalam 3 hari ke depan</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">✓</div>
            <div>
                <div class="sp-stat-label">Total Riwayat Selesai</div>
                <div class="sp-stat-value">18</div>
                <div class="sp-stat-foot">Peminjaman telah dikembalikan</div>
            </div>
        </div>

    </div>

    <div class="sp-two-col">

        <!-- Barang Aktif -->
        <div class="d-flex flex-column gap-3">

            <div class="sp-card sp-card-pad">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h2 class="sp-card-title">Barang yang Sedang Anda Gunakan</h2>
                        <p class="sp-card-note">Daftar inventaris aktif dalam penguasaan Anda.</p>
                    </div>

                    <a href="{{ url('/jadwal-pengembalian') }}"
                       class="sp-small text-decoration-none" style="color:#264191">
                        Lihat Jadwal Lengkap →
                    </a>
                </div>

                <!-- Barang 1 -->
                <div class="d-flex gap-3 align-items-start">

                    <div class="sp-icon-box" style="width:46px;height:46px;font-size:20px">▣</div>

                    <div class="flex-grow-1">

                        <div class="d-flex justify-content-between gap-2">
                            <div>
                                <div class="sp-item-name">Apple MacBook Pro 15”</div>
                                <div class="sp-item-code">AST-00124 · SN: C02XK8JQ</div>
                            </div>

                            <span class="sp-badge sp-badge-green">Dipinjam</span>
                        </div>

                        <div class="d-flex justify-content-between sp-small mt-3">
                            <span class="sp-muted">25 Nov 2026 – 29 Nov 2026</span>
                            <strong>5 hari</strong>
                        </div>

                        <div class="sp-progress mt-2">
                            <span style="width:65%"></span>
                        </div>

                        <div class="d-flex justify-content-between sp-small mt-2">
                            <span class="sp-muted">Masa pinjam berjalan</span>
                            <strong style="color:#a36b00">Sisa 2 hari</strong>
                        </div>

                    </div>
                </div>

                <hr class="sp-divider">

                <!-- Barang 2 -->
                <div class="d-flex gap-3 align-items-start">

                    <div class="sp-icon-box" style="width:46px;height:46px;font-size:20px">▤</div>

                    <div class="flex-grow-1">

                        <div class="d-flex justify-content-between gap-2">
                            <div>
                                <div class="sp-item-name">Proyektor Epson EB-X500</div>
                                <div class="sp-item-code">AST-00126 · SN: EP-EBX-500-18</div>
                            </div>

                            <span class="sp-badge sp-badge-green">Dipinjam</span>
                        </div>

                        <div class="d-flex justify-content-between sp-small mt-3">
                            <span class="sp-muted">22 Nov 2026 – 27 Nov 2026</span>
                            <strong>6 hari</strong>
                        </div>

                        <div class="sp-progress mt-2">
                            <span style="width:82%"></span>
                        </div>

                        <div class="d-flex justify-content-between sp-small mt-2">
                            <span class="sp-muted">Masa pinjam berjalan</span>
                            <strong style="color:#c03939">Sisa 1 hari</strong>
                        </div>

                    </div>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    <a href="{{ url('/pengembalian-barang') }}"
                       class="sp-btn sp-btn-primary sp-btn-sm">
                        Ajukan Pengembalian
                    </a>
                </div>

            </div>

            <!-- Status Permohonan -->
            <div class="sp-card sp-card-pad">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h2 class="sp-card-title">Status Permohonan Terbaru</h2>
                        <p class="sp-card-note">Perkembangan pengajuan peminjaman Anda.</p>
                    </div>

                    <a href="{{ url('/permohonan') }}"
                       class="sp-small text-decoration-none" style="color:#264191">
                        Lihat Semua →
                    </a>
                </div>

                <div class="d-flex justify-content-between gap-2">
                    <div>
                        <div class="sp-item-name">
                            REQ-20261124-0086 · Apple MacBook Pro 15”
                        </div>
                        <div class="sp-item-code">Diajukan 24 Nov 2026 · 09:42 WIB</div>
                    </div>

                    <span class="sp-badge sp-badge-yellow">Menunggu Persetujuan</span>
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
                    <span>Disetujui</span>
                    <span>Diambil</span>
                </div>

            </div>

        </div>

        <!-- Informasi Samping -->
        <div class="d-flex flex-column gap-3">

            <div class="sp-card sp-card-pad">

                <h2 class="sp-card-title">Kuota Peminjaman</h2>
                <p class="sp-card-note">Batas maksimal barang aktif yang dapat dipinjam.</p>

                <div class="d-flex align-items-end gap-2 mt-3">
                    <div class="sp-stat-value mb-0">
                        2<span class="sp-small sp-muted"> / 3 unit</span>
                    </div>

                    <span class="sp-badge sp-badge-green">Masih tersedia 1</span>
                </div>

                <div class="sp-progress mt-3">
                    <span style="width:66.6%"></span>
                </div>

            </div>

            <div class="sp-card sp-card-pad">

                <h2 class="sp-card-title">Kebijakan & Tata Tertib Sarpras</h2>

                <div class="sp-list mt-3">

                    <div class="d-flex gap-2">
                        <span class="sp-icon-box">i</span>
                        <div>
                            <div class="sp-step-title">Maksimal 3 Unit</div>
                            <div class="sp-step-text">
                                Karyawan dapat memiliki maksimal tiga unit barang aktif.
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <span class="sp-icon-box">◷</span>
                        <div>
                            <div class="sp-step-title">Pengembalian Tepat Waktu</div>
                            <div class="sp-step-text">
                                Kembalikan barang sesuai tanggal yang telah disetujui.
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <span class="sp-icon-box">✓</span>
                        <div>
                            <div class="sp-step-title">Jaga Kondisi Barang</div>
                            <div class="sp-step-text">
                                Pastikan barang dan seluruh aksesori tetap lengkap.
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="sp-card sp-card-pad">
                <h2 class="sp-card-title">Butuh Bantuan?</h2>
                <p class="sp-card-note mb-3">
                    Hubungi Petugas Aset jika ada kendala terkait peminjaman.
                </p>

                <div class="sp-small">
                    <strong>Helpdesk Sarpras</strong>
                    <br>
                    <span class="sp-muted">Ext. 402 / support@sepak kantor.id</span>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
