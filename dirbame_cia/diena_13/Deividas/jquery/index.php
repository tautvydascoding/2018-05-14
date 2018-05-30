<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>scope</title>
         <!--  kad ant ivairiu irenginiu media veiktu   -->
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.min.css">
        <!-- mano failas visada zemiau -->
        <link rel="stylesheet" href="css/master.css">

    </head>


    <body >

      <?php




          $preke1 = ["preke1","1","prekes aprasymas 11111","500"];
          $preke2 = ["preke2","2","prekes aprasymas 22222","500"];
          $preke3 = ["preke3","3","prekes aprasymas 33333","500"];
          $preke4 = ["preke4","4","prekes aprasymas 44444","500"];

          $visosPrekes = [];

          $visosPrekes[0] = $preke1;
          $visosPrekes[1] = $preke2;
          $visosPrekes[2] = $preke3;
          $visosPrekes[3] = $preke4;


          // print_r($preke1);
          // echo "<br />";
          // print_r($preke2);
          // echo "<br />";
          // print_r($preke3);
          // echo "<br />";
          // print_r($visosPrekes);
          // echo "<br />";
          // C. atvaizduodi kiekvienoje eiluteje po 3 prekes


          // for ($i=0; $i < count($visosPrekes); $i++) {
          //   echo  $visosPrekes[$i][0] . "<br/>";
          //   //
          //   // code...
          // }

          echo "<div class='row'>";
          for ($i=0; $i < count($visosPrekes); $i++) {
            echo "<article class='col-mg-4'>";
            echo "<h2>" . $visosPrekes[$i][0] . "</h2>";
            echo "<img>" . $visosPrekes[$i][1] . "</img>";
            echo "<p>" . $visosPrekes[$i][2] . "</p>";
            echo "<button>" . $visosPrekes[$i][3] . "</button>";
            echo "</article>";
          }
          echo "</div>";





       ?>

       <div class="container">
         <div class="row">
           <article class="">

           </article>

         </div>

       </div>








        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>
    </body>
</html>
