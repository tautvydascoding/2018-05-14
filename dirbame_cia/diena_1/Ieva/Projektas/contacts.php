

      <?php
      include 'header.php';

       ?>



<div class="container-fluid">


          <div class="row mt-5">
              <main class=" col-md-6 mt-3 text-justify">
                <h4 class="textContact mt-5"> Contact Info: </h4>
                  <p class="contactForMedia textContact p-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                  <div>
                    <img class="contactIcon" src="images/home.svg" alt="home icon" />
                    <p class="contactForMedia contactIcon textContact p-0"> <strong>Address:</strong> 10111 Santa Monica Boulevard, LA </p>
                  </div>

                  <div>
                    <img class="contactIcon" src="images/phone.svg" alt="phone icon" />
                    <p class="contactForMedia contactIcon textContact p-0"> <strong>Phone:</strong> +44 000 0008 </p>
                  </div>

                  <div>
                  <img class="contactIcon" src="images/mail.svg" alt="mail icon"  />
                  <p class=" contactForMedia contactIcon textContact p-0"> <strong>E-mail:</strong> info@Example.com </p>

                  </div>
              </main>

              <aside class="col-md-6 mt-5 d-flex">

                <form action="comment.php" method="get">
                  <div>
                    <input class="w-100 mb-2" type="text" name="name" maxlength="15" placeholder="Your Name" required>
                    <input class="w-100 mb-3" type="email" name="email" placeholder="Your Email" pattern="a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    <textarea class="w-100 mb-3" name="text" rows="5" cols="80" maxlength="100" placeholder="Your Comment" pattern="[^'\x22]+" title="Invalid input"></textarea>
                  </div>

                  <button class="w-100 btn-dark" type="submit" name="button">Send</button>

                </form>


                </aside>
          </div>

          <div class="row">
              <div class="col-md-12">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.2864160745758!2d-118.41965128489387!3d34.06217138060317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bb8b3cfc7839%3A0x6f5778ce061fb0ff!2s10111+California+State+Route+2%2C+Los+Angeles%2C+CA+90024%2C+Jungtin%C4%97s+Valstijos!5e0!3m2!1slt!2slt!4v1528396156754" width=100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
          </div>


<!-- IDEA: užsidaro wrapper dalis -------------------------->
</div>


        <?php include'footer.php' ?>
