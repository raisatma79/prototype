@extends('app')
@section('title', $article->judul)
@section('content')

    <div class="container my-5">
    <div class="row g-4">
        <!-- Main Article Content (Sisi Kiri) -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                
                <span class="btn btn-main text-white mb-2 px-3 py-2 align-self-start text-uppercase fw-bold" style="font-size: 11px;">
                    {{ $article->tipe}}
                </span>
                
                <h2 class="fw-bold text-dark mb-2 leading-snug">{{ $article['judul'] }}</h2>
                <p class="text-muted fs-7 mb-4">
                    <i class="bi bi-calendar3 me-1 text-primary"></i> {{ $article['date'] }} | <i class="bi bi-person me-1 text-primary"></i> Sumber: {{ $article->sumber }}
                </p>
                
                <!-- Gambar Utama / Ilustrasi Artikel -->
                <div class="rounded-4 overflow-hidden mb-4 shadow-sm bg-light text-center text-muted" style="border: 1px solid #e9ecef; height: 400px;">
                    @if(!empty($article['gambar']))
                        <img src="{{ $article['gambar'] }}" alt="{{ $article['judul'] }}" class="w-100 h-100" style="object-fit: cover;">
                    @else
                        <div class="py-5">
                            <i class="bi bi-image fs-1 opacity-50 mb-2 d-block"></i>
                            <span class="fw-bold fs-6">{{ $article['gambar'] }}</span>
                        </div>
                    @endif
                </div>

                <div class="text-muted leading-relaxed fs-6" style="text-align: justify; white-space: pre-line;">
                    {{ $article['konten'] }}
                </div>
                
                <hr class="my-4 border-light">
                
                <!-- Social Share Simulation -->
                <div class="d-flex align-items-center gap-2">
                    <span class="text-muted fw-bold small me-2">Bagikan artikel:</span>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}" class="btn btn-sm btn-light text-primary"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/" class="btn btn-sm btn-light text-danger"><i class="bi bi-instagram"></i></a>
                    <a href="https://wa.me/?text={{ urlencode(Request::url()) }}" class="btn btn-sm btn-light text-success"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
        </div>

        <!-- Sidebar (Sisi Kanan - Sesuai Referensi Gambar image_74066c.png) -->
        <div class="col-lg-4">
            <!-- Widget Berita Terbaru dengan Gambar Thumbnail -->
            <div class="card border-0 shadow-sm rounded-4 p-4 bg-white mb-4">
                <h5 class="fw-bold text-dark border-bottom pb-3 mb-3">Berita Terbaru</h5>
                <div class="d-flex flex-column gap-3">
                    @if(isset($recentNews) && $recentNews->count() > 0)
                        @foreach($recentNews as $recent)
                            <a href="{{ route('news-detail', $recent->slug) }}" class="text-decoration-none d-flex gap-3 align-items-start py-1">
                                <!-- Kotak Gambar Thumbnail Samping Kiri -->
                                <div class="rounded-3 overflow-hidden bg-light border flex-shrink-0" style="width: 80px; height: 60px;">
                                    @if(!empty($recent->gambar))
                                        <img src="{{ $recent->gambar }}" alt="{{ $recent->judul }}" class="w-100 h-100" style="object-fit: cover;">
                                    @else
                                        <div class="w-100 h-100 d-flex align-items-center justify-content-center text-muted" style="font-size: 10px;">
                                            No Image
                                        </div>
                                    @endif
                                </div>
                                <!-- Teks Judul & Tanggal Kanan -->
                                <div class="flex-grow-1">
                                    <h6 class="fw-bold text-dark mb-1 leading-snug" style="font-size: 13px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                        {{ $recent->judul }}
                                    </h6>
                                    <span class="text-muted d-block" style="font-size: 11px;">
                                        {{ $recent->date }}
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <p class="text-muted small mb-0">Tidak ada berita terbaru lainnya.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection