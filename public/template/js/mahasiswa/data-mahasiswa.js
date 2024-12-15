// Fungsi untuk menampilkan tabel sesuai tab yang dipilih
function showTable(tabId) {
  const tabs = document.querySelectorAll(".content-box-kecil");
  tabs.forEach((tab) => tab.classList.remove("active"));
  document.getElementById(tabId).classList.add("active");

  const contentTable = document.getElementById("content-table");
  let htmlContent = "";
  switch (tabId) {
    case "data-diri":
      htmlContent = `
        <div class="form-container">
          <!-- Kolom Kiri -->
          <div class="form-column">
            <div>
              <label for="jenis-kelamin-diri">Jenis Kelamin</label>
              <input type="text" id="jenis-kelamin-diri" placeholder="Masukkan Jenis Kelamin">
            </div>
            <div>
              <label for="tempat-lahir-diri">Tempat Lahir</label>
              <input type="text" id="tempat-lahir-diri" placeholder="Masukkan Tempat Lahir">
            </div>
            <div>
              <label for="tanggal-lahir-diri">Tanggal Lahir</label>
              <input type="date" id="tanggal-lahir-diri">
            </div>
            <div>
              <label for="agama-diri">Agama</label>
              <input type="text" id="agama-diri" placeholder="Masukkan Agama">
            </div>
            <div>
              <label for="alamat-diri">Alamat</label>
              <input type="text" id="alamat-diri" placeholder="Masukkan Alamat">
            </div>
            <div>
              <label for="desa-kelurahan-diri">Desa/Kelurahan</label>
              <input type="text" id="desa-kelurahan-diri" placeholder="Masukkan Desa/Kelurahan">
            </div>
            <div>
              <label for="provinsi-diri">Provinsi</label>
              <input type="text" id="provinsi-diri" placeholder="Masukkan Provinsi">
            </div>
            <div>
              <label for="kota-diri">Kota</label>
              <input type="text" id="kota-diri" placeholder="Masukkan Kota">
            </div>
            <div>
              <label for="kecamatan-diri">Kecamatan</label>
              <input type="text" id="kecamatan-diri" placeholder="Masukkan Kecamatan">
            </div>
            <div>
              <label for="kode-pos-diri">Kode Pos</label>
              <input type="text" id="kode-pos-diri" placeholder="Masukkan Kode Pos">
            </div>
          </div>
  
          <!-- Kolom Kanan -->
          <div class="form-column">
            <div>
              <label for="kewarganegaraan-diri">Kewarganegaraan</label>
              <input type="text" id="kewarganegaraan-diri" placeholder="Masukkan Kewarganegaraan">
            </div>
            <div>
              <label for="kk-diri">KK</label>
              <input type="text" id="kk-diri" placeholder="Masukkan Nomor KK">
            </div>
            <div>
              <label for="nik-diri">NIK</label>
              <input type="text" id="nik-diri" placeholder="Masukkan NIK">
            </div>
            <div>
              <label for="berat-badan-diri">Berat Badan</label>
              <input type="text" id="berat-badan-diri" placeholder="Masukkan Berat Badan">
            </div>
            <div>
              <label for="tinggi-badan-diri">Tinggi Badan</label>
              <input type="text" id="tinggi-badan-diri" placeholder="Masukkan Tinggi Badan">
            </div>
            <div>
              <label for="golongan-darah-diri">Golongan Darah</label>
              <input type="text" id="golongan-darah-diri" placeholder="Masukkan Golongan Darah">
            </div>
            <div>
              <label for="no-telp-diri">No Telepon</label>
              <input type="text" id="no-telp-diri" placeholder="Masukkan Nomor Telepon">
            </div>
            <div>
              <label for="email-kampus-diri">Email Kampus</label>
              <input type="email" id="email-kampus-diri" placeholder="Masukkan Email Kampus">
            </div>
            <div>
              <label for="email-pribadi-diri">Email Pribadi</label>
              <input type="email" id="email-pribadi-diri" placeholder="Masukkan Email Pribadi">
            </div>
            <div>
              <label for="no-telp-alt-diri">No Telepon</label>
              <input type="text" id="no-telp-alt-diri" placeholder="Masukkan Nomor Telepon">
            </div>
          </div>
        </div>

        <button class="btn-simpan" onclick="saveData('data-diri')">Simpan</button>

        
      `;
      break;

    case "data-orang-tua":
      htmlContent = `
              <div class="form-container">
          <!-- Kolom Kiri -->
          <div class="form-column">
            <div>
              <label for="nama-ayah">Nama Ayah</label>
              <input type="text" id="nama-ayah" placeholder="Masukkan Nama">
            </div>
            <div>
              <label for="nik-ayah">NIK</label>
              <input type="text" id="nik-ayah" placeholder="Masukkan NIK">
            </div>
            <div>
              <label for="tempat-lahir-ayah">Tempat Lahir</label>
              <input type="text" id="tempat-lahir-ayah" placeholder="Masukkan Tempat Lahir">
            </div>
            <div>
              <label for="tanggal-lahir-ayah">Tanggal Lahir</label>
              <input type="date" id="tanggal-lahir-ayah">
            </div>
            <div>
              <label for="agama-ayah">Agama</label>
              <input type="text" id="agama-ayah" placeholder="Masukkan Agama">
            </div>
            <div>
              <label for="pendidikan-terakhir-ayah">Pendidikan Terakhir</label>
              <input type="text" id="pendidikan-terakhir-ayah" placeholder="Masukkan Pendidikan Terakhir">
            </div>
            <div>
              <label for="alamat-ayah">Alamat</label>
              <input type="text" id="alamat-ayah" placeholder="Masukkan Alamat">
            </div>
            <div>
              <label for="no-telp-ayah">No Telepon</label>
              <input type="text" id="no-telp-ayah" placeholder="Masukkan Nomor Telepon">
            </div>
            <div>
              <label for="pekerjaan-ayah">Pekerjaan</label>
              <input type="text" id="pekerjaan-ayah" placeholder="Masukkan Pekerjaan">
            </div>
            <div>
              <label for="penghasilan-ayah">Penghasilan</label>
              <input type="text" id="penghasilan-ayah" placeholder="Masukkan Penghasilan">
            </div>
          </div>
  
          <!-- Kolom Kanan -->
          <div class="form-column">
            <div>
              <label for="nama-ibu">Nama Ibu</label>
              <input type="text" id="nama-ibu" placeholder="Masukkan Nama">
            </div>
            <div>
              <label for="nik-ibu">NIK</label>
              <input type="text" id="nik-ibu" placeholder="Masukkan NIK">
            </div>
            <div>
              <label for="tempat-lahir-ibu">Tempat Lahir</label>
              <input type="text" id="tempat-lahir-ibu" placeholder="Masukkan Tempat Lahir">
            </div>
            <div>
              <label for="tanggal-lahir-ibu">Tanggal Lahir</label>
              <input type="date" id="tanggal-lahir-ibu">
            </div>
            <div>
              <label for="agama-ibu">Agama</label>
              <input type="text" id="agama-ibu" placeholder="Masukkan Agama">
            </div>
            <div>
              <label for="pendidikan-terakhir-ibu">Pendidikan Terakhir</label>
              <input type="text" id="pendidikan-terakhir-ibu" placeholder="Masukkan Pendidikan Terakhir">
            </div>
            <div>
              <label for="alamat-ibu">Alamat</label>
              <input type="text" id="alamat-ibu" placeholder="Masukkan Alamat">
            </div>
            <div>
              <label for="no-telp-ibu">No Telepon</label>
              <input type="text" id="no-telp-ibu" placeholder="Masukkan Nomor Telepon">
            </div>
            <div>
              <label for="pekerjaan-ibu">Pekerjaan</label>
              <input type="text" id="pekerjaan-ibu" placeholder="Masukkan Pekerjaan">
            </div>
            <div>
              <label for="penghasilan-ibu">Penghasilan</label>
              <input type="text" id="penghasilan-ibu" placeholder="Masukkan Penghasilan">
            </div>
          </div>
        </div>

          <button class="btn-simpan" onclick="saveData('data-orang-tua')">Simpan</button>

        `;
      break;

    case "data-wali":
      htmlContent = `
              <div class="form-container">
          <!-- Kolom Kiri -->
          <div class="form-column">
            <div>
              <label for="nama-wali">Nama Wali</label>
              <input type="text" id="nama-wali" placeholder="Masukkan Nama">
            </div>
            <div>
              <label for="nik-wali">NIK</label>
              <input type="text" id="nik-wali" placeholder="Masukkan NIK">
            </div>
            <div>
              <label for="tempat-lahir-wali">Tempat Lahir</label>
              <input type="text" id="tempat-lahir-wali" placeholder="Masukkan Tempat Lahir">
            </div>
            <div>
              <label for="tanggal-lahir-wali">Tanggal Lahir</label>
              <input type="date" id="tanggal-lahir-wali">
            </div>
            <div>
              <label for="agama-wali">Agama</label>
              <input type="text" id="agama-wali" placeholder="Masukkan Agama">
            </div>
           
          </div>
  
          <!-- Kolom Kanan -->
          <div class="form-column">
           <div>
              <label for="pendidikan-terakhir-wali">Pendidikan Terakhir</label>
              <input type="text" id="pendidikan-terakhir-wali" placeholder="Masukkan Pendidikan Terakhir">
            </div>
            <div>
              <label for="alamat-wali">Alamat</label>
              <input type="text" id="alamat-wali" placeholder="Masukkan Alamat">
            </div>
            <div>
              <label for="no-telp-wali">No Telepon</label>
              <input type="text" id="no-telp-wali" placeholder="Masukkan Nomor Telepon">
            </div>
            <div>
              <label for="pekerjaan-wali">Pekerjaan</label>
              <input type="text" id="pekerjaan-wali" placeholder="Masukkan Pekerjaan">
            </div>
            <div>
              <label for="penghasilan-wali">Penghasilan</label>
              <input type="text" id="penghasilan-wali" placeholder="Masukkan Penghasilan">
            </div>
          </div>
        </div>

          <button class="btn-simpan" onclick="saveData('data-wali')">Simpan</button>

        `;

      break;

    case "riwayat-pendidikan":
      htmlContent = `
              <div class="form-container">
          <!-- Kolom Kiri -->
          <div class="form-column">
            <div>
              <label for="pendidikan-asal">Pendidikan Asal</label>
              <input type="text" id="pendidikan-asal" placeholder="Masukkan Pendidikan Asal">
            </div>
            <div>
              <label for="provinsi-sekolah">Provinsi Sekolah</label>
              <input type="text" id="provinsi-sekolah" placeholder="Masukkan Provinsi Sekolah">
            </div>
            <div>
              <label for="kota-sekolah">Kota Sekolah</label>
              <input type="text" id="kota-sekolah" placeholder="Masukkan Kota Sekolah">
            </div>
           <div>
              <label for="alamat-sekolah">Alamat Sekolah</label>
              <input type="text" id="alamat-sekolah" placeholder="Masukkan Alamat Sekolah">
            </div>           
          </div>
  
          <!-- Kolom Kanan -->
          <div class="form-column">
           <div>
              <label for="no-telp-sekolah">Telepon Sekolah</label>
              <input type="text" id="no-telp-sekolah" placeholder="Masukkan No Telepon Sekolah">
            </div>
            <div>
              <label for="nomor-ijazah">Nomor Ijazah</label>
              <input type="text" id="nomor-ijazah" placeholder="Masukkan Nomor Ijazah">
            </div>
            <div>
              <label for="nisn">NISN</label>
              <input type="text" id="nisn" placeholder="Masukkan NISN">
            </div>
          </div>
        </div>

          <button class="btn-simpan" onclick="saveData('riwayat-pendidikan')">Simpan</button>

        `;

      break;
  }
  contentTable.innerHTML = htmlContent;
  loadData(tabId); // Muat data yang tersimpan
}

// Fungsi untuk menyimpan data ke Local Storage
function saveData(tabId) {
  const inputs = document.querySelectorAll("#content-table input");
  const data = {};
  inputs.forEach((input) => {
    data[input.id] = input.value; // Simpan ID dan nilai input
  });

  localStorage.setItem(tabId, JSON.stringify(data)); // Simpan data ke Local Storage
  alert("Data berhasil disimpan!");
}

// Fungsi untuk memuat data dari Local Storage
function loadData(tabId) {
  const savedData = JSON.parse(localStorage.getItem(tabId));
  if (savedData) {
    Object.keys(savedData).forEach((key) => {
      const input = document.getElementById(key);
      if (input) {
        input.value = savedData[key]; // Isi input dengan data yang tersimpan
      }
    });
  }
}

// Default: Tampilkan Data Diri saat pertama kali
document.addEventListener("DOMContentLoaded", () => {
  showTable("data-diri");
});

document.getElementById('upload-foto').addEventListener('change', function(event) {
  const file = event.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      document.getElementById('gambar-profil').src = e.target.result;
    };
    reader.readAsDataURL(file);
  }
});

