<?php
include "koneksi.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Css/Wisata.css">
    <script src="Style.js"></script>
    <title>De Prambanan Tour</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-warning">De </span>Prambanan Tour</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#akomodasi">AKOMODASI</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="home" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Foto/pram.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>De Prambanan Tour</h5>
                </div>
            </div>
        </div>
    </div>

    <?php

$result = mysqli_query($conn, "SELECT b.*, k.nama_kategori FROM wisata b join kategori k on (b.id_kategori=k.id_kategori) WHERE k.id_kategori = 1 ORDER BY b.id_wisata DESC");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
?>

    <section id="akomodasi" class="section" style="padding: 45px;">
        <div class="container card">
        
            <div class="col-3">
                <div class="img">
                    <img src="<?php echo $row['gambar'];?>" style="width: 300px; padding:20px" alt="img-fluid">
                </div><br>
            </div>
            <div class="col-9">
            <div class="text">
                    <h2><?php echo $row['judul'];?></h2>
                    <p> <?php echo $row['isi'];?></p>
                        <div class="row">
                            <p><a href="<?php echo $row['hreflink'];?>" class="btn btn-warning mt-3"> Check Now</a></p>   
                        </div>     
                </div>
            </div> 
        </div><br><br>

<?php
}
?>

    </section>

    <!-- start footer Area -->
    <footer id="about" class="footer-area section-padding">
        <div class="section-header">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="card-body">
                        <div class="single-footer-widget text-about">
                            <h4>About Us</h4>
                            <p>
                                (ISI)
                            </p>
                            <p class="footer-text">
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is created with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">@Serundeng</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="card-body">
                        <div class="single-footer-collapse">
                            <h4>Newsletter</h4>
                            <p>Stay update with our latest</p>
                            <div class="" id="mc_embed_signup">
                                <form target="_blank"  action="" method="get" class="form-inline">
                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Email Here '" required="" type="email" style="padding: 8px;">
                                    <button class="btn-footer click-btn btn" style="background-color: black; color:white">Submit<i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                    <div class="info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<?php
mysqli_close($conn);
?>
