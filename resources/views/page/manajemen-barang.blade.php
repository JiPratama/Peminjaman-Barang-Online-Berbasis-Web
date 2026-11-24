
@extends('Layout.navbar')

@section('navbar')
@include('Layout.sepak-style')

<div class="sepak-page">

    <div class="sp-page-head">
        <div>
            <div class="sp-eyebrow">Inventaris / Manajemen Barang</div>
            <h1 class="sp-title">Manajemen Barang</h1>
            <p class="sp-subtitle">Kelola data inventaris, jumlah, kondisi fisik, dan ketersediaan aset kantor.</p>
        </div>

        <div class="d-flex flex-wrap gap-2">
            <button type="button" class="sp-btn sp-btn-outline">⇩ Export Data</button>
            <button type="button" class="sp-btn sp-btn-primary">＋ Tambah Barang</button>
        </div>
    </div>

    <!-- Statistik -->
    <div class="sp-stat-grid">
        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">▣</div>
            <div>
                <div class="sp-stat-label">Total Barang</div>
                <div class="sp-stat-value">1.280</div>
                <div class="sp-stat-foot">Seluruh aset terdaftar</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">✓</div>
            <div>
                <div class="sp-stat-label">Barang Tersedia</div>
                <div class="sp-stat-value">1.040</div>
                <div class="sp-stat-foot">Siap untuk dipinjam</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">↗</div>
            <div>
                <div class="sp-stat-label">Dalam Penguasaan</div>
                <div class="sp-stat-value">180</div>
                <div class="sp-stat-foot">Sedang digunakan karyawan</div>
            </div>
        </div>

        <div class="sp-card sp-stat">
            <div class="sp-stat-icon">⚙</div>
            <div>
                <div class="sp-stat-label">Perlu Pemeriksaan</div>
                <div class="sp-stat-value">60</div>
                <div class="sp-stat-foot">Perawatan atau tidak tersedia</div>
            </div>
        </div>
    </div>

    <!-- Tabel Inventaris -->
    <div class="sp-card sp-card-pad">

        <div class="sp-toolbar">
            <div>
                <h2 class="sp-card-title">Daftar Inventaris</h2>
                <p class="sp-card-note">Data aset kantor beserta kode, kategori, kuantitas, dan statusnya.</p>
            </div>

            <div class="sp-toolbar-group">
                <input class="sp-input sp-search" type="search"
                    placeholder="⌕ Cari nama, kode, atau nomor seri...">

                <select class="sp-select" style="width:150px">
                    <option>Semua Kategori</option>
                    <option>Peralatan IT</option>
                    <option>Elektronik</option>
                    <option>Furnitur</option>
                </select>

                <select class="sp-select" style="width:145px">
                    <option>Semua Status</option>
                    <option>Tersedia</option>
                    <option>Tidak Tersedia</option>
                    <option>Dalam Penguasaan</option>
                    <option>Sedang Diajukan</option>
                </select>
            </div>
        </div>

        <div class="sp-table-wrap">
            <table class="sp-table">
                <thead>
                    <tr>
                        <th>Kode / Nomor Seri</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Kondisi</th>
                        <th>Status Ketersediaan</th>
                        <th>Tanggal Terdaftar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <strong>AST-00124</strong>
                            <div class="sp-item-code">SN: C02XK8JQ</div>
                        </td>
                        <td>
                            <div class="sp-item-name">Apple MacBook Pro 15”</div>
                            <div class="sp-item-code">Laptop kerja · 16 GB / 512 GB</div>
                        </td>
                        <td>Peralatan IT</td>
                        <td>8 Unit</td>
                        <td><span class="sp-badge sp-badge-green">● Baik</span></td>
                        <td><span class="sp-badge sp-badge-blue">Dalam Penguasaan</span></td>
                        <td>27 Mei 2026</td>
                        <td><button class="sp-btn sp-btn-outline sp-btn-sm" type="button">Detail ⋯</button></td>
                    </tr>

                    <tr>
                        <td>
                            <strong>AST-00125</strong>
                            <div class="sp-item-code">SN: IPD-0921-44</div>
                        </td>
                        <td>
                            <div class="sp-item-name">Apple iPad 9th Gen</div>
                            <div class="sp-item-code">Tablet · Wi-Fi 64 GB</div>
                        </td>
                        <td>Peralatan IT</td>
                        <td>12 Unit</td>
                        <td><span class="sp-badge sp-badge-green">● Baik</span></td>
                        <td><span class="sp-badge sp-badge-green">Tersedia</span></td>
                        <td>27 Mei 2026</td>
                        <td><button class="sp-btn sp-btn-outline sp-btn-sm" type="button">Detail ⋯</button></td>
                    </tr>

                    <tr>
                        <td>
                            <strong>AST-00126</strong>
                            <div class="sp-item-code">SN: EP-EBX-500-18</div>
                        </td>
                        <td>
                            <div class="sp-item-name">Proyektor Epson EB-X500</div>
                            <div class="sp-item-code">Proyektor ruang rapat</div>
                        </td>
                        <td>Elektronik</td>
                        <td>5 Unit</td>
                        <td><span class="sp-badge sp-badge-green">● Baik</span></td>
                        <td><span class="sp-badge sp-badge-yellow">Sedang Diajukan</span></td>
                        <td>02 Jun 2026</td>
                        <td><button class="sp-btn sp-btn-outline sp-btn-sm" type="button">Detail ⋯</button></td>
                    </tr>

                    <tr>
                        <td>
                            <strong>AST-00127</strong>
                            <div class="sp-item-code">SN: CN-80D-0308</div>
                        </td>
                        <td>
                            <div class="sp-item-name">Kamera Canon EOS 80D</div>
                            <div class="sp-item-code">Kamera dokumentasi</div>
                        </td>
                        <td>Elektronik</td>
                        <td>3 Unit</td>
                        <td><span class="sp-badge sp-badge-yellow">Perlu Cek</span></td>
                        <td><span class="sp-badge sp-badge-red">Tidak Tersedia</span></td>
                        <td>14 Jun 2026</td>
                        <td><button class="sp-btn sp-btn-outline sp-btn-sm" type="button">Detail ⋯</button></td>
                    </tr>

                    <tr>
                        <td>
                            <strong>AST-00128</strong>
                            <div class="sp-item-code">SN: FUR-ERG-020</div>
                        </td>
                        <td>
                            <div class="sp-item-name">Kursi Ergonomis Kantor</div>
                            <div class="sp-item-code">Kursi kerja · adjustable</div>
                        </td>
                        <td>Furnitur</td>
                        <td>25 Unit</td>
                        <td><span class="sp-badge sp-badge-green">● Baik</span></td>
                        <td><span class="sp-badge sp-badge-green">Tersedia</span></td>
                        <td>18 Jun 2026</td>
                        <td><button class="sp-btn sp-btn-outline sp-btn-sm" type="button">Detail ⋯</button></td>
                    </tr>

                    <tr>
                        <td>
                            <strong>AST-00129</strong>
                            <div class="sp-item-code">SN: LEN-TH-091</div>
                        </td>
                        <td>
                            <div class="sp-item-name">Lenovo ThinkPad T14 Gen 3</div>
                            <div class="sp-item-code">Laptop kerja · Core i7</div>
                        </td>
                        <td>Peralatan IT</td>
                        <td>6 Unit</td>
                        <td><span class="sp-badge sp-badge-green">● Baik</span></td>
                        <td><span class="sp-badge sp-badge-green">Tersedia</span></td>
                        <td>06 Jul 2026</td>
                        <td><button class="sp-btn sp-btn-outline sp-btn-sm" type="button">Detail ⋯</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mt-3">
            <span class="sp-small sp-muted">Menampilkan 6 dari 1.280 barang</span>

            <div class="d-flex gap-1">
                <button class="sp-btn sp-btn-outline sp-btn-sm">‹</button>
                <button class="sp-btn sp-btn-primary sp-btn-sm">1</button>
                <button class="sp-btn sp-btn-outline sp-btn-sm">2</button>
                <button class="sp-btn sp-btn-outline sp-btn-sm">3</button>
                <button class="sp-btn sp-btn-outline sp-btn-sm">›</button>
            </div>
        </div>
    </div>

</div>
@endsection
