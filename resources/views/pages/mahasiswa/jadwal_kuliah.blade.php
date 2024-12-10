@extends('template_mahasiswa.jadwal_kuliah')

@section('content')
<div class="content-box">
    <div style="flex: 1">
        <h3 style="font-weight: bold">Jadwal Kuliah</h3>
        </div>

        <div style="text-align: right">
          <span>Beranda / Akademik / Jadwal Kuliah</span>
        </div>
      </div>
    </div>

    <!-- Content Box 2 (Data Mahasiswa) -->
    <div class="content-box content-box-mahasiswa">
      <div class="left-column">
        <div class="info"><strong>Nama</strong><span>: Kelompok 9</span></div>
        <div class="info"><strong>NIM</strong><span>: 221222345</span></div>
        <div class="info"><strong>Angkatan</strong><span>: 2022</span></div>
      </div>
      <div class="right-column">
        <div class="info">
          <strong>Jurusan</strong><span>: Teknik Informatika</span>
        </div>
        <div class="info">
          <strong>Prodi</strong><span>: Teknologi Informatika Multimedia</span>
        </div>
        <div class="info"><strong>Semester</strong><span>: 5</span></div>
      </div>
    </div>

    <!-- Content Box 3 (Jadwal Kuliah) -->
    <div class="content-box content-box-jadwal">
      <div class="navigation">
        <button id="prev-btn">&lt;</button>
        <span id="academic-year">2024/2025 Ganjil</span>
        <button id="next-btn">&gt;</button>
      </div>
      <table class="jadwal-table">
        <thead>
          <tr>
            <th>Hari</th>
            <th>Jam</th>
            <th>Kode Mata Kuliah</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Dosen</th>
          </tr>
        </thead>
        <tbody id="jadwal-body">
          <script src="{{ asset('template') }}//js/mahasiswa/jadwal-kuliah-mahasiswa.js"></script>
        </tbody>
      </table>
@endsection