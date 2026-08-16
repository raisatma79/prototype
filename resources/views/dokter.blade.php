@extends('app')
@section('title', 'Dokter RSU Muhammadiyah Ponorogo')
@section('content')
<section class="page-title bg-1">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
		<div class="col-md-12">
			<div class="block text-center">
			<span class="text-white">Dokter</span>
			<h1 class="text-capitalize mb-5 text-lg">Dokter Spesialis</h1>
			<ul class="list-inline breadcumb-nav">
				<li class="list-inline-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
				<li class="list-inline-item"><span class="text-white">/</span></li>
				<li class="list-inline-item"><a href="{{ route('dokter') }}" class="text-white-50">Dokter</a></li>
			</ul>
			</div>
		</div>
		</div>
	</div>
</section>

<section class="section doctors">
    <div class="container">
        <!-- Judul Halaman -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-6">
                <h2 class="fw-bold text-capitalize">Dokter Spesialis</h2>
                <div class="divider mx-auto my-3" style="width: 50px; height: 3px; background-color: #17b99a;"></div>
                <p class="text-muted">RSU Muhammadiyah Ponorogo Memiliki Tenaga Kesehatan yang Ahli dan Berpengalaman</p>
                
                <!-- SEARCH BAR Dokter -->
                <div class="input-group mt-4 shadow-sm rounded-pill overflow-hidden border">
                    <span class="input-group-text bg-white border-0 ps-4"><i class="bi bi-search text-muted"></i></span>
                    <input type="text" id="searchDoctor" class="form-control border-0 py-3 shadow-none" placeholder="Cari nama dokter atau spesialis..." autocomplete="off">
                </div>      
            </div>
        </div>

        <!-- Grid Card Dokter -->
        <div class="row g-4 justify-content-center" id="doctorContainer">
			@forelse($tabel_dokter as $dokter)
            <!-- Card Dokter 1 -->
            <div class="col-xl-3 col-lg-4 col-md-6 doctor-item">
                <div class="card h-100 shadow-sm doctor-card text-center overflow-hidden">
                    <!-- Foto Dokter dengan Latar Toska -->
                    <div class="object-fit-none border rounded">
                        <img src="{{ $dokter->gambar_dokter }}" alt="{{ $dokter->nama_dokter }}">
                    </div>
                    
                    <!-- Konten Card -->
                    <div class="card-body p-4 d-flex flex-column justify-content-between">
                        <div>
                            <!-- Nama Dokter -->
                            <h5 class="fw-bold doctor-name mb-2">
                                {{$dokter->nama_dokter}}
                            </h5>
                            
                            <!-- Badge Klinik / Spesialisasi -->
                            <div class="mb-3">
                                <span class="badge rounded-pill doctor-badge px-3 py-2 doctor-specialist">
                                    {{ $dokter->spesialis }}
                                </span>
                            </div>
                        </div>

                        <!-- Tombol Aksi (Mengarahkan ke Halaman Schedule) -->
                        <div class="mt-auto">
                            <a href="{{ route('schedule', ['search' =>$dokter->nama_dokter]) }}" class="btn btn-doctor-action rounded-pill px-4 py-2 w-100">
                                Lihat Jadwal <i class="bi bi-chevron-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
			@empty
                <div class="col-12 text-center py-5">
                    <cp class="text-muted">Data dokter belum tersedia</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection