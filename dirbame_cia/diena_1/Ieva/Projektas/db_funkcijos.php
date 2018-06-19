    <?php

    define('DB_PAVADINIMAS', 'ievaprojektas');
    define('DB_VARTOTOJAS', 'root');
    define('DB_SLAPTAZODIS', 'root');
    define('DB_HOST', 'localhost');

    /* PRISIJUNGIMAS PRIE DUOMENŲ BAZĖS ievaprojektas */
    $prisijungimas = mysqli_connect(DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);

    mysqli_set_charset($prisijungimas, "utf8");

    function getPrisijungimas () {
      global $prisijungimas;

            if ($prisijungimas == true) {
                // echo "Jūs prisijungėte prie DB sėkmingai.<br/>";
                return $prisijungimas;

            } else {
              echo "Klaida: nepavyko prisijungti" . mysqli_connect_error() . "</br/>";
            }
          return NULL;
        }
        getPrisijungimas();

    // Visas BLOG page'o masyvas, išvedimas

        function  getAllBlog() {
            $manoSQL = "SELECT * FROM blogpage ORDER BY date DESC";
            $visoBlogObjektas = mysqli_query(getPrisijungimas() , $manoSQL);
            return $visoBlogObjektas;
          }

        // $visasBlog =   getAllBlog();
        //
        // $blogMasyvas1 = mysqli_fetch_assoc(   $visasBlog   );
        // print_r( $blogMasyvas1  ); testavimui

        // $blogMasyvas2 = mysqli_fetch_assoc(   $visasBlog   );
        // print_r( $blogMasyvas2  ); testavimui

        // $blogMasyvas3 = mysqli_fetch_assoc(   $visasBlog   );
        // print_r( $blogMasyvas3  ); testavimui


    /* CONTACT Page'o info išvedimas iš DB */
        function  getContactInfo() {
                $manoSQL = "SELECT * FROM contact LIMIT 10";
                $visoContactPageObjektas = mysqli_query(getPrisijungimas() , $manoSQL);
                return $visoContactPageObjektas;
          }

      // $visasContact =   getContactInfo();
      // $contactPageMasyvas = mysqli_fetch_assoc(   $visasContact   );
      // print_r( $contactPageMasyvas  ); testavimui



    /* GALLERY page'o nuotraukų pavadinimų išvedimas */

    function  getGallery() {
            $manoSQL = "SELECT * FROM gallery LIMIT 50";
            $visasGalleryObjektas = mysqli_query(getPrisijungimas() , $manoSQL);
            return $visasGalleryObjektas;
      }

    // $visasGallery =   getGallery();
    // $galleryMasyvas = mysqli_fetch_assoc(   $visasGallery   );
    // print_r( $galleryMasyvas  );
