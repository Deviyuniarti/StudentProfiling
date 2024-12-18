@extends('template_mahasiswa.kalender_akademik')

@section('content')
     <!-- Content Box Kalender Akademik -->
     <div class="content-box">
        <!-- Kolom Kiri: Kalender Akademik -->
        <div style="flex: 1">
          <h3 style="font-weight: bold">Kalender Akademik</h3>
        </div>

        <!-- Kolom Kanan: Breadcrumb (Beranda / Akademik / Kalender Akademik) -->
        <div style="text-align: right">
          <span>Beranda / Akademik / Kalender Akademik</span>
        </div>
      </div>

      <!-- Content Box Baru untuk Kalender -->
      <div class="content-box calendar-box">
        <!-- Navigasi Kalender (Tombol dan Teks Bulan/Tahun) -->
        <div
          style="
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
          "
        >
          <button id="prevBtn" class="btn btn-primary">&lt;</button>
          <h4 id="monthYear" style="margin: 0; font-weight: bold">
            November 2024
          </h4>
          <button id="nextBtn" class="btn btn-primary">&gt;</button>
        </div>

        <!-- Tabel Kalender -->
        <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th style="color: red">MINGGU</th>
              <th>SENIN</th>
              <th>SELASA</th>
              <th>RABU</th>
              <th>KAMIS</th>
              <th>JUMAT</th>
              <th style="color: red">SABTU</th>
            </tr>
          </thead>
          <tbody id="calendarBody">
            <!-- Kalender akan diisi secara dinamis dengan JavaScript -->
            <script src="{{ asset('template') }}/js/mahasiswa/kalender-akademik.js"></script>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Content Box Ketiga: Kegiatan Akademik -->
    <div class="content-box content-box-kegiatan-akademik">
      <!-- Judul Kegiatan Akademik -->
      <h3>Kegiatan Akademik</h3>

      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="checklist-item">
            <span class="checklist-box text-primary">
              <i class="bi bi-check"></i>
            </span>
            <span>Perkuliahan</span>
          </div>
          <div class="checklist-item">
            <span class="checklist-box text-success">
              <i class="bi bi-check"></i>
            </span>
            <span>Dies Natalis</span>
          </div>
          <div class="checklist-item">
            <span class="checklist-box text-warning">
              <i class="bi bi-check"></i>
            </span>
            <span>Ujian Tengah Semester</span>
          </div>
          <div class="checklist-item">
            <span class="checklist-box text-info">
              <i class="bi bi-check"></i>
            </span>
            <span>Bimbingan Akademik (PA) 1</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="checklist-item">
            <span class="checklist-box text-purple">
              <i class="bi bi-check"></i>
            </span>
            <span>Pengajuan Judul dan Topik Tugas Akhir</span>
          </div>
          <div class="checklist-item">
            <span class="checklist-box text-danger">
              <i class="bi bi-check"></i>
            </span>
            <span>Orientasi Akademik Mahasiswa Baru</span>
          </div>
          <div class="checklist-item">
            <span class="checklist-box text-info">
              <i class="bi bi-check"></i>
            </span>
            <span>Pengisian KRS Semester Ganjil</span>
          </div>
          <div class="checklist-item">
            <span class="checklist-box text-brown">
              <i class="bi bi-check"></i>
            </span>
            <span>Kuliah Perdana Semester Ganjil</span>
          </div>
        </div>
      </div>

@endsection