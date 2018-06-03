

      <?php
      include 'header.php';

       ?>




          <div class="row mt-5">
              <main class=" col-md-5 mt-5 text-justify">
                <h3 class="textContact mt-5"> Contact Info: </h3>
                  <p class="textContact p-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <p class="textContact p-0"> <strong>Address:</strong> 10111 Santa Monica Boulevard, LA </p>
                  <p class="textContact p-0"> <strong>Phone:</strong> +44 000 0008 </p>
                  <p class="textContact p-0"> <strong>E-mail:</strong> info@Example.com </p>
              </main>

              <aside class="col-md-7 mt-5 d-flex">

                <form class="comment.php" method="get">
                  <div>
                    <input class="w-100 mb-3" type="text" name="name" maxlength="15" placeholder="Your Name" required>
                    <input class="w-100 mb-3" type="email" name="email" placeholder="Your Email" pattern="a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    <textarea class="w-100 mb-3" name="text" rows="5" cols="80" maxlength="100" placeholder="Your Comment" pattern="[^'\x22]+" title="Invalid input"></textarea>
                  </div>

                  <button class="w-100" type="submit" name="button">Send</button>

                </form>
                </aside>


          </div>
<!-- IDEA: užsidaro wrapper dalis -------------------------->

        <?php include'footer.php' ?>
