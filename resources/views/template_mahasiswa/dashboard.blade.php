<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda Mahasiswa</title>
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
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
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
      .beranda-link {
        background-color: #fcb248; /* Warna latar belakang */
        color: white; /* Warna teks */
        padding: 10px; /* Jarak dalam teks */
        border-radius: 5px; /* Sudut melengkung */
        display: flex; /* Agar teks dan ikon seimbang */
        align-items: center; /* Agar ikon dan teks rata tengah */
      }

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
        padding: 30px;
        width: 1000px; /* Diperlebar menjadi 1200px */
        max-width: 1200px; /* Menambah max-width */
        margin: 0 auto;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: flex-start;
        min-height: 200px;
        margin-bottom: 20px;
      }
      .content-box img {
        width: 190px;
        height: 190px;
        margin-right: 20px;
        object-fit: cover;
        border-radius: 10px;
      }
      .content-box .text-section {
        font-size: 18px;
      }
      /* Mengatur font dan warna untuk teks "Hai, Nama Mahasiswa!" dan "Saat ini Anda berada di Semester 5!" */
      .content-box .text-section .greeting {
        font-family: "Inter", sans-serif; /* Font Inter */
        font-weight: bold; /* Menjadikan teks ini bold */
        font-size: 24px; /* Ukuran font lebih besar */
        color: #2a356b; /* Warna teks #2A356B */
        margin-bottom: 5px; /* Memberikan jarak antara teks ini dan teks selanjutnya */
      }

      .content-box .text-section .welcome {
        font-family: "Inter", sans-serif; /* Font Inter */
        font-weight: normal; /* Teks biasa (tidak bold) */
        font-size: 18px; /* Ukuran font lebih kecil dari greeting */
        color: #2a356b; /* Warna teks #2A356B */
      }

      .graph-container {
        width: 30%; /* Lebar kontainer grafik lebih besar */
        padding: 0px;
        margin-left: 70px; /* Memberikan sedikit jarak kiri */
        margin-top: -30px; /* Mengurangi jarak top agar lebih ke atas */
        display: flex;
        flex-direction: row;
        align-items: flex-start; /* Menyusun elemen secara vertikal di atas */
        justify-content: space-between; /* Menyusun teks penjelasan dan chart sejajar */
        flex-wrap: wrap; /* Membuat elemen bisa membungkus jika terlalu panjang */
      }
      .sks-text {
        position: absolute;
        top: 150px; /* Memberikan jarak yang cukup agar teks tidak menempel langsung */
        font-size: 18px; /* Ukuran font */
        font-weight: bold; /* Menjadikan teks bold */
        color: #2a356b; /* Warna teks */
        z-index: 10; /* Pastikan teks muncul di atas chart */
      }
      .sk-description {
        margin-top: 10px; /* Memberikan jarak antara chart dan deskripsi */
        font-size: 16px; /* Ukuran font */
        font-weight: normal; /* Menjaga teks tidak terlalu tebal */
        color: #2a356b; /* Warna teks */
        margin-left: 50px;
      }

      .canvas-container {
        width: 20%; /* Ukuran canvas */
      }

      canvas {
        width: 100%;
        height: 250px; /* Sesuaikan tinggi grafik */
      }
      /* Styling untuk box IPS dan IPK */
      .score-box {
        margin-top: 20px;
        display: flex;
        gap: 20px;
      }
      /* Mengubah ukuran box IPS dan IPK sesuai permintaan */
      .score-box .box {
        flex: 1;
        background-color: #2a356b; /* Background menjadi #2A356B */
        border: 1px solid #ddd;
        border-radius: 10px; /* Radius sudut 10px */
        padding: 10px 40px; /* Padding top-bottom 10px, left-right 40px */
        text-align: center;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        font-family: "Inter", sans-serif; /* Font Inter */
        display: flex;
        flex-direction: column; /* Menyusun teks secara vertikal */
        justify-content: center; /* Menyusun teks secara vertikal di tengah */
        align-items: center; /* Menyusun teks secara horizontal di tengah */
        width: 123px; /* Lebar box 123px */
        height: 88px; /* Tinggi box 88px */
        margin: 0 auto; /* Membuat box berada di tengah secara horizontal */
      }

      /* Membuat teks IPS dan IPK menjadi bold dan berwarna putih */
      .score-box .box h3 {
        font-weight: bold; /* Membuat teks menjadi bold */
        color: white; /* Warna teks putih */
        margin-bottom: 5px; /* Memberikan jarak antara teks dan nilai */
        font-size: 18px;
        margin-top: 10px; /* Ukuran font teks */
      }

      /* Menyusun nilai IPS dan IPK di bawah teks */
      .score-box .box p {
        font-size: 16px; /* Ukuran font nilai */
        color: white; /* Warna teks putih */
        margin-top: 5px; /* Memberikan jarak antara nilai dan bottom box */
      }

      .calendar-container {
        text-align: center;
        background-color: #f9f9f9;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      }
      body,
      .calendar,
      .calendar-text {
        font-family: "Poppins", sans-serif;
        color: #2a356b;
        font-weight: bold;
      }

      .calendar-header {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-bottom: 15px;
        font-family: "Poppins", sans-serif;
        color: #2a356b;
        font-weight: bold;
        gap: 90px;
      }

      .calendar-table {
        width: 100%;
        border-collapse: collapse;
        height: 300px;
      }

      .calendar-table th,
      .calendar-table td {
        width: 14%;
        height: 50px;
        text-align: center;
        border: 1px solid #ddd;
      }

      .calendar-table th {
        background-color: #f2f2f2;
      }

      .calendar-table td {
        background-color: #fff;
      }

      .calendar-table td:hover {
        background-color: #fcb248;
        cursor: pointer;
      }
      #eventTextBox {
        background-color: #fcb248; /* Warna latar belakang */
        color: #2a356b; /* Warna teks */
        text-align: center; /* Agar teks berada di tengah */
        padding: 10px; /* Jarak di dalam text box */
        font-size: 16px; /* Ukuran font */
        margin-top: 20px; /* Jarak antara kalender dan text box */
        font-weight: bold;
        /* Tebalkan font untuk teks */
      }

      /* CSS untuk tombol Prev dan Next */
      #prevMonth,
      #nextMonth {
        background-color: #fcb248; /* Warna latar belakang */
        color: #2a356b; /* Warna ikon */
        border-radius: 50%; /* Membuat tombol berbentuk lingkaran */
        width: 30px; /* Ukuran tombol */
        height: 30px; /* Ukuran tombol */
        display: flex; /* Menggunakan flexbox untuk memastikan ikon berada di tengah */
        justify-content: center; /* Menyusun ikon di tengah secara horizontal */
        align-items: center; /* Menyusun ikon di tengah secara vertikal */
        border: none; /* Menghapus border default */
        font-size: 20px; /* Ukuran font untuk ikon */
        cursor: pointer; /* Menunjukkan bahwa tombol bisa diklik */
        transition: background-color 0.3s ease, color 0.3s ease; /* Efek transisi untuk interaksi */
      }

      /* CSS untuk efek hover */
      #prevMonth:hover,
      #nextMonth:hover {
        background-color: #2a356b; /* Mengubah latar belakang saat hover */
        color: #fcb248; /* Mengubah warna ikon saat hover */
      }

      .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px; /* Menambahkan jarak antar kolom */
      }

      .col-md-6 {
        flex: 1; /* Membagi ukuran kolom menjadi 2 */
      }
      .calendar-container {
        margin-top: 20px; /* Menambahkan jarak atas pada Kalender Akademik */
      }
      /* Responsiveness: Adjusting layout for smaller screens */
      @media (max-width: 1200px) {
        .navbar {
          left: 0;
          padding: 10px;
        }

        .sidebar {
          width: 200px;
        }

        .content {
          margin-left: 220px;
        }

        .content-box {
          width: 90%;
          max-width: 1000px;
        }

        .graph-container {
          width: 100%;
          flex-direction: column;
          align-items: center;
          margin-left: 0;
        }

        .score-box {
          flex-direction: column;
        }

        .score-box .box {
          width: 100%;
          height: auto;
        }

        .calendar-table th,
        .calendar-table td {
          width: 14%;
        }
      }

      @media (max-width: 768px) {
        .navbar {
          left: 0;
          padding: 10px;
        }

        .sidebar {
          width: 100%;
          height: auto;
        }

        .content {
          margin-left: 0;
        }

        .content-box {
          width: 100%;
          max-width: 100%;
        }

        .graph-container {
          flex-direction: column;
          align-items: center;
        }

        .score-box {
          flex-direction: column;
        }

        .score-box .box {
          width: 100%;
        }

        .calendar-container {
          margin-top: 20px;
        }
        .menu-item.active {
          background-color: #fcb248;
        }
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Sidebar -->
    @include('components.sidebar')
    
    <div class="content">
       @yield('content')
    </div>

    <script src="{{ asset('template') }}/js/mahasiswa/beranda-sks-mahasiswa.js"></script>
    <script src="{{ asset('template') }}/js/mahasiswa/beranda-ips-mahasiswa.js"></script>

    <!-- Bootstrap JS dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
