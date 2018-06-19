<?php
session_start();
include_once('../includes/prisijungimas.php');

if(isset($_SESSION['logged_in'])){
  if (isset($_POST['title'], $_POST['content'])) {
    $title = $_POST['title'];
    $content = nl2br($_POST['content']);

    $query = $pdo->prepare('INSERT INTO articles (article_title, article_content, article_timestamp) VALUES (?, ?, ?)');

    $query->bindValue(1, $title);
    $query->bindValue(2, $content);
    $query->bindValue(3, time());
    $query->execute();

    header('Location: index.php');
  }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ĮDĖJIMAS</title>
         <!--  kad ant ivairiu irenginiu media veiktu   -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../libs/bootstrap4/css/bootstrap.min.css">
        <!-- mano failas visada zemiau -->
        <link rel="stylesheet" href="../assets/style.css">
    </head>
    <body>
        <div class="container ">
          <button type="button" name="button"><a href="index.php" id="logo">Eiti į ADMIN puslapį</a></button>
          <br />
          <br />
          <br />
          <h3>Straipsnio įdėjimas</h3>
          <br />
          <br />
              <form action="add.php" method="post" autocomplete="off">
                <input type="text" name="title" placeholder="Straipsnio pavadinimas" required >
                <br />
                <br />
                <textarea name="content" rows="10" cols="60" placeholder="Straipsnio tekstas" required></textarea> <br />
                <input type="submit" value="Įkelti straipsnį">
              </form>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>
<?php
}else {
  header('Location: index.php');
}
 ?>
