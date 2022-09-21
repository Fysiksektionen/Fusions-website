<?php include_once("header.php") ?>
    <main>
    
      <section class="bg-image full-background pb-2 min-vh-100 d-flex align-items-center">
      
        <div class="container">
          
    			<div class="after-nav jumbotron text-light bg-transparent rounded-0 d-flex align-items-center">
          
            <div class="row mt-5">
              <div class="col text-center text-md-left">
                <h1 class="display-4">
                  <p class="name-front-page">
                     FUSION <span style="font-size: 4rem">2022</span>
                  </p>
                  
                </h1>
               
                
                <p class="text-front-page">
                <span style="font-weight: 400; font-size: 1.4rem;"> <?php echo $language["VALKOMMEN"]; ?>
                  <?php echo $language["DATUM"]; ?></span> <br> <?php echo $language["MAIN2"]; ?>  .
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
                <a class="text-primary" href="https://www.facebook.com/events/941059096621064"><?php echo $language["FB"]; ?></a>.
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
            <p class="lead my-3"><?php echo $language["PLATS"]; ?>
            <a class="text-primary" href="https://goo.gl/maps/fcA8S1vzJ6Fytpwb6">Nymble</a>
            </p>
            <p class="lead my-3"><?php echo $language["TID"]; ?>
            <span class="text-dark font-weight-normal"><?php echo $language["TID2"]; ?></span>
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
          <img class="img-fluid" src="assets/images/gruppbilder/gruppbild2.jpg" alt="Projektgruppen">
        </div>
      </section>
      
    </main>
  <?php include_once("footer.php") ?>