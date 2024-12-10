const tabelData = [
  {
    mataKuliah: "Desain Grafis",
    keterampilan: "Design",
    minat: "Kreatif",
  },
  {
    mataKuliah: "Animasi 2D & 3D",
    keterampilan: "UI/UX",
    minat: "Seni Digital",
  },
  { mataKuliah: "UI/UX", keterampilan: "Animation", minat: "Desain Visual" },
  {
    mataKuliah: "Sistem Multimedia",
    keterampilan: "3D Design",
    minat: "Teknologi",
  },
];

const tabelBody = document.getElementById("tabelBidangBody");

tabelData.forEach((row) => {
  const tr = document.createElement("tr");
  tr.innerHTML = `
      <td>${row.mataKuliah}</td>
      <td>${row.keterampilan}</td>
      <td>${row.minat}</td>
    `;
  tabelBody.appendChild(tr);
});
