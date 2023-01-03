<?php include_once("header.php") ?>
<title><?php echo $language["UTSTALLARETITEL"]; ?></title>
</head>
    <main>
      <section class="after-nav bg-primary full-background pb-2">
        <div class="text-primary container bg-transparent rounded-0">
          <div class="jumbotron mb-0 mt-4 py-2">
            <h1 class="display-4"><?php echo $language["UTSTALLARE"]; ?></h1>
          </div>
        </div>
      </section>
      <!-- Adds an optional text and button for joining the fair -->

      <section class="bg-light">
        <div class="container">
          <section class="jumbotron text-center mb-0">
            <h2><?php echo $language["VARADEL"]; ?></h2>

            <a class="btn btn-primary btn-md  mt-auto" href="for_foretag.php?lang=<?php echo $lang; ?>" role="button"><?php echo $language["TILLANMALAN"]; ?></a>
          </section>
        </div>
      </section>

        <!-- Fusion 2023 -->
        <hr>
        <section class="bg-light">
            <div class="container">
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
                <div class="jumbotron text-center py-0 py-sm-4 mb-0">
                    <h2 class="mb-4"><?php echo $language["UTSTALLARE2023"]; ?></h2>

                    <!-- Nya broschyren hamnar här när den är klar -->
                    <!--<h3><a class="text-primary" href="assets/broschyr/broschyr21.pdf"><?php echo $language["BROSCHYR2023"]; ?></a></h3> -->

                    <section class="card-deck text-center font-weight-light">
                        <section class="card">
                            <a href="https://www.accenture.com/se-en" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/accenture.svg" alt="Accentures logotyp"></a>
                        </section>
                        <section class="card">
                            <a href="https://www.ampfield.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/ampfield.svg" alt="Ampfields logotyp"></a>
                        </section>
                        <section class="card">
                            <a href="https://www.bcg.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/bcg.svg" alt="BCGs logotyp"></a>
                        </section>
                    </section>
                </div>
                <div class="jumbotron py-0 py-sm-4 mb-0">
                    <section class="card-deck text-center font-weight-light">
                        <section class="card">
                            <a href="https://www.coherent.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/coherent.svg" alt="Coherents logotyp"></a>
                        </section>
                        <section class="card">
                            <a href="https://www.comsol.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/comsol.svg" alt="Comsols logotyp"></a>
                        </section>
                        <section class="card">
                            <a href="https://www.d-fine.com/en/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/dfine.svg" alt="d-fines logotyp"></a>
                        </section>
                    </section>
                </div>
                <div class="jumbotron py-0 py-sm-4 mb-0">
                    <section class="card-deck text-center font-weight-light">
                        <section class="card">
                            <a href="https://echostate.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/echo-state.svg" alt="Echo States logotyp"></a>
                        </section>
                        <section class="card">
                            <a href="https://www.elevri.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/elevri.svg" alt="Elevris logotyp"></a>
                        </section>
                        <section class="card">
                            <a href="https://www.ericsson.com/en" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/ericsson.svg" alt="Ericssons logotyp"></a>
                        </section>
                    </section>
                </div>
                <div class="jumbotron py-0 py-sm-4 mb-0">
                    <section class="card-deck text-center font-weight-light">
                        <section class="card">
                            <a href="https://floxrobotics.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/flox.svg" alt="Flox Robotics logotyp"></a>
                        </section>
                        <section class="card">
                            <a href="https://www.foi.se/en/foi.html" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/foi.svg" alt="FOIs logotyp"></a>
                        </section>
                        <section class="card">
                            <a href="https://www.gjensidige.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/gjensidige.svg" alt="Gjensidiges logotyp"></a>
                        </section>
                    </section>
                </div>
                <div class="jumbotron py-0 py-sm-4 mb-0">
                    <section class="card-deck text-center font-weight-light">
                        <section class="card">
                            <a href="https://floxrobotics.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/grasp_ai.svg" alt="Grasp AIs logotyp"></a>
                        </section>
                        <section class="card">
                            <a href="https://www.if.se/om-if/jobba-hos-oss" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/if.svg" alt="IFs logotyp"></a>
                        </section>
                        <section class="card">
                            <a href="https://www.lynxhedge.se/en/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/lynx.svg" alt="Lynx logotyp"></a>
                        </section>
                    </section>
                </div>
                <div class="jumbotron py-0 py-sm-4 mb-0">
                    <section class="card-deck text-center font-weight-light">
                        <section class="card">
                            <a href="https://modulai.io/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/modulai.svg" alt="Modulais logotyp"></a>
                        </section>
                        <section class="card">
                            <a href="https://northvolt.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/northvolt.svg" alt="Northvolts logotyp"></a>
                        </section>
                        <section class="card">
                            <a href="https://www.okg.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/okg.svg" alt="OKGs logotyp"></a>
                        </section>
                    </section>
                </div>
                <div class="jumbotron py-0 py-sm-4 mb-0">
                    <section class="card-deck text-center font-weight-light">
                        <section class="card">
                            <a href="https://www.proximion.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/proximion.svg" alt="Proximions logotyp"></a>
                        </section>
                        <section class="card">
                            <a href="https://www.saab.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/saab.svg" alt="SAABs logotyp"></a>
                        </section>
                        <section class="card">
                            <img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/scaleup-robotics.svg" alt="Scaleup Robotics logotyp">
                        </section>
                    </section>
                </div>
                <div class="jumbotron py-0 py-sm-4 mb-0">
                    <section class="card-deck text-center font-weight-light">
                        <section class="card">
                            <a href="https://www.spectrogon.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/spectrogon.svg" alt="Spectrogons logotyp"></a>
                        </section>
                        <section class="card">
                            <a href="https://www.sunstone.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/sunstone.png" alt="Sunstones logotyp"></a>
                        </section>
                        <section class="card">
                            <a href="https://www.tobii.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2023/tobii.svg" alt="Tobiis logotyp"></a>
                        </section>
                    </section>
                </div>
            </div>
        </section>

      <!--- FUSION 2022 --->

      <section class="bg-light">
        <div class="container">

          <div class="jumbotron text-center py-0 py-sm-4 mb-0">
            <h2 class="mb-4"><?php echo $language["UTSTALLARE2022"]; ?></h2>

              <h3><a class="text-primary" href="assets/broschyr/broschyr22.pdf"><?php echo $language["BROSCHYR2022"]; ?></a></h3>

            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.ericsson.com/en" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2022/ericsson.png" alt="Ericssons logo"></a>
              </section>
              <section class="card">
                <a href="https://www.b-iq.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2022/B_IQ_logo.png" alt="B-IQ logo"></a>
              </section>
              <section class="card">
                <a href="https://www.sunstone.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2022/sunstone_logga.png" alt="Sunstones logo"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.studsvik.com/sv/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2022/studsvik_logo.png" alt="Studsvik logo"></a>
              </section>
              <section class="card">
                <a href="https://www.saab.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2022/saab_group.png" alt="Saab logo"></a>
              </section>
              <section class="card">
                <a href="https://se.megger.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2022/megger.jpg" alt="Megger logo"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.if.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2022/if_logo.png" alt="if logo"></a>
              </section>
              <section class="card">
                <a href="http://www.myacademy.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2022/my_academy.png" alt="MyAcademys logo"></a>
              </section>
              <section class="card">
                <a href="https://www.foi.se/en/foi.html" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2022/foi.jpg" alt="FOIs logo"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.avioniq.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2022/avioniq_logo.png" alt="Avioniq logo"></a>
              </section>
              <section class="card">
                <a href="https://www.ampfield.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2022/ampfield_logo.png" alt="Ampfield logo"></a>
              </section>
              <section class="card">
                <a href="https://www.zenseact.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2022/zenseact.png" alt="Zenseact logo"></a>


            </section>
          </div>
        </div>

      </section>

      <!--- FUSION 2021 --->
      <hr>
      <section class="bg-light">
        <div class="container">
          <div class="jumbotron text-center py-0 py-sm-4 mb-0">
            <h2 class="mb-4"><?php echo $language["UTSTALLARE2021"]; ?></h2>

            <h3><a class="text-primary" href="assets/broschyr/broschyr21.pdf"><?php echo $language["BROSCHYR2021"]; ?></a></h3>

            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.ericsson.com/en" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2021/ericsson.png" alt="Ericssons logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.if.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2021/if_logo.png" alt="Ifs logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.sunstone.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2021/sunstone_logga.png" alt="Sunstones logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.saab.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2021/saab.png" alt="Saabs logotyp"></a>
              </section>
              <section class="card">
                <a href="https://se.megger.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2021/megger.jpg" alt="Meggers logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.nordiccapital.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2021/nordiccapital.png" alt="Nordic Capitals logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.subset.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2021/subset.png" alt="SubSets logotyp"></a>
              </section>
              <section class="card">
                <a href="http://www.myacademy.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2021/my_academy.png" alt="MyAcademys logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.foi.se/en/foi.html" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2021/foi.jpg" alt="FOIs logotyp"></a>
              </section>
            </section>
          </div>
        </div>
      </section>

      <!--- Fusion 2020 --->
      <hr>
      <section class="bg-light">
        <div class="container">
          <div class="jumbotron text-center pb-0 pb-sm-4 mb-0">
            <h2 class="mb-4"><?php echo $language["UTSTALLARE2020"]; ?></h2>
            <h3><a class="text-primary" href="assets/broschyr/broschyr20.pdf"><?php echo $language["BROSCHYR2020"]; ?></a></h3>
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.ericsson.com/en" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/ericsson.png" alt="Ericsson logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.if.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/if_logo.png" alt="If logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.sunstone.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/sunstone_logga.png" alt="Sunstone logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.trioptima.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/trioptima-rgb.png" alt="Trioptima logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.kry.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/lakare-pa-kry.png" alt="KRYs logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.comsol.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/comsol_logo.png" alt="COMSOLs logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.ey.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/ey.png" alt="EYs logotyp"></a>
              </section>
              <section class="card">
                <a href="http://www.find-out.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/findout_logga.png" alt="Findouts logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.foi.se/en/foi.html" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/foi.jpg" alt="FOIs logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.yabs.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/yabs.png" alt="YABSs logotyp"></a>
              </section>
              <section class="card">
                <a href="https://silexmicrosystems.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/silex.jpg" alt="Silexs logotyp"></a>
              </section>
              <section class="card">
                <a href="http://www.ampfield.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/ampfield_logga.png" alt="Ampfields logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.sverigesingenjorer.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/sveriges_ingenjorer.png" alt="Sveriges ingenjörers logotyp"></a>
              </section>
              <section class="card">
                <a href="https://se.megger.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/megger_logo_colour.jpg" alt="Meggers logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.jernkontoret.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/jernkontoret_logga.png" alt="Jernkontorets logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.coboltlasers.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/cobolt.jpg" alt="Cobolts logotyp"></a>
              </section>
              <section class="card">
                <a href="http://www.lynxhedge.se/en" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/lynx.png" alt="Lynxs logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.ohman.se/en/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2020/ohman.png" alt="Öhmans logotyp"></a>
              </section>
            </section>
          </div>
        </div>
      </section>

      <!--- Fusion 2019 --->
      <hr>
      <section class="bg-light">
        <div class="container">
          <div class="jumbotron text-center pb-0 pb-sm-4 mb-0">
            <h2 class="mb-4"><?php echo $language["UTSTALLARE2019"]; ?></h2>
            <h3><a class="text-primary" href="assets/broschyr/broschyr19.pdf"><?php echo $language["BROSCHYR2019"]; ?></a></h3>
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="http://www.ampfield.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/ampfield_logga.png" alt="Ampfields logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.attentec.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/attentec_logo.jpg" alt="Attentec logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.bcg.com/beyond-consulting/bcg-gamma/default.aspx" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/bcg.png" alt="BCG Gammas logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.comsol.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/comsol_logo.png" alt="COMSOLs logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.decerno.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/decerno_logga.png" alt="Decernos logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.ericsson.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/ericsson.png" alt="Ericssons logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.ey.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/ey.png" alt="EYs logotyp"></a>
              </section>
              <section class="card">
                <a href="http://www.find-out.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/findout_logga.png" alt="Findouts logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.foi.se/en/foi.html" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/foi.jpg" alt="FOIs logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.idainfront.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/idainfront_logg.png" alt="Idainfronts logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.if.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/if_logga.png" alt="Ifs logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.jernkontoret.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/jernkontoret_logga.png" alt="Jernkontorets logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.kry.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/lakare-pa-kry.png" alt="KRYs logotyp"></a>
              </section>
              <section class="card">
                <a href="https://se.megger.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/megger_logo_colour.jpg" alt="Meggers logotyp"></a>
              </section>
              <section class="card">
                <a href="https://omegapoint.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/omegapoint_logga.png" alt="Omegapoints logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4 mb-0">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://saabgroup.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/saab_group.png" alt="Saabs logotyp"></a>
              </section>
              <section class="card">
                <a href="http://www.sunstone.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/sunstone_logga.png" alt="Sunstones logotyp"></a>
              </section>
              <section class="card">
                <a href="https://www.sverigesingenjorer.se/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/sveriges_ingenjorer.png" alt="Sveriges Ingenjörers logotyp"></a>
              </section>
            </section>
          </div>
          <div class="jumbotron py-0 py-sm-4">
            <section class="card-deck text-center font-weight-light">
              <section class="card">
                <a href="https://www.trioptima.com/" target="_blank"><img class="card-img-top card-img-top-md mx-auto" src="assets/images/logos2019/trioptima_logga.jpg" alt="Trioptima logotyp"></a>
              </section>
              <section class="card invisible">
                <a href="#"><img class="card-img-top card-img-top-md mx-auto" src="#" alt="Sunstones logotyp"></a>
              </section>
              <section class="card invisible">
                <a href="#"><img class="card-img-top card-img-top-md mx-auto" src="#" alt="Sveriges Ingenjörers logotyp"></a>
              </section>
          </div>
        </div>
      </section>
    </main>
<?php include_once("footer.php") ?>
