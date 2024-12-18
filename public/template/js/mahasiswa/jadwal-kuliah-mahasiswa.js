// Data jadwal kuliah berdasarkan tahun ajaran
const jadwalData = {
  "2022/2023 Ganjil": [
    {
      hari: "Senin",
      jam: "07.00 - 09.00",
      kode: "INF622101",
      matkul: "	Algoritma dan Pemrograman",
      sks: 4,
      dosen: "El S.Kom, M.Kom",
    },
    {
      hari: "Senin",
      jam: "09.00 - 12.00",
      kode: "INF622103",
      matkul: "Bahasa Pemrograman I",
      sks: 2,
      dosen: "Cipung S.Kom, M.Kom",
    },

    {
      hari: "Selasa",
      jam: "07.00 - 09.00",
      kode: "INF622105",
      matkul: "Dasar Dasar Pemrograman",
      sks: 2,
      dosen: "Gempi S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "09.00 - 12.00",
      kode: "INF622107",
      matkul: "Matematika Diskrit",
      sks: 3,
      dosen: "Isan Cupang S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "07.00 - 09.00",
      kode: "INF622109",
      matkul: "Sistem Digital",
      sks: 2,
      dosen: "Abe S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "09.00 - 12.00",
      kode: "TEK622101",
      matkul: "Kalkulus",
      sks: 3,
      dosen: "Ritsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "07.00 - 09.00",
      kode: "UNI622101",
      matkul: "Pendidikan Agama",
      sks: 2,
      dosen: "Natsuki S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "07.00 - 09.00",
      kode: "UNI622103",
      matkul: "Teknologi dan Transformasi Digital",
      sks: 2,
      dosen: "Jinji S.Kom, M.Kom",
    },

    // Tambahkan data untuk hari lainnya
  ],
  "2022/2023 Genap": [
    {
      hari: "Senin",
      jam: "07.00 - 09.00",
      kode: "INF622102",
      matkul: "Arsitektur dan Organisasi Kompute",
      sks: 3,
      dosen: "El S.Kom, M.Kom",
    },
    {
      hari: "Senin",
      jam: "09.00 - 12.00",
      kode: "INF622104",
      matkul: "Aljabar Linier",
      sks: 2,
      dosen: "Cipung S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "07.00 - 09.00",
      kode: "INF622106",
      matkul: "Struktur Data",
      sks: 3,
      dosen: "Gempi S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "09.00 - 12.00",
      kode: "INF622108",
      matkul: "Bahasa Pemrograman II",
      sks: 2,
      dosen: "Isan Cupang S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "07.00 - 09.00",
      kode: "INF622110",
      matkul: "Probabilitas dan Statistika",
      sks: 3,
      dosen: "Abe S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "09.00 - 12.00",
      kode: "	INF622112",
      matkul: "	Komunikasi Data",
      sks: 2,
      dosen: "Ritsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "07.00 - 09.00",
      kode: "INF622114",
      matkul: "Pengantar Teknologi Internet",
      sks: 3,
      dosen: "Natsuki S.Kom, M.Kom",
    },

    {
      hari: "Jumat",
      jam: "09.00 - 11.00",
      kode: "	UNI622102",
      matkul: "Moderasi Beragama",
      sks: 2,
      dosen: "Ehsan S.Kom, M.Kom",
    },
    // Tambahkan data untuk hari lainnya
  ],
  "2023/2024 Ganjil": [
    {
      hari: "Senin",
      jam: "07.00 - 09.00",
      kode: "INF622201",
      matkul: "Desain dan Analisis Algoritma",
      sks: 3,
      dosen: "El S.Kom, M.Kom",
    },
    {
      hari: "Senin",
      jam: "09.00 - 12.00",
      kode: "	INF622203",
      matkul: "Sistem Operasi",
      sks: 3,
      dosen: "Cipung S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "07.00 - 09.00",
      kode: "INF622205",
      matkul: "Jaringan Komputer",
      sks: 3,
      dosen: "Gempi S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "09.00 - 12.00",
      kode: "	INF622207	",
      matkul: "Sistem Basis Data",
      sks: 3,
      dosen: "Isan Cupang S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "07.00 - 09.00",
      kode: "INF622209",
      matkul: "Internet of Things",
      sks: 2,
      dosen: "Abe S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "09.00 - 12.00",
      kode: "INF622211",
      matkul: "Pengantar Kecerdasan Artificial",
      sks: 3,
      dosen: "Ritsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "07.00 - 09.00",
      kode: "INF622213",
      matkul: "Pemrograman Web",
      sks: 3,
      dosen: "Natsuki S.Kom, M.Kom",
    },

    {
      hari: "Jumat",
      jam: "09.00 - 11.00",
      kode: "INF622301",
      matkul: "Pemrograman Sistem Mobile",
      sks: 2,
      dosen: "Ehsan S.Kom, M.Kom",
    },
    // Tambahkan data untuk hari lainnya
  ],
  "2023/2024 Genap": [
    {
      hari: "Senin",
      jam: "07.00 - 09.00",
      kode: "INF622202",
      matkul: "Pemrograman Berorientasi Objek",
      sks: 3,
      dosen: "El S.Kom, M.Kom",
    },
    {
      hari: "Senin",
      jam: "09.00 - 12.00",
      kode: "INF622204",
      matkul: "Rekayasa Perangkat Lunak",
      sks: 3,
      dosen: "Cipung S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "07.00 - 09.00",
      kode: "INF622206",
      matkul: "Keamanan Sistem Komputer",
      sks: 3,
      dosen: "Gempi S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "09.00 - 12.00",
      kode: "INF622208",
      matkul: "Sistem Terdistribusi",
      sks: 2,
      dosen: "Isan Cupang S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "07.00 - 09.00",
      kode: "INF622210",
      matkul: "Kecerdasan Artificial Lanjutan",
      sks: 2,
      dosen: "Abe S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "09.00 - 12.00",
      kode: "INF622212",
      matkul: "Interaksi Manusia & Komputer",
      sks: 3,
      dosen: "Ritsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "07.00 - 09.00",
      kode: "INF622214",
      matkul: "Grafika Komputer dan Visualisasi",
      sks: 3,
      dosen: "Natsuki S.Kom, M.Kom",
    },

    {
      hari: "Jumat",
      jam: "09.00 - 11.00",
      kode: "INF622216",
      matkul: "Data Mining",
      sks: 2,
      dosen: "Ehsan S.Kom, M.Kom",
    },
    // Tambahkan data untuk hari lainnya
  ],

  "2024/2025 Ganjil": [
    {
      hari: "Senin",
      jam: "07.00 - 09.00",
      kode: "INF622303",
      matkul: "Keamanan Jaringan",
      sks: 3,
      dosen: "El S.Kom, M.Kom",
    },
    {
      hari: "Senin",
      jam: "09.00 - 12.00",
      kode: "INF622305",
      matkul: "Cloud Computing",
      sks: 3,
      dosen: "Cipung S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "07.00 - 09.00",
      kode: "INF622307",
      matkul: "Komputer dan Masyarakat",
      sks: 3,
      dosen: "Gempi S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "09.00 - 12.00",
      kode: "UNI622301",
      matkul: "Pancasila",
      sks: 2,
      dosen: "Isan Cupang S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "07.00 - 09.00",
      kode: "UNI622305",
      matkul: "Bahasa Indonesia",
      sks: 2,
      dosen: "Abe S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "09.00 - 12.00",
      kode: "INF621313",
      matkul: "E-Commerce",
      sks: 2,
      dosen: "Ritsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "07.00 - 09.00",
      kode: "INF621310",
      matkul: "Sistem Basis Data Lanjut",
      sks: 2,
      dosen: "Natsuki S.Kom, M.Kom",
    },

    {
      hari: "Jumat",
      jam: "09.00 - 11.00",
      kode: "	UNI622401",
      matkul: "English for Academic Purpose",
      sks: 3,
      dosen: "Ehsan S.Kom, M.Kom",
    },
    // Tambahkan data untuk hari lainnya
  ],
};

