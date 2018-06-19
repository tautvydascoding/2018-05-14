<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/backend.css">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<!-- <script type="text/javascript" src="js/search.js"></script> -->
<!-- Compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css"> -->

<!-- Compiled and minified JavaScript -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script> -->
        
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>
<body>
        <!-- Uses a header that scrolls with the text, rather than staying
  locked at the top -->
<div class="mdl-layout mdl-js-layout">
        <header class="mdl-layout__header mdl-layout__header--scroll">
          <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Administravimas</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation -->
            <!-- <nav class="mdl-navigation">
              <a class="mdl-navigation__link" href="">Link</a>
              <a class="mdl-navigation__link" href="">Link</a>
              <a class="mdl-navigation__link" href="">Link</a>
              <a class="mdl-navigation__link" href="">Link</a>
            </nav> -->
          </div>
        </header>
        <div class="mdl-layout__drawer">
          <span class="mdl-layout-title">Title</span>
          <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Dalyviai</a>
            <a class="mdl-navigation__link" href="">Renginiai</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
          </nav>
        </div>
        <?php 
            include_once('get_all_players.php');
            include_once('php/list_events.php');
        ?>
        <main class="mdl-layout__content">
          <div class="page-content">
          <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <div class="mdl-tabs__tab-bar">
      <a href="#events-panel" class="mdl-tabs__tab is-active">Renginiai</a>
      <a href="#players-panel" class="mdl-tabs__tab">Žaidėjai</a>
      <!-- <a href="#targaryens-panel" class="mdl-tabs__tab">Targaryens</a> -->
      <a href="#starks-panel" class="mdl-tabs__tab">Paieška</a>
  </div>

  <div class="mdl-tabs__panel" id="starks-panel">
  <?php
    include_once ('php/search.php')
    // echo "HAJA";
    ?>
  </div>
  <div class="mdl-tabs__panel is-active" id="events-panel" style="min-width:200px">
    <?php
    eventsTable();
    ?>
    <p>2</p>
  </div>
  <div class="mdl-tabs__panel" id="players-panel">
   <?php
    printAllplayers();
    ?>
    <p>3</p>
  </div>
  <div class="mdl-tabs__panel" id="srch-panel">
   <?php
    // include_once ('php/search.php')
    echo "HAJA";
    ?>
    <p>4</p>
  </div>
</div>
          </div>
        </main>
      </div>


<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script type="text/javascript" src="js/search.js"></script>
</body>
<!-- <script src="js/expand-backend-events.js" ></script> -->
</html>