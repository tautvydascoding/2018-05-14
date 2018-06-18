<?php
include_once('includes/prisijungimas.php');
include_once('includes/article.php');

$article = new Article;

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $data = $article->fetch_data($id);
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

<div class="container straipsniufonas mt-4 pt-2">

  <h3 class="text-center ">
    <?php echo $data['article_title']; ?> -
    <small>
      Įkelta: <?php echo date('l jS', $data['article_timestamp']); ?>
    </small>
  </h3>
  <p class="mt-3">
    <?php echo $data['article_content']; ?>
  </p>
  <button class="mb-3 " type="button" name="button"><a href="straipsniai.php">&larr; Atgal</a></button>
</div>

<!-- Straipsniai pabaiga -->
<!-- Footeris pradzia -->

<!-- Footerio pabaiga -->

<!--\/ linkai \/  -->
<?php
include("footerLink.php");
 ?>

 <?php
 }else{
   header('Location: straipsniai.php');
   exit();
 }
  ?>
