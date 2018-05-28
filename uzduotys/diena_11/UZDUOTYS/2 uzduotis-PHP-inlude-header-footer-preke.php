<!-- Pasiziureti PHP include: -->

pvz: include('header.php');

Susikurti 4 failus:

header.php
main.php
footer.php
index.php

Faile index.php naudojant include('kelias'); f-ja "iterpti" header, main ir footer failus

header.php   faile - turetu buti visas puslapio virsus:
 <html>
     <head>
         ...
     </head>

footer.php faile - turetu buti visa puslapio apacia:
<!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>
    </body>
</html>
