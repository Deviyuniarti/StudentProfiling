// Menangani klik pada link "Lupa Password"
document
  .getElementById("forgotPasswordLink")
  .addEventListener("click", function (event) {
    event.preventDefault();
    window.location.href = "../../admin/lupa-password-admin.html";
  });

// Menangani klik pada tombol "Masuk"
document.getElementById("loginButton").addEventListener("click", function () {
  const nim = document.getElementById("nim").value;
  const password = document.getElementById("password").value;

  // Contoh validasi sederhana
  if (nim && password) {
    // Redirect ke halaman beranda
    window.location.href = "../../admin/beranda-admin.html";
  } else {
    alert("Silakan masukkan username dan Password.");
  }
});
