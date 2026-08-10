<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RSU Muhammadiyah Ponorogo')</title>
    <!-- Bootstrap 5 CSS CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Panggil file CSS eksternal AOS di sini satu kali saja -->
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/icofont/icofont.min.css') }}">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick-theme.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body id="top">
<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:rsum_ponorogo@yahoo.com"><i class="icofont-support-faq mr-2"></i>rsum_ponorogo@yahoo.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Jl. Diponegoro No.50 Ponorogo, Ponorogo</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:0352-481273" >
							<span>Call Now : </span>
							<span class="h4">0352-481273</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="logo d-flex align-items-center me-auto py-2" href="{{ route('home') }}">
                <div class="logo-wrapper">
                    <img src="https://rsumponorogo.com/rs/logoRSUMP.svg" alt="RSUMP Logo" class="img-fluid" style="max-height: 50px; width: auto; object-fit: contain;">
                </div>
            </a>

		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="icofont-navigation-menu"></span>
		</button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  	<li class="nav-item active">
					<a class="nav-link" href="{{ route('home') }}">Home</a>
			  	</li>
			   	<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="{{ route('about') }}" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang Kami <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="{{ route('about') }}">Profil RSUMP</a></li>
						<li><a class="dropdown-item" href="{{ route('indikator-mutu') }}">Indikator Mutu</a></li>
					</ul>
			  	</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="{{ route('service') }}" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="{{ route('rawat-jalan') }}">Rawat Jalan</a></li>
						<li><a class="dropdown-item" href="{{ route('rawat-inap') }}">Rawat Inap</a></li>
						<li><a class="dropdown-item" href="{{ route('service') }}">Fasilitas & Penunjang Medis</a></li>
					</ul>
			  	</li>

			  	<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="{{ route('dokter') }}" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dokter <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="{{ route('dokter') }}">Dokter</a></li>
						<li><a class="dropdown-item" href="{{ route('schedule') }}">Jadwal Dokter</a></li>
						<li><a class="dropdown-item" href="{{ route('consultation') }}">Konsultasi Onlne</a></li>
					</ul>
			  	</li>

			   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="{{ route('news') }}" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informasi <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="{{ route('news') }}">Berita Terkini</a></li>
						<li><a class="dropdown-item" href="{{ route('information') }}">Alur Pendaftaran Pasien</a></li>
                        <li><a class="dropdown-item" href="{{ route('information-faq') }}">FAQ</a></li>
					</ul>
			  	</li>
			</ul>
		  </div>
		</div>
	</nav>
</header>

<main>
    @yield('content')
</main>

<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="https://rsumponorogo.com/rs/logoRSUMP.svg" alt="" class="img-fluid">
					</div>
					<p>MANIS "Mudah, Nyaman, Islami"</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href="https://www.instagram.com/rsum_ponorogo/"><i class="bi bi-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://www.youtube.com/@rsumponorogo"><i class="bi bi-youtube"></i></a></li>
						<li class="list-inline-item"><a href="https://www.tiktok.com/@rsumponorogo"><i class="bi bi-tiktok"></i></a></li>
						<li class="list-inline-item"><a href="https://www.facebook.com/rsumpo"><i class="bi bi-facebook"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Layanan</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="{{ route('rawat-jalan') }}">Rawat Jalan </a></li>
						<li><a href="{{ route('rawat-inap') }}">Informasi Kamar Inap</a></li>
						<li><a href="{{ route('rawat-jalan') }}">Instalasi Gawat Darurat (IGD)</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Informasi</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="{{ route('information') }}">Alur Pendaftaran Pasien</a></li>
						<li><a href="{{ route('about') }}">Profil RSUMP</a></li>
						<li><a href="{{ route('information-faq') }}">FAQuestions</a></li>
						<li><a href="{{ route('schedule') }}">Jadwal Dokter</a></li>
						<li><a href="{{ route('consultation') }}">Konsultasi Online</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Terhubung dengan Kami</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<h4 class="mt-2"><a href="mailto:rsum_ponorogo@yahoo.com">rsum_ponorogo@yahoo.com</a></h4>
						</div>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<h4 class="mt-2"><a href="http://wa.me/+6281390056000" target="_blank" data-testid="LinkClickTriggerLink" rel="noopener noreferrer">081390056000</a></h4>
						</div>
						
						<div class="d-flex flex-column mb-3">
								<span class="h6 mb-1">Senin sd Jum'at : 08:00 - 16:00</span>
								<span class="h6 mb-1">Sabtu : 08:00 - 12:00</span>
								<span class="h6 mb-1">Ahad dan Libur nasional Off</span>
							</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">RSUMP</span><span> {{ date('Y') }}</spam>
					</div>
				</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Bottstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<!-- Main jQuery -->
