@extends('app')
@section('title', 'Fasilitas & Penunjang Medis')
@section('content')
<section class="page-title bg-1">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
				<span class="text-white">Layanan</span>
				<h1 class="text-capitalize mb-5 text-lg">Fasilitas & Penunjang Medis</h1>
				<ul class="list-inline breadcumb-nav">
					<li class="list-inline-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
					<li class="list-inline-item"><span class="text-white">/</span></li>
					<li class="list-inline-item"><a href="{{ route('service') }}" class="text-white-50">Fasilitas & Penunjang Medis</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section service-2">
	<div class="container">
		<div class="row">
			@foreach($fasilitas as $item)
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="{{ $item->gambar }}" alt="{{ $item->nama_fasilitas }}" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">{{ $item->nama_fasilitas }}</h4>
						<p class="mb-4">{{ $item->deskripsi }}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection