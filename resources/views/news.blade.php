@extends('app')
@section('title', 'Berita Seputar RSU Muhammadiyah Ponorogo')
@section('content')
<section class="page-title bg-1">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<span class="text-white">Informasi</span>
					<h1 class="text-capitalize mb-5 text-lg">Berita</h1>
					<ul class="list-inline breadcumb-nav">
						<li class="list-inline-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
						<li class="list-inline-item"><span class="text-white">/</span></li>
						<li class="list-inline-item"><a href="{{ route('news') }}" class="text-white-50">Berita</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section service-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<div class="divider mx-auto my-4"></div>
					<p>Berita terkini seputar RSUMP</p>
				</div>
			</div>
		</div>

		<div class="row">
			@foreach($list_berita as $berita)
				<div class="col-lg-4 col-md-6">
					<div class="department-block mb-5">
						<!-- Menampilkan gambar dari database -->
						<img src="{{ $berita->gambar }}" alt="{{ $berita->judul }}" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
						
						<div class="content">
							<!-- Menampilkan nama ruang -->
							<h4 class="mt-4 mb-2 title-color">{{ $berita->judul }}</h4>
                            <i class="bi bi-calendar3 me-1 text-primary"></i> {{ $berita->date }}
							
							<!-- Link menuju ke halaman detail membawa ID kamar -->
							<a href="{{ route('news-detail', $berita->slug) }}" class="read-more col-lg-10">
								Selebihnya <i class="icofont-simple-right ml-2"></i>
							</a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
@endsection