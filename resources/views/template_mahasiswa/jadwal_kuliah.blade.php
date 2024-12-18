<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jadwal Kuliah</title>
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
        content: "\f0d7"; /* Simbol segitiga kebawah (menggunakan FontAwesome) */
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        margin-left: 5px;
      }
      /* Style untuk icon gambar di kiri teks */
      .icon {
        width: 20px; /* Ukuran icon kecil */
        height: 20px;
        margin-right: 10px; /* Jarak antara icon dan teks */
        vertical-align: middle; /* Agar icon sejajar dengan teks */
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
        margin-top: 80px; /* Memberikan jarak dari navbar */
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
      }

      /* Gaya khusus untuk content box mahasiswa */
      .content-box-mahasiswa {
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

      /* Grid untuk memastikan titik dua sejajar */
      .content-box-mahasiswa .info {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
      }

      /* Menambahkan lebar tetap pada kolom label agar titik dua sejajar */
      .content-box-mahasiswa .info strong {
        width: 150px; /* Menentukan lebar tetap untuk label */
        text-align: left;
        font-weight: bold;
        font-family: "Poppins", sans-serif; /* Menggunakan font Poppins */
        color: #2a356b; /* Mengubah warna font */
      }

      /* Menjaga jarak titik dua dan nilai */
      .content-box-mahasiswa .info span {
        margin-left: 5px;
        color: #2a356b; /* Mengubah warna font */
      }

      /* Untuk kolom kiri */
      .content-box-mahasiswa .left-column {
        flex: 1;
      }

      /* Untuk kolom kanan */
      .content-box-mahasiswa .right-column {
        text-align: right;
        flex: 1;
      }
      /* Content Box Jadwal */
      .content-box-jadwal {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        width: 1050px;
        max-width: 1200px;
        margin: 0 auto;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column; /* Menata elemen secara vertikal */
        align-items: center; /* Menjaga semua konten agar berada di tengah */
        padding-top: 10px;
        margin-left: 310px;
        margin-bottom: 20px;
        min-height: auto;
      }
      #academic-year {
        margin: 0;
        font-weight: bold;
        white-space: nowrap; /* Mencegah teks terpotong atau dibungkus ke baris berikutnya */
        overflow: hidden;
        font-family: "Poppins", sans-serif;
        color: #2a356b; /* Menghindari overflow */
      }
      #prev-btn,
      #next-btn {
        background: none; /* Menghilangkan background */
        color: #2a356b; /* Mengubah warna teks tombol */
        border: none; /* Menghilangkan border jika tidak diinginkan */
        font-size: 40px; /* Ukuran font untuk tombol */
        padding: 10px 20px; /* Ukuran padding tombol */
        cursor: pointer; /* Menampilkan pointer saat hover */
      }
      #prev-btn {
        margin-right: 350px; /* Memberikan jarak antara tombol prev dan teks bulan/tahun */
      }

      #next-btn {
        margin-left: 350px; /* Memberikan jarak antara tombol next dan teks bulan/tahun */
      }
      #prev-btn:hover,
      #next-btn:hover {
        color: #fcb248; /* Warna saat hover */
      }

      /* Navigation */
      .content-box-jadwal .navigation {
        display: flex;
        justify-content: center; /* Menata tombol dan teks tahun ajaran di tengah */
        align-items: center;
        margin-bottom: 20px;
        gap: 20px; /* Memberikan jarak antara tombol dan teks */
      }

      .content-box-jadwal .navigation button {
        background-color: transparent; /* Menghapus background tombol */
        color: #2a356b; /* Warna ikon */
        border: none; /* Menghapus border tombol */
        font-size: 1.5em; /* Ukuran font lebih besar untuk ikon */
        cursor: pointer;
        padding: 8px 16px; /* Memberikan sedikit padding untuk menambah klik area */
        display: flex; /* Agar ikon di tengah */
        justify-content: center;
        align-items: center;
      }

      .content-box-jadwal .navigation #academic-year {
        font-size: 1.2em;
        font-weight: bold;
        color: #2a356b;
      }

      /* Table Styling */
      .content-box-jadwal .jadwal-table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
        font-family: "Inter", sans-serif;
        color: #2a356b;
        border: 2px solid #2a356b; /* Garis border tabel luar */
      }

      .content-box-jadwal .jadwal-table th,
      .content-box-jadwal .jadwal-table td {
        border: 2px solid #2a356b;
        padding: 15px 15px;
        text-align: center;
        color: #2a356b; /* Mengubah warna teks menjadi #2A356B */
        font-family: "Inter", sans-serif;
      }

      .content-box-jadwal .jadwal-table th {
        background-color: white;
        color: #2a356b;
        font-family: "Inter", sans-serif;
      }

      .content-box-jadwal .jadwal-table td {
        color: #2a356b;
        font-family: "Inter", sans-serif;
      }
      /* Media Queries untuk Responsivitas */

      /* Untuk tampilan layar kecil seperti ponsel (max-width: 768px) */
      @media (max-width: 768px) {
        body {
          flex-direction: column;
        }

        .navbar {
          left: 0;
          right: 0;
          padding: 10px;
        }

        .navbar .navbar-brand img {
          width: 30px;
          height: 30px;
        }

        .sidebar {
          width: 100%;
          position: relative;
          padding: 15px;
          top: 0;
          left: 0;
          bottom: auto;
          display: none; /* Sembunyikan sidebar di perangkat kecil */
        }

        .content {
          margin-left: 0;
          padding: 15px;
        }

        .content-box,
        .content-box-mahasiswa,
        .content-box-jadwal {
          width: 100%;
          max-width: none;
          margin-left: 0;
        }

        /* Menampilkan sidebar saat tombol menu ditekan */
        .sidebar.active {
          display: block;
        }

        .content-box-mahasiswa {
          display: block;
          padding: 10px;
        }

        /* Memperbaiki tampilan tabel jadwal */
        .content-box-jadwal .jadwal-table th,
        .content-box-jadwal .jadwal-table td {
          padding: 10px;
        }

        .content-box-jadwal .navigation {
          flex-direction: column;
          gap: 10px;
        }

        #prev-btn,
        #next-btn {
          font-size: 30px;
        }

        .profile-section img {
          width: 80px;
          height: 80px;
        }

        /* Menyembunyikan nama universitas di navbar untuk perangkat kecil */
        .navbar .navbar-brand .university-name {
          display: none;
        }
      }

      /* Untuk tampilan tablet (max-width: 1024px) */
      @media (max-width: 1024px) {
        .content-box-mahasiswa {
          flex-direction: column;
        }

        .content-box-mahasiswa .left-column,
        .content-box-mahasiswa .right-column {
          flex: none;
          width: 100%;
          text-align: left;
        }

        .navbar {
          padding: 15px;
        }

        .content {
          margin-left: 0;
        }

        .content-box-jadwal .navigation {
          gap: 15px;
        }

        .content-box-jadwal .jadwal-table th,
        .content-box-jadwal .jadwal-table td {
          padding: 12px;
        }

        #prev-btn,
        #next-btn {
          font-size: 35px;
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

    <!-- Bootstrap JS dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
