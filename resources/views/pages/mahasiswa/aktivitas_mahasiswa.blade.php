@extends('template_mahasiswa.aktivitas_mahasiswa')

@section('content')
<div class="content-box">
        <div style="flex: 1">
          <h3 style="font-weight: bold">Aktivitas & Prestasi</h3>
        </div>

        <div style="text-align: right">
          <span>profil / Aktivitas & Prestasi</span>
        </div>
      </div>
    </div>


 <!-- Content Box Two Header -->
 <div class="content-box-two">
      <div class="header">
        <!-- Button + -->
        <button id="addSkillBtn" class="add-btn">
          <i class="fas fa-plus"></i>
        </button>
        <h3>Keterampilan</h3>
        <!-- Dropdown Button -->
        <button id="dropdownBtn" class="dropdown-btn">
          <i class="fas fa-chevron-down"></i>
        </button>
      </div>

      <!-- Isian Data (Dropdown Content) -->
      <div class="toggle-content" id="toggleContent" style="display: none">
        <div id="skillData">
          <!-- Tampilkan data yang diinputkan pada popup -->
        </div>
      </div>

      <!-- Popup Form -->
      <div class="popup" id="popup" style="display: none">
        <header>
          <h4>Tambah Keterampilan</h4>
          <button id="closePopup">X</button>
        </header>
        <form id="skillForm">
          <label for="skillTitle">Judul Keterampilan</label>
          <input type="text" id="skillTitle" name="skillTitle" 
          placeholder="Tulis Keterampilanmu"
          required />

          <label for="skillDescription">Deskripsi</label>
          <textarea
            id="skillDescription"
            name="skillDescription"
            placeholder="Tulis Deskripsi"
            required
          ></textarea>

          <label for="tags">Keterampilan</label>
            <div style="position: relative;">
              <input
                type="text"
                id="tagsInput"
                name="tagsInput"
                autocomplete="off"
                placeholder="Tambahkan keterampilan"
              />
              <div id="tagSuggestions" style="display: none;"></div>
            </div>

            <!-- Container untuk tag yang dipilih -->
            <div id="selectedTags" class="selected-tags"></div>

          <label for="skillMedia">Media</label>
          <input type="file" id="skillMedia" name="skillMedia" />
          <!-- Preview gambar yang di-upload -->
          <div id="imagePreview"></div>

          <footer>
            <button type="submit" id="saveSkillBtn">Simpan</button>
          </footer>
        </form>
      </div>
    </div>

    <div class="content-box-three">
      <div class="header">
        <!-- Button + -->
        <button id="addExperienceBtn" class="add-btn">
          <i class="fas fa-plus"></i>
        </button>
        <h3>Pengalaman</h3>
        <!-- Dropdown Button -->
        <button id="dropdownBtnExperience" class="dropdown-btn">
          <i class="fas fa-chevron-down"></i>
        </button>
      </div>

      <!-- Isian Data (Dropdown Content) -->
      <div
        class="toggle-content"
        id="toggleContentExperience"
        style="display: none"
      >
        <div id="experienceData">
          <!-- Tampilkan data pengalaman yang diinputkan pada popup -->
        </div>
      </div>

      <!-- Popup Form -->
      <div class="popup" id="popupExperience" style="display: none">
        <header>
          <h4>Tambah Pengalaman</h4>
          <button id="closePopupExperience">X</button>
        </header>
        <form id="experienceForm">
          <label for="experienceTitle">Judul Pengalaman</label>
          <input
            type="text"
            id="experienceTitle"
            name="experienceTitle"
            placeholder="Tulis Pengalamanmu"
            required
          />

          <label for="experiencePosition">Posisi</label>
          <input
            type="text"
            id="experiencePosition"
            name="experiencePosition"
            placeholder="Contoh: Software Engineer, Ketua Tim, Asisten Peneliti"
            required
          />

          <label for="experienceCompany">Nama Instansi</label>
          <input
            type="text"
            id="experienceCompany"
            name="experienceCompany"
            placeholder="Contoh: PT Teknologi Nusantara, Universitas Indonesia"
            required
          />

          <label for="experienceCertificate">Sertifikat</label>
          <input
            type="file"
            id="experienceCertificate"
            name="experienceCertificate"
          />
          <!-- Preview sertifikat yang di-upload -->
          <div id="certificatePreview"></div>

          <footer>
            <button type="submit" id="saveExperienceBtn">Simpan</button>
          </footer>
        </form>
      </div>
@endsection




    