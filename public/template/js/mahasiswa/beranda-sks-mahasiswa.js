var ctx = document.getElementById("mataKuliahChart").getContext("2d");
var mataKuliahChart = new Chart(ctx, {
  type: "doughnut", // Menggunakan chart tipe 'doughnut' (lingkaran bolong)
  data: {
    labels: [
      "Basis Data",
      "UI/UX",
      "Desain Grafis",
      "Pemrogramman Web",
      "Animasi 2D & 3D",
      "Sistem Multimedia",
      "Jaringan Komputer",
      "Komputer & Masyarakat",
      "Game",
      "Citra Digital",
    ], // Nama mata kuliah
    datasets: [
      {
        data: [20, 10, 30, 20, 20, 20, 20, 10, 30, 10], // Persentase atau kontribusi dari masing-masing mata kuliah (jumlah total = 100)
        backgroundColor: [
          "#FA5503", // Warna untuk Mata Kuliah 1
          "#FF8E02", // Warna untuk Mata Kuliah 2
          "#FECA05", // Warna untuk Mata Kuliah 3
          "#87DF3B", // Warna untuk Mata Kuliah 4
          "#23B450", // Warna untuk Mata Kuliah 5
          "#188D7B", // Warna untuk Mata Kuliah 6
          "#115FFF", // Warna untuk Mata Kuliah 7
          "#7542FF", // Warna untuk Mata Kuliah 8
          "#791E9D", // Warna untuk Mata Kuliah 9
          "#AB31AA", // Warna untuk Mata Kuliah 10
        ], // Warna lingkaran untuk tiap mata kuliah
        hoverBackgroundColor: [
          "#ff6666",
          "#3399ff",
          "#66ff66",
          "#ff9966",
          "#9999ff",
          "#ff80bf",
          "#b3d9b3",
          "#ff3333",
          "#3366cc",
          "#66cc66",
        ], // Warna saat hover
        borderWidth: 0, // Menghilangkan border di antara segmen
      },
    ],
  },
  options: {
    responsive: true, // Membuat chart responsif
    plugins: {
      legend: {
        position: "right", // Menempatkan legenda di sebelah kanan chart
        labels: {
          font: {
            size: 16, // Ukuran font legenda
          },
          boxWidth: 20, // Mengubah lebar kotak legenda menjadi persegi
          boxHeight: 20,
        },
        // Membagi legenda menjadi 2 kolom
        labels: {
          generateLabels: function (chart) {
            const original =
              Chart.overrides.doughnut.plugins.legend.labels.generateLabels;
            const labels = original.call(this, chart);
            // Membagi labels menjadi 2 kolom
            const mid = Math.ceil(labels.length / 2);
            const firstHalf = labels.slice(0, mid);
            const secondHalf = labels.slice(mid);
            return [...firstHalf, ...secondHalf];
          },
        },
        // Menentukan jumlah kolom untuk legenda
        display: true,
        maxHeight: 200,
        maxWidth: 157, // Membatasi tinggi legend
        boxWidth: 10,
        labels: {
          padding: 10,
          usePointStyle: true, // Membuat label lebih jelas dengan titik
        },
      },
      tooltip: {
        callbacks: {
          label: function (tooltipItem) {
            return tooltipItem.label + ": " + tooltipItem.raw + "%"; // Menampilkan label dan persentase pada tooltip
          },
        },
      },
    },
  },
});
