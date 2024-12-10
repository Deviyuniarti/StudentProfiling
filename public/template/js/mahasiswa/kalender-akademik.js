const monthNames = [
  "Januari",
  "Februari",
  "Maret",
  "April",
  "Mei",
  "Juni",
  "Juli",
  "Agustus",
  "September",
  "Oktober",
  "November",
  "Desember",
];

const today = new Date();
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();

function renderCalendar(month, year) {
  const firstDay = new Date(year, month).getDay();
  const daysInMonth = new Date(year, month + 1, 0).getDate();

  const calendarBody = document.getElementById("calendarBody");
  calendarBody.innerHTML = ""; // Bersihkan tabel

  // Header bulan dan tahun
  document.getElementById(
    "monthYear"
  ).textContent = `${monthNames[month]} ${year}`;

  let date = 1;
  for (let i = 0; i < 6; i++) {
    const row = document.createElement("tr");

    for (let j = 0; j < 7; j++) {
      const cell = document.createElement("td");
      cell.style.border = "1px solid #2A356B"; // Border untuk setiap sel
      cell.style.position = "relative"; // Agar input box bisa diposisikan dengan benar di dalam cell

      if (i === 0 && j < firstDay) {
        cell.innerHTML = ""; // Sel kosong sebelum tanggal pertama
      } else if (date > daysInMonth) {
        break; // Stop jika tanggal melebihi jumlah hari dalam bulan
      } else {
        // Menampilkan tanggal di pojok kiri atas
        const dateElement = document.createElement("span");
        dateElement.textContent = date;
        dateElement.style.position = "absolute";
        dateElement.style.top = "5px";
        dateElement.style.left = "5px";
        dateElement.style.fontSize = "14px"; // Bisa disesuaikan
        cell.appendChild(dateElement);

        // Cek apakah hari adalah Minggu atau Sabtu
        if (j === 0 || j === 6) {
          cell.style.color = "red"; // Warna merah untuk Minggu dan Sabtu
          cell.classList.add(j === 0 ? "sunday" : "saturday");
        } else {
          // Menampilkan teks "Perkuliahan" di pojok kiri bawah
          const label = document.createElement("span");
          label.textContent = "Perkuliahan";
          label.style.position = "absolute";
          label.style.bottom = "5px";
          label.style.left = "5px"; // Posisikan di kiri bawah
          label.style.fontSize = "10px";
          label.style.backgroundColor = "#CCE4FF";
          label.style.color = "#0085FF";
          label.style.fontFamily = "'Inter', sans-serif";
          label.style.padding = "2px 5px";
          label.style.borderRadius = "4px";
          label.style.boxShadow = "none";
          cell.appendChild(label);

          // Menambahkan teks "UTS" hanya untuk bulan November dan tanggal 23-27
          if (month === 10 && date >= 18 && date <= 22) {
            const utsLabel = document.createElement("span");
            utsLabel.textContent = "UTS";
            utsLabel.style.position = "absolute";
            utsLabel.style.bottom = "25px"; // Posisikan lebih atas sedikit dari "Perkuliahan"
            utsLabel.style.left = "5px"; // Posisikan di kiri
            utsLabel.style.fontSize = "10px";
            utsLabel.style.backgroundColor = "##FFCCE4";
            utsLabel.style.color = "#FF9F2D";
            utsLabel.style.fontFamily = "'Inter', sans-serif";
            utsLabel.style.padding = "2px 5px";
            utsLabel.style.borderRadius = "4px";
            utsLabel.style.boxShadow = "none";
            cell.appendChild(utsLabel);
          }
          // Menambahkan teks "Dies Natalis" hanya untuk tanggal 25 November
          if (month === 10 && date === 25) {
            const diesNatalisLabel = document.createElement("span");
            diesNatalisLabel.textContent = "Dies Natalis";
            diesNatalisLabel.style.position = "absolute";
            diesNatalisLabel.style.bottom = "25px"; // Posisikan sedikit lebih ke atas agar tidak terlalu dekat dengan "Perkuliahan"
            diesNatalisLabel.style.left = "5px"; // Posisikan di kiri
            diesNatalisLabel.style.fontSize = "10px";
            diesNatalisLabel.style.backgroundColor = "#D4F7D3"; // Warna pink muda
            diesNatalisLabel.style.color = "#00BA34"; // Warna teks #FF9F2D
            diesNatalisLabel.style.fontFamily = "'Inter', sans-serif";
            diesNatalisLabel.style.padding = "2px 5px";
            diesNatalisLabel.style.borderRadius = "4px";
            diesNatalisLabel.style.boxShadow = "none";
            cell.appendChild(diesNatalisLabel);
          }
        }

        date++; // Increment tanggal
      }

      row.appendChild(cell); // Tambahkan sel ke baris
    }

    calendarBody.appendChild(row); // Tambahkan baris ke tabel

    // Hentikan perulangan jika semua tanggal sudah dirender
    if (date > daysInMonth) break;
  }
}

// Tombol navigasi untuk bulan sebelumnya
document.getElementById("prevBtn").addEventListener("click", () => {
  currentMonth--;
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }
  renderCalendar(currentMonth, currentYear);
});

// Tombol navigasi untuk bulan berikutnya
document.getElementById("nextBtn").addEventListener("click", () => {
  currentMonth++;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  }
  renderCalendar(currentMonth, currentYear);
});

// Render awal kalender
renderCalendar(currentMonth, currentYear);
