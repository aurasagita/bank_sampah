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
    <nav class="navbar fixed-top">
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
              <a href="#sampah">Sampah</a>
            </li>
            <li class="nav-item">
              <a href="#temukan-kami">Temukan Kami</a>
            </li>
            <li class="nav-item">
              <a href="/bank_sampah/public/login" target="_blank">Login</a>
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
    <div class="layanan-container" id="layanan">
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
          <h5>KERTAS - K1</h5>
          <h6>Rp 1250/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/K2.jpg" alt="">
          <h5>KERTAS - K2</h5>
          <h6>Rp 2000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/K3.jpg" alt="">
          <h5>KERTAS - K3</h5>
          <h6>Rp 1000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/K4.jpg" alt="">
          <h5>KERTAS - K4</h5>
          <h6>Rp 1250/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/K5.jpg" alt="">
          <h5>KERTAS - K5</h5>
          <h6>Rp 2250/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/K6.jpg" alt="">
          <h5>KERTAS - K6</h5>
          <h6>Rp 3000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/A1.jpg" alt="">
          <h5>LOGAM - A1</h5>
          <h6>Rp 6000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/A2.jpg" alt="">
          <h5>LOGAM - A2</h5>
          <h6>Rp 5000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/A3.jpg" alt="">
          <h5>LOGAM - A3</h5>
          <h6>Rp 4000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/A6.jpg" alt="">
          <h5>LOGAM - A6</h5>
          <h6>Rp 3500/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/BS1.jpg" alt="">
          <h5>LOGAM - BS1</h5>
          <h6>Rp 6000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/BS2.jpg" alt="">
          <h5>LOGAM - BS2</h5>
          <h6>Rp 5000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/P01.jpg" alt="">
          <h5>PLASTIK - P1</h5>
          <h6>Rp 2000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/P09.jpg" alt="">
          <h5>PLASTIK - P9</h5>
          <h6>Rp 2250/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/P12.jpg" alt="">
          <h5>PLASTIK - P12</h5>
          <h6>Rp 1500/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/P14.jpg" alt="">
          <h5>PLASTIK - P14</h5>
          <h6>Rp 1750/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/P19.jpg" alt="">
          <h5>PLASTIK - P19</h5>
          <h6>Rp 2000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/P20.jpg" alt="">
          <h5>PLASTIK - P20</h5>
          <h6>Rp 2500/pcs</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/P22.jpg" alt="">
          <h5>PLASTIK - P22</h5>
          <h6>Rp 2000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/P26.jpg" alt="">
          <h5>PLASTIK - P26</h5>
          <h6>Rp 1250/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/P30.jpg" alt="">
          <h5>PLASTIK - P30</h5>
          <h6>Rp 2000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/P36.jpg" alt="">
          <h5>PLASTIK - P36</h5>
          <h6>Rp 1750/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/P37.jpg" alt="">
          <h5>PLASTIK - P37</h5>
          <h6>Rp 3500/pcs</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/B1.jpg" alt="">
          <h5>BOTOL - B1</h5>
          <h6>Rp 4000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/B2.jpg" alt="">
          <h5>BOTOL - B2</h5>
          <h6>Rp 3750/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/B4.jpg" alt="">
          <h5>BOTOL - B4</h5>
          <h6>Rp 2500/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/B5.jpg" alt="">
          <h5>BOTOL - B5</h5>
          <h6>Rp 5000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/B6.jpg" alt="">
          <h5>BOTOL - B6</h5>
          <h6>Rp 3000/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/B7.jpg" alt="">
          <h5>BOTOL - B7</h5>
          <h6>Rp 3250/kg</h6>
        </div>
        <div class="box">
          <img src="assets/dist/img/B8.jpg" alt="">
          <h5>BOTOL - B1</h5>
          <h6>Rp 3000/kg</h6>
        </div>
      </div>
    </div>
  </section>

  <!-- Temukan Kami -->
  <section id="temukan-kami">
    <div class="temukan-kami-container">
      <h3>Temukan Kami</h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.0337594699236!2d112.61688607530391!3d-7.9954506797507525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7882a9d385ba91%3A0x667db69be1ab50c9!2sBank%20Sampah%20Malang!5e0!3m2!1sen!2sid!4v1684058288621!5m2!1sen!2sid" 
      width="1100" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="clearfix"></div>
  </section>

  <!-- Footer -->
  <footer class="bg text-center text-white">
    <div class="container p-4 pb-0">
      <section class="mb-4">
        <a class="btn btn-outline-success btn-floating m-1" href="https://wa.me/6285755252327" role="button">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a class="btn btn-outline-success btn-floating m-1" href="mailto:nadacika17@gmail.com" role="button">
          <i class="far fa-envelope"></i>
        </a>
        <a class="btn btn-outline-success btn-floating m-1" href="tel:+6285755252327" role="button">
          <i class="fas fa-phone"></i>
        </a>
      </section>
    </div>
    <div class="copyright text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      Copyright ©2023 <strong>Bank Sampah Malang.</strong>
    </div>
  </footer>
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>