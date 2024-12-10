// Menangani pengalihan halaman setelah mengklik tombol simpan
document
  .getElementById("masukkanPasswordForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Mencegah pengiriman form
    var newPassword = document.getElementById("newPassword").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    // Cek jika semua input valid
    if (newPassword && confirmPassword) {
      // Pastikan password baru dan konfirmasi password cocok
      if (newPassword === confirmPassword) {
        // Tampilkan alert jika password berhasil diubah
        alert("Password baru telah berhasil diubah!");

        // Arahkan ke halaman login setelah password disimpan
        window.location.href = "../../manajemen/login-manajemen.html"; // Ganti dengan nama file halaman login Anda
      } else {
        alert("Password dan konfirmasi password tidak cocok!");
      }
    } else {
      alert("Harap isi semua kolom!");
    }
  });
