
@extends('Layout.navbar')

@section('navbar')
@include('Layout.sepak-style')

<div class="sepak-page">

    <div class="sp-page-head">
        <div>
            <div class="sp-eyebrow">Inventaris / Pengembalian</div>
            <h1 class="sp-title">Pengembalian Barang</h1>
            <p class="sp-subtitle">
                Periksa kondisi fisik, kelengkapan aksesori, dan catat serah terima inventaris.
            </p>
        </div>

        <button type="button" class="sp-btn sp-btn-outline">
            ▤ Riwayat Pengembalian
        </button>
    </div>

    <!-- Statistik -->
    <div class="sp-stat-grid">

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">▣</div>
            <div>
                <div class="sp-stat-label">Barang Menunggu Kembali</div>
                <div class="sp-stat-value">14</div>
                <div class="sp-stat-foot">Dalam proses pengembalian</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">◷</div>
            <div>
                <div class="sp-stat-label">Jadwal Hari Ini</div>
                <div class="sp-stat-value">04</div>
                <div class="sp-stat-foot">Perlu pemeriksaan</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">✓</div>
            <div>
                <div class="sp-stat-label">Selesai Diverifikasi</div>
                <div class="sp-stat-value">09</div>
                <div class="sp-stat-foot">Bulan ini</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">!</div>
            <div>
                <div class="sp-stat-label">Perlu Tindak Lanjut</div>
                <div class="sp-stat-value">01</div>
                <div class="sp-stat-foot">Ada catatan kondisi barang</div>
            </div>
        </div>

    </div>

    <div class="sp-two-col">

        <!-- Daftar Pengembalian -->
        <div class="sp-card sp-card-pad">

            <div class="sp-toolbar">

                <div>
                    <h2 class="sp-card-title">Daftar Pengembalian</h2>
                    <p class="sp-card-note">
                        Pilih transaksi untuk melakukan inspeksi dan verifikasi barang.
                    </p>
                </div>

                <div class="sp-toolbar-group">
                    <input class="sp-input" style="min-width:190px"
                        type="search" placeholder="Cari peminjam / kode...">

                    <select class="sp-select" style="width:130px">
                        <option>Semua Status</option>
                        <option>Menunggu</option>
                        <option>Perlu Verifikasi</option>
                    </select>
                </div>

            </div>

            <div class="sp-table-wrap">

                <table class="sp-table" style="min-width:570px">

                    <thead>
                        <tr>
                            <th>ID Pinjam & Peminjam</th>
                            <th>Barang</th>
                            <th>Tenggat / Tgl. Kembali</th>
                            <th>Status & Kondisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr style="background:#f8faff">
                            <td>
                                <strong>REG-0508</strong>
                                <div class="sp-item-code">Ayu Anisa Pratama</div>
                            </td>

                            <td>
                                <div class="sp-item-name">Apple MacBook Pro 15”</div>
                                <div class="sp-item-code">1 unit · AST-00124</div>
                            </td>

                            <td>
                                25 Nov 2026
                                <div class="sp-item-code">10.00 WIB</div>
                            </td>

                            <td>
                                <span class="sp-badge sp-badge-blue">Siap Inspeksi</span>
                                <div class="sp-item-code">Kondisi belum dinilai</div>
                            </td>

                            <td>
                                <button class="sp-btn sp-btn-primary sp-btn-sm" type="button">
                                    Pilih
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>REG-0504</strong>
                                <div class="sp-item-code">Rofid Kamaludin</div>
                            </td>

                            <td>
                                <div class="sp-item-name">Proyektor Epson EB-X500</div>
                                <div class="sp-item-code">1 unit · AST-00126</div>
                            </td>

                            <td>
                                26 Nov 2026
                                <div class="sp-item-code">13.00 WIB</div>
                            </td>

                            <td>
                                <span class="sp-badge sp-badge-yellow">Menunggu</span>
                                <div class="sp-item-code">Belum diperiksa</div>
                            </td>

                            <td>
                                <button class="sp-btn sp-btn-outline sp-btn-sm" type="button">
                                    Pilih
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>REG-0502</strong>
                                <div class="sp-item-code">Hanif Ibrahim</div>
                            </td>

                            <td>
                                <div class="sp-item-name">Sony Alpha A7 III Kit</div>
                                <div class="sp-item-code">1 unit · AST-00127</div>
                            </td>

                            <td>
                                23 Nov 2026
                                <div class="sp-item-code">Terlambat 1 hari</div>
                            </td>

                            <td>
                                <span class="sp-badge sp-badge-red">Perlu Verifikasi</span>
                                <div class="sp-item-code">Ada catatan petugas</div>
                            </td>

                            <td>
                                <button class="sp-btn sp-btn-outline sp-btn-sm" type="button">
                                    Pilih
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>REG-0501</strong>
                                <div class="sp-item-code">Muzhaffar Fakih</div>
                            </td>

                            <td>
                                <div class="sp-item-name">Lenovo ThinkPad T14 Gen 3</div>
                                <div class="sp-item-code">1 unit · AST-00129</div>
                            </td>

                            <td>
                                22 Nov 2026
                                <div class="sp-item-code">09.30 WIB</div>
                            </td>

                            <td>
                                <span class="sp-badge sp-badge-green">Terverifikasi</span>
                                <div class="sp-item-code">Kondisi normal</div>
                            </td>

                            <td>
                                <button class="sp-btn sp-btn-outline sp-btn-sm" type="button">
                                    Detail
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <div class="d-flex flex-wrap justify-content-between gap-2 mt-3">
                <span class="sp-small sp-muted">Menampilkan 4 dari 14 barang</span>
                <span class="sp-small sp-muted">
                    Terakhir diperbarui: 24 Nov 2026, 13.00 WIB
                </span>
            </div>

        </div>

        <!-- Checklist Inspeksi -->
        <div class="d-flex flex-column gap-3">

            <div class="sp-card sp-card-pad">

                <div class="d-flex justify-content-between align-items-center">

                    <div>
                        <h2 class="sp-card-title">Checklist Kelayakan Barang</h2>
                        <p class="sp-card-note">REG-0508 · Apple MacBook Pro 15”</p>
                    </div>

                    <span class="sp-badge sp-badge-blue">Inspeksi</span>

                </div>

                <div class="sp-small sp-muted mt-3">
                    Peminjam: <strong>Ayu Anisa Pratama</strong>
                </div>

                <div class="sp-small sp-muted">
                    Tanggal kembali: <strong>25 Nov 2026</strong>
                </div>

                <hr class="sp-divider">

                <label class="sp-label">Pemeriksaan Kelengkapan</label>

                <label class="sp-check">
                    <input type="checkbox">
                    Perangkat utama / unit laptop lengkap
                </label>

                <label class="sp-check">
                    <input type="checkbox">
                    Adaptor dan kabel daya tersedia
                </label>

                <label class="sp-check">
                    <input type="checkbox">
                    Tas atau pelindung bawaan tersedia
                </label>

                <label class="sp-check">
                    <input type="checkbox">
                    Tidak terdapat kerusakan fisik yang terlihat
                </label>

                <label class="sp-check">
                    <input type="checkbox">
                    Perangkat dapat dinyalakan dengan normal
                </label>

                <hr class="sp-divider">

                <label class="sp-label">Catatan Hasil Pemeriksaan</label>

                <textarea class="sp-textarea" rows="3"
                    placeholder="Tuliskan kondisi barang atau catatan kerusakan jika ada..."></textarea>

                <div class="sp-field mt-3 mb-0">
                    <label class="sp-label">Kondisi Akhir</label>

                    <select class="sp-select">
                        <option>Pilih kondisi barang</option>
                        <option>Baik</option>
                        <option>Perlu Perawatan</option>
                        <option>Rusak</option>
                    </select>
                </div>

            </div>

            <!-- Dokumentasi -->
            <div class="sp-card sp-card-pad">

                <h2 class="sp-card-title">Foto Kondisi Fisik Saat Kembali</h2>
                <p class="sp-card-note mb-3">
                    Dokumentasikan barang sebagai bukti pemeriksaan.
                </p>

                <div class="row g-2">

                    <div class="col-6">
                        <div class="sp-photo-placeholder">
                            ＋<br>
                            Foto tampak depan
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="sp-photo-placeholder">
                            ＋<br>
                            Foto kelengkapan
                        </div>
                    </div>

                </div>

                <div class="sp-field mt-3 mb-0">
                    <label class="sp-label">
                        Berita Acara Serah Terima (BAST)
                    </label>

                    <input class="sp-input"
                        placeholder="Nomor BAST / referensi dokumen">
                </div>

                <button type="button" class="sp-btn sp-btn-primary w-100 mt-3">
                    Simpan Verifikasi Pengembalian
                </button>

                <p class="sp-help text-center">
                    Setelah diverifikasi, status barang dan kuota pinjaman akan diperbarui.
                </p>

            </div>

        </div>

    </div>

</div>
@endsection
