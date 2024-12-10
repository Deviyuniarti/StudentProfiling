// Data jadwal kuliah berdasarkan tahun ajaran
const jadwalData = {
  "2022/2023 Ganjil": [
    {
      hari: "Senin",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Basis Data",
      sks: 2,
      dosen: "El S.Kom, M.Kom",
    },
    {
      hari: "Senin",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "UI/UX",
      sks: 3,
      dosen: "Cipung S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Desain Grafis",
      sks: 2,
      dosen: "Gempi S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Pemrograman Web",
      sks: 1,
      dosen: "Isan Cupang S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Animasi 2D & 3D",
      sks: 2,
      dosen: "Abe S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Sistem Multimedia",
      sks: 3,
      dosen: "Ritsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Jaringan Komputer",
      sks: 2,
      dosen: "Natsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Komputer & Masyarakat",
      sks: 3,
      dosen: "Gea Davids S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Game",
      sks: 1,
      dosen: "Jinji S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "09.00 - 11.00",
      kode: "K3lOMPOK9W",
      matkul: "Citra Digital",
      sks: 2,
      dosen: "Ehsan S.Kom, M.Kom",
    },
    // Tambahkan data untuk hari lainnya
  ],
  "2022/2023 Genap": [
    {
      hari: "Senin",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Basis Data",
      sks: 2,
      dosen: "El S.Kom, M.Kom",
    },
    {
      hari: "Senin",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "UI/UX",
      sks: 3,
      dosen: "Cipung S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Desain Grafis",
      sks: 2,
      dosen: "Gempi S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Pemrograman Web",
      sks: 1,
      dosen: "Isan Cupang S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Animasi 2D & 3D",
      sks: 2,
      dosen: "Abe S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Sistem Multimedia",
      sks: 3,
      dosen: "Ritsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Jaringan Komputer",
      sks: 2,
      dosen: "Natsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Komputer & Masyarakat",
      sks: 3,
      dosen: "Gea Davids S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Game",
      sks: 1,
      dosen: "Jinji S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "09.00 - 11.00",
      kode: "K3lOMPOK9W",
      matkul: "Citra Digital",
      sks: 2,
      dosen: "Ehsan S.Kom, M.Kom",
    },
    // Tambahkan data untuk hari lainnya
  ],
  "2023/2024 Ganjil": [
    {
      hari: "Senin",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Basis Data",
      sks: 2,
      dosen: "El S.Kom, M.Kom",
    },
    {
      hari: "Senin",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "UI/UX",
      sks: 3,
      dosen: "Cipung S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Desain Grafis",
      sks: 2,
      dosen: "Gempi S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Pemrograman Web",
      sks: 1,
      dosen: "Isan Cupang S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Animasi 2D & 3D",
      sks: 2,
      dosen: "Abe S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Sistem Multimedia",
      sks: 3,
      dosen: "Ritsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Jaringan Komputer",
      sks: 2,
      dosen: "Natsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Komputer & Masyarakat",
      sks: 3,
      dosen: "Gea Davids S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Game",
      sks: 1,
      dosen: "Jinji S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "09.00 - 11.00",
      kode: "K3lOMPOK9W",
      matkul: "Citra Digital",
      sks: 2,
      dosen: "Ehsan S.Kom, M.Kom",
    },
    // Tambahkan data untuk hari lainnya
  ],
  "2023/2024 Genap": [
    {
      hari: "Senin",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Basis Data",
      sks: 2,
      dosen: "El S.Kom, M.Kom",
    },
    {
      hari: "Senin",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "UI/UX",
      sks: 3,
      dosen: "Cipung S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Desain Grafis",
      sks: 2,
      dosen: "Gempi S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Pemrograman Web",
      sks: 1,
      dosen: "Isan Cupang S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Animasi 2D & 3D",
      sks: 2,
      dosen: "Abe S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Sistem Multimedia",
      sks: 3,
      dosen: "Ritsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Jaringan Komputer",
      sks: 2,
      dosen: "Natsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Komputer & Masyarakat",
      sks: 3,
      dosen: "Gea Davids S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Game",
      sks: 1,
      dosen: "Jinji S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "09.00 - 11.00",
      kode: "K3lOMPOK9W",
      matkul: "Citra Digital",
      sks: 2,
      dosen: "Ehsan S.Kom, M.Kom",
    },
    // Tambahkan data untuk hari lainnya
  ],

  "2024/2025 Ganjil": [
    {
      hari: "Senin",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Basis Data",
      sks: 2,
      dosen: "El S.Kom, M.Kom",
    },
    {
      hari: "Senin",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "UI/UX",
      sks: 3,
      dosen: "Cipung S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Desain Grafis",
      sks: 2,
      dosen: "Gempi S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Pemrograman Web",
      sks: 1,
      dosen: "Isan Cupang S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Animasi 2D & 3D",
      sks: 2,
      dosen: "Abe S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Sistem Multimedia",
      sks: 3,
      dosen: "Ritsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Jaringan Komputer",
      sks: 2,
      dosen: "Natsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Komputer & Masyarakat",
      sks: 3,
      dosen: "Gea Davids S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Game",
      sks: 1,
      dosen: "Jinji S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "09.00 - 11.00",
      kode: "K3lOMPOK9W",
      matkul: "Citra Digital",
      sks: 2,
      dosen: "Ehsan S.Kom, M.Kom",
    },
    // Tambahkan data untuk hari lainnya
  ],
  "2024/2025 Genap": [
    {
      hari: "Senin",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Basis Data",
      sks: 2,
      dosen: "El S.Kom, M.Kom",
    },
    {
      hari: "Senin",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "UI/UX",
      sks: 3,
      dosen: "Cipung S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Desain Grafis",
      sks: 2,
      dosen: "Gempi S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Pemrograman Web",
      sks: 1,
      dosen: "Isan Cupang S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Animasi 2D & 3D",
      sks: 2,
      dosen: "Abe S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Sistem Multimedia",
      sks: 3,
      dosen: "Ritsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Jaringan Komputer",
      sks: 2,
      dosen: "Natsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Komputer & Masyarakat",
      sks: 3,
      dosen: "Gea Davids S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Game",
      sks: 1,
      dosen: "Jinji S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "09.00 - 11.00",
      kode: "K3lOMPOK9W",
      matkul: "Citra Digital",
      sks: 2,
      dosen: "Ehsan S.Kom, M.Kom",
    },
    // Tambahkan data untuk hari lainnya
  ],
  "2025/2026 Ganjil": [
    {
      hari: "Senin",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Basis Data",
      sks: 2,
      dosen: "El S.Kom, M.Kom",
    },
    {
      hari: "Senin",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "UI/UX",
      sks: 3,
      dosen: "Cipung S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Desain Grafis",
      sks: 2,
      dosen: "Gempi S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Pemrograman Web",
      sks: 1,
      dosen: "Isan Cupang S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Animasi 2D & 3D",
      sks: 2,
      dosen: "Abe S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Sistem Multimedia",
      sks: 3,
      dosen: "Ritsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Jaringan Komputer",
      sks: 2,
      dosen: "Natsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Komputer & Masyarakat",
      sks: 3,
      dosen: "Gea Davids S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Game",
      sks: 1,
      dosen: "Jinji S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "09.00 - 11.00",
      kode: "K3lOMPOK9W",
      matkul: "Citra Digital",
      sks: 2,
      dosen: "Ehsan S.Kom, M.Kom",
    },
    // Tambahkan data untuk hari lainnya
  ],
  "2025/2026 Genap": [
    {
      hari: "Senin",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Basis Data",
      sks: 2,
      dosen: "El S.Kom, M.Kom",
    },
    {
      hari: "Senin",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "UI/UX",
      sks: 3,
      dosen: "Cipung S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Desain Grafis",
      sks: 2,
      dosen: "Gempi S.Kom, M.Kom",
    },
    {
      hari: "Selasa",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Pemrograman Web",
      sks: 1,
      dosen: "Isan Cupang S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Animasi 2D & 3D",
      sks: 2,
      dosen: "Abe S.Kom, M.Kom",
    },
    {
      hari: "Rabu",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Sistem Multimedia",
      sks: 3,
      dosen: "Ritsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Jaringan Komputer",
      sks: 2,
      dosen: "Natsuki S.Kom, M.Kom",
    },
    {
      hari: "Kamis",
      jam: "09.00 - 12.00",
      kode: "K3lOMPOK9W",
      matkul: "Komputer & Masyarakat",
      sks: 3,
      dosen: "Gea Davids S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "07.00 - 09.00",
      kode: "K3lOMPOK9W",
      matkul: "Game",
      sks: 1,
      dosen: "Jinji S.Kom, M.Kom",
    },
    {
      hari: "Jumat",
      jam: "09.00 - 11.00",
      kode: "K3lOMPOK9W",
      matkul: "Citra Digital",
      sks: 2,
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