<script src="{{ asset('plugins/jquery/jquery.js') }}"></script>

<!-- Cloudflare Turnstile -->
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<!-- Slick Slider -->
<script src="{{ asset('plugins/slick-carousel/slick/slick.min.js') }}"></script>

<!-- Counterup -->
<script src="{{ asset('plugins/counterup/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('plugins/shuffle/shuffle.min.js') }}"></script>
<script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}"></script>

<!-- Google Map -->
<script src="{{ asset('plugins/google-map/map.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
<!-- Custom Script -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/contact.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Panggil JS eksternal AOS di paling bawah -->
<script src="{{ asset('vendor/aos/aos.js') }}"></script>
    
<script>
	// 1. Pop-Up ketika Data Berhasil Terkirim
	@if (session('success'))
		Swal.fire({
			icon: 'success',
			title: 'Berhasil!',
			text: "{{ session('success') }}",
			confirmButtonColor: '#2b3990',
			confirmButtonText: 'OK'
		});
	@endif

	// 2. Pop-Up ketika Ada Input Wajib yang Belum Diisi / Error Validasi
	@if ($errors->any())
		let errorMessages = '';
		@foreach ($errors->all() as $error)
			errorMessages += "• {{ $error }}<br>";
		@endforeach

		Swal.fire({
			icon: 'error',
			title: 'Gagal Mengirim!',
			html: `<div style="text-align: left; font-size: 0.95rem;">${errorMessages}</div>`,
			confirmButtonColor: '#d33',
			confirmButtonText: 'Perbaiki'
		});
	@endif
</script>
<script>
	// Inisialisasi Fancybox
	Fancybox.bind('[data-fancybox]', {
		Images: {
			zoom: true,
			close: true,
		},
	});
</script>

<!-- Script untuk Filter Live Search Dokter -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Ambil elemen input pencarian
        const searchInput = document.getElementById('searchDoctor');
        // Ambil semua item dokter
        const doctorItems = document.querySelectorAll('.doctor-item');

        searchInput.addEventListener('input', function() {
            // Ambil kata kunci yang diketik, ubah ke huruf kecil
            const searchTerm = this.value.toLowerCase().trim();

            doctorItems.forEach(function(item) {
                // Ambil teks nama dokter dan spesialis
                const doctorName = item.querySelector('.doctor-name').textContent.toLowerCase();
                const specialist = item.querySelector('.doctor-specialist').textContent.toLowerCase();

                // Cek apakah kata kunci ada di dalam nama atau spesialis
                if (doctorName.includes(searchTerm) || specialist.includes(searchTerm)) {
                    // Jika cocok, tampilkan (hapus class d-none bootstrap)
                    item.classList.remove('d-none');
                } else {
                    // Jika tidak cocok, sembunyikan (tambahkan class d-none bootstrap)
                    item.classList.add('d-none');
                }
            });
        });
    });
</script>

<!-- Script Dropdown Halaman FAQ -->
<script>
    let isDropdownExpanded = false;

    // Fungsi Toggle FAQ Item
    function toggleFaqItem(headerElement) {
        const faqItem = headerElement.closest('.faq-item');
        const contentDiv = faqItem.querySelector('.faq-content');
        const icon = headerElement.querySelector('.faq-icon');
        
        // Tutup semua item lain
        document.querySelectorAll('.faq-item').forEach(item => {
            if (item !== faqItem) {
                item.querySelector('.faq-content').style.display = 'none';
                item.querySelector('.faq-icon').classList.replace('bi-chevron-up', 'bi-chevron-down');
            }
        });
        
        // Toggle item saat ini
        if (contentDiv.style.display === 'none' || !contentDiv.style.display) {
            contentDiv.style.display = 'block';
            icon.classList.replace('bi-chevron-down', 'bi-chevron-up');
        } else {
            contentDiv.style.display = 'none';
            icon.classList.replace('bi-chevron-up', 'bi-chevron-down');
        }
    }
    </script>
</body>
</html>
