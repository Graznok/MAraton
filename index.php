<?php include("config.php"); ?>


<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AT Maraton</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Esileht</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Registreerimine</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      kodukord
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Auhinnad</a></li>
                      <li><a class="dropdown-item" href="#">Ülevaade</a></li>
                      <li><hr class="dropdown-divider"></li>
                      </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Otsing" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Otsi</button>
                </form>
              </div>
            </div>
          </nav>
        
   
    <div class="row g-0 text-left">
        <div class="col-sm-6 col-md-2">
            <img src="OIG3.jpg" class="img-fluid" alt="Logo">
    </div>
            
      <div class="col-6 col-md-10">
                <h1 class="display-1">Tallinna Maraton</h1>
        </span>
       </div>
      </div>
      
        
      <div class="container mt-5">
      <br>
        <H4>Esimesed kümme osalejat</H4>
        <br>

      <?php
        $paring = "SELECT id, nimi, riik FROM tallinn_marathon LIMIT 10";
        $tulemus = mysqli_query($yhendus, $paring);
          while($rida = mysqli_fetch_assoc($tulemus)) {  
          print_r($rida);
          } 
      ?>
        </div>
        <br>
        <div class="container mt-5">
          <H4>Osalejad soomest, registreerunud pärast 1. märtsi 2024, tulemused aja järgi</H4>
        <br>
      <?php
        $paring = "SELECT * FROM `tallinn_marathon` WHERE `riik` = 'Finland' AND `registreerimine` < '2024-03-01' 
        ORDER BY `registreerimine` DESC";
        $tulemus = mysqli_query($yhendus, $paring);
          while($rida = mysqli_fetch_assoc($tulemus)) {  
          print_r($rida);
          } 
      ?>
        </div>
        <br>

        <div class="container mt-5">
          <H4>Vanuesrupis 18-30 Osalejad</H4>
      <br>
      <?php
        $paring = "SELECT `vanus`, COUNT(*) AS `registreerimine` FROM `tallinn_marathon` WHERE `vanus` BETWEEN 18 AND 30
        GROUP BY `vanus` ORDER BY `vanus`";
          $tulemus = mysqli_query($yhendus, $paring);
          while($rida = mysqli_fetch_assoc($tulemus)) {  
          print_r($rida);
          } 
      ?>
        </div>
        <br>
        <div class="container mt-5">
          <H4>Kolm juhuslikult valitud naissoost osalejat</H4>
        <br>
      <?php
        $paring = "SELECT `sugu`, `nimi` FROM `tallinn_marathon` WHERE `sugu` = 'female' ORDER BY `sugu` LIMIT 3";
        $tulemus = mysqli_query($yhendus, $paring);
            while($rida = mysqli_fetch_assoc($tulemus)) {  
          print_r($rida);
          } 
      ?>
        </div>
        <br>
        <br>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
 </body>
</html>