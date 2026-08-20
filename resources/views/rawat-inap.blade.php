@extends('app')
@section('title', 'RSU Muhammadiyah Ponorogo')
@section('content')
<section class="page-title bg-1">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<span class="text-white">Layanan</span>
					<h1 class="text-capitalize mb-5 text-lg">Rawat Inap</h1>
					<ul class="list-inline breadcumb-nav">
						<li class="list-inline-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
						<li class="list-inline-item"><span class="text-white">/</span></li>
						<li class="list-inline-item"><a href="{{ route('rawat-inap') }}" class="text-white-50">Rawat Inap</a></li>
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
					<p>Instalasi Rawat Inap RSU Muhammadiyah Ponorogo memiliki 151 TT dengan ruang perawatan.</p>
					<div class="divider mx-auto my-4"></div>
				</div>
			</div>
		</div>

		<div class="row">
			@foreach($ruangList as $ruang)
				<div class="col-lg-4 col-md-6">
					<div class="department-block mb-5">
						<!-- Menampilkan gambar dari database -->
						<a href="{{ route('ruang-detail', $ruang->id) }}"><img src="{{ $ruang->gambar_kamar }}" alt="{{ $ruang->nama_ruang }}" class="img-fluid w-100" style="height: 250px; object-fit: cover;"></a>
						
						<div class="content">
							<!-- Menampilkan nama ruang -->
							<h4 class="mt-4 mb-2 title-color"><a href="{{ route('ruang-detail', $ruang->id) }}" class="read-more">{{ $ruang->nama_ruang }}</a></h4>
							
							<!-- Link menuju ke halaman detail membawa ID kamar -->
							<a href="{{ route('ruang-detail', $ruang->id) }}" class="read-more">
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