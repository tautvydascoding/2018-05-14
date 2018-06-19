<?php
session_start();
include_once('../includes/prisijungimas.php');

if (isset($_SESSION['logged_in'])){
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ADMIN PUSLAPIS</title>
         <!--  kad ant ivairiu irenginiu media veiktu   -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../libs/bootstrap4/css/bootstrap.min.css">
        <!-- mano failas visada zemiau -->
        <link rel="stylesheet" href="../assets/style.css">
    </head>
    <body>

        <div class="container">
          <h3>Straipsnių įkėlimas ir ištrynimas</h3>
          <br />
          <br />
          <button type="button" name="button"><a href="../straipsniai.php" id="logo">Apžiūrėti įkeltą medžiagą</a></button>
          <br />
          <br />
          <br />
          <ul>
            <li>
              <button type="button" name="button"><a href="add.php">Pridėti straipsnį</a></button>
            </li>
            <br />
            <br />
            <li>
              <button type="button" name="button"><a href="delete.php">Ištrinti straipsnį</a></button>
            </li>
            <br />
            <br />
            <li>
              <button class="bg-danger" type="button" name="button"><a href="logout.php">Atsijungti</a></button>
            </li>
          </ul>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>
<?php
}else {
  if(isset($_POST['username'], $_POST['password'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = $pdo->prepare("SELECT * FROM users WHERE user_name = ? AND user_password = ?");
    $query->bindValue(1, $username);
    $query->bindValue(2, $password);

    $query->execute();
    $num = $query->rowCount();
    if ($num == 1) {
      $_SESSION['logged_in'] = true;
      header('Location: index.php');
      exit();
    }else {
      $error = 'Neteisingi duomenys';
    }
  }
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <title>LOGINAS</title>
                 <!--  kad ant ivairiu irenginiu media veiktu   -->
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="../libs/bootstrap4/css/bootstrap.min.css">
                <!-- mano failas visada zemiau -->
                <link rel="stylesheet" href="../assets/style.css">
            </head>
            <body>
                <div class="container">
                  <button type="button" name="button"><a href="../straipsniai.php" id="logo">Eiti į straipsnių puslapį</a></button>
                  <br />
                  <br />
                  <?php if (isset($error)){ ?>
                    <small style="color:#aa0000;"><?php echo $error ?></small>
                  <?php } ?>
                  <br />
                  <br />
                  <form action="index.php" method="post" autocomplete="off">
                  <input type="text" name="username" placeholder="Prisijungimo vardas" required>
                  <input type="password" name="password" placeholder="Slaptazodis" required>
                  <br />
                  <br />
                  <input type="submit" value="Prisijungti">
                </form>
              </div>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
            </body>
        </html>
  <?php
  }

 ?>
