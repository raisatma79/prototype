@extends('app')
@section('title', $poliklinik->nama_poliklinik)
@section('content')
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Layanan</span>
          <h1 class="text-capitalize mb-5 text-lg">Rawat Jalan</h1>
            <ul class="list-inline breadcumb-nav">
				<li class="list-inline-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
				<li class="list-inline-item"><span class="text-white">/</span></li>
				<li class="list-inline-item"><a href="{{ route('rawat-jalan') }}" class="text-white">Rawat Jalan</a></li>
				<li class="list-inline-item"><span class="text-white">/</span></li>
				<li class="list-inline-item"><a href="{{ route('poli-detail', $poliklinik->id) }}" class="text-white-50">{{ $poliklinik->nama_poliklinik }}</a></li>
			</ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section department-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="department-img">
					<img src="{{ $poliklinik->gambar_poliklinik }}" alt="{{ $poliklinik->nama_poliklinik }}" class="img-fluid w-100 rounded" style="max-height: 450px; object-fit: cover;">
				</div>
			</div>
		</div>
        
		<div class="row">
			<div class="col-lg-8">
				<div class="department-content mt-5">
					<h3 class="text-md">{{ $poliklinik->nama_poliklinik }}</h3>
					<div class="divider my-4"></div>
					<p>{{ $poliklinik->deskripsi }}</p>
                        @foreach(explode("\n", $poliklinik->layanan) as $layanan)
                            @if(trim($layanan) != '')
                                <h3 class="mt-5 mb-4">{{ trim($layanan) }}</h3>
                                <div class="divider my-4"></div>
                                <ul class="list-unstyled department-service">
                                @foreach(explode("\n", $poliklinik->sub_layanan) as $sub_layanan)
                                    @if(trim($sub_layanan) != '')
                                        <li><i class="icofont-check mr-2"></i>{{ trim($sub_layanan) }}</li>
                                    @endif
                                @endforeach
                                </ul>
                            @endif
                        @endforeach
						@foreach(explode("\n", $poliklinik->layanan_2) as $layanan_2)
                            @if(trim($layanan_2) != '')
                                <h3 class="mt-5 mb-4">{{ trim($layanan_2) }}</h3>
                                <div class="divider my-4"></div>
                                <ul class="list-unstyled department-service">
                                @foreach(explode("\n", $poliklinik->sub_layanan_2) as $sub_layanan_2)
                                    @if(trim($sub_layanan_2) != '')
                                        <li><i class="icofont-check mr-2"></i>{{ trim($sub_layanan_2) }}</li>
                                    @endif
                                @endforeach
                                </ul>
                            @endif
                        @endforeach
						@foreach(explode("\n", $poliklinik->layanan_3) as $layanan_3)
                            @if(trim($layanan_3) != '')
                                <h3 class="mt-5 mb-4">{{ trim($layanan_3) }}</h3>
                                <div class="divider my-4"></div>
                                <ul class="list-unstyled department-service">
                                @foreach(explode("\n", $poliklinik->sub_layanan_3) as $sub_layanan_3)
                                    @if(trim($sub_layanan_3) != '')
                                        <li><i class="icofont-check mr-2"></i>{{ trim($sub_layanan_3) }}</li>
                                    @endif
                                @endforeach
                                </ul>
                            @endif
                        @endforeach
				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar-widget schedule-widget">
                    <h5 class="mb-4">Dokter {{ $poliklinik->nama_poliklinik }}</h5>
					<ul class="list-unstyled">
						<ul class="list-unstyled department-service">
                        @forelse($dokter as $spesialis)
							<li><i class="icofont-doctor mr-2"></i>{{ $spesialis->nama_dokter }}</li>
                        @empty
							<li>Data dokter tidak ditemukan</li>
                        @endforelse
                        </ul>
					</ul>

					<h5 class="mb-4">Jadwal {{ $poliklinik->nama_poliklinik }}</h5>
					<ul class="list-unstyled">
						<ul class="list-unstyled department-service">
						@foreach(explode("\n", $poliklinik->jadwal) as $jadwal)
							@if(trim($jadwal) !='')
							<li>{{ trim($jadwal) }}</li>
							@endif
						@endforeach
						</ul>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0">Hotline IGD 24 Jam</p>
						<h3>0821 4122 0002</h3>
						<p class="mb-0">Hotline Pendaftaran</p>
						<h3>0821-1112-8700</h3>
                        <p class="mb-0">Hotline Informasi</p>
						<h3>0813-9005-6000</h3>
                        <p class="mb-0">Call Center</p>
						<h3>(0352) 481273/485928</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection