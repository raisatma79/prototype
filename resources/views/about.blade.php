@extends('app')
@section('title', 'Tentang Kami')
@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="block text-center">
            <span class="text-white">Profil RSUMP</span>
            <h1 class="text-capitalize mb-5 text-lg">Profil RSU Muhammadiyah Ponorogo</h1>
            <ul class="list-inline breadcumb-nav">
                <li class="list-inline-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                <li class="list-inline-item"><span class="text-white">/</span></li>
                <li class="list-inline-item"><a href="{{ route('about') }}" class="text-white-50">Profil</a></li>
            </ul>
            </div>
        </div>
        </div>
    </div>
</section>

<!-- Section Detail Profil (Sidebar + Content converted to Bootstrap 5) -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4">
            <!-- Sidebar Navigation Left -->
            <div class="col-md-4 col-lg-3">
                <div class="sticky-top" style="top: 100px;">
                    <nav class="nav flex-column fw-semibold fs-5 space-y-2">
                        <a href="#sejarah" class="nav-link text-secondary px-0 hover-primary">Sejarah</a>
                        <a href="#visi-misi" class="nav-link text-secondary px-0 hover-primary">Visi, Misi, Tujuan, & Motto</a>
                        <a href="#makna-logo" class="nav-link text-secondary px-0 hover-primary">Struktur Organisasi</a>
                    </nav>
                </div>
            </div>

            <div class="col-md-8 col-lg-9 border-start ps-md-4">
                <hr class="my-5">

                <!-- Section 1: Sejarah -->
                <div id="sejarah" class="mb-5" style="scroll-margin-top: 100px;">
                    <h2 class="fw-bold text-dark">Sejarah RSU Muhammadiyah Ponorogo</h2>
                    <div class="bg-warning rounded my-3" style="width: 50px; height: 4px;"></div>

                    <div class="mb-4">
                        <h4 class="fw-bold text-dark mb-2">Tahun 1962</h4>
                        <p class="text-muted">RSU Muhammadiyah Ponorogo masih berbentuk Rumah Bersalin Aisyiyah dan Baru mendapat ijin resmi di tahun 1992 dari Kanwil Depkes Jatim beserta ijin tetap Penyelenggaraan Balai Pengobatan dan Balai Kesehatan Ibu dan Anak (BKIA) di tahun yang sama.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="fw-bold text-dark mb-2">Tahun 2002 RS 'Aisyiyah Diponegoro</h4>
                        <p class="text-muted">Di tahun 2002 atas berkat Allah SWT dan usaha pantang menyerah RS mendapat ijin dari MenKes untuk penyelenggaraan RS Aisyiyah Diponegoro.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="fw-bold text-dark mb-2">Tahun 2011 Terakreditasi</h4>
                        <p class="text-muted">Lulus dengan status terakreditasi 5 Layanan.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="fw-bold text-dark mb-2">Tahun 2014 Perubahan Nama</h4>
                        <p class="text-muted">RSU Aisyiyah Diponegoro berubah menjadi RSU Muhammadiyah Ponorogo.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="fw-bold text-dark mb-2">Tahun 2016 Terakreditasi</h4>
                        <p class="text-muted">Lulus akreditasi RS versi 2012 tingkat PARIPURNA.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="fw-bold text-dark mb-2">Tahun 2019 Terakreditasi</h4>
                        <p class="text-muted">Lulus akreditasi RS tingkat PARIPURNA : SNARS Edisi 1.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="fw-bold text-dark mb-2">Tahun 2022 Terakreditasi</h4>
                        <p class="text-muted">Lulus akreditasi RS versi LARSI tingkat PARIPURNA.</p>
                    </div>
                    <div class="mb-4">
                        <h4 class="fw-bold text-dark mb-2">Tahun 2025 Terareditasi</h4>
                        <p class="text-muted">Lulus akreditasi SIRSMA (Standart Islami Rumah Sakit Muhammadiyah 'Aisyiyah') dengan predikat ISTIMEWA Bintang 5.</p>
                    </div>
                </div>

                <hr class="my-5">

                <!-- Section 2: Visi Misi -->
                <div id="visi-misi" class="mb-5" style="scroll-margin-top: 100px;">
                    <h2 class="fw-bold text-dark">Visi, Misi, Tujuan, dan Strategi</h2>
                    <div class="bg-warning rounded my-3" style="width: 50px; height: 4px;"></div>

                    <div class="mb-4">
                        <h4 class="fw-bold text-dark mb-2">Visi</h4>
                        <p class="text-muted">Terwujudnya Rumah Sakit Yang Islami, Unggul Menjadi Pilihan Masyarakat.</p>
                    </div>

                    <div class="mb-4">
                        <h4 class="fw-bold text-dark mb-2">Misi</h4>
                        <ol class="text-muted ps-3">
                            <li class="mb-2">Meningkatkan Ilmu Pengetahuan dan Teknologi serta Iman dan Taqwa Sumber Daya Insani Rumah Sakit.</li>
                            <li class="mb-2">Meningkatkan Kualitas dan Kuantitas Sarana dan Prasarana Rumah Sakit.</li>
                            <li class="mb-2">Meningkatkan Mutu Pelayanan Kesehatan Yang Berorientasi Pada Kebutuhan dan Keselamatan Pasien.</li>
                            <li class="mb-2">Menyelenggarakan Pelayanan Kesehatan Prima Yang Memberikan Kepastian Hukum Bagi Semua.</li>
                            <li class="mb-2">Memberikan Kontribusi Sosial Dalam Pendidikan dan Pelatihan Kesehatan.</li>
                        </ol>
                    </div>

                    <div class="mb-4">
                        <h4 class="fw-bold text-dark mb-2">Tujuan</h4>
                        <ol class="text-muted ps-3">
                            <li class="mb-2">Mempermudah Akses Masyarakat Untuk Mendapatkan Pelayanan Kesehatan.</li>
                            <li class="mb-2">Menghasilkan mutu pelayanan berkualitas secara berkelanjutan.</li>
                            <li class="mb-2">Meningkatkan Mutu Dan Mempertahankan Standar Pelayanan Rumah Sakit.</li>
                            <li class="mb-2">Mmeberikan Kepastian Hukum Kepada Pasien, Masyarakat, Sumber Daya Manusia Rumah Sakit, Dan Rumah Sakit.</li>
                            <li class="mb-2">Memberikan Pelayanan Kesehatan Yang Islami Sebagai Sarana Ibadah Dan Dakwah.</li>
                        </ol>
                    </div>

                    <div class="mb-4">
                        <h4 class="fw-bold text-dark mb-2">Motto</h4>
                        <p class="text-muted">MANIS "Mudah, Nyaman, Islami"</p>
                    </div>
                </div>

                <hr class="my-5">

                <!-- Section 3: Makna Logo -->
                <div id="makna-logo" class="mb-5" style="scroll-margin-top: 100px;">
                    <h2 class="fw-bold text-dark">Struktur Organisasi</h2>
                    <div class="bg-warning rounded my-3" style="width: 50px; height: 4px;"></div>
                    <img src="https://rsumponorogo.com/images/profil/so%20rsum.jpg" alt="RSUMP Logo" class="img-fluid" style="w-100 h-100 object-fit: contain;">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection