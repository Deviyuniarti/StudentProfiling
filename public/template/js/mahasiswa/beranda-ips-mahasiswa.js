var ctx = document.getElementById("ipsChart").getContext("2d");

// Membuat gradien warna dari putih ke pink muda
var gradient = ctx.createLinearGradient(0, 0, 0, 400); // Koordinat vertikal
gradient.addColorStop(0, "white"); // Warna bawah
gradient.addColorStop(1, "#FCB248"); // Warna atas (pink muda)

var ipsChart = new Chart(ctx, {
  type: "line", // Jenis grafik (misalnya: 'line', 'bar', dsb)
  data: {
    labels: ["1", "2", "3", "4", "5", "6", "7", "8"], // Label semester (X)
    datasets: [
      {
        // Hapus bagian label ini agar tidak ada label pada grafik
        data: [3.2, 3.4, 3.3, 3.8], // Data IPS setiap semester (Y)
        borderColor: "#FCB248", // Ubah warna garis grafik di sini
        borderWidth: 2,
        fill: true, // Mengisi area di bawah garis
        backgroundColor: gradient, // Menambahkan gradien di bawah grafik
        pointBackgroundColor: "#2A356B", // Warna lingkaran kecil yang menunjukkan nilai IPK
        pointRadius: 5, // Ukuran lingkaran kecil
        pointBorderColor: "#2A356B", // Warna border lingkaran kecil (opsional)
      },
    ],
  },
  options: {
    responsive: true,
    scales: {
      x: {
        beginAtZero: true,
      },
      y: {
        min: 0,
        max: 4, // Batas sumbu Y antara 0 sampai 4
        ticks: {
          stepSize: 1, // Langkah antara setiap nilai sumbu Y
          callback: function (value) {
            return value.toFixed(2); // Menampilkan angka dengan dua desimal
          },
        },
      },
    },
    plugins: {
      legend: {
        position: "bottom", // Pindahkan posisi legend ke bawah grafik
        display: false, // Menyembunyikan legend
      },
    },
  },
});
