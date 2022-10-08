<?php include_once("header.php") ?>
<title><?php echo $language["FORFORETAGTITEL"]; ?></title>
</head>
    <main>
      <section class="after-nav bg-primary full-background pb-2">
        <div class="text-primary container bg-transparent rounded-0">
          <div class="jumbotron mb-0 mt-4 py-2">
            <h1 class="display-4"><?php echo $language["FORFORETAG"]; ?></h1>
          </div>
        </div>
      </section>

      <section class="bg-light">
        <div class="container">
          <div class="jumbotron mb-0">
            <h2 class="text-center mb-4">
              <?php echo $language["VILLVARAMED"]; ?>
            </h2>
            <div class="text-center my-auto">
              <!-- Start of a from for collecting interest from companies.
              <form action="interest.php" method="post">
                <label for="name">
                  Namn:
                </label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="phone">
                  Telefon:
                </label>
                <input type="tel" id="phone" name="phone">
                <br>
                <label for="email">
                  E-mail:
                </label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="company">
                  Företag:
                </label>
                <input type="text" id="company" name="company" required>
                <br>
                <label for="other">
                  Övrigt:
                </label>
                <br>
                <textarea rows = "5" cols = "50" id="other" name = "other">
                </textarea>
                <br>
                <input type="submit" value="Submit">
              </form>-->
              <p class="lead">
                <?php echo $language["SKICKAMEDDELANDE"]; ?><a href="mailto:fusion@f.kth.se" class="text-primary">fusion@f.kth.se</a><?php echo $language["SAHORVI"]; ?>
              </p>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <section>
        <div class="container">
          <div class="jumbotron">
            <h2 class="text-center mb-4"><?php echo $language["VARAPAKET"]; ?></h2>
            <div class="overflow-auto">
              <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"><?php echo $language["MASSPAKET"]; ?></th>
                    <th scope="col"><?php echo $language["EVENTPAKET"]; ?></th>
                    <th scope="col"><?php echo $language["HUVUDSPONSOR"]; ?></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $language["MONTER"]; ?></th>
                    <td>5</td>
                    <td>7</td>
                    <td>10</td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["FORETAGSVARD"]; ?></th>
                    <td>&#10004;</td>
                    <td>&#10004;</td>
                    <td>&#10004;</td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["SOCIALMEDIA"]; ?></th>
                    <td>&#10004;</td>
                    <td>&#10004;</td>
                    <td>&#10004;</td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["SIDORIBROSCHYR"]; ?></th>
                    <td>1</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["JOBBANNONSER"]; ?></th>
                    <td>2</td>
                    <td>3</td>
                    <td><?php echo $language["TILLSAMTLIGA"]; ?></td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["LUNCHBILJETTER"]; ?></th>
                    <td>3</td>
                    <td>5</td>
                    <td><?php echo $language["TILLSAMTLIGA"]; ?></td>
                  </tr>

                  <tr>
                    <th scope="row"><?php echo $language["LUNCHFOREL"]; ?></th>
                    <td></td>
                    <td>&#10004;</td>
                    <td>&#10004;</td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["BANKETTBILJETTER"]; ?></th>
                    <td></td>
                    <td>2</td>
                    <td><?php echo $language["TILLSAMTLIGA"]; ?></td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["PREMIUMPARTNERSKAP"]; ?></th>
                    <td></td>
                    <td></td>
                    <td>&#10004;*</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p class="mt-0 text-muted">
            <?php echo $language["PREMIUMTEXT"]; ?>
            </p>
          </div>
        </div>
      </section>
      <!-- För en fysisk mässa
      <section>
        <div class="container">
          <div class="jumbotron">
            <h2 class="text-center mb-4"><?php echo $language["VARAPAKET"]; ?></h2>
            <div class="overflow-auto">
              <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"><?php echo $language["MASSPAKET"]; ?></th>
                    <th scope="col"><?php echo $language["EVENTPAKET"]; ?></th>
                    <th scope="col"><?php echo $language["HUVUDSPONSOR"]; ?></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $language["MONTER"]; ?></th>
                    <td>X</td>
                    <td>X</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["FORETAGSVARD"]; ?></th>
                    <td>X</td>
                    <td>X</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["SIDORIBROSCHYR"]; ?></th>
                    <td>1</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["LUNCHBILJETTER"]; ?></th>
                    <td>2</td>
                    <td>3</td>
                    <td><?php echo $language["TILLSAMTLIGA"]; ?></td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["LUNCHFOREL"]; ?></th>
                    <td></td>
                    <td>X</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["BANKETTBILJETTER"]; ?></th>
                    <td></td>
                    <td>2</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <th scope="row"><?php echo $language["PREMIUMPARTNERSKAP"]; ?></th>
                    <td></td>
                    <td></td>
                    <td>X*</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p class="mt-0 text-muted">
            <?php echo $language["PREMIUMTEXT"]; ?>
            </p>
          </div>
        </div>
      </section>-->
    </main>

<?php include_once("footer.php") ?>
