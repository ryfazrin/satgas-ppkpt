<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Alur Pelaporan | Satgas PPKPT - UTDI</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('modules/fontawesome/css/all.min.css') }}">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
  <div class="container">
    <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
      <img src="{{ asset('img/logosatgas.png') }}" alt="Logo Satgas" class="me-2" style="max-height: 50px;">
      Satgas PPKPT
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
      aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="/">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('alur_pelaporan.index') }}">Alur Pelaporan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('laporan.view') }}">Form Pelaporan</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO Section dengan Background Gradient -->
<section class="d-flex align-items-center justify-content-center text-white text-center py-3"
  style="background: linear-gradient(135deg, #0D0B8C, #009FFD); min-height: 100px;">
  <div class="container">
    <h1 class="fw-bold">Alur Pelaporan</h1>
    <p class="lead">Langkah-langkah dalam melakukan pelaporan ke Satgas PPKPT UTDI</p>
  </div>
</section>

<!-- LANGKAH-LANGKAH PELAPORAN -->
<section class="container my-5">
  <div class="row gy-4">
    
    <!-- Langkah 1 -->
    <div class="col-md-6 col-lg-3">
      <div class="card border-0 shadow-lg text-center p-4">
        <div class="card-body">
          <i class="fas fa-file-signature fa-3x text-primary mb-3"></i>
          <h5 class="fw-bold">Langkah 1</h5>
          <p class="text-muted">
            Pelapor mengisi form pelaporan. Informasi ini membantu Satgas dalam persiapan penanganan.
          </p>
        </div>
      </div>
    </div>

    <!-- Langkah 2 -->
    <div class="col-md-6 col-lg-3">
      <div class="card border-0 shadow-lg text-center p-4">
        <div class="card-body">
          <i class="fas fa-comments fa-3x text-danger mb-3"></i>
          <h5 class="fw-bold">Langkah 2</h5>
          <p class="text-muted">
            Pelapor atau korban dikonsultasikan untuk mengetahui kebutuhan dan harapannya.
          </p>
        </div>
      </div>
    </div>

    <!-- Langkah 3 -->
    <div class="col-md-6 col-lg-3">
      <div class="card border-0 shadow-lg text-center p-4">
        <div class="card-body">
          <i class="fas fa-handshake fa-3x text-success mb-3"></i>
          <h5 class="fw-bold">Langkah 3</h5>
          <p class="text-muted">
            Berdasarkan konsultasi, Satgas memberikan layanan sesuai kebutuhan korban.
          </p>
        </div>
      </div>
    </div>

    <!-- Langkah 4 -->
    <div class="col-md-6 col-lg-3">
      <div class="card border-0 shadow-lg text-center p-4">
        <div class="card-body">
          <i class="fas fa-gavel fa-3x text-warning mb-3"></i>
          <h5 class="fw-bold">Langkah 4</h5>
          <p class="text-muted">
            Satgas memberikan rekomendasi tindakan lanjut, termasuk layanan hukum atau pemulihan korban.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- FOOTER -->
<footer class="bg-light border-top py-3 text-center">
  <div class="container">
    <p class="mb-0">
      &copy; 2025 
      <span class="fw-semibold">Satgas PPKPT Universitas Teknologi Digital Indonesia</span>
    </p>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="{{ asset('modules/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
