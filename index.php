<?php
  include "koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tugas pbw</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- nav awal -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">World Endurance Championship</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#article">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#schedule">Schedule</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#profile">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php" target="_blank">Login</a>
              </li>
            </ul>
            <button type="button" class="bg-dark rounded-2" id="toggle"><i class="bi bi-moon-stars-fill text-light "></i></button>
            <button type="button" class="bg-info rounded-2" id="tombol"><i class="bi bi-brightness-high-fill text-light"></i></button>
            <button type="button" class="bg-danger ms-3 text-light" id="logout"><a class="nav-link" href="logout.php" target="_blank"><i class="bi bi-box-arrow-right"></i></a></button>
          </div>
        </div>
      </nav>
    <!-- nav akhir -->
    <!-- hero awal -->
    <section id="hero" class="isi text-center p-5 bg-info text-sm-start" style="background-color: var(--bs-body-bg);">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="img/WEC_logos2.png" class="img-fluid" width="300">
                <div>
                    <h1 class="fw-bold display-4">World Endurance Championship</h1>
                    <h4 class="lead display-6">Every manufatures in World Endurance Championship (WEC) 2024 season</h4>
                    <h6>
                      <span id="tanggal"></span>
                      <span id="jam"></span>
                    </h6>
                  </div>
            </div>
        </div>
    </section>
    <!-- hero akhir -->
    <!-- article awal -->
    <!-- article begin -->
