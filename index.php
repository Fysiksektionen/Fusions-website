<?php include_once("header.php") ?>
<title><?php echo $language["HEMTITEL"]; ?></title>
</head>

    <main>

      <section class="mt-lg-5 d-flex align-items-center">

        <div class="bg-image container">

    			<div class="after-nav jumbotron text-light bg-transparent rounded-0 d-flex align-items-center">

            <div class="row mt-5">
              <div class="col text-center text-md-left">
                <h1 class="display-4" style="font-size: 600%">
                  <p class="name-front-page">
                      <?php echo strtoupper($language["FUSION"] . " "); ?><span style="font-size: 50%"><?php echo $language["YEAR"]; ?></span>
                  </p>

                </h1>


                <p class="text-front-page">
                <span style="font-weight: 400; font-size: 1.4rem;"> <?php echo $language["VALKOMMEN"]; ?>
                  <?php echo $language["DATUM"]; ?></span> <br> <?php echo $language["MAIN2"]; ?>
                </p>
              </div>
            </div>
          </div>
          <div class="jumbotron py-0 mt-5 mx-auto">
            <figure class="tiny">
              <a><img id="arrow" src="assets/images/arrow.png" alt="Pil nedåt" class="h-100 mx-auto d-block"></a>
            </figure>
          </div>
        </div>
      </section>
      <section class="bg-light">
        <div id="scrollhere" class="container">
          <div class="jumbotron mb-0">
            <div class="row">
            <div class="col-md-8 text-justify text-break my-4 mr-4">
              <h2 class="text-center text-md-left">
                <?php echo $language["VAD"]; ?>
              </h2>
              <p class="my-4">
                <?php echo $language["VAD2"]; ?>
                  <?php echo $language["TMF"]; ?>
                <?php echo $language["VAD3"]; ?>
                <a class="text-primary" href="https://www.facebook.com/events/805421190756050"><?php echo $language["FB"]; ?></a>.
              </p>
              <hr class="text-dark">
              <p class="my-4">
                <?php echo $language["VAD4"]; ?>
              </p>
              <a href="utstallare.php?lang=<?php echo $lang; ?>">
                <button type="button" class="btn btn-primary">
                  <?php echo $language["UTSTALLARE"]; ?>
                </button>
              </a>
            </div>
            <div class="col-md align-self-center mx-auto">
            <p class="lead my-3">
                <span class="text-dark font-weight-normal"><?php echo $language["PLATS"]; ?></span>
                <?php echo $language["ADRESS"]; ?>
            </p>
            <p class="lead my-3">
                <span class="text-dark font-weight-normal"><?php echo $language["TID"]; ?></span>
                <?php echo $language["TID2"]; ?>
                <?php echo $language["TID3"]; ?>
            </p>
            </div>
            </div>
          </div>
        </div>
      </section>
      <section>


        <!-- <div class="jumbotron mb-0 bg-primary">
          <h3 class="text-center">
            <?php echo $language["STORTTACK"]; ?>
          </h3>
          <br>
          <br>
          <img class="img-fluid" src="assets/images/ericsson_fusion_test1.png" alt="Ericsson x Fusion">
        </div>
      </section>
      <section> --->

        <div class="jumbotron mb-0 bg-primary">
          <h3 class="text text-center">
            <?php echo $language["PROJEKTGRUPP"]; ?>
          </h3>
          <br>
          <br>
          <img class="img-fluid" src="assets/images/gruppbilder/projektgruppen2023.jpg" alt="Projektgruppen">
        </div>
      </section>

      <div class="jumbotron text-center pb-0 pb-sm-4 mb-0">

        <h3 class="mb-4"><?php echo $language["HUVUDSPONSOR"]; ?></h3>
        <!--<section class="card-deck text-center font-weight-light">
          <section class="card">
            <a href="https://www.ericsson.com/en" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/ericsson.png" alt="Ericssons logotyp"></a>
          </section>
        </section>-->
        <p class="my-4">
            <?php echo $language["BLIHUVUDSPONSOR"]; ?><br>
            <?php echo $language["KONTAKTAOSS"]; ?>
            <a href="mailto:fusion@f.kth.se" class="text-primary"><?php echo $language["MAILFORETAGSKONTAKT"]; ?></a>
        </p>
      </div>

    </main>
  <?php include_once("footer.php") ?>
