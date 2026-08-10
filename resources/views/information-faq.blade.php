@extends('app')
@section('title', 'Frequently Asked Quenstions')
@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="block text-center">
            <span class="text-white">Informasi</span>
            <h1 class="text-capitalize mb-5 text-lg">Frequently Asked uestions</h1>
            <ul class="list-inline breadcumb-nav">
                <li class="list-inline-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                <li class="list-inline-item"><span class="text-white">/</span></li>
                <li class="list-inline-item"><a href="{{ route('information-faq') }}" class="text-white-50">FAQ</a></li>
            </ul>
            </div>
        </div>
        </div>
    </div>
</section>

<div class="container my-5">
    <div class="row g-4">

        <!-- Content Panes (Kiri - Tampil FAQ) -->
        <div class="col-lg-9">
            <div class="tab-content" id="informationContent">
                
                <!-- 1. PANEL: FAQ -->
                <div class="tab-pane fade show active" id="pane-overview" role="tabpanel">
                    <div class="card border-0 shadow-sm rounded-4 bg-white">
                        <div class="card-body p-4 p-md-5">
                            <div class="mb-5">
                                <h2 class="fw-bold text-success mb-2"><i class="bi bi-question-circle-fill me-2"></i>Pertanyaan yang Sering Diajukan</h2>
                                <p class="text-muted fs-6">Berikut adalah jawaban dari pertanyaan-pertanyaan yang paling sering diajukan oleh pasien dan keluarganya</p>
                            </div>

                            <!-- FAQ Accordion -->
                            <div class="faq-accordion">
                                
                                <!-- FAQ Item 1 -->
                                <div class="faq-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                                    <button class="faq-header w-100 d-flex justify-content-between align-items-center p-4 bg-light border-0 text-start"
                                            onclick="toggleFaqItem(this)">
                                        <span class="faq-title fw-bold text-dark">Bagaimana cara mendaftar sebagai pasien baru di RS Muhammadiyah Ponorogo?</span>
                                        <i class="bi bi-chevron-down text-success faq-icon"></i>
                                    </button>
                                    <div class="faq-content bg-white px-4 py-3" style="display: none;">
                                        <p class="text-muted mb-0">
                                            Pasien/ Keluarga Pasien mendaftar langsung dengan mengisi formulir pendaftaran di Tempat Pendaftaran Pasien (TPP) sesuai identitas (KTP/KK/SIM atau kartu identitas lainnya yang sah).Pasien menyerahkan formulir pendaftaran yang telah diisi ke petugas TPP untuk mendapatkan nomer antrian. Setelah mendapat nomer antrian pasien menuju klinik yang diinginkan untuk menunggu panggilan pemeriksaan. (Kartu Berobat harus dibawa setiap kali periksa ke RSUMP)
                                        </p>
                                    </div>
                                </div>

                                <div class="faq-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                                    <button class="faq-header w-100 d-flex justify-content-between align-items-center p-4 bg-light border-0 text-start"
                                            onclick="toggleFaqItem(this)">
                                        <span class="faq-title fw-bold text-dark">Bagaimana cara mendaftar sebagai pasien lama di RS Muhammadiyah Ponorogo?</span>
                                        <i class="bi bi-chevron-down text-success faq-icon"></i>
                                    </button>
                                    <div class="faq-content bg-white px-4 py-3" style="display: none;">
                                        <p class="text-muted mb-0">
                                            Pasien/ keluarga pasien mendaftar langsung dengan menunjukkan Kartu Berobat Pasien serta menyebutkan klinik yang dituju. Pasien kemudian mendapatkan nomor antrian dan menuju ke klinik yang diinginkan untuk menunggu panggilan pemeriksaan. (Kartu Berobat harus dibawa setiap kali periksa ke RSUMP)
                                        </p>
                                    </div>
                                </div>

                                <div class="faq-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                                    <button class="faq-header w-100 d-flex justify-content-between align-items-center p-4 bg-light border-0 text-start"
                                            onclick="toggleFaqItem(this)">
                                        <span class="faq-title fw-bold text-dark">Kapan batas waktu untuk besuk pasien?</span>
                                        <i class="bi bi-chevron-down text-success faq-icon"></i>
                                    </button>
                                    <div class="faq-content bg-white px-4 py-3" style="display: none;">
                                        <p class="text-muted mb-0">
                                            RSU Muhammadiyah Ponorogo dibagi menjadi dua sesi setiap hari, yaitu sesi pagi pukul 11.00–13.00 WIB dan sesi sore pukul 17.00–20.00 WIB dengan ketentuan :
                                        </p>
                                        <p class="text-muted mb-0">
                                            1. Penunggu pasien rawat inap maksimal 2 orang
                                        </p>
                                        <p class="text-muted mb-0">
                                            2. Pengantar pasien rawat jalan 1 orang kecuali pasien anak dan kondisi tertentu
                                        </p>
                                        <p class="text-muted mb-0">
                                            3. Selalu patuhi protokol kesehatan dan petugas
                                        </p>
                                        <p class="text-muted mb-0">
                                            4. Cuci tangan sebelum dan sesudah berkunjung
                                        </p>
                                        <p class="text-muted mb-0">
                                            5. Terapkan pola hidup bersih sehat (PHBS)
                                        </p>
                                    </div>
                                </div>

                                <!-- FAQ Item 2 -->
                                <div class="faq-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                                    <button class="faq-header w-100 d-flex justify-content-between align-items-center p-4 bg-light border-0 text-start"
                                            onclick="toggleFaqItem(this)">
                                        <span class="faq-title fw-bold text-dark">Apakah RS Muhammadiyah Ponorogo menerima pasien dengan asuransi kesehatan (BPJS)?</span>
                                        <i class="bi bi-chevron-down text-success faq-icon"></i>
                                    </button>
                                    <div class="faq-content bg-white px-4 py-3" style="display: none;">
                                        <p class="text-muted mb-0">
                                            Ya, kami menerima pasien dengan asuransi BPJS Kesehatan, asuransi korporat, dan asuransi swasta lainnya. Kami juga melayani pasien umum tanpa asuransi. Pastikan Anda membawa kartu asuransi Anda pada saat berkunjung untuk memudahkan proses administrasi.
                                        </p>
                                    </div>
                                </div>

                                <!-- FAQ Item 3 -->
                                <div class="faq-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                                    <button class="faq-header w-100 d-flex justify-content-between align-items-center p-4 bg-light border-0 text-start"
                                            onclick="toggleFaqItem(this)">
                                        <span class="faq-title fw-bold text-dark">Berapa jam operasional layanan IGD (Instalasi Gawat Darurat)?</span>
                                        <i class="bi bi-chevron-down text-success faq-icon"></i>
                                    </button>
                                    <div class="faq-content bg-white px-4 py-3" style="display: none;">
                                        <p class="text-muted mb-0">
                                            Layanan IGD kami beroperasi 24 jam setiap hari tanpa libur. Tim medis profesional kami selalu siap menangani kasus darurat kapan saja. Untuk keadaan mendesak, silakan hubungi nomor IGD kami di 0821 4122 0002.
                                        </p>
                                    </div>
                                </div>

                                <!-- FAQ Item 4 -->
                                <div class="faq-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                                    <button class="faq-header w-100 d-flex justify-content-between align-items-center p-4 bg-light border-0 text-start"
                                            onclick="toggleFaqItem(this)">
                                        <span class="faq-title fw-bold text-dark">Bagaimana cara mengecek jadwal dokter spesialis?</span>
                                        <i class="bi bi-chevron-down text-success faq-icon"></i>
                                    </button>
                                    <div class="faq-content bg-white px-4 py-3" style="display: none;">
                                        <p class="text-muted mb-0">
                                            Anda dapat mengecek jadwal dokter spesialis melalui halaman "Jadwal Dokter" di website kami atau menghubungi bagian layanan informasi kami 0813-9005-6000. Jadwal dokter kami biasanya berubah setiap bulannya, jadi pastikan Anda mengecek jadwal terbaru sebelum berkunjung.
                                        </p>
                                    </div>
                                </div>

                                <!-- FAQ Item 5 -->
                                <div class="faq-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                                    <button class="faq-header w-100 d-flex justify-content-between align-items-center p-4 bg-light border-0 text-start"
                                            onclick="toggleFaqItem(this)">
                                        <span class="faq-title fw-bold text-dark">Apa saja fasilitas yang tersedia untuk pasien rawat inap?</span>
                                        <i class="bi bi-chevron-down text-success faq-icon"></i>
                                    </button>
                                    <div class="faq-content bg-white px-4 py-3" style="display: none;">
                                        <p class="text-muted mb-0">
                                            RS Muhammadiyah Ponorogo menyediakan berbagai fasilitas untuk pasien rawat inap termasuk kamar kelas I hingga VVIP dengan AC, kamar mandi dalam, meja dan kursi penunggu pasien, dan fasilitas lainnya. Kami juga menyediakan layanan konsultasi diet, terapi fisik, dan dukungan spiritual melalui masjid kami yang nyaman.
                                        </p>
                                    </div>
                                </div>

                                <!-- FAQ Item 6 -->
                                <div class="faq-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                                    <button class="faq-header w-100 d-flex justify-content-between align-items-center p-4 bg-light border-0 text-start"
                                            onclick="toggleFaqItem(this)">
                                        <span class="faq-title fw-bold text-dark">Apakah ada layanan ambulance untuk jemput pasien?</span>
                                        <i class="bi bi-chevron-down text-success faq-icon"></i>
                                    </button>
                                    <div class="faq-content bg-white px-4 py-3" style="display: none;">
                                        <p class="text-muted mb-0">
                                            Ya, kami menyediakan layanan ambulans 24 jam untuk jemput pasien dalam kondisi darurat. Layanan ambulans kami dilengkapi dengan peralatan medis lengkap dan paramedis berpengalaman. Hotline Ambulance 23 Jam kami (0352) 481273/ 485928
                                        </p>
                                    </div>
                                </div>

                                <!-- FAQ Item 7 -->
                                <div class="faq-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                                    <button class="faq-header w-100 d-flex justify-content-between align-items-center p-4 bg-light border-0 text-start"
                                            onclick="toggleFaqItem(this)">
                                        <span class="faq-title fw-bold text-dark">Berapa lama waktu tunggu di poliklinik?</span>
                                        <i class="bi bi-chevron-down text-success faq-icon"></i>
                                    </button>
                                    <div class="faq-content bg-white px-4 py-3" style="display: none;">
                                        <p class="text-muted mb-0">
                                            Waktu tunggu di poliklinik tergantung dari jumlah pasien yang sedang dilayani dan kondisi medis masing-masing pasien. Rata-rata waktu tunggu kami adalah 30-45 menit. Untuk meminimalkan waktu tunggu, kami merekomendasikan membuat jadwal konsultasi terlebih dahulu atau datang di jam-jam yang tidak terlalu ramai (pagi hari).
                                        </p>
                                    </div>
                                </div>

                                <!-- FAQ Item 8 -->
                                <div class="faq-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                                    <button class="faq-header w-100 d-flex justify-content-between align-items-center p-4 bg-light border-0 text-start"
                                            onclick="toggleFaqItem(this)">
                                        <span class="faq-title fw-bold text-dark">Bagaimana cara menghubungi rumah sakit untuk informasi lebih lanjut?</span>
                                        <i class="bi bi-chevron-down text-success faq-icon"></i>
                                    </button>
                                    <div class="faq-content bg-white px-4 py-3" style="display: none;">
                                        <p class="text-muted mb-0">
                                            Anda dapat menghubungi kami melalui berbagai cara: Telepon: (0352) 481273 / 485928, WhatsApp: 082111128700, Email: rsum_ponorogo@yahoo.com, atau kunjungi langsung ke alamat kami di Jl. Diponegoro No. 50 Ponorogo. Tim customer service kami siap membantu Anda 24 jam setiap hari.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar Kanan (Call Center, Hotline IGD, & Informasi) -->
        <div class="col-lg-3">
            <div class="sticky-top" style="top: 100px; z-index: 10;">
                
                <!-- Card Utama Kontak -->
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-header bg-success text-white p-3 border-0">
                        <h5 class="card-title fw-bold mb-0 fs-6 text-white d-flex align-items-center">
                            <i class="bi bi-headset me-2 fs-5"></i> Pusat Bantuan & Kontak
                        </h5>
                    </div>
                    
                    <div class="card-body p-3">
                        
                        <!-- 1. Call Center -->
                        <div class="p-3 bg-light rounded-3 mb-3 border border-light-subtle">
                            <div class="d-flex align-items-center mb-2">
                                <div class="bg-success text-white rounded-circle p-2 d-flex align-items-center justify-content-center me-2" style="width: 38px; height: 38px;">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0 text-dark small">Call Center</h6>
                                    <span class="text-muted" style="font-size: 0.75rem;">Layanan Umum & Pendaftaran</span>
                                </div>
                            </div>
                            <a href="tel:0352481273" class="btn btn-outline-success btn-sm w-100 fw-semibold rounded-pill mt-1">
                                <i class="bi bi-telephone me-1"></i> (0352) 481273
                            </a>
                        </div>

                        <!-- 2. Hotline IGD (24 Jam) -->
                        <div class="p-3 bg-danger bg-opacity-10 border border-danger-subtle rounded-3 mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <div class="bg-danger text-white rounded-circle p-2 d-flex align-items-center justify-content-center me-2" style="width: 38px; height: 38px;">
                                    <i class="bi bi-hospital-fill"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0 text-white small d-flex align-items-center">
                                        Hotline IGD
                                        <span class="badge bg-danger ms-1 px-1 py-1" style="font-size: 0.6rem;">24 JAM</span>
                                    </h6>
                                    <span class="text-dark" style="font-size: 0.75rem;">Gawat Darurat</span>
                                </div>
                            </div>
                            <a href="tel:082141220002" class="btn btn-danger btn-sm w-100 fw-semibold rounded-pill mt-1 shadow-sm">
                                <i class="bi bi-telephone-outbound-fill me-1"></i> 0821 4122 0002
                            </a>
                        </div>

                        <!-- 3. Hotline Informasi (WhatsApp) -->
                        <div class="p-3 bg-light rounded-3 border border-light-subtle">
                            <div class="d-flex align-items-center mb-2">
                                <div class="bg-success bg-gradient text-white rounded-circle p-2 d-flex align-items-center justify-content-center me-2" style="width: 38px; height: 38px;">
                                    <i class="bi bi-whatsapp"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0 text-dark small">Hotline Informasi</h6>
                                    <span class="text-muted" style="font-size: 0.75rem;">Chat WhatsApp Pasien</span>
                                </div>
                            </div>
                            <a href="https://wa.me/6282111128700" target="_blank" class="btn btn-success btn-sm w-100 fw-semibold rounded-pill mt-1">
                                <i class="bi bi-whatsapp me-1"></i> 0813-9005-6000
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection