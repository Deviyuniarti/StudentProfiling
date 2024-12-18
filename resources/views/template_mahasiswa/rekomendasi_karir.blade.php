<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rekomendasi Karir</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

    <!-- Menambahkan Chart.js untuk grafik -->
    <style>
      body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        font-family: "Inter", sans-serif;
      }
      .navbar {
        background-color: #2a356b;
        padding: 20px 20px;
        border-bottom: 1px solid #ddd;
        position: fixed;
        top: 0;
        left: 250px;
        right: 0;
        z-index: 1000;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      .navbar .navbar-brand {
        display: flex;
        align-items: center;
        color: white;
        text-decoration: none;
      }
      .navbar .navbar-brand div:hover {
        color: #fcb248;
        cursor: pointer; /* Menambahkan pointer cursor untuk menunjukkan bisa diklik */
      }
      .navbar .navbar-brand img {
        width: 40px;
        height: 40px;
        margin-right: 10px;
        border-radius: 0%;
      }
      .navbar .navbar-brand .university-name {
        font-size: 14px;
        margin-top: 5px;
      }
      .brand-name:hover {
        color: #fcb248; /* Warna yang diinginkan */
        /* Menambahkan pointer cursor untuk menunjukkan bisa diklik */
      }
      .navbar .navbar-nav .nav-link {
        color: white;
      }
      .navbar .navbar-nav .nav-link:hover {
        color: #ddd; /* Warna teks saat hover */
      }
      .dropdown-toggle::after {
        content: "";
        display: inline-block;
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 5px solid #fff; /* Warna segitiga kebawah */
        margin-left: 5px; /* Memberikan jarak antara teks dan segitiga */
      }

      /* Style untuk icon gambar di kiri teks */
      .icon {
        width: 20px; /* Ukuran icon kecil */
        height: 20px;
        margin-right: 10px; /* Jarak antara icon dan teks */
        vertical-align: middle; /* Agar icon sejajar dengan teks */
      }

      /* Warna untuk teks dropdown */
      .dropdown-item {
        font-size: 16px; /* Ukuran font */
        display: flex;
        align-items: center;
        margin-bottom: 10px; /* Agar icon dan teks sejajar vertikal */
      }

      /* Warna untuk teks Data Mahasiswa, Aktivitas & Prestasi */
      .dropdown-item:not(.logout) {
        color: #2a356b;
      }

      /* Menyesuaikan dropdown keseluruhan */
      .navbar .dropdown {
        position: relative;
        right: 70px; /* Sesuaikan dengan jarak yang diinginkan dari sisi kanan */
      }

      /* Warna untuk teks Logout */
      .logout {
        color: #c70003;
      }
      .sidebar {
        width: 250px;
        background-color: #ffffff;
        color: white;
        padding: 20px;
        position: fixed;
        top: 0px; /* Memberikan jarak dari navbar */
        bottom: 0;
        left: 0;
        overflow-y: auto;
      }
      .profile-section {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        margin-top: 0px;
        justify-content: center;
      }
      .profile-section img {
        width: 100px;
        height: 80px;
        margin-right: 15px;
        border-radius: 0%;
      }
      .profile-section .name {
        font-weight: bold;
      }
      .sidebar a {
        color: #2a356b;
        text-decoration: none;
        display: flex;
        align-items: center;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
        font-family: "Inter", sans-serif;
        font-weight: bold;
      }

      .sidebar a:hover {
        background-color: #fcb248;
      }
      .sidebar a img {
        width: 20px;
        height: 20px;
        margin-right: 10px;
      }
      /* Memberikan latar belakang warna hanya pada link 'Beranda' */

      .beranda-link img {
        margin-right: 10px; /* Jarak antara ikon dan teks */
      }

      .account-pages {
        font-weight: bold;
        margin-top: 20px;
        margin-bottom: 10px;
      }
      .content {
        margin-left: 270px;
        padding: 20px;
        flex: 1;
        margin-top: 80px;
      }
      .content-box {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        width: 1050px;
        max-width: 1200px;
        margin: 0 auto;
        box-shadow: 0px 4px 8px rgba(166, 125, 125, 0.1);
        display: flex;
        justify-content: center;
        align-items: flex-start;
        padding-top: 30px;
        min-height: auto;
        font-family: "Inter", sans-serif;
        margin-top: 0;
        
      }
      .content-box-dua {
        display: flex;
        justify-content: space-between;
        width: 1050px;
        max-width: 1200px;
        margin-left: 310px;
        margin-top: 0px;
        margin-bottom: 20px;
        gap: 20px;
      }
      .content-box-kiri,
      .content-box-kanan {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        width: 49%; /* Membagi lebar secara rata */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        min-height: 150px; /* Menetapkan tinggi lebih kecil agar tidak terlalu panjang */
        padding-top: 30px;
      }

      .content-box-kiri {
        flex-grow: 1;
        max-width: 35%;
        padding-top: 30px; /* Mengurangi padding atas */
      }

      .chart-wrapper {
        display: flex;
        align-items: center;
        gap: 30px;
        /* Menambahkan sedikit margin-top agar lebih dekat dengan judul */
      }

      .content-box-kanan {
        flex-grow: 2; /* Lebar relatif lebih besar */
        max-width: 65%; /* Menentukan batas maksimal lebar */
      }

      .content-box-kiri h2,
      .content-box-kanan h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 18px;
        color: #2a356b;
        font-family: "Poppins", sans-serif;
      }

      .content-box-kanan table {
        width: 100%;
        border-collapse: collapse;
      }

      .content-box-kanan table th,
      .content-box-kanan table td {
        border: 1px solid #2a356b;
        padding: 10px;
        text-align: center;
        color: #2a356b; /* Ganti warna font teks menjadi #2A356B */
      }

      .content-box-kanan table th {
        background-color: #fcb248;
        font-weight: bold;
        color: #2a356b;
      }

      .content-box-kiri canvas {
        display: block;
        margin: 0 auto;
      }

      .content-box-tiga {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center; /* Menyusun elemen-elemen di tengah secara horizontal */
        width: 1050px;
        max-width: 1200px;
        margin-left: 310px;
        margin-top: 0px;
        margin-bottom: 20px;
        gap: 20px;
        padding: 0 20px;
      }

      .content-box-tiga h2 {
        text-align: center;
        font-size: 20px;
        font-family: "Poppins", sans-serif;
        color: #2a356b;
        margin-top: 20px;
        margin-bottom: 10px; /* Memberikan jarak yang sesuai antara judul dan tabel */
      }

      /* Pastikan perubahan hanya berlaku untuk tabel dalam .table-container */
      .content-box-tiga .table-container {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        height: 100%; /* Menjaga tinggi tabel tetap sama */
        align-items: stretch; /* Menjaga agar semua table-box memiliki tinggi yang sama */
      }

      /* Memastikan tinggi semua table-box sama dalam .table-container */
      .content-box-tiga .table-box {
        flex: 1; /* Agar setiap tabel mengisi ruang yang sama */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }

      /* Menjaga agar tabel dalam .table-container tetap memiliki tinggi yang sama */
      .content-box-tiga .table-box table {
        height: 100%; /* Agar tinggi tabel menyesuaikan dengan tinggi table-box */
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        color: #2a356b;
      }

      /* Menjaga agar garis horizontal di setiap tabel dalam .table-container sejajar */
      .content-box-tiga .table-box td,
      .content-box-tiga .table-box th {
        padding: 10px; /* Padding untuk sel dan header */
        text-align: left;
        border-bottom: 1px solid #ddd;
        /* Garis horizontal bawah */
      }

      /* Mengatur agar teks tidak melampaui batas dalam .table-container */
      .content-box-tiga table thead th {
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
      }

      /* Menjaga agar garis horizontal di dalam tabel dalam .table-container tetap sejajar */
      .content-box-tiga tbody tr:nth-child(even) {
        background-color: #f9f9f9; /* Memberikan warna latar belakang untuk baris genap */
      }

      /* Menjaga agar header tabel dalam .table-container memiliki latar belakang yang konsisten */
      .content-box-tiga thead th {
        background-color: #f1f1f1;
        font-weight: bold;
        border-bottom: 1px solid #ddd;
        padding: 10px;
        text-align: left;
        min-height: 50px;
      }

      /* Agar baris tabel dalam .table-container memiliki jarak yang seragam */
      .content-box-tiga tbody td {
        min-height: 50px;
        padding: 10px;
        border-bottom: 1px solid #ddd;
      }

      /* Mengatur agar teks pada kolom kedua dengan isi panjang lebih rapat ke kiri */
      .content-box-tiga tbody td:nth-child(2) {
        text-align: justify;
        padding-left: 15px; /* Menggeser sedikit ke kiri agar lebih rapih */
        padding-right: 20px; /* Memberikan sedikit ruang di sisi kanan */
        line-height: 1.6;
        /* Jarak antar baris agar nyaman dibaca */
      }

      /* Mengubah warna header tabel pertama dan kedua */
      .table-container:nth-of-type(1) .table-box:nth-of-type(1) thead th {
        background-color: #fcb248;
      }

      .table-container:nth-of-type(1) .table-box:nth-of-type(2) thead th {
        background-color: #fcb248;
      }

      /* Mengubah warna header tabel ketiga dan keempat */
      .table-container:nth-of-type(2) .table-box:nth-of-type(1) thead th {
        background-color: #df4babe5;
      }

      .table-container:nth-of-type(2) .table-box:nth-of-type(2) thead th {
        background-color: #df4babe5;
      }

      .like-container {
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        width: 93px; /* Lebar kotak */
        height: 40px; /* Tinggi kotak */
        padding: 10px; /* Padding internal */
        gap: 10px; /* Jarak antara ikon dan teks */
        background-color: white; /* Background putih */
        border-radius: 10px; /* Sudut melengkung */
        border: 1px solid #ddd; /* Border default */
        margin-left: auto; /* Geser ke kanan */
      }

      .like-container .like-icon {
        font-size: 18px;
        color: #ccc; /* Warna abu-abu */
      }

      .like-container .like-text {
        font-size: 14px;
        color: #ccc; /* Warna abu-abu */
      }

      .like-container.active {
        border: none; /* Hilangkan border saat aktif */
      }

      .like-container.active .like-icon,
      .like-container.active .like-text {
        color: #2a356b; /* Warna biru menyala */
      }

      .like-container:hover {
        background-color: #f9f9f9; /* Background hover */
      }

      /* Pastikan anak elemen tetap menerima klik */
      .like-container * {
        pointer-events: auto;
      }

      .content-box-empat {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center; /* Menyusun elemen-elemen di tengah secara horizontal */
        width: 1050px;
        max-width: 1200px;
        margin-left: 310px;
        margin-top: 5px; /* Menambahkan jarak antara konten box dan elemen sebelumnya */
        margin-bottom: 20px; /* Jarak antara konten box bawah dan elemen di bawahnya */
        gap: 14px;
        padding: 10px;
      }

      .content-box-empat h3 {
        text-align: center;
        font-size: 16px;
        font-family: "Poppins", sans-serif;
        color: #2a356b;
        margin: 10px 0 0 0;
        /* Hanya margin atas yang tersisa */
      }

      .description {
        font-family: "Poppins", sans-serif;
        color: #989898;
        font-size: 13px;
        text-align: center;
        margin: 0;
        line-height: 0;
        margin-bottom: 20px;
      }
      .partner-box-container {
        display: flex;
        justify-content: space-around; /* Mengatur jarak antar box */
        flex-wrap: wrap; /* Supaya responsif jika layar lebih kecil */
        gap: 20px;
        width: 100%;
      }

      .partner-box {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        background-color: #fff;
        border: 1px solid #2a356b;
        border-radius: 5px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        padding: 15px;
        width: 200px;
        text-align: center;
      }

      .partner-box img {
        width: 100px;
        height: 100px;
        object-fit: contain;
        margin-bottom: 10px;
      }

      .partner-box p {
        font-family: "Poppins", sans-serif;
        font-size: 14px;
        color: #000000;
        margin: 0;
      }
      /* Responsif untuk layar dengan lebar lebih kecil dari 1200px */
      @media screen and (max-width: 1200px) {
        .content-box-dua {
          flex-direction: column;
          gap: 10px;
          margin-left: 0;
        }

        .content-box-kiri,
        .content-box-kanan {
          width: 100%;
          max-width: 100%;
        }

        .sidebar {
          width: 220px;
        }

        .content {
          margin-left: 220px;
        }

        .navbar {
          left: 0;
        }
      }

      /* Responsif untuk layar dengan lebar lebih kecil dari 992px */
      @media screen and (max-width: 992px) {
        .navbar {
          padding: 15px;
        }

        .navbar .navbar-brand img {
          width: 35px;
          height: 35px;
        }

        .sidebar {
          width: 200px;
        }

        .content {
          margin-left: 200px;
        }

        .content-box {
          width: 100%;
          margin: 20px 0;
        }

        .content-box-dua {
          margin-left: 0;
          flex-direction: column;
        }

        .content-box-kiri,
        .content-box-kanan {
          width: 100%;
          max-width: 100%;
          padding: 15px;
        }

        .content-box-tiga .table-container {
          flex-direction: column;
        }

        .partner-box-container {
          flex-direction: column;
        }

        .partner-box {
          width: 100%;
          margin-bottom: 20px;
        }

        .navbar .navbar-nav {
          flex-direction: column;
        }
      }

      /* Responsif untuk layar dengan lebar lebih kecil dari 768px */
      @media screen and (max-width: 768px) {
        .navbar {
          padding: 10px;
        }

        .navbar .navbar-brand img {
          width: 30px;
          height: 30px;
        }

        .sidebar {
          width: 180px;
        }

        .content {
          margin-left: 180px;
        }

        .content-box {
          width: 100%;
          padding: 15px;
        }

        .content-box-dua {
          flex-direction: column;
          gap: 10px;
          margin-left: 0;
        }

        .content-box-kiri,
        .content-box-kanan {
          width: 100%;
          max-width: 100%;
          padding: 15px;
        }

        .partner-box-container {
          flex-direction: column;
          gap: 20px;
        }

        .partner-box {
          width: 100%;
        }

        .navbar .navbar-nav {
          flex-direction: column;
        }

        .navbar {
          position: relative;
        }

        .sidebar {
          position: absolute;
          left: -220px;
          top: 0;
          transition: all 0.3s ease-in-out;
        }

        .sidebar.open {
          left: 0;
        }
      }

      /* Responsif untuk layar dengan lebar lebih kecil dari 576px */
      @media screen and (max-width: 576px) {
        .navbar {
          padding: 8px;
        }

        .navbar .navbar-brand img {
          width: 25px;
          height: 25px;
        }

        .sidebar {
          width: 150px;
        }

        .content {
          margin-left: 150px;
        }

        .profile-section img {
          width: 80px;
          height: 60px;
        }

        .content-box {
          padding: 10px;
          margin: 10px 0;
        }

        .content-box-dua {
          flex-direction: column;
        }

        .content-box-kiri,
        .content-box-kanan {
          width: 100%;
          padding: 10px;
        }

        .content-box-tiga {
          padding: 10px;
        }

        .partner-box-container {
          flex-direction: column;
        }

        .partner-box {
          width: 100%;
          margin-bottom: 10px;
        }
      }

      /* Responsif untuk tampilan layar lebih kecil seperti ponsel dengan orientasi portrait */
      @media screen and (max-width: 360px) {
        .navbar {
          padding: 5px;
        }

        .navbar .navbar-brand img {
          width: 20px;
          height: 20px;
        }

        .sidebar {
          width: 120px;
        }

        .content {
          margin-left: 120px;
        }

        .content-box {
          padding: 5px;
        }

        .content-box-dua {
          flex-direction: column;
          margin-left: 0;
        }

        .content-box-kiri,
        .content-box-kanan {
          width: 100%;
          padding: 5px;
        }

        .content-box-tiga {
          padding: 5px;
        }

        .partner-box-container {
          flex-direction: column;
          gap: 15px;
        }

        .partner-box {
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
      @include('components.navbar')

    <!-- Sidebar -->
      @include('components.sidebar')

    <!-- Content -->
    <div class="content">
      @yield('content')
    </div>

    <script src="{{ asset('template') }}/js/mahasiswa/peluang-karir-tabel-rekomendasi.js"></script>
    <script src="{{ asset('template') }}/js/mahasiswa/peluang-karir-chartlingkaran.js"></script>

    <!-- Bootstrap JS dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
