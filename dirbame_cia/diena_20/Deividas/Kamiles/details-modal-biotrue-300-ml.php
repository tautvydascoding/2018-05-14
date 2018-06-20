<div class="modal fade details-1" id="details-1" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- Modal Header -->
      <?php $product = mysqli_fetch_assoc($rezultatai); ?>
      <div class="modal-header">
        <h4 class="modal-title"><?= $product['name']; ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="center-block">
                <img src="<?= $product['img'];   ?>" alt="<?= $product['name'];   ?>"  class="details img-responsive" />
              </div>
              </div>
              <div class="col-sm-6">
                <h4>Aprašymas</h4>
                <p><?= $product['description'];   ?></p>
                <hr />
                <p>Kaina: <?= $product['price'];   ?>€</p>
                <hr />
                <form class="" action="add_cart.php" method="post">
                  <div class="form-group">
                    <div class="col-xs-3">
                      <label for="quantity" id="quantity-label">Kiekis: </label>
                      <input type="text" class="form-control" name="quantity" id="quantity">
                    </div>
                  </div>
                </form>
              </div>

          </div>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger closeBtn" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button>
      </div>

    </div>
  </div>
</div>
</div>
