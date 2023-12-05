<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="Css/Style.css" />
  <link rel="stylesheet" href="css/styleFooter.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="Style.js"></script>
  <title>pramWeb</title>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="text-warning">De </span>Prambanan Tour</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#detail">Detail</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#wisata">Wisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#peta">Peta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Banner -->
  <div class="container-fluid text-center banner">
    <div class="akeh">
      <h4 class="okeh">Explore The History and Beauty Of Prambanan</h4>
      <h1 class="display-3"><span class="text-warning display-3">De </span>Prambanan Tour</h1>
    </div>
  </div>

  <!-- Detail Section -->
  <section id="detail" class="section" style="padding: 45px">
      <div class="container-fluid info pt-5 pb-5">
        <div class="faik">
          <h2 class="display-5" id="info">Detail</h2>
          <h4 class="display-7">Sejarah Candi Prambanan</h4>
        </div>
      </div>
      <div class="card container">
        <div class="text">
          <h2>Candi Prambanan</h2>
          <p>
            Candi Prambanan adalah kompleks kuil Hindu yang megah dan terkenal di Indonesia, terletak kurang lebih 17 kilometer timur laut Yogyakarta, Jawa Tengah. <br />
            Dibangun pada abad ke-9 Masehi oleh dinasti Mataram, candi ini merupakan salah satu contoh arsitektur klasik Hindu terbesar di Asia Tenggara. <br />
            Candi Prambanan terdiri dari beberapa candi utama yang mengelilingi candi utama, yaitu Candi Shiva. Setiap candi didedikasikan untuk <br />
            dewa-dewi Hindu seperti Shiva, Vishnu, dan Brahma. Keindahan dan keanggunan arsitektur candi ini mencerminkan tingkat keahlian tata rancang <br />
            bangunan pada masa itu, dan Candi Prambanan saat ini menjadi salah satu situs warisan dunia UNESCO, menarik wisatawan dari seluruh dunia untuk menyaksikan <br />
            keagungan sejarah dan kebudayaan Jawa.
          </p>
          <a href="https://youtu.be/MhifUwbQj6o?feature=shared" class="btn btn-warning mt-3">Preview</a>
        </div>
      </div>
    </section>

    <!-- section wisata -->
    <section id="wisata" class="section" style="padding: 45px">
      <div class="section-header">
        <div class="row">
          <div class="col-12 col-md-12">
            <h2>Kategori Wisata</h2>
            <p>Cari Tujuanmu</p>
          </div>
        </div>
        <div class="container row">
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="Foto/Royalambarukmo.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                      <img src="Foto/sheraton.jpg" class="d-block w-100" alt="..." />
                    </div>
                  </div>
                </div>
                <br />
                <h3 class="card-title">Akomodasi</h3>
                <p class="lead">Secantik Taman Surga yang Didambakan Para Bidadari</p>
                <p><a href="akomodasi.php" class="btn btn-warning mt-3">Preview</a></p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="Foto/bubrah.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                      <img src="Foto/Lumbung.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                      <img src="Foto/CandiPlaosan.jpg" class="d-block w-100" alt="..." />
                    </div>
                  </div>
                </div>
                <br />
                <h3 class="card-title">Candi</h3>
                <p class="lead">Pesona Indonesia yang Patut Dibanggakan ke Seluruh Dunia</p>
                <p><a href="candi.php" class="btn btn-warning mt-3">Preview</a></p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="Foto/ramayana (1).jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                      <img src="Foto/RoroJonggrang1 (1).jpg" class="d-block w-100" alt="..." />
                    </div>
                  </div>
                </div>
                <br />
                <h3 class="card-title">Kebudayaan</h3>
                <p class="lead">Mahakarya Yang Tak Pernah Lekang Oleh Waktu</p>
                <p><a href="kebudayaan.php" class="btn btn-warning mt-3">Preview</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- section peta -->
    <section id="peta" class="section" style="padding: 45px">
      <div class="section-header">
        <div class="row">
          <div class="col-md-12">
            <h2>Peta Candi Prambanan</h2>
            <br />
          </div>
          <div class="col-md-12">
            <div class="text-center">
              <img id="myImg" class="myImg img" src="Foto/peta.png" alt="Peta Prambanan" />

              <!-- The Modal -->
              <div id="myModal" class="modal w-100" style="display: none">
                <span class="close" style="position: absolute; top: 15px; right: 15px; font-size: 24px; cursor: pointer" onclick="closeModal()">&times;</span>
                <img class="modal-content" id="img01" />
                <div id="caption"></div>
                <span style="color: white; cursor: pointer" onclick="backToMenu()">Back</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
  <footer class="footer">
    <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-4 footer-col">
                    <h4>About us</h4>
                    <ul>
                        <li>De Prambanan Tour adalah web untuk melihat apa saja hal yang ada di Prambanan dari akomodasi, Entertaiment Sendratari, view Prambanan, dan Edukasi tentang sejarah Prambanan</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 mb-4 mb-md-4 footer-col">
                    <h4>Contact Us</h4>
                    <ul>
                        <li>+62 822-2606-0751</li>
                        <li>Rian Nur Ikhsan</li>
                        <li>Project Manager</li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-12 mb-4 mb-md-4 footer-col">
                    <h4>Social</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/CandiPrambananYogyakarta?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/candiprambanan?t=e6Pw3nFsBnQT2OH_NZpXcg&s=08"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/hasanabdulah9/"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/6282241138194/?text=Halo"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
          </div>
          <div class="footer-text">
            <br> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This
            Website is created made from <a href="" target="_blank">@Serundeng</a>
          </div>
  </footer>
      
        <script src="Js/Style.js"></script>
        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
          crossorigin="anonymous"></script>
  </body>
      
</html>
