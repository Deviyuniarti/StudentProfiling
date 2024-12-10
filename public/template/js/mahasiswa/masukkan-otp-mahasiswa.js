// Menangani pengalihan halaman setelah mengklik tombol verifikasi
document.getElementById("otpForm").addEventListener("submit", function (event) {
  event.preventDefault(); // Mencegah pengiriman form
  var otp = document.getElementById("otp").value;

  // Cek jika OTP tidak kosong
  if (otp) {
    // Arahkan ke halaman selanjutnya setelah OTP diverifikasi
    window.location.href =
      "../../mahasiswa/masukkan-password-baru-mahasiswa.html"; // Ganti dengan halaman reset password yang diinginkan
  } else {
    alert("Harap masukkan kode OTP yang valid!");
  }
});
