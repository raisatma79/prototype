@extends('app')
@section('title', 'Konsultasi Online')
@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="block text-center">
            <span class="text-white">Dokter</span>
            <h1 class="text-capitalize mb-5 text-lg">Konsultasi Online</h1>
            <ul class="list-inline breadcumb-nav">
                <li class="list-inline-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                <li class="list-inline-item"><span class="text-white">/</span></li>
                <li class="list-inline-item"><a href="{{ route('consultation') }}" class="text-white-50">Konsultasi Online</a></li>
            </ul>
            </div>
        </div>
        </div>
    </div>
</section>

<!-- Main Sectionr -->
<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<img src="images/about/Screenshot (70).png" alt="" class="img-fluid">
					<div class="emergency">
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+081390056000</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">Konsultasi Online</h2>
					<p class="mb-4">Sampaikan keluhan atau pertanyaan mengenai kesehatan. Kami akan menjawab keluhan Anda langsung melalui gadget Anda</p>
					@if(session('status'))
						<div class="alert laert-success">
							{{ session('status') }}
						</div>
					@endif
					<form id="consultation" name="consultation" class="form-konsultasi" method="post" action="{{ route('consultation.store') }}">
						@csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="nama_pengirim" id="nama_pengirim" type="text" class="form-control" placeholder="Nama Anda" value="{{ old('nama_pengirim') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" type="text" class="form-control" placeholder="Emailanda@gmail.com" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="alamat" id="alamat" type="text" class="form-control" placeholder="Jl.Nama Alamat No.12" value="{{ old('alamat') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="nomor_telepon" id="nomor_telepon" type="Number" class="form-control" placeholder="081234567891" value="{{ old('nomor_telepon') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="keluhan" id="keluhan" class="form-control" rows="6" placeholder="Keluhan atau pertanyaan anda">{{ old('keluhan') }}</textarea>
                    </div>
					<div class="cf-turnstile" data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}" data-action="turnstile-spin-v2"></div>
						<button type="submit" class="btn btn-primary">Submit</button>
                	</form>
            	</div>
			</div>
		</div>
	</div>
</section>
@endsection