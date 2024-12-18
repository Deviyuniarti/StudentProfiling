<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <!-- Menambahkan font Poppins -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap"
      rel="stylesheet"
    />
    <style>
      .login-image {
        background-image: url("{{ asset('template') }}/images/kampuslogin.jpg");
        background-size: cover;
        background-position: center;
        height: 100vh;
        position: relative; /* Pastikan posisinya relative agar elemen absolute di dalamnya bisa diatur */
      }

      .login-container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
      }

      .logo-container {
        position: absolute;
        top: 40px;
        right: 20px;
        display: flex;
        align-items: center;
      }

      .logo-container img {
        width: 30px;
        height: 30px;
        margin-right: 10px;
      }

      .logo-container span {
        font-family: "Poppins", sans-serif;
        font-weight: bold;
        font-size: 18px;
        color: white;
      }

      h3.text-center {
        color: #2a356b;
      }

      label {
        color: #2a356b;
      }

      #forgotPasswordLink {
        color: #2a356b;
      }

      .separator-line {
        width: 100%;
        height: 1px;
        background-color: #2a356b;
        margin: 10px 0 20px 0;
      }

      .text-black {
        color: #000;
      }

      .btn-dark-gray {
        background-color: #fcb248;
        color: white;
      }

      /* Responsif untuk perangkat kecil */
      @media (max-width: 767px) {
        .logo-container {
          top: 60px;
          right: 10px;
        }

        .login-image {
          height: auto;
        }

        .login-container {
          justify-content: flex-start;
          padding-top: 20px;
        }

        h3.text-center {
          font-size: 24px;
        }
      }

      /* Responsif untuk layar sedang hingga besar */
      @media (min-width: 768px) {
        .col-md-6 {
          padding: 0;
        }
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <!-- Bagian Kiri: Gambar -->
        <div class="col-md-6 d-none d-md-block login-image">
          <!-- Logo dan Teks Universitas Maxy di kanan atas -->
          <div class="logo-container">
            <img src="{{ asset('template') }}/images/maxy.png" alt="Logo Universitas Maxy" />
            <span>Universitas Maxy</span>
          </div>
        </div>

        <!-- Bagian Kanan: Gambar & Form Login -->
        <div class="col-md-6 login-container">
          <div class="col-md-8">
            <!-- Judul -->
            <h3 class="text-center">Login</h3>

            <!-- Garis Pemisah -->
            <div class="separator-line"></div>

            <form action="{{ route('login.proses') }}" method="POST">
                @csrf
                <!-- Input Email -->
                <div class="form-group">
                    <label for="email">Masukkan Email</label>
                    <input
                        type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        id="email"
                        name="email" 
                        placeholder="Masukkan Email Anda"
                        value="{{ old('email') }}"
                        required
                    />
                    <!-- Pesan Error -->
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Input Password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        id="password"
                        name="password"
                        placeholder="Masukkan Password Anda"
                        required
                    />
                    <!-- Pesan Error -->
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Pesan Error Login -->
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif



                <!-- Tombol Login -->
                <button
                    type="submit"
                    class="btn btn-dark-gray btn-block mt-3"
                    id="loginButton"
                >
                    Masuk
                </button>

            </form>

          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

     <!-- Menyuntikkan URL route Laravel ke dalam elemen data atribut -->
     <script>
        // Menyuntikkan URL route ke dalam elemen data atribut
        document.body.setAttribute('data-mahasiswa-url', "{{ route('mahasiswa.dashboard') }}");
    </script>
    
    <script src="{{ asset('template') }}/js/mahasiswa/login-mahasiswa.js"></script>
  </body>
</html>