// Elemen HTML
const prevBtn = document.getElementById("prev-btn");
const nextBtn = document.getElementById("next-btn");
const academicYearEl = document.getElementById("academic-year");
const jadwalBody = document.getElementById("jadwal-body");

// Daftar tahun ajaran
const academicYears = Object.keys(jadwalData);
let currentYearIndex = 4; // Set index yang benar, misalnya 2024/2025 Ganjil di indeks ke-4

// Fungsi untuk menampilkan jadwal ke dalam tabel
function renderJadwal(year) {
  // Kosongkan tabel
  jadwalBody.innerHTML = "";

  // Ambil data jadwal berdasarkan tahun
  const jadwal = jadwalData[year];

  // Grup data berdasarkan hari
  const groupedData = jadwal.reduce((acc, item) => {
    if (!acc[item.hari]) acc[item.hari] = [];
    acc[item.hari].push(item);
    return acc;
  }, {});

  // Render baris untuk setiap hari
  for (const hari in groupedData) {
    const rows = groupedData[hari];
    rows.forEach((row, index) => {
      const tr = document.createElement("tr");

      // Kolom hari (hanya diisi pada baris pertama)
      if (index === 0) {
        const tdHari = document.createElement("td");
        tdHari.rowSpan = rows.length;
        tdHari.textContent = hari;
        tr.appendChild(tdHari);
      }

      // Kolom lainnya
      const tdJam = document.createElement("td");
      tdJam.textContent = row.jam;

      const tdKode = document.createElement("td");
      tdKode.textContent = row.kode;

      const tdMatkul = document.createElement("td");
      tdMatkul.textContent = row.matkul;

      const tdSks = document.createElement("td");
      tdSks.textContent = row.sks;

      const tdDosen = document.createElement("td");
      tdDosen.textContent = row.dosen;

      tr.appendChild(tdJam);
      tr.appendChild(tdKode);
      tr.appendChild(tdMatkul);
      tr.appendChild(tdSks);
      tr.appendChild(tdDosen);

      jadwalBody.appendChild(tr);
    });
  }
}

// Event listener untuk tombol navigasi
prevBtn.addEventListener("click", () => {
  if (currentYearIndex > 0) {
    currentYearIndex--; // Navigasi mundur
    academicYearEl.textContent = academicYears[currentYearIndex];
    renderJadwal(academicYears[currentYearIndex]);
  }
});

nextBtn.addEventListener("click", () => {
  if (currentYearIndex < academicYears.length - 1) {
    currentYearIndex++; // Navigasi maju
    academicYearEl.textContent = academicYears[currentYearIndex];
    renderJadwal(academicYears[currentYearIndex]);
  }
});

// Render jadwal awal
renderJadwal(academicYears[currentYearIndex]);
