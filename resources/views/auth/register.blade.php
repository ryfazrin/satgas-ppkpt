<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register | Satgas PPKPT - UTDI</title>

  <!-- Bootstrap & FontAwesome -->
  <link rel="stylesheet" href="{{ asset('modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('modules/fontawesome/css/all.min.css') }}">
  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg" style="background: linear-gradient(135deg, #007BFF, #0056b3);">
  <div class="container">
    <a class="navbar-brand fw-bold d-flex align-items-center text-white" href="/">
      <img src="{{ asset('img/logosatgas.png') }}" alt="Logo Satgas" class="me-2" style="max-height: 40px;">
      <span>Satgas PPKPT</span>
    </a>
  </div>
</nav>

<!-- REGISTER FORM -->
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-6 col-lg-5">
      <div class="card border-0 shadow-lg">
        <div class="card-header bg-white text-center">
          <h4 class="mb-0 fw-bold">Buat Akun Baru</h4>
        </div>
        <div class="card-body p-4">
          
          <!-- Pesan Sukses -->
          @if(session('success'))
            <script>
              Swal.fire({
                title: "Registrasi Berhasil!",
                text: "{{ session('success') }}",
                icon: "success",
                confirmButtonText: "OK"
              });
            </script>
          @endif

          <!-- Pesan Kesalahan -->
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <!-- Form Register -->
          <form method="POST" action="{{ route('user.register') }}">
            @csrf
            <div class="mb-3">
              <label for="nipn_nim" class="form-label">NIPN/NIM</label>
              <input type="text" class="form-control" name="nipn_nim" id="nipn_nim" placeholder="Masukkan NIPN/NIM" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Buat Password" required>
            </div>

            <div class="mb-3">
              <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
              <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Ulangi Password" required>
            </div>

            <div class="mb-3">
              <label for="kontak" class="form-label">Kontak</label>
              <input type="text" class="form-control" name="kontak" id="kontak" placeholder="Masukkan Nomor Telepon" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 fw-bold">
              <i class="fas fa-user-plus me-2"></i> Daftar
            </button>
          </form>

          <!-- Login Link -->
          <div class="text-center mt-3">
            <p>Sudah punya akun? <a href="{{ route('user.login') }}" class="text-primary">Login</a></p>
          </div>
        </div>
      </div>

      <!-- Footer Singkat -->
      <div class="text-center mt-4 text-muted">
        &copy; 2025 Satgas PPKPT Universitas Teknologi Digital Indonesia
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="{{ asset('modules/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
