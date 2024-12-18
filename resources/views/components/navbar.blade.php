<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <!-- Brand -->
  <a class="navbar-brand" href="#">
    <img src="{{ asset('template') }}/images/maxy.png" alt="Icon Profil" />
    <div>
      <div class="brand-name">Universitas Maxy</div>
    </div>
  </a>

    <!-- Profil, Nama, dan Dropdown -->
    <div class="dropdown profile-dropdown">
      <button
        class="btn btn-secondary dropdown-toggle"
        type="button"
        id="dropdownMenuButton"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
        style="
          background: none;
          border: none;
          padding: 0;
          display: flex;
          align-items: center;
        "
      >
        <img
          src="{{ asset('template') }}/images/user.jpg"
          alt="Icon Profil"
          style="
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
          "
        />
        <span class="text-white">{{ Auth::user()->name }}</span>
      </button>

      @if(Auth::user()->role == 'mahasiswa')
        <!-- Dropdown Menu -->
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <!-- Data Mahasiswa -->
          <a class="dropdown-item" href="/data_mahasiswa">
            <img
              src="{{ asset('template') }}/images/navbar1.png"
              alt="Mahasiswa"
              class="icon"
            />
            Data Mahasiswa
          </a>

          <!-- Aktivitas & Prestasi -->
          <a class="dropdown-item" href="/aktivitas_mahasiswa">
            <img
              src="{{ asset('template') }}/images/navbar2.png"
              alt="Aktivitas"
              class="icon"
            />
            Aktivitas & Prestasi
          </a>

          <!-- Logout -->
          <a class="dropdown-item logout" href="{{ route('login') }}">
            <img
              src="{{ asset('template') }}/images/navbar3.png"
              alt="Logout"
              class="icon"
            />
            Logout
          </a>
      </div>

      @elseif(Auth::user()->role == 'dosen')
      <!-- Logout -->
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item logout" href="{{ route('login') }}">
            <img
              src="{{ asset('template') }}/images/navbar3.png"
              alt="Logout"
              class="icon"
            />
            Logout
          </a>
        </div>
      @endif
  </div>
</nav>
