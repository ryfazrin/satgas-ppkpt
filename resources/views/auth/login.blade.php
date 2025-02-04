<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login | Satgas PPKPT - UTDI</title>

  <!-- Bootstrap & FontAwesome -->
  <link rel="stylesheet" href="{{ asset('modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('modules/fontawesome/css/all.min.css') }}">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg" style="background: linear-gradient(135deg, #007BFF, #0056b3);">
  <div class="container">
    <a class="navbar-brand fw-bold d-flex align-items-center text-white" href="/">
      <img src="{{ asset('img/logosatgas.png') }}" alt="Logo Satgas" class="me-2" style="max-height: 40px;">
      <span>Satgas PPKPT</span>
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
      aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link text-white fw-semibold px-3" href="/">Beranda</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-semibold px-3" href="{{ route('alur_pelaporan.index') }}">Alur Pelaporan</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-semibold px-3" href="{{ route('laporan.view') }}">Form Pelaporan</a></li>
       
      </ul>
    </div>
  </div>
</nav>

<!-- HERO Section dengan Background Gradient -->
<section class="d-flex align-items-center justify-content-center text-white text-center py-3"
  style="background: linear-gradient(135deg, #0D0B8C, #009FFD); min-height: 100px;">
  <div class="container">
    <h1 class="fw-bold">LOGIN</h1>
    <p class="lead">Satgas PPKPT Universitas Teknologi Digital Indonesia</p>
  </div>
</section>

<!-- LOGIN FORM -->
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-6 col-lg-5">
      <div class="card border-0 shadow-lg">
        <div class="card-header bg-white text-center">
          <h4 class="mb-0 fw-bold">Masuk ke Akun</h4>
        </div>
        <div class="card-body p-4">
          
          <!-- Pesan Kesalahan -->
          @if(session('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <!-- Form Login -->
          <form method="POST" action="{{ route('user.login') }}">
            @csrf
            <div class="mb-3">
              <label for="nipn_nim" class="form-label">NIPN/NIM</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" name="nipn_nim" id="nipn_nim" required autofocus>
              </div>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" name="password" id="password" required>
              </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 fw-bold">
              <i class="fas fa-sign-in-alt me-2"></i> Login
            </button>
          </form>

          <!-- Register Link -->
          <div class="text-center mt-3">
            <p>Belum punya akun? <a href="{{ route('user.register') }}" class="text-primary">Daftar</a></p>
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