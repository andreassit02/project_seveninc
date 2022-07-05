<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
          <div class="col-sm-3 px-0 d-none d-sm-block">
            <!-- Top content -->
<div class="top-content">
  <!-- Carousel -->
  <div id="carousel-example" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
          <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example" data-slide-to="1"></li>
          <li data-target="#carousel-example" data-slide-to="2"></li>
          <li data-target="#carousel-example" data-slide-to="3"></li>
      </ol>

      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="assets/images/slide1.png" class="d-block w-100" alt="slide1">
          </div>
          <div class="carousel-item">
              <img src="assets/images/slide2.png" class="d-block w-100" alt="slide2">

          </div>
          <div class="carousel-item">
              <img src="assets/images/slide3.jpg" class="d-block w-100" alt="slide3">
          </div>
          <div class="carousel-item">
              <img src="assets/images/slide4.jpg" class="d-block w-100" alt="slide4">
          </div>
      </div>
  </div>
  <!-- End carousel -->
</div>
          </div>
          <div class="col-sm-9 login-section-wrapper">
            <div class="login-wrapper my-auto">
              <p class="login-wrapper-footer-text">Belum punya akun? <a href="#!" class="text-reset"><a href="#!" class="daftar-sekarang-link"><u>Daftar Sekarang</u></a></p>
              <h1 class="login-title">Masuk ke dalam akun Anda</h1>
              <form action="#!">
                <div class="form-group">
                  <label for="email">Email atau No. Handphone</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email">
                </div>
                <div class="form-group mb-4">
                  <label for="password">Kata Sandi</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Kata Sandi">
                </div>
                <div>
                <p class="login-wrapper-footer-forgot-text">Lupa Password? <a href="#!" class="text-reset"><a href="#!" class="daftar-sekarang-link"><u>Klik disini</u></a></p>
                <input name="login" id="login" href="#g-plus" class="btn btn-block login-btn" type="button" value="Masuk">
                </div>
                <div class="separator">
                  <span class="separator-text">Atau</span>
                </div>
                <div>
                <input name="goggle" id="goggle" class="btn btn-block google-btn" type="button" value="Masuk dengan Google">
                </div>
              </form>
            </div>
            
            <p class="login-wrapper-under-text">Jika Anda sebelumnya pengguna Shipper BOS, coba login dengan username/password Anda yang lama. Jika gagal, silakan coba daftar dengan email dan nomor HP yang Anda gunakan di Shipper BOS.</p>
          </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
