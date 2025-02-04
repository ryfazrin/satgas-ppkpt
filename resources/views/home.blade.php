<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Satgas PPKPT - Universitas Teknologi Digital Indonesia</title>
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
    <h1 class="fw-bold">Satgas PPKPT</h1>
    <p class="lead">Universitas Teknologi Digital Indonesia</p>
  </div>
</section>

<!-- Main Content -->
<div id="contentSection" class="container-fluid my-5 px-5">
  
  <!-- Penanganan dan Pencegahan Kekerasan -->
  <div class="card border-0 shadow mb-5">
    <div class="card-body text-center">
      <img src="{{ asset('img/kekerasan.jpg') }}" alt="Ilustrasi Kekerasan"
           class="img-fluid rounded mb-3" style="max-width: 1150px; object-fit: cover;">
      <h2 class="mb-3 text-primary">Penanganan dan Pencegahan Kekerasan</h2>
      <p class="text-secondary px-2">
        Satgas Pencegahan dan Penanganan Kekerasan di Lingkungan Perguruan Tinggi (PPKPT) adalah langkah 
        strategis Permendikbudristek 55 Tahun 2024 dalam menangani kekerasan di lingkungan perguruan tinggi. 
        Maka dari itu, Universitas Teknologi Digital Indonesia mendukung penuh upaya ini dengan membentuk Satgas PPKPT.
      </p>
    </div>
  </div>

<!-- Tugas dan Wewenang -->
<section class="mt-5">
  <div class="text-center">
    <h3 class="text-primary fw-bold mb-4">🛡️ Tugas dan Wewenang Satgas PPKPT</h3>
    <p class="text-secondary">Satgas PPKPT memiliki peran penting dalam memastikan lingkungan perguruan tinggi bebas dari segala bentuk kekerasan.</p>
  </div>

  <div class="card border-0 shadow-lg p-4">
    <div class="card-body">
      <div class="row">
        
        <!-- Pencegahan dan Penanganan -->
        <div class="col-md-6 mb-3">
          <div class="d-flex align-items-start">
            <i class="fas fa-shield-alt fa-3x text-primary me-3"></i>
            <div>
              <h5 class="fw-bold">🛑 Pencegahan dan Penanganan Kekerasan</h5>
              <p class="text-muted small">Satgas melaksanakan upaya pencegahan dan tindak lanjut laporan untuk menciptakan lingkungan aman.</p>
            </div>
          </div>
        </div>

        <!-- Penyusunan Kebijakan -->
        <div class="col-md-6 mb-3">
          <div class="d-flex align-items-start">
            <i class="fas fa-balance-scale fa-3x text-danger me-3"></i>
            <div>
              <h5 class="fw-bold">📜 Penyusunan dan Sosialisasi Kebijakan</h5>
              <p class="text-muted small">Edukasi tentang kesetaraan gender, pendidikan seksualitas, dan kesehatan reproduksi.</p>
            </div>
          </div>
        </div>

        <!-- Verifikasi Laporan -->
        <div class="col-md-6 mb-3">
          <div class="d-flex align-items-start">
            <i class="fas fa-file-alt fa-3x text-warning me-3"></i>
            <div>
              <h5 class="fw-bold">📑 Verifikasi dan Tindak Lanjut Laporan</h5>
              <p class="text-muted small">Satgas memverifikasi laporan, mengumpulkan bukti, dan berkoordinasi dengan unit terkait.</p>
            </div>
          </div>
        </div>

        <!-- Wewenang Koordinasi -->
        <div class="col-md-6 mb-3">
          <div class="d-flex align-items-start">
            <i class="fas fa-handshake fa-3x text-success me-3"></i>
            <div>
              <h5 class="fw-bold">🤝 Wewenang Panggil dan Koordinasi</h5>
              <p class="text-muted small">Memanggil pihak terkait dan bekerja sama dengan instansi hukum untuk penegakan peraturan.</p>
            </div>
          </div>
        </div>

        <!-- Kerahasiaan -->
        <div class="col-md-12">
          <div class="d-flex align-items-start">
            <i class="fas fa-user-secret fa-3x text-dark me-3"></i>
            <div>
              <h5 class="fw-bold">🔒 Kerahasiaan dan Sanksi</h5>
              <p class="text-muted small">Satgas wajib menjaga kerahasiaan identitas pelapor serta menegakkan kode etik dalam setiap tindakan.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

  <!-- GALERI SATGAS -->
  <section class="mt-5">
    <h3 class="text-primary mb-4 text-center">Galeri Satgas PPKPT</h3>
    <div class="row">
      <div class="col-md-6 text-center">
        <img src="{{ asset('img/sosialisasi_dosen.jpg') }}" alt="Kegiatan Satgas 1"
             class="img-fluid rounded shadow-lg" style="max-width: 600px;">
        <p class="mt-2 fw-semibold">Sosialisasi Satgas PPKPT Kepada Dosen UTDI</p>
      </div>
      <div class="col-md-6 text-center">
        <img src="{{ asset('img/sosialisasi_mahasiswa.jpg') }}" alt="Kegiatan Satgas 2"
             class="img-fluid rounded shadow-lg" style="max-width: 600px;">
        <p class="mt-2 fw-semibold">Sosialisasi Satgas PPKPT Kepada Mahasiswa UTDI</p>
      </div>
    </div>
  </section>

<!-- VIDEO SATGAS DENGAN PENJELASAN -->
<section class="mt-5">
  <div class="container">
    <h3 class="text-primary text-center mb-4">🎥 Video Ketua Satgas & Rektor UTDI</h3>
    <div class="row align-items-center">

