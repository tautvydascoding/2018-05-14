

      <?php
          include_once'header.php';
          include_once'db_funkcijos.php';

          $visasContact = getContactInfo();

          $contactPageMasyvas = mysqli_fetch_assoc(   $visasContact   );
       ?>



       <div class="container-fluid">


          <div class="row mt-5">
              <main class=" col-md-6 mt-3 text-justify">
                <h4 class="textContact mt-5"> Contact Info: </h4>
                  <p class="contactForMedia textContact p-0"> <?php echo "$contactPageMasyvas[info]" ?> </p>

                  <div>
                    <img class="contactIcon" src="images/home.svg" alt="home icon" />
                      <p class="contactForMedia contactIcon textContact p-0"> <strong>Address:</strong> <?php echo "$contactPageMasyvas[address]" ?> </p>
                  </div>

                      <div>
                        <img class="contactIcon" src="images/phone.svg" alt="phone icon" />
                          <p class="contactForMedia contactIcon textContact p-0"> <strong>Phone:</strong> <?php echo "$contactPageMasyvas[phone]" ?> </p>
                      </div>

                          <div>
                            <img class="contactIcon" src="images/mail.svg" alt="mail icon"  />
                              <p class=" contactForMedia contactIcon textContact p-0"> <strong>E-mail:</strong> <?php echo "$contactPageMasyvas[email]" ?> </p>

                          </div>
              </main>

              <aside class="col-md-6 mt-5 d-flex">

                <form action="contact-email.php" method="post">
                      <div>
                        <input class="w-100 mb-2" type="text" name="name" maxlength="15" placeholder="Your Name" required>
                          <input class="w-100 mb-3" type="email" name="email" placeholder="Your Email" pattern="a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                            <textarea class="w-100 mb-3" name="comment" rows="5" cols="80" maxlength="100" placeholder="Your Comment" pattern="[^'\x22]+" title="Your message here" required></textarea>
                      </div>

                                  <button class="w-100 btn-dark" type="submit" name="submit">Send</button>

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
