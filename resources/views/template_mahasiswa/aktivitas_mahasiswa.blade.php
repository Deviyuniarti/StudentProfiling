<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Aktivitas & Prestasi Mahasiswa</title>
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
    <!-- Link ke FontAwesome CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
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
        z-index: 999;
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
      }
      .content-box-two {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        width: 1050px;
        max-width: 1200px;
        margin: 20px auto;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        margin-left: 310px;
        margin-bottom: 20px;
      }

      .content-box-two .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-bottom: 15px;
      }

      .popup {
        display: flex;
        position: fixed;
        flex-direction: column;
        width: 90%; /* Atur agar responsif pada layar kecil */
        max-width: 800px; /* Maksimal lebar pop-up */
        max-height: 90%; /* Maksimal tinggi pop-up agar tidak keluar dari layar */
        top: 50%; /* Pusatkan vertikal */
        left: 50%; /* Pusatkan horizontal */
        transform: translate(-50%, -50%); /* Koreksi posisi ke tengah */
        background: white;
        border: 1px solid #ddd;
        padding: 0;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 10px; /* Tambahkan sudut yang lebih halus */
        overflow: hidden; /* Mencegah elemen keluar dari kontainer */
        z-index: 1001;
      }

      .popup header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #2a356b;
        font-family: "Poppins", sans-serif;
        padding: 20px;
        background-color: #fcb248;
      }

      .popup form {
        display: flex;
        flex-direction: column; /* Agar item-item berada dalam satu kolom */
        margin: 20px;
        overflow-y: auto;
        max-height: calc(
          100% - 140px
        ); /* Sisakan ruang untuk header dan footer */
        flex-grow: 1;
        padding-bottom: 50px; /* Agar form mengisi ruang kosong */
      }

      .popup .skill-items-container {
        display: flex;
        flex-direction: column; /* Atur item-item skill dalam kolom */
        flex-grow: 1; /* Agar skill items mengambil ruang yang tersedia */
        overflow-y: auto;
        padding-right: 10px;
        box-sizing: border-box;
        margin-bottom: 20px; /* Jarak agar skill-item tidak terlalu dekat dengan footer */
      }

      /* Mengubah warna teks label menjadi #2A356B */
      .popup form label {
        color: #2a356b; /* Warna teks label */
        font-family: "Poppins", sans-serif;
      }

      /* Mengubah warna teks di dalam input dan textarea ketika fokus */
      .popup form input:focus,
      .popup form textarea:focus {
        border-color: #2a356b; /* Ubah border menjadi warna #2A356B saat fokus */
        outline: none; /* Hilangkan outline default */
      }

      .popup form input,
      .popup form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #2a356b; /* Mengubah border menjadi #2A356B */
        color: #2a356b; /* Mengubah warna teks di dalam input/textarea */
        border-radius: 5px;
      }

      .popup footer {
        position: absolute; /* Gunakan posisi absolute agar footer menjangkau lebar penuh */
        bottom: 0;
        left: 0;
        width: 100%; /* Pastikan footer mengambil lebar penuh */
        padding: 15px;
        background-color: #fcb248;
        box-sizing: border-box;
        margin-top: auto;
        justify-content: flex-end;
        display: flex;
      }

      .popup footer button {
        background-color: #ffffff;
        color: #2a356b;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-family: "Poppins", sans-serif;
      }

      #closePopup {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 2px solid white;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 24px;
        color: #fcb248;
        cursor: pointer;
        outline: none;
        transition: all 0.3s ease;
      }

      #closePopup:focus {
        outline: none;
      }

      .toggle-content {
        margin-top: 20px;
        padding: 10px;
        background-color: #f1f1f1;
        border: none;
        box-shadow: none;
      }

      /* Skill item layout */
      .skill-item {
        margin-bottom: 20px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
      }

      .skill-item:hover {
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
      }

      /* Container untuk setiap detail skill */
      .skill-detail {
        margin-bottom: 15px;
      }

      /* Styling untuk judul keterampilan */
      .skill-detail p {
        margin: 5px 0;
        font-size: 18px;
        color: #2a356b;
      }

      .skill-value {
        font-size: 16px;
        color: #2a356b;
        margin-left: 10px;
        font-weight: normal;
      }

      /* Styling untuk media image */
      .skill-media-container {
        margin-top: 10px;
      }

      .skill-media-image {
        max-width: 400px;
        max-height: 400px;
        object-fit: cover;
        border-radius: 5px;
        margin-bottom: 20px;
      }

      /* Styling untuk tombol hapus */
      .skill-item .delete-btn {
        background-color: #fcb248;
        border: none;
        padding: 8px 15px;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s ease;
      }

      .skill-item .delete-btn:hover {
        background-color: #e0a800;
      }

      .add-btn {
        background: none;
        border: none;
        border-radius: 5px;
        padding: 10px 15px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px; /* Atur ukuran ikon sesuai keinginan */
        transition: transform 0.2s ease;
      }

      .add-btn:hover {
        background-color: #f1f1f1;
        transform: scale(1.1); /* Memperbesar tombol saat hover */
      }

      .add-btn i {
        font-size: 20px; /* Ukuran ikon */
        color: #333; /* Warna ikon */
      }

      .add-btn:hover i {
        color: #000; /* Warna ikon berubah saat hover */
      }
      /* Tombol dengan FontAwesome */
      .dropdown-btn {
        background: none;
        border: none;
        border-radius: 5px;
        padding: 10px 15px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        transition: transform 0.2s ease;
      }

      /* Menambahkan efek hover pada tombol */
      .dropdown-btn:hover {
        background-color: #f1f1f1;
        transform: scale(1.1); /* Memperbesar tombol saat hover */
      }

      /* Tombol dropdown terbuka dengan perubahan ikon */
      .dropdown-btn.open i {
        transform: rotate(180deg); /* Putar ikon ketika terbuka */
      }

      .content-box-three {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        width: 1050px;
        max-width: 1200px;
        margin: 20px auto;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        margin-left: 310px;
        margin-bottom: 300px;
      }

      .content-box-three .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-bottom: 15px;
      }

      .popupExperience {
        display: flex;
        position: fixed;
        flex-direction: column;
        width: 90%;
        max-width: 800px;
        max-height: 90%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        border: 1px solid #ddd;
        padding: 0;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        overflow: hidden;
        z-index: 1001;
      }

      /* Jangan lupa menambahkan perubahan ini untuk menyesuaikan pengalaman dengan header dan form baru */
      .popupExperience header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #2a356b;
        font-family: "Poppins", sans-serif;
        padding: 20px;
        background-color: #fcb248;
      }

      .popupExperience form {
        display: flex;
        flex-direction: column;
        margin: 20px;
        overflow-y: auto;
        max-height: calc(100% - 140px);
        flex-grow: 1;
        padding-bottom: 50px;
      }

      .popupExperience footer {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 15px;
        background-color: #fcb248;
        box-sizing: border-box;
        margin-top: auto;
        justify-content: flex-end;
        display: flex;
      }

      .popupExperience footer button {
        background-color: #ffffff;
        color: #2a356b;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-family: "Poppins", sans-serif;
      }

      #closePopupExperience {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 2px solid white;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 24px;
        color: #fcb248;
        cursor: pointer;
        outline: none;
        transition: all 0.3s ease;
      }

      #closePopupExperience:focus {
        outline: none;
      }

      #tagSuggestions {
    border: 1px solid #ccc;
    background-color: white;
    position: absolute;
    z-index: 1000;
    width: calc(100% - 20px);
    max-height: 150px;
    overflow-y: auto;
    }

    .tag-suggestion {
        padding: 5px 10px;
        cursor: pointer;
    }

    .tag-suggestion:hover {
        background-color: #f0f0f0;
    }

    .skill-item, .experience-item {
      border: 1px solid #ddd;
      padding: 10px;
      margin: 5px 0;
      border-radius: 5px;
      background: #f9f9f9;
    }

    .selected-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 5px;
      margin-top: 10px;
    }

    .selected-tag {
      background-color: #e1e1e1;
      border-radius: 15px;
      padding: 5px 10px;
      font-size: 14px;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .selected-tag .remove-tag {
      cursor: pointer;
      font-weight: bold;
      color: #ff0000;
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

    <script src="{{ asset('template') }}/js/mahasiswa/aktivitas-prestasi-mahasiswa-keterampilan.js"></script>

    <!-- Bootstrap JS dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>

   