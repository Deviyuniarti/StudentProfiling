<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas Kuliah</title>
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
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: center;
        align-items: flex-start;
        padding-top: 30px;
        min-height: auto;
        font-family: "Inter", sans-serif;
        margin-top: 0;
      }
      .content-box-grafik {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        width: 1050px;
        max-width: 1200px;
        margin: 0 auto;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-between; /* Menjaga jarak antara dua kolom */
        align-items: flex-start;
        padding-top: 30px;
        margin-left: 310px;
        margin-bottom: 20px;
        min-height: auto;
      }
      .chart-title {
        position: absolute;
        top: -20px;
        font-weight: bold;
        font-size: 16px;
        text-align: center;
        z-index: 10;
        font-family: "Roboto", sans-serif; /* Menambahkan font Roboto */
        color: #2a356b; /* Mengubah warna font menjadi #2A356B */
      }
      canvas {
        margin-top: 20px; /* Menambahkan jarak antara judul dan grafik */
      }
      .content-box-semester {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        width: 1050px;
        max-width: 1200px;
        margin: 0 auto;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-between; /* Menjaga jarak antara dua kolom */
        align-items: flex-start;
        padding-top: 30px;
        margin-left: 310px;
        margin-bottom: 20px;
        min-height: auto;
      }
      /* Styling untuk Semester Navigation */
      .semester-navigation {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
      }

      .semester {
        padding: 10px 20px;
        color: #2a356b;
        background-color: #fff5e7;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      .semester:hover {
        background-color: #fcb248;
      }

      /* Styling untuk Tabel Matakuliah */
      .table-matakuliah {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
      }
      .table-matakuliah thead th {
        background-color: #fcb248;
        color: #2a356b; /* Opsional: membuat teks menjadi putih agar lebih kontras */
      }

      .table-matakuliah th,
      .table-matakuliah td {
        border: 1px solid #2a356b;
        padding: 8px 12px;
        text-align: center;
        color: #2a356b;
      }

      .table-matakuliah th {
        background-color: #f8f9fa;
      }
      /* Penyesuaian gaya untuk footer tabel */
      /* Penyesuaian gaya untuk footer tabel */
      .table-matakuliah tfoot td {
        text-align: left; /* Untuk meletakkan teks di sebelah kiri */
        font-weight: normal;
      }

      .table-matakuliah tfoot td span {
        font-weight: normal;
        color: #333;
      }
      #total-sks,
      #total-bobot,
      #ip-semester,
      #ipk-kumulatif {
        text-align: center; /* Rata tengah hanya untuk elemen ini */
      }
      /* Untuk layar dengan lebar maksimal 768px (tablet dan ponsel) */
      @media (max-width: 768px) {
        /* Navbar */
        .navbar {
          padding: 10px;
          left: 0;
        }

        .navbar .navbar-brand img {
          width: 30px;
          height: 30px;
        }

        .content {
          margin-left: 0;
          padding: 10px;
        }

        .content-box,
        .content-box-grafik,
        .content-box-semester {
          width: 100%;
          padding: 15px;
        }

        .sidebar {
          width: 200px;
          top: 0;
        }

        .profile-section {
          flex-direction: column;
          margin-bottom: 15px;
        }

        .sidebar a {
          font-size: 14px;
        }

        .semester-navigation {
          flex-direction: column;
        }

        .semester {
          width: 100%;
          margin-bottom: 10px;
        }

        .table-matakuliah {
          font-size: 12px;
        }
      }

      /* Untuk layar dengan lebar maksimal 480px (ponsel) */
      @media (max-width: 480px) {
        .navbar {
          padding: 8px;
        }

        .navbar .navbar-brand img {
          width: 25px;
          height: 25px;
        }

        .sidebar {
          width: 180px;
        }

        .profile-section img {
          width: 80px;
          height: 60px;
        }

        .sidebar a {
          padding: 8px;
          font-size: 12px;
        }

        .content {
          margin-left: 0;
          padding: 8px;
        }

        .content-box,
        .content-box-grafik,
        .content-box-semester {
          width: 100%;
          padding: 10px;
        }

        .semester {
          width: 100%;
          margin-bottom: 8px;
        }

        .table-matakuliah th,
        .table-matakuliah td {
          padding: 6px 8px;
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

    <script src="{{ asset('template') }}/js/mahasiswa/hasil-studi-grafik-mahasiswa.js"></script>
    <script src="{{ asset('template') }}/js/mahasiswa/hasil-studi-semester-mahasiswa.js"></script>

    <!-- Bootstrap JS dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
