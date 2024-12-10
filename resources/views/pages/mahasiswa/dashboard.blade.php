@extends('template_mahasiswa.dashboard')

@section('content')
<!-- Content Box 1 -->
<div class="content-box box-1">
        <img src="{{ asset('template') }}/images/Group.png" alt="Foto Profil" />
        <div class="text-section">
          <div class="greeting">Halo,{{ Auth::user()->name }}!</div>
          <div class="welcome">Saat ini Anda berada di Semester {{ Auth::user()->semester }} </div>

          <!-- Box IPS dan IPK -->
          <div class="score-box">
              <div class="box">
                  <h3>IPS</h3>
                  <p>{{ $ipk->ips ?? '0,00' }}</p> <!-- Tampilkan nilai IPS atau 0,00 jika tidak ada -->
              </div>
              <div class="box">
                  <h3>IPK</h3>
                  <p>{{ $ipk->ipk ?? '4,00' }}</p> <!-- Tampilkan nilai IPK atau 4,00 jika tidak ada -->
              </div>
          </div>
        </div>
        <div class="graph-container">
          <div class="sks-text">Total 20 SKS</div>
          <canvas id="mataKuliahChart"></canvas>
          <div class="sk-description">Terdiri dari 1-3 SKS</div>
        </div>
      </div>

      <!-- Content Box 2 -->
      <div class="content-box box-2">
        <div class="row">
          <!-- Jadwal Kuliah -->
          <div class="col-md-6">
            <h4
              class="text-center"
              style="
                font-weight: bold;
                color: #2a356b;
                font-family: 'Inter', sans-serif;
              "
            >
              Jadwal Kuliah Semester 5
            </h4>

            <div class="table-responsive">
              <table
                class="table table-bordered text-center align-middle"
                style="font-family: 'Inter', sans-serif; color: #2a356b"
              >
                <thead class="table-light">
                  <tr>
                    <th style="border: 1px solid #2a356b">Hari</th>
                    <th style="border: 1px solid #2a356b">Jam</th>
                    <th style="border: 1px solid #2a356b">Mata Kuliah</th>
                    <th style="border: 1px solid #2a356b">Dosen</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td rowspan="2" style="border: 1px solid #2a356b">Senin</td>
                    <td style="border: 1px solid #2a356b">07.00 - 09.00</td>
                    <td style="border: 1px solid #2a356b">Basis Data</td>
                    <td style="border: 1px solid #2a356b">El S.Kom, M.Kom</td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #2a356b">09.00 - 12.00</td>
                    <td style="border: 1px solid #2a356b">UI/UX</td>
                    <td style="border: 1px solid #2a356b">
                      Cipung S.Kom, M.Kom
                    </td>
                  </tr>
                  <tr>
                    <td rowspan="2" style="border: 1px solid #2a356b">
                      Selasa
                    </td>
                    <td style="border: 1px solid #2a356b">07.00 - 09.00</td>
                    <td style="border: 1px solid #2a356b">Desain Grafis</td>
                    <td style="border: 1px solid #2a356b">
                      Gempi S.Kom, M.Kom
                    </td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #2a356b">09.00 - 12.00</td>
                    <td style="border: 1px solid #2a356b">Pemrograman Web</td>
                    <td style="border: 1px solid #2a356b">
                      Isan Cupang S.Kom, M.Kom
                    </td>
                  </tr>
                  <tr>
                    <td rowspan="2" style="border: 1px solid #2a356b">Rabu</td>
                    <td style="border: 1px solid #2a356b">07.00 - 09.00</td>
                    <td style="border: 1px solid #2a356b">Animasi 2D & 3D</td>
                    <td style="border: 1px solid #2a356b">Abe S.Kom, M.Kom</td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #2a356b">09.00 - 12.00</td>
                    <td style="border: 1px solid #2a356b">Sistem Multimedia</td>
                    <td style="border: 1px solid #2a356b">
                      Ritsuki S.Kom, M.Kom
                    </td>
                  </tr>
                  <tr>
                    <td rowspan="2" style="border: 1px solid #2a356b">Kamis</td>
                    <td style="border: 1px solid #2a356b">07.00 - 09.00</td>
                    <td style="border: 1px solid #2a356b">Jaringan Komputer</td>
                    <td style="border: 1px solid #2a356b">
                      Natsuki S.Kom, M.Kom
                    </td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #2a356b">09.00 - 12.00</td>
                    <td style="border: 1px solid #2a356b">
                      Komputer & Masyarakat
                    </td>
                    <td style="border: 1px solid #2a356b">
                      Gea Davids S.Kom, M.Kom
                    </td>
                  </tr>
                  <tr>
                    <td rowspan="2" style="border: 1px solid #2a356b">Jumat</td>
                    <td style="border: 1px solid #2a356b">07.00 - 09.00</td>
                    <td style="border: 1px solid #2a356b">Game</td>
                    <td style="border: 1px solid #2a356b">
                      Jinji S.Kom, M.Kom
                    </td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #2a356b">09.00 - 11.00</td>
                    <td style="border: 1px solid #2a356b">Citra Digital</td>
                    <td style="border: 1px solid #2a356b">
                      Ehsan S.Kom, M.Kom
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- Bagian kanan (IPS chart dan Kalender Akademik) -->
          <div class="col-md-6">
            <!-- Grafik Chart IPS -->
            <div class="chart-container">
              <h4 class="text-center">Grafik Indeks Prestasi Semester</h4>
              <canvas id="ipsChart" width="400" height="250"></canvas>
            </div>
            <!-- Kalender Akademik -->
            <div class="calendar-container mt-4">
              <h4 class="text-center">Kalender Akademik</h4>
              <div class="calendar-container">
                <div class="calendar-header">
                  <button id="prevMonth" class="btn btn-sm btn-warning">
                    &lt;
                  </button>
                  <span id="monthYear"></span>
                  <button id="nextMonth" class="btn btn-sm btn-warning">
                    &gt;
                  </button>
                </div>
                <table class="calendar-table">
                  <thead>
                    <tr>
                      <th>Mo</th>
                      <th>Tu</th>
                      <th>We</th>
                      <th>Th</th>
                      <th>Fr</th>
                      <th>Sa</th>
                      <th>Su</th>
                    </tr>
                  </thead>
                  <tbody id="calendarBody">
                    <!-- Generated by JavaScript -->
                    <script src="{{ asset('template') }}/js/mahasiswa/kalender-mahasiswa.js"></script>
                  </tbody>
                </table>
                <div id="eventTextBox" class="event-text-box">
                  Pelaksanaan UTS
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection