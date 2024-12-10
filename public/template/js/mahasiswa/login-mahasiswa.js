// Menangani klik pada link "Lupa Password"
document
  .getElementById("forgotPasswordLink")
  .addEventListener("click", function (event) {
    event.preventDefault();
    window.location.href = "../../mahasiswa/lupa-password-mahasiswa.html";
  });

// Menangani klik pada tombol "Masuk"
document.getElementById("loginButton").addEventListener("click", function () {
  const nim = document.getElementById("nim").value;
  const password = document.getElementById("password").value;

  // Contoh validasi sederhana
  if (nim && password) {
    // Redirect ke halaman beranda
    window.location.href = "../../mahasiswa/beranda-mahasiswa.html";
  } else {
    alert("Silakan masukkan Email dan Password.");
  }
});
