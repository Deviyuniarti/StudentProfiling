// Menangani klik pada link "Lupa Password"
document
  .getElementById("forgotPasswordLink")
  .addEventListener("click", function (event) {
    event.preventDefault();
    window.location.href = "../../manajemen/lupa-password-manajemen.html";
  });


// Menangani klik pada tombol "Masuk"
document.getElementById("loginButton").addEventListener("click", function () {
  const nim = document.getElementById("nim").value;
  const password = document.getElementById("password").value;

  // Ambil URL dari data atribut pada elemen body
  const manajemenRoute = document.body.getAttribute('data-manajemen-url');

  if (nim && password) {
      // Redirect ke halaman manajemen menggunakan URL yang sudah disuntikkan
      window.location.href = manajemenRoute;
  } else {
      alert("Silakan masukkan NIM/NPM dan Password.");
  }
});
