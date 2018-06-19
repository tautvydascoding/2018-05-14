<?php
include_once('includes/prisijungimas.php');
include_once('includes/article.php');

$article = new Article;

$articles = $article->fetch_all();
?>

<?php
include("header.php");
?>
<!-- Headerio pabaiga -->
<body>
<!-- NAVIGACIJA -->
<?php
include("navigacija.php");
?>
<!-- Navigacijos pabaiga -->
<!-- STRAIPSNIAI -->

<div class="container tPilkPermFonas">
  <h2 class="mb-5 mt-4 pt-2 text-center"><strong>SUSIJĘ STRAIPSNIAI</strong></h2>
  <div class=" pt-3 pb-3 ">
    <?php foreach ($articles as $article) {  ?>
    <h3 class="mb-5 p-3 str w-75">
      <a href="straipsnis.php?id=<?php echo $article['article_id'];?>">
        <?php echo $article['article_title']; ?>
      </a>
      - <small>
        Įkelta: <?php echo date('j m o'); ?>
      </small>
    </h3>
  <?php } ?>
</div>
</div>

<!-- Straipsniai pabaiga -->
<!-- Footeris pradzia -->
<?php
include("footeris.php");
?>

<!-- Footerio pabaiga -->

<!--\/ linkai \/  -->
<?php
include("footerLink.php");
 ?>
