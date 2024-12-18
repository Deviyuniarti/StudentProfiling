@extends('template_mahasiswa.rekomendasi_karir')

@section('content')
<div class="content-box">
        <div style="flex: 1">
          <h3 style="font-weight: bold">Peluang Karir</h3>
        </div>

        <div style="text-align: right">
          <span>Beranda / Rekomendasi Karir / Peluang Karir</span>
        </div>
      </div>
    </div>

    <!-- Content Box Dua -->
    <div class="content-box-dua">
      <!-- Content Box Kiri -->
      <div class="content-box-kiri">
        <h2>Kepribadian Anda</h2>
        <canvas id="donutChart" width="300" height="200"></canvas>
      </div>

      <!-- Content Box Kanan -->
      <div class="content-box-kanan">
        <h2>Bidang Teratas Anda</h2>
        <table class="tabel-bidang">
          <thead>
            <tr>
              <th>Mata Kuliah Dominan</th>
              <th>Keterampilan</th>
              <th>Minat</th>
            </tr>
          </thead>
          <tbody id="tabelBidangBody">
            <script src="{{ asset('template') }}/js/mahasiswa/peluang-karir-tabelbidang.js"></script>
          </tbody>
        </table>
      </div>
    </div>

    <div class="content-box-tiga">
      <h2>Rekomendasi Karir</h2>
      <div class="table-container">
        <div class="table-box">
          <table>
            <thead>
              <tr>
                <th class="left">Graphic Designer</th>
                <th class="right">
                  <div class="like-container">
                    <span class="like-icon">&#10084;</span>
                    <span class="like-text">Suka</span>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Deskripsi</td>
                <td>
                  Membuat elemen visual untuk branding, iklan, dan media lainnya
                  menggunakan software desain.
                </td>
              </tr>
              <tr>
                <td>Keterampilan<br />Diperlukan</td>
                <td>
                  Prinsip Desain, Desain Branding (logo, identitas visual),
                  Ilustrasi manual dan digital, Pengeditan gambar dan manipulasi
                  foto, Desain untuk cetak (brosur, poster, kemasan), Desain
                  media sosial dan digital marketing.
                </td>
              </tr>
              <tr>
                <td>Tools</td>
                <td>Adobe Illustrator, Photoshop, CorelDRAW, Canva.</td>
              </tr>
              <tr>
                <td>Rencana<br />Pembangunan</td>
                <td>Buat portofolio, pelajari desain logo, dan branding.</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="table-box">
          <table>
            <thead>
              <tr>
                <th class="left">Motion Graphic Artist</th>
                <th class="right">
                  <div class="like-container">
                    <span class="like-icon">&#10084;</span>
                    <span class="like-text">Suka</span>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Deskripsi</td>
                <td>
                  Membuat animasi bergerak untuk video, iklan, atau media
                  digital.
                </td>
              </tr>
              <tr>
                <td>Keterampilan<br />Diperlukan</td>
                <td>
                  Pemahaman prinsip animasi, Pembuatan efek visual (motion blur,
                  particle effects), Animasi 2D dan 3D untuk video, Integrasi
                  audio dan animasi, Storyboarding dan editing video, Desain
                  judul dan intro dinamis.
                </td>
              </tr>
              <tr>
                <td>Tools</td>
                <td>Adobe After Effects, Blender, Cinema 4D, Premiere Pro.</td>
              </tr>
              <tr>
                <td>Rencana<br />Pembangunan</td>
                <td>
                  Ikuti pelatihan animasi, buat video pendek sebagai portofolio.
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="table-container">
        <div class="table-box">
          <table>
            <thead>
              <tr>
                <th class="left">UI/UX Designer</th>
                <th class="right">
                  <div class="like-container">
                    <span class="like-icon">&#10084;</span>
                    <span class="like-text">Suka</span>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Deskripsi</td>
                <td>
                  Merancang antarmuka dan pengalaman pengguna untuk aplikasi
                  atau website.
                </td>
              </tr>
              <tr>
                <td>Keterampilan<br />Diperlukan</td>
                <td>
                  Desain visual dan elemen antarmuka, Wireframing dan
                  prototyping, Pemahaman dasar HTML/CSS, Penelitian pengguna,
                  Pemahaman prinsip desain responsif, Pengetahuan tentang
                  accessibility.
                </td>
              </tr>
              <tr>
                <td>Tools</td>
                <td>Figma, Adobe XD, Sketch, Axure, InVision.</td>
              </tr>
              <tr>
                <td>Rencana<br />Pembangunan</td>
                <td>
                  Ikuti kursus UI/UX, buat portofolio, pelajari prototyping.
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="table-box">
          <table>
            <thead>
              <tr>
                <th class="left">Animator 3D</th>
                <th class="right">
                  <div class="like-container">
                    <span class="like-icon">&#10084;</span>
                    <span class="like-text">Suka</span>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Deskripsi</td>
                <td>Membuat animasi 3D untuk film, video game, atau iklan.</td>
              </tr>
              <tr>
                <td>Keterampilan<br />Diperlukan</td>
                <td>
                  Rigging dan animasi karakter, Simulasi fisik (cairan, rambut,
                  kain), Model 3D dan texturing, Pencahayaan dan rendering untuk
                  realisme, Pemahaman pipeline animasi studio besar.
                </td>
              </tr>
              <tr>
                <td>Tools</td>
                <td>Blender, Autodesk Maya, Cinema 4D, ZBrush.</td>
              </tr>
              <tr>
                <td>Rencana<br />Pembangunan</td>
                <td>
                  Pelajari rigging dan rendering, buat proyek animasi pendek.
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="content-box-empat">
      <h3>Mitra dan Instansi Lembaga Terkait</h3>
      <p class="description">
        Perusahaan terkemuka yang telah bekerja sama dengan Universitas Maxy.
      </p>
      <div class="partner-box-container">
        <div class="partner-box">
          <img src="{{ asset('template') }}/images/gojek.png" alt="Gojek Logo" />
          <p>PT Gojek Indonesia</p>
        </div>
        <div class="partner-box">
          <img src="{{ asset('template') }}/images/ogilvy.png" alt="Ogilvy Logo" />
          <p>PT Ogilvy Indonesia</p>
        </div>
        <div class="partner-box">
          <img src="{{ asset('template') }}/images/visinema.png" alt="Visinema Logo" />
          <p>PT Visinema Pictures</p>
        </div>
        <div class="partner-box">
          <img src="{{ asset('template') }}/images/thelittle.png" alt="The Little  Logo" />
          <p>PT The Little Giantz</p>
        </div>
      </div>
@endsection