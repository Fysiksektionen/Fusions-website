<!DOCTYPE html>
<html lang="sv">
  <head>
    <style>
    @import url(https://fonts.googleapis.com/css?family=Inter);
    @import url(https://fonts.googleapis.com/css?family=Work-Sans);
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $language["FUSION22"]; ?></title>
    <!-- Bootstrap Core Css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="assets/css/style.css?v=1.1">
		<link rel="icon" type="image/png" href="assets/images/color_small.png" sizes="1714x1934">
    <script src="script.js?2"></script>
  </head>
  <body class="bg-light">
    <!-- Include necessary recources -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <?php include 'p.php'; ?>
    <header>
      <nav id="mainNav" class="navbar fixed-top navbar-light navbar-expand-md">
        <div class="container my-1">
          <div class="mb-auto">
            <a href="index.php" class="navbar-brand lead ml-3">
              <img class="logo" src="assets/images/color_black_text_big.png" alt="Fusions logotyp">
            </a>
          </div>
          <div class="ml-auto">
            <button id="togg" class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto bd-highlight d-flex align-items-center">
                <!--<li class="nav-item"><a href="" class="nav-link"><?php echo $language["BROSCHYR2022"]; ?></a></li> -->
                <li class="nav-item"><a href="utstallare.php?lang=<?php echo $lang; ?>" class="nav-link"><?php echo $language["UTSTALLARE"]; ?></a></li>
                <li class="nav-item"><a href="kontakt.php?lang=<?php echo $lang; ?>" class="nav-link"><?php echo $language["KONTAKT"]; ?></a></li>
                <li class="nav-item"><a href="for_foretag.php?lang=<?php echo $lang; ?>" class="nav-link"><?php echo $language["FORFORETAG"]; ?></a></li>
                <li id="logo_sv" class="nav-item"><a href="index.php?lang=sv"><img class="fab langlogo m-2 ml-md-3" src="assets/images/sweden.png"></a></li>
                <li id="logo_en" class="nav-item"><a href="index.php?lang=en"><img class="fab langlogo m-2" src="assets/images/united-kingdom.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>