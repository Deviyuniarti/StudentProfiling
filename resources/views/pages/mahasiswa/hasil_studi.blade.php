@extends('template_mahasiswa.hasil_studi')

@section('content')
<div class="content-box">
        <div style="flex: 1">
          <h3 style="font-weight: bold">Hasil Studi</h3>
        </div>

        <div style="text-align: right">
          <span>Beranda / Akademik / Hasil Studi</span>
        </div>
      </div>
    </div>

    <!-- Content Box Kedua untuk Grafik -->
    <div class="content-box-semester">
      <!-- Wrapper untuk Grafik dan Judul -->
      <div
        style="
          position: relative;
          width: 100%;
          display: flex;
          justify-content: center;
          align-items: center;
        "
      >
        <!-- Judul Grafik -->
        <div class="chart-title">
          <h3>Grafik Indeks Prestasi Semester</h3>
        </div>
        <!-- Chart Area -->
        <canvas id="gpaChart" width="600" height="350"></canvas>
      </div>
    </div>

    <!-- Content Box Kedua untuk Semester dan Tabel -->
    <div class="content-box-grafik">
      <div
        style="
          width: 100%;
          display: flex;
          flex-direction: column;
          padding-top: 30px;
        "
      >
        <!-- Kolom Semester (Semester 1 - Semester 8) -->
        <div class="semester-navigation">
          <div class="semester" id="semester1" onclick="changeSemester(1)">
            Semester 1
          </div>
          <div class="semester" id="semester2" onclick="changeSemester(2)">
            Semester 2
          </div>
          <div class="semester" id="semester3" onclick="changeSemester(3)">
            Semester 3
          </div>
          <div class="semester" id="semester4" onclick="changeSemester(4)">
            Semester 4
          </div>
          <div class="semester" id="semester5" onclick="changeSemester(5)">
            Semester 5
          </div>
          <div class="semester" id="semester6" onclick="changeSemester(6)">
            Semester 6
          </div>
          <div class="semester" id="semester7" onclick="changeSemester(7)">
            Semester 7
          </div>
          <div class="semester" id="semester8" onclick="changeSemester(8)">
            Semester 8
          </div>
        </div>

        <!-- Tabel untuk Data Matakuliah -->
        <table class="table-matakuliah">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode</th>
              <th>Nama Matakuliah</th>
              <th>SKS</th>
              <th>Grade</th>
              <th>Nilai Mutu</th>
              <th>Bobot</th>
            </tr>
          </thead>
          <tbody id="semester-data">
            <!-- Data akan dimasukkan melalui JavaScript -->
          </tbody>
          <tfoot>
            <!-- Baris Total SKS hanya berada di kolom SKS -->
            <tr>
              <td colspan="3"><strong>Total</strong></td>
              <td id="total-sks"></td>
              <!-- Kolom Total SKS -->
              <td></td>
              <!-- Kosongkan kolom Grade -->
              <td></td>
              <!-- Kosongkan kolom Nilai Mutu -->
              <td id="total-bobot"></td>
              <!-- Kolom Total Bobot -->
            </tr>
            <!-- Baris Indeks Prestasi Semester hanya berada di kolom Bobot -->
            <tr>
              <td colspan="5">
                <strong>Indeks Prestasi Semester</strong>
              </td>
              <td></td>
              <!-- Kosongkan kolom Grade dan Nilai Mutu -->
              <td id="ip-semester"></td>
              <!-- Kolom IPS -->
            </tr>
            <!-- Baris Indeks Prestasi Kumulatif hanya berada di kolom Bobot -->
            <tr>
              <td colspan="5">
                <strong>Indeks Prestasi Kumulatif</strong>
              </td>
              <td></td>
              <!-- Kosongkan kolom Grade dan Nilai Mutu -->
              <td id="ipk-kumulatif"></td>
              <!-- Kolom IPK -->
            </tr>
          </tfoot>
        </table>
      </div>
@endsection
