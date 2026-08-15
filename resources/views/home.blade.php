@extends('app')
@section('title', 'RSU Muhammadiyah Ponorogo')
@section('content')
<!-- HERO SLIDER SECTION -->
<section id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">

    <!-- Wrapper untuk Slide -->
    <div class="carousel-inner">
        
        <!-- Slide 1 -->
        <!-- data-bs-interval="5000" berarti gambar berganti tiap 5 detik -->
        <div class="carousel-item active" data-bs-interval="5000">
            <!-- Ganti URL background-image dengan gambar Anda -->
            <div class="slide-bg" style="background-image: url('https://rsumponorogo.com/images/profil/WhatsApp%20Image%202025-10-16%20at%2010.56.02.jpeg');"></div>
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <h1 class="display-4 fw-bold text-white mb-3">Selamat Datang di RSU Muhammadiyah</h1>
                <p class="lead text-white mb-4">Melayani dengan Sepenuh Hati dan Profesional.</p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" data-bs-interval="5000">
            <div class="slide-bg" style="background-image: url('https://rsumponorogo.com/images/fasilitas/9082c927-3a49-40ab-bf0f-a51f9ef1bfb5.jpg');"></div>
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <h1 class="display-4 fw-bold text-white mb-3">Fasilitas Modern & Terlengkap</h1>
                <p class="lead text-white mb-4">Didukung oleh peralatan medis terkini untuk kesehatan Anda.</p>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" data-bs-interval="5000">
            <div class="slide-bg" style="background-image: url('images/about/Screenshot (54).png');"></div>
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <h1 class="display-4 fw-bold text-white mb-3">Tenaga Medis Berpengalaman</h1>
                <p class="lead text-white mb-4">Dokter spesialis kami siap memberikan pelayanan terbaik.</p>
            </div>
        </div>
    </div>
</section>
<section class="cta-section cta position-relative d-none d-md-block">
	<div class="container position-relative" style="z-index: 2;">
		<div class="cta position-relative">
			<div class="row">
				<div class="col-6 col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-person"></i>
						<span class="h3">600.000</span>+
						<p>Pasien</p>
					</div>
				</div>
				<div class="col-6 col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3">27</span>+
						<p>Poliklinik</p>
					</div>
				</div>
				
				<div class="col-6 col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3">40</span>+
						<p>Dokter Profesional</p>
					</div>
				</div>
				<div class="col-6 col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-bed"></i>
						<span class="h3">160</span>
						<p>Kamar Inap</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="tentang-kami-section">
	<div class="tentang-kami-container">
		
		<!-- Kolom Kiri: Gambar Rumah Sakit -->
		<div class="tentang-kami-image">
			<iframe style="width:100%; height:100%;" src="https://www.youtube.com/embed/MAQsURar_Kw?si=01EyZUbFv-wBvpLV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		</div>

		<!-- Kolom Kanan: Teks & Link -->
		<div class="tentang-kami-content">
		<p>
			RSU Muhammadiyah Ponorogo masih berbentuk Rumah Bersalin Aisyiyah dan Baru mendapat ijin resmi di tahun 1992. Di tahun 2002 Rumah Sakit Bersalin 'Aisyiyah mendapat ijin dari MenKes untuk penyelenggaraan menjadi Rumah Sakit 'Aisyiyah Diponegoro. Di tahun 2011 RSU 'Aisyiyah lulus akreditasi dengan status terakreditasi 5 layanan. Pada tahun 2014 RSU 'Aisyiyah Diponegoro berubah menjadi RSU Muhammadiyah Ponorogo.
		</p>
		<a href="{{ route('about') }}" class="tentang-kami-link">Tentang Kami &rarr;</a>
		</div>

	</div>
</section>

