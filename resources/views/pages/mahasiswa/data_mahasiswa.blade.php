@extends('template_mahasiswa.data_mahasiswa')

@section('content')
<div class="content-box">
        <div style="flex: 1">
          <h3 style="font-weight: bold">Data Mahasiswa</h3>
        </div>

        <div style="text-align: right">
          <span>profil / Data Mahasiswa</span>
        </div>
      </div>
    </div>

    <!-- Content Box Dua -->
    <div class="content-box-dua">
      <div class="content-box-kiri">
        <div class="profil-gambar">
          <img
            src="{{ asset('template') }}/images/image.png"
            alt="Profil Gambar"
            class="gambar-bulat"
          />
        </div>
      </div>

      <div class="content-box-kanan">
        <div class="teks-kiri">
          <div class="info"><strong>Nama</strong><span>:  {{ Auth::user()->name }}</span></div>
          <div class="info"><strong>Nim</strong><span>: 202139401</span></div>
          <div class="info">
            <strong>Periode Masuk</strong><span>: 2022</span>
          </div>
          <div class="info">
            <strong>Status Mahasiswa</strong><span>: Aktif</span>
          </div>
        </div>
        <div class="teks-kanan">
          <div class="info">
            <strong>Jurusan</strong><span>: Teknik Informatika</span>
          </div>
          <div class="info">
            <strong>Prodi</strong
            ><span>: S1 Teknologi Informatika Multimedia</span>
          </div>
          <div class="info"><strong>Kelas</strong><span>: Pagi</span></div>
        </div>
      </div>
    </div>

    <div class="content-box-tiga">
      <div class="content-box-wrapper">
        <div
          class="content-box-kecil active"
          id="data-diri"
          onclick="showTable('data-diri')"
        >
          Data Diri
        </div>
        <div
          class="content-box-kecil"
          id="data-orang-tua"
          onclick="showTable('data-orang-tua')"
        >
          Data Orang Tua
        </div>
        <div
          class="content-box-kecil"
          id="data-wali"
          onclick="showTable('data-wali')"
        >
          Data Wali
        </div>
        <div
          class="content-box-kecil"
          id="riwayat-pendidikan"
          onclick="showTable('riwayat-pendidikan')"
        >
          Riwayat Pendidikan
        </div>
      </div>

      <div id="content-table" class="biodata-table"></div>
@endsection