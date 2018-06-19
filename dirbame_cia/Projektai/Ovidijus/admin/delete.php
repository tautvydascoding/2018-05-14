<?php
session_start();

include_once('../includes/prisijungimas.php');
include_once('../includes/article.php');

$article = new Article;

if(isset($_SESSION['logged_in'])){
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = $pdo->prepare('DELETE FROM articles WHERE article_id = ?');
    $query->bindValue(1, $id);
    $query->execute();

    header('Location: delete.php');
  }
  $articles = $article->fetch_all();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TRYNIMAS</title>
         <!--  kad ant ivairiu irenginiu media veiktu   -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../libs/bootstrap4/css/bootstrap.min.css">
        <!-- mano failas visada zemiau -->
        <link rel="stylesheet" href="../assets/style.css">
    </head>
    <body>
        <div class="container">
          <button type="button" name="button"><a href="index.php" id="logo">Eiti į ADMIN puslapį</a></button>
          <br />
          <br />
          <br />
          <h3>Pasirinkite straipsnį kurį ištrinsite.</h3>
          <br />
          <br />
          <form action="delete.php" method="get" >
            <select onchange="this.form.submit();" name="id">
              <?php foreach ($articles as $article) { ?>
                <option value="<?php echo $article['article_id']; ?>"><?php echo $article['article_title']; ?></option>
              <?php } ?>
            </select>
          </form>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>

<?php
}else{
  header('Location: index.php');
}
?>
