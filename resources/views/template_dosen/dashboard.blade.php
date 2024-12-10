<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <style>
      body {
        display: flex;
        min-height: 100vh;
      }
      .sidebar {
        width: 250px;
        background-color: #b1b1b1;
        color: white;
        padding: 20px;
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        overflow-y: auto;
      }
      .profile-section {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        margin-top: 20px;
      }
      .profile-section img {
        width: 70px;
        height: 70px;
        margin-right: 15px;
      }
      .profile-section .name {
        font-weight: bold;
      }
      .sidebar a {
        color: white;
        text-decoration: none;
        display: flex;
        align-items: center;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
      }
      .sidebar a:hover {
        background-color: #555;
      }
      .sidebar a img {
        width: 20px;
        height: 20px;
        margin-right: 10px;
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
      }
      .content-box {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        width: 100%;
        max-width: 900px;
        margin: 0 auto;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: flex-start; /* Gambar tetap di tengah box secara vertikal */
        min-height: 200px; /* Menambahkan tinggi minimum untuk box */
      }
      .content-box img {
        width: 150px; /* Memperbesar gambar */
        height: 150px; /* Memperbesar gambar */
        margin-right: 20px;
        object-fit: cover; /* Menjaga proporsi gambar */
        border-radius: 10px; /* Menambahkan sudut membulat pada gambar */
      }
      .content-box .text-section {
        font-size: 18px;
      }
      .content-box .text-section .greeting {
        font-weight: bold;
        font-size: 24px;
        margin-bottom: 5px;
      }
    </style>
  </head>
  <body>
    <!-- Sidebar -->
    @include('components_dosen.sidebar')
      <!-- Menu Navigasi -->
      <a href="#">
        <img src="../images/beranda.png" alt="Icon Beranda" />
        Beranda
      </a>
      <a href="#">
        <img src="../images/chart.png" alt="Icon Akademik" />
        Akademik
      </a>
      <a href="#">
        <img src="../images/rekomendasi.png" alt="Icon Rekomendasi Karir" />
        Rekomendasi Karir
      </a>
      <a href="#">
        <img src="../images/rekomendasi.png" alt="Icon Chat" />
        Chat
      </a>

      <!-- Account Pages Section -->
      <div class="account-pages">Account Pages</div>
      <a href="#">
        <img src="../images/akun.png" alt="Icon Profile" />
        Profile
      </a>
      <a href="#">
        <img src="../images/logout.png" alt="Icon Logout" />
        Logout
      </a>
    </div>

    <!-- Konten Utama -->
    <div class="content">
      <!-- Box Panjang -->
      <div class="content-box">
        <img src="../images/untirta.png" alt="Foto Kampus" />
        <div class="text-section">
          <div class="greeting">Hai, Nama Dosen</div>
          <p class="welcome">Selamat datang di beranda student profiling!</p>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
