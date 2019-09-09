<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi</title>
    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="item-template" type="text/x-handlebars-template">

      <div class="album">
        <span><img src="img/{{titolo}}.png" alt=""></span>
        <h4>{{titolo}}</h4>
        <p>Pink Floyd</p>
        <h5>{{anno}}</h5>
      </div>

    </script>
    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">

    <?php
    // Collego il file api.php che contiene l'array
    include "api.php";

    ?>
  </head>

  <body>
    <div class="container">
      <header>
        <img src="img/logo.png" alt="">
      </header>
      <main>

        <?php

        // Ciclo dentro l'array
        foreach ($albums as $album) {
          // Salvo due variabili per titolo e anno
          $titolo = $album[titolo];
          $anno = $album[anno];
          // Stampo una specie di "template" compilandolo
          // con le variabili appena create
          echo "<div class='album'>
            <span><img src='img/$titolo.png' alt=''></span>
            <h4>$titolo</h4>
            <p>Pink Floyd</p>
            <h5>$anno</h5>
          </div>";
        }



        ?>


      </main>
    </div>

  </body>
</html>
