const ctx = document.getElementById("gpaChart").getContext("2d");
const gpaChart = new Chart(ctx, {
  type: "bar",
  data: {
    labels: [
      "Semester 1",
      "Semester 2",
      "Semester 3",
      "Semester 4",
      "Semester 5",
      "Semester 6",
      "Semester 7",
      "Semester 8",
    ],
    datasets: [
      {
        label: "",
        data: [3.2, 3.4, 3.3, 3.8],
        backgroundColor: "#FCB248",
        borderColor: "#FCB248",
        borderWidth: 1,
        borderRadius: 8, // Ujung balok melengkung
        barThickness: 37, // Lebar balok
      },
    ],
  },
  options: {
    maintainAspectRatio: false,
    plugins: {
      legend: {
        display: false,
      },
    },
    scales: {
      x: {
        ticks: {
          display: true,
        },
        grid: {
          display: false,
        },
      },
      y: {
        min: 0,
        max: 4,
        ticks: {
          stepSize: 1,
          color: "#2A356B",
          font: {
            weight: "bold", // Menebalkan font label
          },
          callback: function (value) {
            return value.toFixed(2);
          },
        },
        grid: {
          drawBorder: true,
        },
      },
    },
  },
});
