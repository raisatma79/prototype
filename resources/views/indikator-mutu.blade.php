@extends('app')
@section('title', 'Indikator Mutu')
@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Tentang Kami</span>
                    <h1 class="text-capitalize mb-5 text-lg">Indikator Mutu</h1>
                    <ul class="list-inline breadcumb-nav">
                        <li class="list-inline-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="{{ route('indikator-mutu') }}" class="text-white-50">Indikator Mutu</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Detail Profil (Sidebar + Content converted to Bootstrap 5 Tabs) -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4">
            
            <!-- Sidebar Navigation Left -->
            <div class="col-md-4 col-lg-3">
                <div class="sticky-top" style="top: 100px;">
                    <!-- Bootstrap Nav Pills -->
                    <div class="nav flex-column nav-pills me-3 space-y-2 d-none d-md-block" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        @foreach($tabel_indikator_mutu as $tahun => $items)
                            <button class="btn btn-outline-info text-start fw-semibold fs-5 text-dark hover-primary my-1 {{ $loop->first ? 'active' : '' }}" id="v-pills-{{ $tahun }}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-{{ $tahun }}" type="button" role="tab" aria-controls="v-pills-{{ $tahun }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                Indikator Mutu Tahun {{ $tahun }}
                            </button>
                        @endforeach
                    </div>
                    <!-- Tampilan mobile -->
                    <div class="btn-group d-md-none" id="v-pills-tab" role="tablist" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expended="false">
                            Pilih Tahun
                        </button>
                        <ul class="dropdown-menu">
                            @foreach($tabel_indikator_mutu as $tahun => $items)
                                <li><a class="dropdon-item {{ $loop->first ? 'active' : '' }}" id="v-pills-{{ $tahun }}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-{{ $tahun }}" role="tab" aria-controls="v-pills-{{ $tahun }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}" href="">Tahun {{ $tahun }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Content Right -->
            <div class="col-md-8 col-lg-9 border-start ps-md-4">
                <!-- Bootstrap Tab Content -->
                <div class="tab-content" id="v-pills-tabContent" style="scroll-margin-top: 100px;">
                    
                    @foreach($tabel_indikator_mutu as $tahun => $items)
                        <!-- Tab Pane untuk masing-masing tahun -->
                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="v-pills-{{ $tahun }}" role="tabpanel" aria-labelledby="v-pills-{{ $tahun }}-tab" tabindex="0">
                            
                            <!-- Looping data indikator mutu di dalam tahun tersebut -->
                            @foreach($items as $item)
                                <div class="mb-5">
                                    <h2 class="fw-bold text-dark fs-3">{{ $item->aspek }}</h2>
                                    <div class="bg-warning rounded my-3" style="width: 50px; height: 4px;"></div>
                                    
                                    <div class="mb-4 text-center bg-light rounded p-3">
                                        <img src="{{ $item->gambar }}" alt="{{ $item->aspek }}" class="img-fluid" style="max-height: 400px; object-fit: contain;">
                                    </div>

                                    <div class="mb-4">
                                        <p class="text-muted lh-lg">{{ $item->deskripsi }}</p>
                                    </div>
                                </div>
                                
                                <!-- Garis pemisah antar indikator dalam tahun yang sama (kecuali item terakhir) -->
                                @if(!$loop->last)
                                    <hr class="my-5 text-muted opacity-25">
                                @endif
                            @endforeach
                        </div>
                    @endforeach
                </div>   
            </div>
        </div>
    </div>
</section>
@endsection