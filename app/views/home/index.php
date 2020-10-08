<?php
// echo "<h3>Halaman ini terletak di folder views->home->index.php</h3> ";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="http://localhost/praktikum/WebLanjut/Praktikum6-MVC-PHP/public/css/bootstrap.min.css
">
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
          <li class="nav-item active">
            <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/praktikum/WebLanjut/Praktikum6-MVC-PHP/public/about/pelanggandb
">Pelanggan</a>
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

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Toko Sinar</h1>
        <p class="lead">Sistem Informasi Toko Berbasis Web</p>
      </div>
    </div>
    <!-- Card:6 -->
    <?php for ($b=0; $b < 2; $b++) :?>
    <div class="row">
      <?php for ($i=0; $i < 3; $i++) :?>
      <div class="col-md-4">
        <div class="card mb-3 ml-4" style="max-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Lorem ipsum dolor sit.</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid iusto eveniet quae
              similique qui molestias repellendus eius quia, quos voluptatibus.</p>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>
      </div>
      <?php endfor; ?>
    </div>
    <?php  endfor; ?>
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