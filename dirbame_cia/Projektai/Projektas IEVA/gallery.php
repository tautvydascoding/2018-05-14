
      <?php
          include_once 'header.php';

          include_once 'db_funkcijos.php';

          $visasGallery =   getGallery();
          $galleryMasyvas1 = mysqli_fetch_assoc(   $visasGallery   );
          $galleryMasyvas2 = mysqli_fetch_assoc(   $visasGallery   );
          $galleryMasyvas3 = mysqli_fetch_assoc(   $visasGallery   );
          $galleryMasyvas4 = mysqli_fetch_assoc(   $visasGallery   );
          $galleryMasyvas5 = mysqli_fetch_assoc(   $visasGallery   );
          $galleryMasyvas6 = mysqli_fetch_assoc(   $visasGallery   );

       ?>




<!-- IDEA:  atsidaro pagrindinis konteineris -->

  <div class="container-fluid">
      <div class="row">

<!-- IDEA: atsidaro kairės pusės main dalis -->
            <main class="mainGallery  col-md-6">

            <div class="row">

                  <div class="containerImg col-md-7 p-0 responsive">
                    <img class="img-fluid imageFall border border-white" src="images/<?php echo "$galleryMasyvas1[imageName]"; ?>" alt="autumn tree in fall" width="100%" height="auto"/>
                        <div class="overlay">
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                        </div>
                  </div>

                        <div class="col-md-5  p-0">
                          <img class="img-fluid imagePossibile border border-white" src="images/<?php echo "$galleryMasyvas2[imageName]"; ?>" alt="impossible" width="100%" height="100%">
                        </div>

              </div>

                  <div class="row">
                      <div class="containerLandscape col-md-12 p-0 ">
                          <img class="img-fluid imageLandscape border border-white" src="images/<?php echo "$galleryMasyvas3[imageName]"; ?>" alt="village mountain landscape sunrise" width="100%" height="auto"/>
                        <div class="overlayLandscape">
                            <div class="textLandscape"> Discover </div>
                        </div>
                      </div>
                  </div>

                </main>


<!-- užsidaro kairės pusės main -->

<!-- IDEA: atsidaro dešinės pusės kolona aside dalis -->
      <aside class="galleryAside col-md-6">

        <div class="row">

                  <div class="containerCity col-md-6 p-0">
                      <img class="img-fluid imageCity border border-white" src="images/<?php echo "$galleryMasyvas4[imageName]"; ?>" alt="city skycrapers in cloudy sky" width="100%" height="auto" />
                        <div class="overlayCity">
                          <div class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                        </div>
                  </div>



                    <div class="col-md-6">
                      <div class="row">
                        <div class="img-fluid imageClouds col-md-12 p-0">
                          <img class="border border-white" src="images/<?php echo "$galleryMasyvas5[imageName]"; ?>" alt="image of the clouds" width="100%" height="461px" />
                        </div>
                      </div>



                      <div class="row">
                        <div class="containerStones col-md-12 p-0 ">
                          <img class="img-fluid imageStones border border-white" src="images/<?php echo "$galleryMasyvas6[imageName]"; ?>" alt="photo of stones" width="100%" height="auto" />
                            <div class="overlayStones">
                              <div class="textStones"> Create </div>
                            </div>

                        </div>
                    </div>

                  </div>

            </div>

      </aside>


<!-- užsidaro aside (dešinė) pusė  ==============            -->



    </div>
</div>

<?php
    include 'footer.php';
 ?>
