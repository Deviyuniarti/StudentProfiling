<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profiling</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #1a295e;
            color: white;
            position: fixed;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .sidebar h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .sidebar a {
            text-decoration: none;
            color: white;
            margin-bottom: 10px;
            display: block;
            font-size: 1rem;
        }

        .sidebar a:hover {
            color: #ffd56a;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            background-color: #293a80;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 5px solid #ffd56a;
        }

        .profile-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .profile-header {
            display: flex;
            align-items: center;
        }

        .profile-header img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            margin-right: 20px;
        }

        .profile-details p {
            margin: 5px 0;
        }

        .classes, .assignments {
            display: flex;
            gap: 20px;
        }

        .card {
            background-color: #ffd56a;
            padding: 20px;
            border-radius: 10px;
            flex: 1;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #1a295e;
        }

        .card h3 {
            margin: 0;
            font-size: 1.2rem;
        }

        .assignments .task {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            margin-top: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>STDP<br>Student Profiling</h2>
        <a href="#">Beranda</a>
        <a href="#">Penugasan</a>
        <a href="#">Penilaian</a>
    </div>
    <div class="main-content">
        <div class="header">
            <h1>Universitas Maxy</h1>
            <div>
                <p>Gea Davids...</p>
            </div>
        </div>
        <div class="profile-card">
            <div class="profile-header">
                <img src="https://via.placeholder.com/100" alt="Profile Picture">
                <div class="profile-details">
                    <p><strong>Nama:</strong> Gea Davids S.Kom., M.Kom</p>
                    <p><strong>Status Ikatan Kerja:</strong> Dosen PNS</p>
                    <p><strong>NIP:</strong> 197004824728293</p>
                    <p><strong>Pendidikan Tinggi:</strong> S2</p>
                    <p><strong>Pendidikan S1:</strong> Universitas Indonesia</p>
                    <p><strong>Pendidikan S2:</strong> Universitas Gajah Mada</p>
                </div>
            </div>
        </div>

        <div class="classes">
            <div class="card">
                <h3>Kelas Saya</h3>
                <p>3 TIA</p>
                <p>5 TIA</p>
            </div>
            <div class="card">
                <h3>Riwayat Penugasan</h3>
                <div class="task">
                    <p><strong>Tugas Pertemuan 1:</strong> Desain Grafis</p>
                    <p>3 TIA</p>
                    <p>1 hari yang lalu</p>
                </div>
                <div class="task">
                    <p><strong>Tugas Pertemuan 1:</strong> UI UX</p>
                    <p>5 TIA</p>
                    <p>1 hari yang lalu</p>
                </div>
                <p><a href="#">Lihat Semua</a></p>
            </div>
        </div>
    </div>
</body>
</html>