<!-- Kolom Kiri: Penjelasan -->
<div class="col-lg-6 text-lg-start text-center mb-4 mb-lg-0">
    <h4 class="fw-bold text-primary"><i class="fas fa-shield-alt"></i> Kenali Satgas PPKPT</h4>
    <p class="text-secondary text-justify">
        Satgas PPKPT berkomitmen untuk menciptakan lingkungan kampus yang aman, nyaman, dan bebas dari kekerasan seksual. 
        Kami hadir untuk memberikan perlindungan, mendukung korban, dan memastikan keadilan ditegakkan.
    </p>
    <div class="p-3 bg-light rounded shadow-sm">
        <ul class="list-unstyled text-secondary">
            <li><i class="fas fa-check-circle text-success"></i> <strong>Mencegah</strong> segala bentuk kekerasan seksual.</li>
            <li><i class="fas fa-check-circle text-success"></i> <strong>Menangani</strong> laporan dengan profesional dan transparan.</li>
            <li><i class="fas fa-check-circle text-success"></i> <strong>Mendampingi</strong> korban dalam proses pemulihan.</li>
        </ul>
    </div>
    <p class="text-secondary text-justify mt-3">
        Jika Anda mengalami atau menyaksikan tindakan kekerasan, jangan diam! Segera laporkan, dan kami akan membantu Anda.
    </p>
</div>

      <!-- Kolom Kanan: Video -->
      <div class="col-lg-4 offset-lg-2"> <!-- Menggunakan offset-lg-1 untuk menggeser video ke kiri -->
        <div class="ratio ratio-16x9 shadow-lg rounded">
          <video controls class="w-100">
            <source src="{{ asset('Video/vidsatgas.mp4') }}" type="video/mp4">
            Browser Anda tidak mendukung pemutaran video.
          </video>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- Section Materi Satgas PPKPT -->
<section class="mt-5">
  <!-- Judul dan Deskripsi -->
  <div class="text-center">
    <h3 class="text-primary fw-bold mb-4">📚 Materi Edukasi Satgas PPKPT</h3>
    <p class="text-secondary">Berikut adalah beberapa materi edukasi dan SK Satgas 
      terkait Pencegahan dan Penanganan Kekerasan di Lingkungan Perguruan Tinggi.</p>
  </div>

  <!-- Card List -->
  <div class="card border-0 shadow-lg p-4">
    <div class="card-body">
      
      <!-- LIST PDF -->
      <div class="row">
        <div class="col-md-12">

          <!-- Buku Panduan -->
          <div class="card border-0 shadow-sm mb-4 p-3 rounded">
            <div class="d-flex align-items-center">
              <i class="fas fa-book fa-3x text-primary me-3"></i>
              <div class="flex-grow-1">
                <h5 class="fw-bold mb-1">📖 Buku Panduan Satgas PPKS_PT</h5>
                <p class="text-muted small">🕒 Diunggah 1 minggu lalu | 🎓 Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi</p>
              </div>
              <a href="{{ asset('BerkasSatgas/BUKU_PANDUAN_PPKS_PT.pdf') }}" class="btn btn-primary btn-sm shadow-sm" target="_blank">
                <i class="fas fa-download"></i> Unduh PDF
              </a>
            </div>
          </div>

          <!-- Peraturan Satgas -->
          <div class="card border-0 shadow-sm mb-4 p-3 rounded">
            <div class="d-flex align-items-center">
              <i class="fas fa-gavel fa-3x text-danger me-3"></i>
              <div class="flex-grow-1">
                <h5 class="fw-bold mb-1">⚖️ Peraturan Satgas PPKPT</h5>
                <p class="text-muted small">🕒 Diunggah 1 minggu lalu | 📜 Peraturan Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi</p>
              </div>
              <a href="{{ asset('BerkasSatgas/peraturansatgasPPKPT.pdf') }}" class="btn btn-danger btn-sm shadow-sm" target="_blank">
                <i class="fas fa-download"></i> Unduh PDF
              </a>
            </div>
          </div>

          <!-- SK Satgas -->
          <div class="card border-0 shadow-sm mb-4 p-3 rounded">
            <div class="d-flex align-items-center">
              <i class="fas fa-file-contract fa-3x text-success me-3"></i>
              <div class="flex-grow-1">
                <h5 class="fw-bold mb-1">📑 SK Satgas Pencegahan dan Penanganan Kekerasan Seksual UTDI</h5>
                <p class="text-muted small">🕒 Diunggah 1 minggu lalu | 🏫 Yayasan Pendidikan Widya Bakti Yogyakarta</p>
              </div>
              <a href="{{ asset('BerkasSatgas/SK_SatgasPPKS.pdf') }}" class="btn btn-success btn-sm shadow-sm" target="_blank">
                <i class="fas fa-download"></i> Unduh PDF
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- LINK LLDIKTI II -->
<div class="mt-5 text-center">
  <p class="text-secondary">
    Untuk informasi lebih lanjut, kunjungi situs resmi LLDikti Wilayah II.
  </p>
  <a href="https://lldikti2.kemdikbud.go.id/po-content/uploads/surat_pemberitahuan_pembentukan_satgas_ppkpt.pdf"
     class="btn btn-outline-primary btn-lg shadow-sm" target="_blank">
    <i class="fas fa-external-link-alt"></i> Kunjungi LLDikti Wilayah II
  </a>
</div>

<!-- Footer -->
<footer class="bg-white border-top py-3 text-center mt-5">
  <div class="container">
    <p class="mb-0">&copy; 2025 Satgas PPKPT Universitas Teknologi Digital Indonesia</p>
  </div>
</footer>

<script src="{{ asset('modules/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
