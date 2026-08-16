@extends('app')
@section('title', 'Alur Pendaftaran Pasien')
@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Informasi</span>
                    <h1 class="text-capitalize mb-5 text-lg">Alur Pendaftaran Pasien</h1>
                    <ul class="list-inline breadcumb-nav">
                        <li class="list-inline-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="{{ route('information') }}" class="text-white-50">Alur Pendaftaran Pasien</a></li>
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
            <div class="col-md-4 col-lg-3 d-none d-md-block">
                <div class="sticky-top" style="top: 100px;">
                    <nav class="nav flex-column fw-semibold fs-5 space-y-2">
                        <a href="#igd" class="nav-link text-secondary px-0 hover-primary">Alur Pelayanan IGD</a>
                        <a href="#rawat-jalan" class="nav-link text-secondary px-0 hover-primary">Alur Pelayanan Rawat Jalan/Poliklinik</a>
                        <a href="#laka" class="nav-link text-secondary px-0 hover-primary">Alur Penjaminan Kasus Kecelakaan Lalu Lintas</a>
                        <a href="#rawat-inap" class="nav-link text-secondary px-0 hover-primary">Alur Pelayanan Rawat Inap</a>
                    </nav>
                </div>
            </div>

            <div class="col-md-8 col-lg-9 border-start ps-md-4">
                <hr class="my-5">

                <!-- Section 1: IGD -->
                <div id="igd" class="mb-5" style="scroll-margin-top: 100px;">
                    <h2 class="fw-bold text-dark">Alur Pelayanan IGD</h2>
                    <div class="bg-warning rounded my-3" style="width: 50px; height: 4px;"></div>
                    <img src="https://rsumponorogo.com/images/info/2.%20Company%20Profile%20RSUM_page-0027.jpg" alt="RSUMP Logo" class="img-fluid" style="w-100 h-100 object-fit: contain;">
                </div>

                <hr class="my-5">

                <!-- Section 2: Rawat Jalan -->
                <div id="rawat-jalan" class="mb-5" style="scroll-margin-top: 100px;">
                    <h2 class="fw-bold text-dark">Alur Pelayanan Rawat Jalan/Poliklinik</h2>
                    <div class="bg-warning rounded my-3" style="width: 50px; height: 4px;"></div>
                    <img src="https://rsumponorogo.com/images/info/33.jpg" alt="RSUMP Logo" class="img-fluid" style="w-100 h-100 object-fit: contain;">
                </div>

                <hr class="my-5">

                <!-- Section 3: Laka -->
                <div id="laka" class="mb-5" style="scroll-margin-top: 100px;">
                    <h2 class="fw-bold text-dark">Alur Penjaminan Kasus Kecelakaan Lalu Lintas</h2>
                    <div class="bg-warning rounded my-3" style="width: 50px; height: 4px;"></div>
                    <img src="https://rsumponorogo.com/images/info/2.%20Company%20Profile%20RSUM_page-0007.jpg" alt="RSUMP Logo" class="img-fluid" style="w-100 h-100 object-fit: contain;">
                </div>

                <hr class="my-5">

                <!-- Section 4: RAWAT INAP -->
                <div id="rawat-inap" class="mb-5" style="scroll-margin-top: 100px;">
                    <h2 class="fw-bold text-dark">Alur Pelayanan Rawat Inap</h2>
                    <div class="bg-warning rounded my-3" style="width: 50px; height: 4px;"></div>
                    <img src="https://rsumponorogo.com/images/info/2.%20Company%20Profile%20RSUM_page-0028.jpg" alt="RSUMP Logo" class="img-fluid" style="w-100 h-100 object-fit: contain;">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection