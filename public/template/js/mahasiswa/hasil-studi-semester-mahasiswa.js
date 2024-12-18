// Data untuk setiap semester
const semesterData = {
  1: [
    {
      no: 1,
      kode: "INF622101",
      nama: "Algoritma dan Pemrograman",
      sks: 4,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 16.0,
    },
    {
      no: 2,
      kode: "INF622103",
      nama: "Bahasa Pemrograman I",
      sks: 2,
      grade: "A-",
      nilaiMutu: 3.75,
      bobot: 7.5,
    },
    {
      no: 3,
      kode: "INF622105",
      nama: "Dasar Dasar Pemrograman",
      sks: 2,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 8.0,
    },
    {
      no: 4,
      kode: "INF622107",
      nama: "Matematika Diskrit",
      sks: 3,
      grade: "B",
      nilaiMutu: 3.0,
      bobot: 9.0,
    },
    {
      no: 5,
      kode: "INF622109",
      nama: "Sistem Digital",
      sks: 2,
      grade: "C",
      nilaiMutu: 2.0,
      bobot: 4.0,
    },
    {
      no: 6,
      kode: "TEK622101",
      nama: "Kalkulus",
      sks: 3,
      grade: "B",
      nilaiMutu: 3.0,
      bobot: 9.0,
    },
    {
      no: 7,
      kode: "UNI622101",
      nama: "Pendidikan Agama",
      sks: 2,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 8.0,
    },
    {
      no: 8,
      kode: "UNI622103",
      nama: "Teknologi dan Transformasi Digital",
      sks: 2,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 8.0,
    },

    // Tambahkan lebih banyak data sesuai kebutuhan
  ],
  2: [
    {
      no: 1,
      kode: "	INF622102",
      nama: "Arsitektur dan Organisasi Komputer",
      sks: 3,
      grade: "B",
      nilaiMutu: 3.0,
      bobot: 9.0,
    },
    {
      no: 2,
      kode: "INF622104",
      nama: "Aljabar Linier",
      sks: 2,
      grade: "3",
      nilaiMutu: 3.0,
      bobot: 6.0,
    },
    {
      no: 3,
      kode: "INF622106",
      nama: "Struktur Data",
      sks: 3,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 12.0,
    },
    {
      no: 4,
      kode: "	INF622108",
      nama: "Bahasa Pemrograman II",
      sks: 2,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 8.0,
    },
    {
      no: 5,
      kode: "INF622110",
      nama: "Probabilitas dan Statistika",
      sks: 3,
      grade: "B+",
      nilaiMutu: 3.5,
      bobot: 10.5,
    },
    {
      no: 6,
      kode: "INF622112",
      nama: "Komunikasi Data",
      sks: 2,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 8.0,
    },
    {
      no: 7,
      kode: "INF622114",
      nama: "Pengantar Teknologi Internet",
      sks: 3,
      grade: "A-",
      nilaiMutu: 3.75,
      bobot: 11.25,
    },
    {
      no: 8,
      kode: "UNI622102",
      nama: "Moderasi Beragama",
      sks: 2,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 8.0,
    },

    // Tambahkan lebih banyak data untuk semester 2
  ],
  3: [
    {
      no: 1,
      kode: "	INF622201",
      nama: "Desain dan Analisis Algoritma",
      sks: 3,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 12.0,
    },
    {
      no: 2,
      kode: "INF622203",
      nama: "Sistem Operasi",
      sks: 3,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 12.0,
    },
    {
      no: 3,
      kode: "INF622205",
      nama: "Jaringan Komputer",
      sks: 3,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 12.0,
    },
    {
      no: 4,
      kode: "INF622207",
      nama: "Sistem Basis Data",
      sks: 3,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 12.0,
    },
    {
      no: 5,
      kode: "INF622209",
      nama: "Internet of Things",
      sks: 2,
      grade: "A-",
      nilaiMutu: 3.75,
      bobot: 7.5,
    },
    {
      no: 6,
      kode: "INF622211	",
      nama: "Pengantar Kecerdasan Artificial",
      sks: 3,
      grade: "B",
      nilaiMutu: 3.0,
      bobot: 9.0,
    },
    {
      no: 7,
      kode: "INF622213",
      nama: "Pemrograman Web",
      sks: 3,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 12.0,
    },
    {
      no: 8,
      kode: "	INF622301	",
      nama: "Pemrograman Sistem Mobile",
      sks: 3,
      grade: "A-",
      nilaiMutu: 3.75,
      bobot: 11.25,
    },
    // Tambahkan lebih banyak data untuk semester 3
  ],
  4: [
    {
      no: 1,
      kode: "INF622202",
      nama: "	Pemrograman Berorientasi Objek",
      sks: 3,
      grade: "A-",
      nilaiMutu: 3.75,
      bobot: 11.25,
    },
    {
      no: 2,
      kode: "INF622204",
      nama: "	Rekayasa Perangkat Lunak",
      sks: 3,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 12.0,
    },
    {
      no: 3,
      kode: "INF622206",
      nama: "	Keamanan Sistem Komputer",
      sks: 3,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 12.0,
    },
    {
      no: 4,
      kode: "INF622208",
      nama: "Sistem Terdistribusi",
      sks: 2,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 8.0,
    },
    {
      no: 5,
      kode: "INF622210",
      nama: "Kecerdasan Artificial Lanjutan",
      sks: 2,
      grade: "B+",
      nilaiMutu: 3.5,
      bobot: 7.0,
    },
    {
      no: 6,
      kode: "INF622212",
      nama: "	Interaksi Manusia & Komputer",
      sks: 3,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 12.0,
    },
    {
      no: 7,
      kode: "INF622214",
      nama: "Grafika Komputer dan Visualisasi",
      sks: 3,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 12.0,
    },
    {
      no: 8,
      kode: "	INF622216",
      nama: "Data Mining",
      sks: 2,
      grade: "A",
      nilaiMutu: 4.0,
      bobot: 8.0,
    },
  ],
  // Tambahkan data untuk semester 4-8 sesuai kebutuhan
};

// Fungsi untuk mengganti semester dan menampilkan data
function changeSemester(semester) {
  // Reset semua semester
  for (let i = 1; i <= 8; i++) {
    document.getElementById(`semester${i}`).style.backgroundColor = "#FFF5E7";
  }

  // Tampilkan data untuk semester yang dipilih
  document.getElementById(`semester${semester}`).style.backgroundColor =
    "#FCB248";
  displayDataForSemester(semester);
  updateTotalAndIP(semester);
}

// Fungsi untuk menampilkan data semester ke dalam tabel
function displayDataForSemester(semester) {
  const data = semesterData[semester];
  const tbody = document.getElementById("semester-data");
  tbody.innerHTML = ""; // Clear existing rows

  if (data && data.length > 0) {
    data.forEach((row) => {
      const tr = document.createElement("tr");

      tr.innerHTML = ` 
          <td>${row.no}</td>
          <td>${row.kode}</td>
          <td>${row.nama}</td>
          <td>${row.sks}</td>
          <td>${row.grade}</td>
          <td>${row.nilaiMutu.toFixed(2)}</td>
          <td>${row.bobot.toFixed(2)}</td>
        `;

      tbody.appendChild(tr);
    });
  }
}

// Fungsi untuk menghitung total SKS, bobot, dan IPS
// Fungsi untuk menghitung total SKS, bobot, dan IPS
// Fungsi untuk menghitung total SKS, bobot, dan IPS
// Fungsi untuk menghitung total SKS, bobot, dan IPS
function updateTotalAndIP(semester) {
  let totalSks = 0;
  let totalBobot = 0;

  // Ambil data sesuai semester
  const data = semesterData[semester];

  // Cek apakah semester memiliki data
  if (data && data.length > 0) {
    data.forEach((row) => {
      totalSks += row.sks;
      totalBobot += row.bobot;
    });
  }

  // Jika tidak ada data (semester kosong), set semua nilai ke 0
  if (totalSks === 0) {
    document.getElementById("total-sks").textContent = "0";
    document.getElementById("total-bobot").textContent = "0.00";
    document.getElementById("ip-semester").textContent = "0.00";
    document.getElementById("ipk-kumulatif").textContent = "0.00";
    return; // Hentikan fungsi jika semester kosong
  }

  // Update total SKS dan total bobot di footer
  document.getElementById("total-sks").textContent = totalSks;
  document.getElementById("total-bobot").textContent = totalBobot.toFixed(2);

  // Hitung Indeks Prestasi Semester (IPS)
  let ipSemester = totalSks > 0 ? totalBobot / totalSks : 0;

  // Update Indeks Prestasi Semester (IPS) di footer
  document.getElementById("ip-semester").textContent = ipSemester.toFixed(2);

  // Menghitung Indeks Prestasi Kumulatif (IPK)
  let totalSksKumulatif = 0;
  let totalBobotKumulatif = 0;

  // Mengakumulasi SKS dan bobot untuk semua semester yang telah memiliki data
  for (let i = 1; i <= semester; i++) {
    const semesterDataForCurrent = semesterData[i];
    if (semesterDataForCurrent && semesterDataForCurrent.length > 0) {
      semesterDataForCurrent.forEach((row) => {
        totalSksKumulatif += row.sks;
        totalBobotKumulatif += row.bobot;
      });
    }
  }

  // Menghitung IPK kumulatif berdasarkan total SKS dan bobot
  let ipKumulatif =
    totalSksKumulatif > 0 ? totalBobotKumulatif / totalSksKumulatif : 0;

  // Update Indeks Prestasi Kumulatif (IPK) di footer
  document.getElementById("ipk-kumulatif").textContent = ipKumulatif.toFixed(2);
}

// Inisialisasi untuk semester pertama
changeSemester(1);
