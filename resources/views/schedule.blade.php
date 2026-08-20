@extends('app')
@section('title', 'Jadwal Dokter')
@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="block text-center">
            <span class="text-white">Dokter</span>
            <h1 class="text-capitalize mb-5 text-lg">Jadwal Dokter</h1>
            <ul class="list-inline breadcumb-nav">
                <li class="list-inline-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                <li class="list-inline-item"><span class="text-white">/</span></li>
                <li class="list-inline-item"><a href="{{ route('schedule') }}" class="text-white-50">Jadwal Dokter</a></li>
            </ul>
            </div>
        </div>
        </div>
    </div>
</section>

<!-- Section Utama Jadwal Dokter -->
<div class="container my-5">
    <!-- Jadwal Dokter Search & Filter Section (Pembaruan Filter Sesuai Request) -->
    <div class="container my-5 py-3">
        <div class="p-4 p-md-5 bg-white shadow-sm rounded-4 max-width-1000 mx-auto" style="border: 1px solid #e9ecef;">
            <h3 class="fw-bold text-dark mb-2 text-center text-md-start">
                <i class="bi bi-calendar-check-fill text-primary me-2"></i>Jadwal Praktek Dokter
            </h3>
            <p class="text-muted mb-4 text-center text-md-start">Cari nama dokter spesialis atau filter berdasarkan poliklinik.</p>
            
            <!-- Form multi-kriteria filter dinamis -->
            <form action="{{ route('schedule') }}" method="GET" class="row g-3">
                <div class="col-md-7">
                    <label class="form-label fw-semibold text-secondary fs-7">Cari Nama Dokter</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-muted"></i></span>
                        <input type="text" name="search" value="{{ request('search') }}" class="form-control border-start-0 rounded-end-3" placeholder="Contoh: Ahmad Bayu">
                    </div>
                </div>

                <div class="col-md-3">
                    <label class="form-label fw-semibold text-secondary fs-7">Poliklinik</label>
                    <select name="speciality" class="form-select rounded-3">
                        <option value="all" {{ request('spesialis') == 'all' ? 'selected' : '' }}>Semua Poliklinik</option>
                        <option value="Klinik Anak" {{ request('speciality') == 'Klinik Anak' ? 'selected' : '' }}>Klinik Anak</option>
                        <option value="Klinik Bedah Umum" {{ request('speciality') == 'Klinik Bedah Umum' ? 'selected' : '' }}>Klinik Bedah Umum</option>
                        <option value="Klinik Internis-Penyakit Dalam" {{ request('speciality') == 'Klinik Internis-Penyakit Dalam' ? 'selected' : '' }}>Klinik Internis-Penyakit Dalam</option>
                        <option value="Klinik Gigi" {{ request('speciality') == 'Klinik Gigi' ? 'selected' : '' }}>Klinik Gigi</option>
                        <option value="Klinik Gizi" {{ request('speciality') == 'Klinik Gizi' ? 'selected' : '' }}>Klinik Gizi</option>
                        <option value="Klinik Jantung" {{ request('speciality') == 'Klinik Jantung' ? 'selected' : '' }}>Klinik Jantung</option>
                        <option value="Klinik Mata" {{ request('speciality') == 'Klinik Mata' ? 'selected' : '' }}>Klinik Mata</option>
                        <option value="Klinik Obsgyn" {{ request('speciality') == 'Klinik Obsgyn' ? 'selected' : '' }}>Klinik Obsgyn</option>
                        <option value="Klinik Orthopaedi-Bedah Tulang" {{ request('speciality') == 'Klinik Orthopaedi-Bedah Tulang' ? 'selected' : '' }}>Klinik Orthopaedi-Bedah Tulang</option>
                        <option value="Klinik Saraf" {{ request('speciality') == 'Klinik Saraf' ? 'selected' : '' }}>Klinik Saraf</option>
                        <option value="Klinik Umum" {{ request('speciality') == 'Klinik Umum' ? 'selected' : '' }}>Klinik Umum</option>
                    </select>
                </div>

                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100 rounded-3 fw-bold py-2 shadow-sm">
                        <i class="bi bi-funnel-fill me-1"></i>Filter Jadwal
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-primary">
                    <tr>
                        <th style="min-width: 250px;">Spesialis / Nama Dokter</th>
                        <th class="text-center">Senin</th>
                        <th class="text-center">Selasa</th>
                        <th class="text-center">Rabu</th>
                        <th class="text-center">Kamis</th>
                        <th class="text-center">Jumat</th>
                        <th class="text-center">Sabtu</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($jadwal_dokter as $jadwal)
				<thead>
                    <tr>
                    	<td>
                            <strong class="text-dark d-block">{{ $jadwal->tabel_dokter->nama_dokter ?? '-'}}</strong>
                            <span class="badge bg-primary bg-opacity-10 text-white mt-1 fs-8">{{ $jadwal->tabel_dokter->spesialis ?? '-' }}</span>

                        </td>
                        <td class="text-center font-monospace fs-7 text-secondary">{{ $jadwal->senin }}</td>
                        <td class="text-center font-monospace fs-7 text-secondary">{{ $jadwal->selasa }}</td>
                        <td class="text-center font-monospace fs-7 text-secondary">{{ $jadwal->rabu }}</td>
                        <td class="text-center font-monospace fs-7 text-secondary">{{ $jadwal->kamis }}</td>
                        <td class="text-center font-monospace fs-7 text-secondary">{{ $jadwal->jumat }}</td>
                        <td class="text-center font-monospace fs-7 text-secondary">{{ $jadwal->sabtu }}</td>
                        <td class="text-center">
                        </td>
                    </tr>
				@empty
					<tr>
						<td colspan="8" class="text-center text-muted py-5">
							<i class="bi bi-person-exclamation fs-1 d-block mb-2 text-warning"></i>
							Dokter atau Poliklinik tidak ditemukan. Silakan periksa kembali kata kunci pencarian Anda.
						</td>
					</tr>
            @endforelse
        		</tbody>
            </table>
        </div>
    </div>
</div>
@endsection