<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6 d-none d-md-block">
				<div class="about-img">
					<img src="images/about/Screenshot (74).png" alt="" class="img-fluid">
					<img src="images/about/Screenshot (54).png" alt="" class="img-fluid mt-4">
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img mt-4 mt-lg-0">
					<img src="images/about/Screenshot 2026-07-25 131335.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<h2 class="title-color">Daftar Tanpa Antri</h2>
					<p class="mt-4 mb-5">Daftar di RSUMP cukup dari gadget anda melalui aplikasi RSU Muhammadiyah Ponorogo.</p>
					<a href="https://play.google.com/store/apps/details?id=com.rsumponorogo.portal&pcampaignid=web_share" class="btn btn-main-2 btn-round-full btn-icon">Unduh Aplikasi Sekarang<i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

</br>
</br>
<!-- Section Layanan Unggulan Modern -->
<section class="service-featured-section">
    <div class="container">
        <div class="row gx-4 gy-2 gy-md-4 align-items-stretch">
            
            <!-- Side Panel Kiri -->
            <div class="col-lg-4 col-md-5 mb-4 mb-md-0">
                <div class="service-left-box">
                    <div>
                        <h2 class="fw-bold text-dark mb-3" style="font-size: 2rem; line-height: 1.3;">Layanan Unggulan Kami</h2>
                        <p class="text-muted fs-6" style="line-height: 1.6;">
                            Berbagai layanan medis unggulan untuk mendukung diagnosis, perawatan, dan pemulihan pasien secara optimal.
                        </p>
                    </div>

					<div class="col-lg-8 col-md-7 d-md-none">
						<div class="service-slider-container">
							<div class="service-slider">

								@foreach($list_poliklinik as $poliklinik)
								<div>
									<div class="service-card-item">
										<a href="{{ route('poli-detail', $poliklinik->id) }}">
										<img src="{{ $poliklinik->gambar_poliklinik }}" alt="{{ $poliklinik->nama_poliklinik }}" class="service-card-img">
										<div class="service-card-overlay">
											<h4 class="fw-bold text-white mb-2">{{ $poliklinik->nama_poliklinik }}</h4>
											<p class="small mb-0 text-white-50" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{ $poliklinik->deskripsi }}</p>
										</div>
										</a>
									</div>
								</div>
								@endforeach

								@foreach($list_fasilitas as $fasilitas)
								<div>
									<div class="service-card-item">
										<a href="{{ route('service', $fasilitas->id) }}">
										<img src="{{ $fasilitas->gambar }}" alt="{{ $fasilitas->nama_fasilitas }}" class="service-card-img">
										<div class="service-card-overlay">
											<h4 class="fw-bold text-white mb-2">{{ $fasilitas->nama_fasilitas }}</h4>
											<p class="small mb-0 text-white-50" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{ $fasilitas->deskripsi }}</p>
										</div>
										</a>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>

                    <!-- Tombol Navigasi Slider -->
                    <div class="d-none d-md-block d-flex align-items-center gap-2 mt-4">
                        <button class="service-nav-btn service-prev me-2" type="button" aria-label="Previous">
                            <i class="icofont-simple-left"></i>
                        </button>
                        <button class="service-nav-btn service-next" type="button" aria-label="Next">
                            <i class="icofont-simple-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Slider Card Kanan -->
            <div class="col-lg-8 col-md-7 d-none d-md-block">
                <div class="service-slider-container">
                    <div class="service-slider">


						@foreach($list_poliklinik as $poliklinik)
                        <div>
                            <div class="service-card-item">
								<a href="{{ route('poli-detail', $poliklinik->id) }}">
                                <img src="{{ $poliklinik->gambar_poliklinik }}" alt="{{ $poliklinik->nama_poliklinik }}" class="service-card-img">
                                <div class="service-card-overlay">
                                    <h4 class="fw-bold text-white mb-2">{{ $poliklinik->nama_poliklinik }}</h4>
                                    <p class="small mb-0 text-white-50" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{ $poliklinik->deskripsi }}</p>
                                </div>
								</a>
                            </div>
                        </div>
						@endforeach

						@foreach($list_fasilitas as $fasilitas)
                        <div>
                            <div class="service-card-item">
								<a href="{{ route('service', $fasilitas->id) }}">
                                <img src="{{ $fasilitas->gambar }}" alt="{{ $fasilitas->nama_fasilitas }}" class="service-card-img">
                                <div class="service-card-overlay">
                                    <h4 class="fw-bold text-white mb-2">{{ $fasilitas->nama_fasilitas }}</h4>
                                    <p class="small mb-0 text-white-50" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{ $fasilitas->deskripsi }}</p>
                                </div>
								</a>
                            </div>
                        </div>
						@endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Berita Terkini & Update -->
<section class="news-update-section py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            
            <!-- Kolom Kiri: Berita Terkini (4 Berita) -->
            <div class="col-lg-8">
				<!-- Widget Berita Mobile -->
				<div class="col-lg-4 d-md-none">
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

                <div class="mb-4 d-none d-md-block">
                    <h2 class="fw-bold mb-3" style="color: #1a2b4c; font-size: 2.2rem;">Berita Terkini</h2>
                    <p class="text-muted" style="max-width: 720px; line-height: 1.6;">
                        Terimakasih telah memilih kami untuk melayani kebutuhan kesehatan anda. Informasi yang kami sajikan semoga dapat membantu anda untuk mengenal lebih jauh tentang kinerja kami dalam bidang pelayanan kesehatan.
                    </p>
                </div>

                <!-- Grid 4 Berita -->
                <div class="row g-3 d-none d-md-block">
					@foreach($list_berita as $berita)
                    <!-- Berita 1 -->
                    <div class="col-md-6 col-sm-6 mb-3">
                        <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                            <img src="{{ $berita->gambar }}" class="card-img-top" alt="{{ $berita->judul }}" style="height: 190px; object-fit: cover;">	
                            <div class="card-body p-2 text-center bg-white">
                                <a href="{{ route('news-detail', $berita->slug) }}" class="btn btn-light text-dark fw-bold w-100 py-2 border shadow-sm" style="font-size: 0.9rem; border-radius: 6px;">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
					@endforeach
                </div>

                <!-- Tombol Lihat Semua Berita -->
                <div class="mt-4">
                    <a href="{{ route('news') }}" class="btn text-white px-4 py-2-5 rounded-2 d-inline-flex align-items-center gap-2 shadow-sm" style="background-color: #2b3990; font-weight: 600; font-size: 0.85rem; letter-spacing: 0.5px;">
                        LIHAT SEMUA BERITA <i class="icofont-simple-right fs-6"></i>
                    </a>
                </div>
            </div>

            <!-- Kolom Kanan: Sidebar Update (Carousel Slide Otomatis) -->
            <div class="col-lg-4">
                <div class="bg-white p-3 rounded-3 shadow-sm border h-30">
                    <!-- Header Sidebar Update -->
                    <div class="d-flex align-items-center gap-2 mb-3 pb-2 border-bottom">
                        <i class="bi bi-aspect-ratio text-primary fs-4"></i>
                        <h3 class="m-0 fw-bold" style="color: #2b3990; font-size: 1.35rem;">Update</h3>
                    </div>

                    <!-- Carousel Poster / Pengumuman -->
                    <div id="updateCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">

                        <!-- Item Gambar Slider -->
                        <div class="carousel-inner rounded-2 overflow-hidden">
							@foreach($list_informasi as $index => $informasi)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
								<a href="{{ $informasi->gambar }}" data-fancybox="galeri-update" data-caption="{{ $informasi->nama_informasi }}" data-type="image">
                                <img src="{{ $informasi->gambar }}" class="d-block w-100 img-fluid" alt="{{ $informasi->nama_informasi }}" style="object-fit: cover; max-height: 520px;">
								</a>
                            </div>
							@endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<img src="images/about/Screenshot (70).png" alt="" class="img-fluid">
					<div class="emergency">
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>081390056000</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">Konsultasi Online</h2>
					<p class="mb-4">Sampaikan keluhan atau pertanyaan mengenai kesehatan. Kami akan menjawab keluhan Anda langsung melalui gadget Anda</p>
					@if(session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif
					<form id="consultation" name="consultation" class="form-konsultasi" method="post" action="{{ url('home-store') }}">
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
<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Kami telah melayani lebih dari 600.000+ Pasien</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Berbagi pengalaman yang telah mereka rasakan di RSU Muhammadiyah Ponorogo.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>

					<div class="testimonial-thumb">
						<img src="https://lh3.googleusercontent.com/a/ACg8ocKxY_R-9PVaExW_RQlgn8UbugdsvZHHBhwbS3SR_gnCtdujMA=w83-h83-p-rp-mo-br100" alt="" class="img-fluid">
					</div>

					<div class="client-info ">
						<h4>Pelayanan terbaik!</h4>
						<span>Dewi Kusuma</span>
						<p>
							rumah sakit muhamadiyah Ponorogo ini rumah sakit yang islami yang letak nya di tengah kota sangat saya rekomendasi kan untuk kalian pasien BPJS maupun umum jika kalian sedang sakit kalian periksa di sini aja dehh di jamin kalian akan puas dengan pelayanan nya hehhe 🙏🥰, terimakasi dokter
						</p>
					</div>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="https://lh3.googleusercontent.com/a-/ALV-UjXXh4D8bjmvggmEbO9DXN6WphMaSIMq5EVwIqfZaLJjlxKATB1_=w41-h41-p-rp-mo-ba12-br100" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Fasilitas Nyaman!</h4>
						<span>Nara Nega</span>
						<p>
							Mampir ke RSUM dan ikut antri obat, dari pengalaman dengan RS lainnya termasuk cepat dan rapi karena petugas selalu standby kemudian ruang tunggu nya adem. Plus ada kantin kejujurannya semisal lagi antri belum sempat makan bisa ganjel dulu.
						</p>
					</div>
					
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="https://lh3.googleusercontent.com/a-/ALV-UjWxGPcFlMGX5BeBiaiabIqnV2Wd8DkcXwfsW5nKM_HCjN03tH2Z=w41-h41-p-rp-mo-br100" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Klinik Estetika!</h4>
						<span>Yeni Nur Wijayanti</span>
						<p>
							Rs yang punya satu-satunya layanan estetika di ponorogo , konsultasi kulit langsung dengan dkter spesialis kulit nya ,,keren sihh ini , gak rugi deh jadi tau mslah kulit secara detail serta treatment tentang perawatan kulit yang bagus bgaimana
						</p>
					</div>
					
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="https://lh3.googleusercontent.com/a/ACg8ocJgHYRn_ME5lDWcCZ9TPywDn_O_tdqjxiBIPKmMzctgy96iS_iw=w41-h41-p-rp-mo-br100" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Pelayanan Ramah!</h4>
						<span>Ria</span>
						<p class="mt-4">
							suka sekaliii pelayanannya sangat cepat dan ramah banget. apalagi di bagian farmasi bener” satset tanpa nunggu lama” pokonya best pooolll. apotekernya juga ramah” bangettt. sukses selalu untuk RSUM Ponorogo🫶🏻🥳
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="https://lh3.googleusercontent.com/a-/ALV-UjUyCrfO8PD7tWU_QIkZEzceaOt1WqtmMQKqFhCACjqe_HwdQ0mdgQ=w41-h41-p-rp-mo-br100" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Pelayanan Cepat!</h4>
						<span>Mita Kristina</span>
						<p>
							1 tahun yang lalu anak saya SC di RSUM dg dr. Dian Fikri pelayanan dan penanganan nya bagus sekali baik saat bersalin dan nifas semua bisa tercover oleh BPJS
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Kerjasama</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Kami menjalin kerjasama dengan beberapa perusahaan dan instansi yang memudahkan pasien dalam menggunakan layanan kami.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo">
			<div class="col-6 col-md-4 col-lg-2 mb-3">
				<div class="client-thumb">
					<img src="https://logos-download.com/wp-content/uploads/2021/01/BPJS_Kesehatan_Logo.png" alt="" class="img-fluid" style="height: 100px; object-fit: contain;">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 mb-3">
				<div class="client-thumb">
					<img src="https://vignette.wikia.nocookie.net/logopedia/images/b/ba/Jasa_Raharja.png/revision/latest?cb=20190924121510" alt="" class="img-fluid" style="height: 100px; object-fit: contain;">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 mb-3">
				<div class="client-thumb">
					<img src="https://hrplawcons.com/wp-content/uploads/2024/04/asuransi-mag.png" alt="" class="img-fluid" style="height: 100px; object-fit: contain;">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 mb-3">
				<div class="client-thumb">
					<img src="https://1.bp.blogspot.com/-bOgTIIT3oT0/X_Kx8PXnqxI/AAAAAAAABgM/r-Z-JW2OHvgcy9KKNxOMvo9eNNTa68wlgCLcBGAsYHQ/s2048/Logo%2BBPJS%2BKetenagakerjaan.png" alt="" class="img-fluid" style="height: 100px; object-fit: contain;">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 mb-3">
				<div class="client-thumb">
					<img src="https://www.ir-bri.com/bbri_assets/images/subsidiaries/BRI-Life.png" alt="" class="img-fluid" style="height: 100px; object-fit: contain;">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 mb-3">
				<div class="client-thumb">
					<img src="https://iconlogovector.com/uploads/images/2024/09/lg-66ecf9189178d-BCA-Life.webp" alt="" class="img-fluid" style="height: 100px; object-fit: contain;">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 mb-3">
				<div class="client-thumb">
					<img src="https://rshva.com/assets/upload/image/mitra/aa.png" alt="" class="img-fluid" style="height: 100px; object-fit: contain;">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 mb-3">
				<div class="client-thumb">
					<img src="https://tse1.mm.bing.net/th/id/OIP.inqhkUAMte1AynG5-aJiEwHaDv?r=0&rs=1&pid=ImgDetMain&o=7&rm=3" alt="" class="img-fluid" style="height: 100px; object-fit: contain;">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 mb-3">
				<div class="client-thumb">
					<img src="https://menara165.com/wp-content/uploads/2021/02/logo-fullerton-health.png" alt="" class="img-fluid" style="height: 100px; object-fit: contain;">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Google Maps / Location Section -->
<section class="location-section position-relative d-flex align-items-center justify-content-center text-center text-white">
    
    <!-- Background Google Maps Iframe -->
    <div class="map-bg-wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.2708569717515!2d111.45875791105057!3d-7.866699292122608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e799fa2c6226ddf%3A0xe17cea3efaaac513!2sRSU%20Muhammadiyah%20Ponorogo!5e0!3m2!1sen!2sid!4v1784970322724!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <!-- Overlay Gelap di Atas Peta -->
    <div class="map-overlay"></div>

    <!-- Content Over Map -->
    <div class="container position-relative z-index-2 py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Judul Utama -->
                <h2 class="display-5 fw-bold text-white mb-2">Lokasi Kami</h2>
                
                <!-- Garis Kuning Bawah Judul -->
                <div class="title-line bg-warning mx-auto mb-3"></div>

                <!-- Tombol Tinjau Lokasi (Membuka Google Maps di Tab Baru) -->
                <a href="https://maps.app.goo.gl/ZpLYND3AtvH7LzrH6" target="_blank" rel="noopener noreferrer" class="btn btn-warning btn-map-action text-dark fw-bold px-4 py-2-5 d-inline-flex align-items-center gap-2 shadow-sm">Tinjau lokasi <i class="bi bi-geo-alt-fill fs-6"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection