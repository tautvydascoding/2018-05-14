
  <?php
  include_once'header.php';
  include_once'db_funkcijos.php';

  $visasBlog =   getAllBlog();

   ?>

  <div class="container">

         <?php

            $blogStraipsniuSkaicius = mysqli_num_rows( $visasBlog );
                for ($i = 0; $i < $blogStraipsniuSkaicius; $i++) {
                    $blogMasyvas=mysqli_fetch_assoc($visasBlog);
          ?>

          <div class="row">
              <div class="blog-image col-md-12 bg-light mt-5 p-0 mx-auto">

                    <a href="#">
                        <img class="imageBlog img-thumbnail" src="images/<?php echo "$blogMasyvas[imageName]"; ?>" alt="bridge to the forrest" width="100%" height="auto" />
                    </a>

                        <div class="nature p-1 text-center text-uppercase">
                            <a> <?php echo "$blogMasyvas[blogTheme]"; ?> </a>
                        </div>

                  <h2 class="blogH2 text-center"> <?php echo "$blogMasyvas[title]"; ?> </h2>
                      <p class="p-0 text-center"> <?php echo "$blogMasyvas[date]"; ?>   </p>
                          <p class="blog p-2 text-justify"> <?php echo "$blogMasyvas[description]"; ?>  </p>
              </div>
          </div>

  <?php
  }

  ?>




</div> <!-- IDEA: end of post container -->

<?php
include 'footer.php';
 ?>
