<?php
session_start();
  include("connect.php");
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="assest/css/style.css">
    <link rel="icon" type="image/x-icon" href="assest/img/icons8-warframe-64.png">
    <title>Akuma Store</title>
</head>
<body>
        <!--Thanh Navigation-->
            <nav class="navbar fixed-top sticky-top navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="assest/img/icons8-warframe-96.png" alt="" width="35" height="30">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Collector</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Sale</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="login.php">Login</a></li>
                          <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
                          <li><a class="dropdown-item" href="read.php">Products Data</a></li>
                        </ul>
                      </li>
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Searching" aria-label="Search">
                      <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                  </div>
                </div>
            </nav>
        <!--Kết thúc Thanh navigation-->
        <!--Quảng cáo-->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assest/img/eldenringw.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-lg-block">
              </div>
            </div>
            <div class="carousel-item">
              <img src="assest/img/goww.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-lg-block">
           
              </div>
            </div>
            <div class="carousel-item">
              <img src="assest/img/rbw.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-lg-block">
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="assest/img/dota2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-lg-block">
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!--Kết thúc Quảng cáo-->
        <h1 class="tieude-sanpham">PRODUTCS</h1>
        <!--card-->
        <div class="container">
          <div class="row">
            <div class="col-3">
              <div class="card" style="width: 18rem;">
                <img src="assest/img/eldenringh.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Elden Ring</h5>
                  <p class="card-text">Let's become the Elden Lord in dark fantasy world writen by Hidetaka Miyazaki</p>
                  <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem;">
                <img src="assest/img/rbh.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Rainbow six: Siege</h5>
                  <p class="card-text">Team work with your teamate to claim victory, tactical game, FPS, reality</p>
                  <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem;">
                <img src="assest/img/ragnarok.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">God of War: Ragnarok</h5>
                  <p class="card-text">Continues the story of Kratos and his son Atreaus after killing the Badul</p>
                  <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem;">
                <img src="assest/img/dota2h.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Dota 2 Bpass</h5>
                  <p class="card-text">The perfect price for Book Battle pass in The international this year, 3 Arcana</p>
                  <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
            </div>
        </div>
        <!--Kết thúc Card-->
        <!--footer-->
        <!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Chữ bên trái -->
    <div class="me-5 d-none d-lg-block">
      <span>Kết nối với chúng tôi:</span>
    </div>
    <!-- kết thúc chữ bên trái -->

    <!-- Chũ bên phải -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- kết thúc chữ bên phải -->
  </section>
  <!-- các trang mạng xã hôi -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Akuma Store
          </h6>
          <p>
           Web phân phối game với giá cả hợp lí
          </p>
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Hỗ trợ
          </h6>
          <p>
            <a href="#!" class="text-reset">Giá cả</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Cài đặt</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Mua ngay</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Nhân viên hỗ trợ</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Liên hệ</h6>
          <p><i class="fas fa-home me-3"></i> Đâu đó tại Việt Nam</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info.akuma@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 09 999 888 999</p>
          <p><i class="fas fa-print me-3"></i> + 09 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="">akumastore.com.vn</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>