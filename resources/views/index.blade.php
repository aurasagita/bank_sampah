<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/95c066a903.js" crossorigin="anonymous"></script>
    
</head>
<body>
  <!-- Navbar -->
  <section id="beranda">
    <nav class="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="assets/dist/img/logo.png" alt="logo" width="80">
          </a>
          <ul>
            <li class="nav-item">
              <a class="active" href="#beranda">Beranda</a>
            </li>
            <li class="nav-item">
              <a href="#tentang-kami">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a href="#layanan">Layanan</a>
            </li>
            <li class="nav-item">
              <a href="#">Sampah</a>
            </li>
            <li class="nav-item">
              <a href="#">Temukan Kami</a>
            </li>
          </ul>
        </div>
    </nav>
    <!-- Carousel -->
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active c-item">
          <img src="assets/dist/img/slide3-2.jpg" class="d-block w-100 c-img" alt="...">
        </div>
        <div class="carousel-item c-item">
          <img src="assets/dist/img/slide2-1.jpg" class="d-block w-100 c-img" alt="...">
        </div>
        <div class="carousel-item c-item">
          <img src="assets/dist/img/slide1.jpg" class="d-block w-100 c-img" alt="...">
        </div>
      </div>
    </div>
  </section>

  <!--Tentang Kami-->
  <section id="tentang-kami">
    <div class="tentang-kami-container">
      <h3>Tentang Kami</h3>
      <img src="assets/dist/img/foto1.jpg" alt="">
      <br><span class="judul-isi">Bank Sampah Malang</span><br>
      <p>Sampah Malang (BSM) adalah suatu lembaga yang berbadan hukum koperasi yang pendiriannya difasilitasi oleh Pemerintah Kota Malang melalui Dinas Kebersihan dan Pertamanan untuk membantu dalam hal pemberdayaan masyarakat untuk ikut serta aktif dalam pengolahan sampah dari sumbernya (rumah tangga). 
      <br> <br> Seiring perjalanan waktu BSM menjadi mitra Kota Malang dalam hal membina, melatih, mendampingi dalam pengolahan sampah 3R (reduce, reuse and recycle) masyarakat Kota Malang yang mandiri.</p>
      <div class="clearfix"></div>
    </div>
  </section>

  <!--Layanan-->
  <section id="layanan">
    <div class="layanan-container">
      <div class="icons">
        <img src="assets/dist/img/edit.svg" alt="">
        <div class="info">
          <h6>Daftar</h6>
          <span>Mari mendaftar menjadi nasabah kami</span>
        </div>
      </div>
      <div class="icons">
        <img src="assets/dist/img/setor.svg" alt="">
        <div class="info">
          <h6>Setor</h6>
          <span>Setor sampah melalui sistem kami</span>
        </div>
      </div>
      <div class="icons">
        <img src="assets/dist/img/ambil.svg" alt="">
        <div class="info">
          <h6>Diambil</h6>
          <span>Pengambilan sampah dilakukan oleh Sopir kami</span>
        </div>
      </div>
      <div class="icons">
        <img src="assets/dist/img/bayar.svg" alt="">
        <div class="info">
          <h6>Kami Bayar</h6>
          <span>Kami bayar sampah sesuai yang disetorkan</span>
        </div>
      </div>
  </div>
  </section>

  <!-- Sampah -->
  <section id="sampah">
    <div class="sampah-container">
      <h3>Sampah</h3>
      <div class="sampah">
        <div class="box">
          <img src="assets/dist/img/K1.jpg" alt="">
          <h5>KERTAS</h5>
          <h6>Rp 1500/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/K2.jpg" alt="">
          <h5>KERTAS</h5>
          <h6>Rp 2000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/K3.jpg" alt="">
          <h5>KERTAS</h5>
          <h6>Rp 1000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/K4.jpg" alt="">
          <h5>KERTAS</h5>
          <h6>Rp 1250/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/K5.jpg" alt="">
          <h5>KERTAS</h5>
          <h6>Rp 2250/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/K6.jpg" alt="">
          <h5>KERTAS</h5>
          <h6>Rp 3000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/K8.jpg" alt="">
          <h5>KERTAS</h5>
          <h6>Rp 1250/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/K7.jpg" alt="">
          <h5>KERTAS</h5>
          <h6>Rp 1000/kg</h6>
        </div>
      </div>
    </div>
  </section>

  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>