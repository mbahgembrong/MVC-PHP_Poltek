<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="http://localhost/praktikum/WebLanjut/Praktikum6-MVC-PHP/public/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Toko Sinar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/praktikum/WebLanjut/Praktikum6-MVC-PHP/public/index">Beranda
              <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Pelanggan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pegawai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Transaksi</a>
          </li>

        </ul>
      </div>
    </nav>

    <!-- Card -->
    <div class="card">
      <h5 class="card-header">Data Pelanggan Toko <?= $data['nama'] ?></h5>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Telepon</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Jl. Singaraja Kediri</td>
              <td>0853472829</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Jl. Veteran Kediri</td>
              <td>0853472829</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>Jl. Imam Bonjol Kediri</td>
              <td>0853472829</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
    <!-- Footer -->
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">Special We serve the best treatment</h5>
      </div>
    </div>
    <div class="card text-center mt-2">
      <div class="card-header">
        <h5>Copryight 2020</h5>
      </div>
    </div>

  </div>
</body>

</html>