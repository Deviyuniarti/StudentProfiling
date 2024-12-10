// Menangani pengalihan halaman setelah mengklik tombol kirim email
document
  .getElementById("lupaPasswordForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Mencegah pengiriman form
    var email = document.getElementById("email").value;

    // Cek jika email tidak kosong
    if (email) {
      // Arahkan ke halaman masukkan OTP setelah email dikirim
      window.location.href = "../../manajemen/masukkan-otp-manajemen.html"; // Ganti dengan halaman masukkan OTP
    } else {
      alert("Harap masukkan alamat email yang valid!");
    }
  });
