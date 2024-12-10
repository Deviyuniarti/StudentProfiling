<div class="sidebar">
      <div class="profile-section">
        <img
          src="{{ asset('template') }}/images/stdpberanda.png"
          alt="Foto Mahasiswa"
          class="profile-img"
        />
      </div>
      <a href="/mahasiswa" class="beranda-link">
        <img src="{{ asset('template') }}/images/berandakalmik.png" alt="Icon Beranda" />
        Beranda
      </a>

      <!-- Accordion Akademik -->
      <a
        href="#akademikAccordion"
        data-toggle="collapse"
        aria-expanded="false"
        aria-controls="akademikAccordion"
      >
        <img src="{{ asset('template') }}/images/akademik.png" alt="Icon Akademik" />
        Akademik
        <i class="fas fa-chevron-down ml-auto"></i>
      </a>
      <div id="akademikAccordion" class="collapse pl-4">
        <a href="/kalender_akademik" class="menu-item" >Kalender Akademik</a>
        <a href="/jadwal_kuliah" class="menu-item">Jadwal Kuliah</a>
        <a href="/tugas_kuliah" class="menu-item">Tugas Kuliah</a>
        <a href="/hasil_studi" class="menu-item">Hasil Studi</a>
    </div>

      <!-- Accordion Rekomendasi Karir -->
      <a href="/rekomendasi_karir">
      <img src="{{ asset('template') }}/images/karir.png" alt="Icon Rekomendasi Karir" />
        Rekomendasi Karir
      </a>
    </div>
    </div>