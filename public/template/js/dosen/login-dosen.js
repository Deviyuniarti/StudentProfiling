// Menangani klik pada link "Lupa Password"
document
  .getElementById("forgotPasswordLink")
  .addEventListener("click", function (event) {
    event.preventDefault();
    window.location.href = "../../dosen/lupa-password-dosen.html";
  });

// Menangani klik pada tombol "Masuk"
document.getElementById("loginButton").addEventListener("click", function () {
  const nim = document.getElementById("nim").value;
  const password = document.getElementById("password").value;

   // Ambil URL dari data atribut pada elemen body
   const dosenRoute = document.body.getAttribute('data-dosen-url');

  // Contoh validasi sederhana
  if (nim && password) {
    // Redirect ke halaman dosen menggunakan URL yang sudah disuntikkan
    window.location.href = dosenRoute;
  } else {
    alert("Silakan masukkan NIDN/NIDK/NIP dan Password.");
  }
});

