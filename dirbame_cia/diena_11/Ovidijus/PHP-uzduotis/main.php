<body class="container">
    <h1 > Prekes </h1>
    <?php
    $kaina = 500;// panaudota preke.php faile
    $antraste = "Belekas";
    // $aprasymas = ...;
    echo "<div class='row'>";
    for ($i=0; $i < 6 ; $i++) {
      include("preke.php");
    }
    echo "</div>"
     ?>
</body>