<section id="article" class="text-center p-5 data">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">Article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100 ">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body halaman">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer isi text-white">
              <small class="text-body-secondary ">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
    <!-- article akhir -->
    <!-- gallery awal -->
    <section id="gallery" class="isi text-center p-5 bg-info">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExampleIndicators" class="carousel slide display-6">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/Toyota.jpg" class="d-block w-100" alt="Toyota">
                  </div>
                  <div class="carousel-item">
                    <img src="img/Ferrari.jpg" class="d-block w-100" alt="Ferarri">
                  </div>
                  <div class="carousel-item">
                    <img src="img/porsche.jpg" class="d-block w-100" alt="Porsche">
                  </div>
                  <div class="carousel-item">
                    <img src="img/cadillac.jpg" class="d-block w-100" alt="Porsche">
                  </div>
                  <div class="carousel-item">
                    <img src="img/Lamborghini.jpg" class="d-block w-100" alt="Porsche">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </section>
    <!-- schedule awal -->
    <section id="schedule" class="data text-center p-5">
      <div class="container">
          <h1 class="fw-bold display-4 pb-3">Schedule</h1>
          <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-around">
            <div class="col">
              <div class="card h-100 halaman schedule">
                  <h5 class="bg-info p-3 isi">Qatar Official Prologue</h5>
                  <div class="card-body">
                    <p class="card-text">21/22 February 2025 </p>
                    <hr>
                    <p class="card-text">Losail International sirkuit</p>
                  </div>
              </div>
              </div>
              <div class="col">
                <div class="card h-100 halaman schedule">
                <h5 class="bg-info p-3 isi">Qatar 1812Km</h5>
                  <div class="card-body">
                    <p class="card-text">28 February 2025</p>
                    <hr>
                    <p class="card-text">Losail International sirkuit</p>
                  </div>
                </div>
              </div>
              <div class="col ">
                  <div class="card h-100 halaman">
                  <h5 class="bg-info p-3 isi">6 Hours of Imola</h5>
                    <div class="card-body">
                      <p class="card-text">20 April 2025 </p>
                      <hr>
                      <p class="card-text">Autodromo Internazionale "Enzo e Dino Ferrari" Imola</p>
                    </div>
                  </div>
                </div>
                <div class="col ">
                  <div class="card h-100 halaman">
                    <h5 class="bg-info p-3 isi">TotalEnergies 6 Hours of Spa-Francorchamps </h5>
                    <div class="card-body">
                      <p class="card-text">10 May 2025</p>
                      <hr>
                      <p class="card-text">Circuit de Spa-Francorchamps</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 halaman">
                    <h5 class="bg-info p-3 isi"> 24 Hours of Le Mans</h5>
                    <div class="card-body">
                      <p class="card-text">14/15 June 2025</p>
                      <hr>
                      <p class="card-text">Circuit de la Sarthe</p>
                    </div>
                  </div>
                </div>
                <div class="col ">
                  <div class="card h-100 halaman">
                    <h5 class="bg-info p-3 isi">Rolex 6 Hours of São Paulo</h5>
                    <div class="card-body ">
                      <p class="card-text">13 July 2025 </p>
                      <hr>
                      <p class="card-text">Autódromo José Carlos Pace</p>
                    </div>
                  </div>
                </div>
                <div class="col ">
                  <div class="card h-100 halaman">
                    <h5 class="bg-info p-3 isi">Lone Star Le Mans</h5>
                    <div class="card-body">
                      <p class="card-text">7 September 2025</p>
                      <hr>
                      <p class="card-text">Circuit of the Americas (COTA)</p>
                    </div>
                  </div>
                </div>
                <div class="col ">
                  <div class="card h-100 halaman">
                    <h5 class="bg-info p-3 isi">6 Hours of Fuji</h5>
                    <div class="card-body">
                      <p class="card-text">28 September 2025</p>
                      <hr>
                      <p class="card-text">Fuji Speedway</p>
                    </div>
                  </div>
                </div>
                <div class="col ">
                  <div class="card h-100 halaman">
                    <h5 class="bg-info p-3 isi"> Bapco Energies 8 Hours of Bahrain</h5>
                    <div class="card-body">
                      <p class="card-text">8 November 2025</p>
                      <hr>
                      <p class="card-text">Bahrain International Circuit</p>
                    </div>
                  </div>
                </div>
          </div>
        </div>
    </section>
    <!-- schedule akhir -->
     <!-- aboute me awal -->
     <section id="profile" class="isi text-center p-5 bg-info text-sm-start " style="background-color: var(--bs-body-bg);">
      <div class="container">
          <div class="row justify-content-center align-items-center">
              <div class="gambar col-3" id="gambar">
                <img src="https://th.bing.com/th/id/OIP.R5MXRG_UYRmQSnzQKdaxYQHaIn?rs=1&pid=ImgDetMain" class="gambar img-fluid rounded-circle" width="300">
              </div>
              <div class="ms-5 col-6" id="tulisan">
                  <h1 class="fw-bold display-4">About Me</h1>
                  <h4 class="lead display-6">Nama saya adalah Sufyaan Adil Rusydi</h4>
                  <h6>
                    <span id="tanggal"></span>
                    <span id="jam"></span>
                  </h6>
                </div>
          </div>
      </div>
  </section>
    <!-- about me akhir -->
    <!-- footer awal -->
    <footer class="data text-center p-5 ">
        <div>
            <a href="https://www.instagram.com/udinusofficial/" ><i class="bi bi-instagram h2 p-2 text-dark icon"></i></a>
            <a href="https://x.com/udinus" ><i class="bi bi-twitter-x h2 p-2 text-dark icon"></i></a>
            <a href="https://wa.me/+6282226044247" ><i class="bi bi-whatsapp h2 p-2 text-dark icon"></i></a>
        </div>
        <div>
          Sufyaan Adil Rusydi @2024
        </div>
    </footer>
    <!-- footer akhir -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  <script>
    document.getElementById("toggle").onclick=function(){
    document.body.classList.add("bg-dark","text-light");
    document.getElementById("toggle").classList.remove("btn-info");
    document.getElementById("toggle").classList.add("btn-secondary");
    const collection=document.getElementsByClassName("isi");
    for(i=0;i<collection.length;i++){
        collection[i].classList.remove("bg-info","text-dark");
        collection[i].classList.add("bg-secondary","text-light");
    }
    const colection=document.getElementsByClassName("data");
    for(i=0;i<colection.length;i++){
        colection[i].classList.remove("bg-secondary","text-dark");
        colection[i].classList.add("bg-dark","text-light");
    }
    const halaman=document.getElementsByClassName("halaman");
    for(i=0;i<halaman.length;i++){
        halaman[i].classList.remove("bg-light","text-dark","border-dark");
        halaman[i].classList.add("bg-dark","text-light","border-light");
    }
    const icon=document.getElementsByClassName("icon");
    for(i=0;i<icon.length;i++){
        icon[i].classList.remove("text-dark");
        icon[i].classList.add("text-light");
    }
}
document.getElementById("tombol").onclick=function(){
    document.body.classList.add("bg-light","text-dark");
    document.getElementById("tombol").classList.remove("btn-dark");
    document.getElementById("tombol").classList.add("btn-light");
    const collection=document.getElementsByClassName("isi");
    for(i=0;i<collection.length;i++){
        collection[i].classList.remove("bg-secondary","text-light");
        collection[i].classList.add("bg-info","text-dark");
    }
    const colection=document.getElementsByClassName("data");
    for(i=0;i<colection.length;i++){
        colection[i].classList.remove("bg-dark","text-light");
        colection[i].classList.add("bg-light","text-dark");
    }
    const halaman=document.getElementsByClassName("halaman")
    for(i=0;i<halaman.length;i++){
        halaman[i].classList.remove("bg-dark","text-light","border-light");
        halaman[i].classList.add("bg-light","text-dark","border-dark");
    }
    const icon=document.getElementsByClassName("icon");
    for(i=0;i<icon.length;i++){
        icon[i].classList.remove("text-light");
        icon[i].classList.add("text-dark");
    } 
}
  document.getElementById("gambar").onclick=function(){
  document.getElementById("tulisan").classList.toggle("d-none");
}
</script>
</html>