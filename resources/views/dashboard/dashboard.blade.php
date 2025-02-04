@extends('layout.main')

@section('content')
  <div class="main-content">
    <section class="section">

      <!-- Statistik -->
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card border-0 shadow-lg p-4">
              <div class="d-flex align-items-center">
                <i class="far fa-user fa-3x text-danger me-3"></i>
                <div class="flex-grow-1">
                  <h5 class="fw-bold mb-1">👥 Total User</h5>
                  <p class="text-muted small">Jumlah user yang terdaftar</p>
                  <h3 class="fw-bold">user</h3>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card border-0 shadow-lg p-4">
              <div class="d-flex align-items-center">
                <i class="fas fa-file-alt fa-3x text-success me-3"></i>
                <div class="flex-grow-1">
                  <h5 class="fw-bold mb-1">📑 Total Laporan</h5>
                  <p class="text-muted small">Jumlah laporan yang masuk</p>
                  <h3 class="fw-bold">/</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Tombol Tambah Laporan -->
        <div class="col-12 mt-4">
          <a href="/">
            <button class="btn btn-lg btn-info w-100 shadow-sm">
              <i class="fas fa-plus"></i> Tambah Laporan
            </button>
          </a>
        </div>

        <!-- Tabel Data Pelapor -->
        <div class="row mt-5">
          <div class="col-12">
            <div class="card border-0 shadow-lg">
              <div class="card-header bg-white text-center">
                <h4 class="fw-bold">📦 Data Pelapor</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped text-center" id="table-1">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Pelapor</th>
                        <th>Kontak Pelapor</th>
                        <th>Lokasi Kejadian</th>
                        <th>Tanggal Kejadian</th>
                        <th>Kronologi</th>
                        <th>Bukti</th>

                      </tr>
                    </thead>
                    <tbody>
                      <!-- Tambahkan Data Disini -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div> <!-- Container -->
      
    </section>
  </div>
@endsection
