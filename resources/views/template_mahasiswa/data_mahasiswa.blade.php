<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Mahasiswa</title>
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
      }

      .content-box-dua {
        display: flex;
        justify-content: space-between;
        width: 1050px;
        max-width: 1200px;
        margin-left: 290px;
        margin-bottom: 45px;
        gap: 20px;
        align-items: flex-start;
        min-height: auto;
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
        max-width: 19%;
        padding-top: 30px; /* Mengurangi padding atas */
      }

      .content-box-kanan {
        flex-grow: 2; /* Lebar relatif lebih besar */
        max-width: 81%;
        display: flex;
        justify-content: space-between;
        padding-top: 10px;
      }

      /* Profil Image */
      .profil-gambar {
        position: relative;
        display: flex;
        justify-content: center; /* Memastikan gambar berada di tengah secara horizontal */
        align-items: center;
        width: 150px;
        height: 150px;
        border-radius: 50%; /* Membuat gambar bulat */
        overflow: hidden;
        background-color: #ddd; /* Background jika gambar tidak ada */
      }

      .gambar-bulat {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Memastikan gambar terpotong dengan baik dalam lingkaran */
      }

      .teks-kiri,
      .teks-kanan {
        padding-top: 15px; /* Menambahkan padding atas untuk memberi jarak */
      }

      .teks-kiri {
        padding-left: 20px; /* Memberikan jarak antara teks dan garis vertikal kiri */
      }

      /* Grid untuk memastikan titik dua sejajar */
      .content-box-kanan .info {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
      }

      /* Menambahkan lebar tetap pada kolom label agar titik dua sejajar */
      .content-box-kanan .info strong {
        width: 150px; /* Menentukan lebar tetap untuk label */
        text-align: left;
        font-weight: bold;
        font-family: "Poppins", sans-serif; /* Menggunakan font Poppins */
        color: #2a356b;
        white-space: nowrap; /* Mengubah warna font */
      }

      .content-box-kanan .teks-kanan .info span {
        margin-left: -40px; /* Pastikan span tidak terpengaruh margin pada strong */
        color: #2a356b;
        white-space: nowrap;
      }

      /* Menjaga jarak titik dua dan nilai */
      .content-box-kanan .info span {
        margin-left: 25px;
        color: #2a356b;
        white-space: nowrap; /* Mengubah warna font */
      }

      /* Untuk kolom kiri */
      .content-box-kanan .teks-kiri {
        flex: 1;
      }

      /* Untuk kolom kanan */
      .content-box-kanan .teks-kanan {
        text-align: right;
        flex: 1;
      }

      .content-box-tiga {
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
        margin-left: 290px;
        margin-bottom: 20px;
        margin-top: -25px;
        min-height: auto;
      }

      /* Wrapper untuk container content box */
      .content-box-wrapper {
        display: flex;
        gap: 10px;
        justify-content: center;
        margin-top: 20px;
      }

      /* Styling untuk content box */
      .content-box-kecil {
        width: 250px;
        height: 49px;
        background-color: #fff5e7;
        border-radius: 10px;
        padding: 15px 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s ease;
        color: #2a356b; /* Warna teks */
        font-family: "Inter", sans-serif;
        margin-bottom: 20px; /* Font Inter */
      }

      /* Menandakan content box yang aktif */
      .content-box-kecil.active {
        background-color: #fcb248;
      }

      /* Styling tambahan jika diperlukan */
      .content-box-kecil:hover {
        background-color: #f7b33e;
      }
      /* Styling tabel */
      .content-table {
        width: 100%;
        margin-top: 20px;
      }

      .content-table table {
        width: 90%;
        margin: 0 auto;
        border-collapse: collapse;
        margin-bottom: 20px;
      }

      .content-table td {
        padding: 10px 15px;
        border-bottom: 1px solid #ddd;
      }

      .content-table input {
        width: 100%;
        border: none;
        border-bottom: 1px solid #ccc;
        padding: 5px;
        font-size: 16px;
      }

      .content-table input:focus {
        outline: none;
        border-bottom: 2px solid #007bff;
      }

      .biodata-table {
        margin-top: 30px;
        display: flex;
        flex-direction: column; /* Pastikan elemen-elemen dalam tabel ditata secara vertikal */
        position: relative; /* Agar tombol simpan bisa diposisikan relatif terhadap kontainer ini */
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%; /* Sesuaikan lebar dengan parent (content-box-tiga) */
        max-width: 1050px; /* Mengikuti max-width content-box-tiga */
        margin: 0 auto; /* Center alignment */
        justify-content: flex-start; /* Untuk memastikan tombol tetap berada di bawah */
      }

      .biodata-table .form-container {
        display: flex;
        justify-content: space-between;
        gap: 20px;
      }

      .biodata-table .form-column {
        flex: 1;
      }

      .biodata-table .form-column div {
        margin-bottom: 15px;
      }

      .biodata-table label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        font-size: 16px;
        color: #2a356b;
      }

      .biodata-table input {
        width: 100%;
        border: none;
        border-bottom: 2px solid #ccc;
        padding: 5px;
        font-size: 15px;
        outline: none;
        transition: border-color 0.3s;
        color: #2a356b;
      }

      .biodata-table input:focus {
        border-bottom: 2px solid #007bff;
      }

      .btn-simpan {
        margin-top: 20px;
        align-self: flex-end; /* Posisi tombol di kanan */
        background-color: #fcb248;
        color: #2a356b;
        border: none;
        padding: 10px 40px;
        border-radius: 10px;
        cursor: pointer;
        font-size: 15px;
        transition: background-color 0.3s;
        font-family: "Inter", sans-serif;
        font-weight: bold;
      }

      .btn-simpan:hover {
        background-color: #2a356b;
        color: #fcb248;
      }
      /* Base styling for body, navbar, sidebar, etc. (no changes needed here) */

      /* Responsif untuk layar kecil */
      @media (max-width: 768px) {
        .navbar {
          left: 0;
          right: 0;
          padding: 10px;
          flex-direction: column;
        }

        .sidebar {
          width: 100%;
          position: relative;
          top: auto;
          left: 0;
          bottom: auto;
          margin-top: 60px; /* Memberikan jarak dari navbar */
        }

        .content {
          margin-left: 0;
          padding: 10px;
          margin-top: 100px; /* Menambahkan margin top agar konten tidak tertutup navbar */
        }

        .content-box-dua,
        .content-box-kiri,
        .content-box-kanan {
          width: 100%;
          margin: 0;
          padding: 10px;
          box-sizing: border-box;
        }

        .content-box-kanan .info strong {
          width: 120px;
        }

        .profile-section {
          flex-direction: column;
          align-items: center;
          margin-bottom: 20px;
        }

        .profile-section img {
          width: 80px;
          height: 80px;
          margin-bottom: 10px;
        }

        .content-box-tiga {
          width: 100%;
          margin-left: 0;
          margin-top: 20px;
          padding: 15px;
        }

        .content-box-wrapper {
          flex-direction: column;
          align-items: center;
        }

        .content-box-kecil {
          width: 100%;
          margin-bottom: 10px;
          padding: 15px;
          text-align: center;
        }

        .content-table input {
          padding: 5px;
          font-size: 14px;
        }

        .biodata-table .form-container {
          flex-direction: column;
          gap: 10px;
        }

        .biodata-table .form-column {
          width: 100%;
        }

        .btn-simpan {
          width: 100%;
          padding: 10px;
          font-size: 14px;
        }
      }

      /* Responsif untuk tablet */
      @media (max-width: 1024px) {
        .navbar {
          left: 0;
          right: 0;
          padding: 15px;
        }

        .sidebar {
          width: 200px;
          position: relative;
          top: 0;
          bottom: 0;
          margin-top: 60px;
        }

        .content {
          margin-left: 220px;
          padding: 15px;
        }

        .content-box-dua {
          flex-direction: column;
          gap: 20px;
        }

        .content-box-kiri,
        .content-box-kanan {
          width: 100%;
        }

        .content-box-kanan {
          display: block;
        }

        .profile-section {
          margin-top: 20px;
        }

        .content-box-tiga {
          width: 100%;
          margin-left: 0;
          margin-top: 20px;
        }

        .content-box-wrapper {
          flex-direction: column;
        }

        .content-box-kecil {
          width: 100%;
        }

        .content-table input {
          padding: 5px;
          font-size: 14px;
        }

        .btn-simpan {
          width: 100%;
          padding: 10px;
          font-size: 14px;
        }
      }

      /* Responsif untuk layar besar (desktop) */
      @media (min-width: 1200px) {
        .navbar {
          padding: 20px;
          flex-direction: row;
        }

        .sidebar {
          width: 250px;
        }

        .content {
          margin-left: 270px;
          padding: 20px;
        }

        .content-box-dua {
          flex-direction: row;
          gap: 20px;
        }

        .content-box-kiri,
        .content-box-kanan {
          width: 49%;
        }

        .content-box-kanan {
          display: flex;
          justify-content: space-between;
        }

        .content-box-tiga {
          width: 1050px;
          margin-left: 290px;
        }

        .content-box-wrapper {
          gap: 10px;
          justify-content: center;
        }

        .content-box-kecil {
          width: 250px;
          height: 49px;
          padding: 15px 10px;
        }
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
      @include('components_mahasiswa.navbar')
    <!-- Sidebar -->
      @include('components_mahasiswa.sidebar')

    <!-- Content -->
    <div class="content">
      @yield('content')
    </div>

    <script src="{{ asset('template') }}/js/mahasiswa/data-mahasiswa.js"></script>

    <!-- Bootstrap JS dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
