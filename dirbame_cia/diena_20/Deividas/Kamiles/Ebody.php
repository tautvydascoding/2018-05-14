<body class="parallax">

  <!-- navigacija -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#background-image"><img src="img/logo.png" alt="Kamiles lesiai"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Pagrindinis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#footer">Kontaktai</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navigacija baigesi -->
  <div id="background-image">
    <div id="image-1"></div>
    <div id="image-2"></div>
  </div>

  <!-- main -->
  <main>
    <div class="container">
      <div style="clear:both"></div>
      <br />
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th colspan="5">
              <h3>Uzsakymas</h3></th>
          </tr>
          <tr>
            <th width="40%">Produkto pavadinimas</th>
            <th width="10%">Kiekis</th>
            <th width="20%">Kaina</th>
            <th width="15%">Is viso</th>
            <th width="5%"></th>
          </tr>
          <?php
      if(!empty($_SESSION['shopping_cart'])):

           $total = 0;

           foreach($_SESSION['shopping_cart'] as $key => $product):
      ?>
            <tr>
              <td>
                <?php echo $product['name']; ?>
              </td>
              <td>
                <?php echo $product['quantity']; ?>
              </td>
              <td>$
                <?php echo $product['price']; ?>
              </td>
              <td>$
                <?php echo number_format($product['quantity'] * $product['price'], 2); ?>
              </td>
              <td>
                <a href="Eshopindex.php?action=delete&id=<?php echo $product['id']; ?>">
                  <div class="btn-danger">Pasalinti</div>
                </a>
              </td>
            </tr>
            <?php
                $total = $total + ($product['quantity'] * $product['price']);
           endforeach;
      ?>
              <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right">€
                  <?php echo number_format($total, 2); ?>
                </td>
                <td></td>
              </tr>
              <tr>
                <!-- Show checkout button only if the shopping cart is not empty -->
                <td colspan="5">
                  <?php
              if (isset($_SESSION['shopping_cart'])):
              if (count($_SESSION['shopping_cart']) > 0):
           ?>
                    <a href="#" type="button" class="button btn btn-primary text-center" data-toggle="modal" data-target=".bd-example-modal-lg">Pirkti</a>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                        </div>
                      </div>
                    </div>

                    <?php endif; endif; ?>
                </td>
              </tr>
              <?php
      endif;
      ?>
        </table>
      </div>
    </div>


    <div class="row shop-ground">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="row ">

          <?php while($product = mysqli_fetch_assoc($rezultatai)) : ?>
          <div class="col-md-3 row-ground">
            <form method="post" action="Eshopindex.php?action=add&id=<?php echo $product['id']; ?>">
              <div class="products">
                <h4 class="text-center"><?= $product['name']; ?></h4>
                <img src="<?= $product['img'];   ?>" alt="<?=  $product['name'];   ?>" id="images" />
                <!-- <h4 class="text-info"><?php echo $product['name']; ?></h4> -->
                <p class="list-price text-danger">Kaina: <s><?=  $product['list_price'];   ?>€</s></p>
                <p class="price ">Kaina:
                  <?=  $product['price'];   ?>€</p>
                <input type="text" name="quantity" class="form-control" value="1" />
                <input type="hidden" name="name" value="<?php echo $product['name']; ?>" />
                <input type="hidden" name="price" value="<?php echo $product['price']; ?>" />
                <div class="cart-buttons ">
                  <input type="button" name="modal" class="btn btn-success modalBtn" data-toggle="modal" data-target="#details-1" value="Išsamiau" />
                  <input type="submit" name="add_to_cart" id="add_to_cart" class="btn btn-warning cart" value="Pirkti" />
                </div>

              </div>
            </form>

          </div>

          <?php

        endwhile; ?>
        </div>
      </div>
    </div>

  </main>
  <!-- main baigesi -->

  <!-- footeris -->

  <footer id="footer">
    <div class="row contact">
      <div class="col-md-3 text-center">
        <div>
          <a href="#"><img src="img/logo.png" alt="Kamiles lesiai"></a>
        </div>
      </div>
      <div class="col-md-6 text-center">
        <div class="social-bar">
          <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
          <a href="#" target="_blank"><i class="fab fa-pinterest-square"></i></a>
          <a href="#" target="_blank"><i class="fab fa-snapchat-square"></i></a>
        </div>
        <div>
          Coryright CL &copy; 2018
        </div>
      </div>
      <div class="col-md-3 text-justify">
        <div>
          <h2>Kontaktai:</h2>
          <p>Tel.: +370 6*** ****</p>
          <p>El.paštas: contactlesiai@gmail.com</p>
        </div>
      </div>
    </div>
  </footer>


  <?php
  // <!-- details modal -->
  //$sql = "SELECT * FROM products WHERE id = 1" ;
  // $sql = "SELECT * FROM products WHERE id = $_GET['numeris']" ;
//  $sql = "SELECT * FROM products" ;

  $rezultatai = $prisijungimas ->query($sql);

  include ('details-modal-biotrue-300-ml.php');


   ?>

</body>
