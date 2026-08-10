@extends('app')
@section('title', $ruang->nama_ruang)
@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Laynan</span>
                    <h1 class="text-capitalize mb-5 text-lg">Rawat Inap</h1>
                    <ul class="list-inline breadcumb-nav">
                        <li class="list-inline-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="{{ route('rawat-inap') }}" class="text-white">Rawat Inap</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="{{ route('ruang-detail', $ruang->id) }}" class="text-white-50">{{ $ruang->nama_ruang }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Detail Profil -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4">
            
            <!-- Sidebar Left: Daftar Semua Kamar -->
            <div class="col-md-4 col-lg-3">
                <div class="sticky-top" style="top: 100px;">
                    <h5 class="mb-3 text-dark font-weight-bold">Daftar Kamar Inap</h5>
                    <nav class="nav flex-column space-y-2">
                        @foreach($semuaRuang as $item)
                            <a href="{{ route('ruang-detail', $item->id) }}" 
                               class="nav-link px-0 {{ $item->id == $ruang->id ? 'text-primary font-weight-bold' : 'text-secondary' }}">
                                {{ $item->nama_ruang }}
                            </a>
                        @endforeach
                    </nav>
                </div>
            </div>

            <!-- Content Area Right: Detail Kamar yang Diklik -->
            <div class="col-md-8 col-lg-9 border-start ps-md-4">
                <section class="section department-single pt-0">
                    <div class="container">
                        <!-- Gambar Kamar -->
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="{{ $ruang->gambar_kamar }}" class="img-fluid w-100 rounded" alt="{{ $ruang->nama_ruang }}" style="max-height: 450px; object-fit: cover;">
                            </div>
                        </div>

                        <div class="row">
                            <!-- Deskripsi & Fasilitas -->
                            <div class="col-lg-8">
                                <div class="department-content mt-5">
                                    <h3 class="text-md">{{ $ruang->nama_ruang }}</h3>
                                    <div class="divider my-4"></div>

                                    <h4 class="mt-4 mb-3">Fasilitas Kamar</h4>
                                    <!-- Memecah teks fasilitas berdasarkan baris/enter -->
                                    <ul class="text-muted ps-3">
                                        @foreach(explode("\n", $ruang->fasilitas) as $fasilitas)
                                            @if(trim($fasilitas) != '')
                                                <li class="mb-2">{{ trim($fasilitas) }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!-- Harga & Contact Info -->
                            <div class="col-lg-4">
                                <div class="sidebar-widget schedule-widget mt-5 p-4 bg-light rounded">
                                    <h5 class="mb-3">Tarif Per Hari</h5>
                                    <h3 class="text-primary font-weight-bold mb-4">{{ $ruang->harga }}</h3>

                                    <div class="sidebar-contatct-info border-top pt-3 mt-4">
                                        <p class="mb-0 text-muted">Hotline Pendaftaran</p>
                                        <h5 class="font-weight-bold">0821-1112-8700</h5>
                                        
                                        <p class="mb-0 text-muted mt-3">Hotline Informasi</p>
                                        <h5 class="font-weight-bold">0813-9005-6000</h5>
                                        
                                        <p class="mb-0 text-muted mt-3">Call Center</p>
                                        <h5 class="font-weight-bold">(0352) 481273</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</section>
@endsection