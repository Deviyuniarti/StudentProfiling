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
      .content-box-dua {
        display: flex;
        justify-content: space-between;
        width: 1050px;
        max-width: 1200px;
        margin-left: 310px;
        margin-top: 0px;
        margin-bottom: 20px;
      }

      .content-box-kiri,
      .content-box-kanan {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        width: 49%; /* Membagi lebar secara rata */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        font-family: "Inter", sans-serif;
        min-height: 150px; /* Menetapkan tinggi lebih kecil agar tidak terlalu panjang */
        padding-top: 30px;
      }

      .content-box-kiri {
        font-family: "Poppins", sans-serif; /* Menggunakan Poppins font */
        color: #2a356b; /* Mengatur warna teks menjadi #2A356B */
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        width: 49%;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        min-height: 150px;
        padding-top: 30px;
      }
      .content-box-kanan {
        font-family: "Poppins", sans-serif; /* Menggunakan Poppins font */
        color: #2a356b; /* Mengatur warna teks menjadi #2A356B */
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        width: 49%;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        min-height: 150px;
        padding-top: 30px;
      }
      /* Styling for the header section in the left box */
      .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .header h2 {
        margin: 0;
        font-size: 24px;
        font-weight: bold;
      }

      /* Styling untuk Deadline box */
      .deadline-box {
        background-color: #ffc9c9; /* Background warna #FFC9C9 */
        color: #ff6264; /* Teks warna #FF6264 */
        padding: 5px 10px; /* Memberikan padding di sekitar teks */
        border-radius: 5px; /* Membuat sudut melengkung */
        font-weight: bold; /* Membuat teks lebih tebal */
        display: inline-block;
        font-family: "Inter", sans-serif; /* Membuat teks tetap dalam satu baris */
      }
      /* Mengubah styling deadline pada content-box-kanan */
      .content-box-kanan .deadline-box {
        background-color: #ffdcab; /* Mengubah background menjadi #FFDCAB */
        color: #c07204;
        font-family: "Inter", sans-serif; /* Mengubah warna font menjadi #C07204 */
      }

      .tanggal {
        font-size: 14px;
        color: #2a356b;
        font-family: "Inter", sans-serif;
      }

      /* Styling for the details below the header */
      .details {
        margin-top: 20px;
      }

      .detail-item {
        margin-bottom: 10px;
        display: flex;
        align-items: center; /* Menjaga label dan teks sejajar secara vertikal */
      }

      .detail-item strong {
        font-weight: bold;
        display: inline-block;
        min-width: 150px; /* Menjaga lebar strong konsisten */
        position: relative; /* Membutuhkan posisi relatif untuk penempatan titik dua */
      }

      .detail-item strong::after {
        content: ":"; /* Menambahkan titik dua setelah teks */
        position: absolute;
        right: 0; /* Memastikan titik dua berada di sebelah kanan */
      }

      .detail-item span {
        margin-left: 5px;
        font-family: "Inter", sans-serif; /* Memberikan jarak antara titik dua dan teks */
      }

      .content-box-dua a {
        color: #fcb248;
        text-decoration: underline;
      }

      .content-box-tiga a {
        color: #fcb248;
        text-decoration: underline;
      }

      .content-box-tiga {
        display: flex;
        justify-content: space-between;
        width: 1050px;
        max-width: 1200px;
        margin-left: 310px;
        margin-top: 0px;
        margin-bottom: 20px;
      }

      /* Styling khusus untuk deadline-box dalam content-box-kiri pada content-box-tiga */
      .content-box-tiga .content-box-kiri .deadline-box {
        background-color: #ffdcab; /* Mengubah background menjadi #FFDCAB */
        color: #c07204;
        font-family: "Inter", sans-serif; /* Mengubah warna font menjadi #C07204 */
      }
      .content-box-tiga .content-box-kanan .deadline-box {
        background-color: #c9daff; /* Mengubah background menjadi #FFDCAB */
        color: #2a356b;
        font-family: "Inter", sans-serif; /* Mengubah warna font menjadi #C07204 */
      }

      .content-box-kiri {
        padding-top: 30px;
      }

      .content-box-kanan {
        padding-top: 30px;
      }
      /* Media Queries untuk layar dengan lebar maksimal 1200px */
      @media (max-width: 1200px) {
        .content-box,
        .content-box-dua,
        .content-box-tiga {
          width: 90%;
          max-width: 100%;
          margin-left: 5%;
          margin-right: 5%;
        }

        .content-box-kiri,
        .content-box-kanan {
          width: 100%;
          margin-bottom: 20px;
        }

        .navbar {
          left: 0; /* Memperbaiki navbar agar menyentuh sisi kiri layar pada perangkat kecil */
          right: 0;
        }

        .sidebar {
          width: 100%;
          height: auto;
          position: relative;
          padding: 10px;
        }

        .content {
          margin-left: 0;
          margin-top: 80px; /* Agar konten tidak tertutup oleh navbar */
        }

        .profile-section img {
          width: 80px;
          height: 60px;
        }

        .content-box-dua {
          flex-direction: column;
        }

        .content-box-kiri,
        .content-box-kanan {
          width: 100%;
        }
      }

      /* Media Queries untuk layar dengan lebar maksimal 768px */
      @media (max-width: 768px) {
        .navbar {
          padding: 15px 10px;
          flex-direction: column;
          align-items: flex-start;
        }

        .navbar .navbar-brand {
          display: block;
          margin-bottom: 10px;
        }

        .content {
          margin-left: 0;
          padding: 10px;
        }

        .content-box,
        .content-box-dua,
        .content-box-tiga {
          width: 100%;
          margin-left: 0;
        }

        .content-box-kiri,
        .content-box-kanan {
          width: 100%;
        }

        .sidebar {
          width: 100%;
          position: relative;
          padding: 10px;
          margin-top: 0;
        }

        .sidebar a {
          padding: 8px;
        }

        .content-box-tiga {
          flex-direction: column;
        }

        .deadline-box {
          font-size: 14px; /* Menurunkan ukuran font untuk responsivitas */
        }

        .profile-section img {
          width: 70px;
          height: 60px;
        }

        .detail-item strong {
          font-size: 14px;
        }

        .detail-item span {
          font-size: 14px;
        }
      }

      /* Media Queries untuk layar dengan lebar maksimal 480px (untuk perangkat mobile) */
      @media (max-width: 480px) {
        .navbar {
          padding: 10px 5px;
        }

        .navbar .navbar-brand {
          font-size: 12px;
        }

        .sidebar {
          width: 100%;
          padding: 5px;
        }

        .content {
          margin-left: 0;
          padding: 10px;
        }

        .profile-section img {
          width: 50px;
          height: 50px;
        }

        .content-box,
        .content-box-dua,
        .content-box-tiga {
          width: 100%;
          margin-left: 0;
          margin-right: 0;
        }

        .content-box-kiri,
        .content-box-kanan {
          width: 100%;
        }

        .sidebar a {
          padding: 5px;
          font-size: 14px;
        }

        .deadline-box {
          font-size: 12px;
        }

        .header h2 {
          font-size: 18px;
        }

        .details {
          font-size: 12px;
        }

        .detail-item strong,
        .detail-item span {
          font-size: 12px;
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


