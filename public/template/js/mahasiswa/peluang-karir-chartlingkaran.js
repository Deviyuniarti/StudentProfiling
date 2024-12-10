var ctx = document.getElementById("donutChart").getContext("2d");
var donutChart = new Chart(ctx, {
  type: "doughnut",
  data: {
    labels: ["Kreatif", "Teknis", "Inovator", "Adaptif", "Sosial"], // Label kategori
    datasets: [
      {
        data: [50, 10, 5, 20, 15], // Persentase data
        backgroundColor: [
          "#14B8A6",
          "#F59E0B",
          "#FACC15",
          "#3B82F6",
          "#6366F1",
        ],
        borderColor: ["#fff", "#fff", "#fff", "#fff", "#fff"],
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: false, // Nonaktifkan responsivitas
    cutout: 60, // Membuat bagian tengah lebih besar dan bagian donut lebih ramping
    plugins: {
      legend: {
        position: "right",
        labels: {
          font: {
            size: 14,
            color: "#2A356B",
          },
          boxWidth: 20,
          boxHeight: 20,
          usePointStyle: true,
          padding: 15,
        },
      },
      tooltip: {
        callbacks: {
          label: function (tooltipItem) {
            return tooltipItem.label + ": " + tooltipItem.raw + "%";
          },
        },
      },
    },
    layout: {
      padding: {
        top: 10,
        left: 20,
        right: 20,
        bottom: 20,
      },
    },
  },
});
