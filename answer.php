<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Watch a Movie, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Ain Jeong" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-blue.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Watch a Movie, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Watch a Movie, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/movie_ratings.jpg" alt="movie rating image" width="250" />
      </div>
      <div class="page-content-answer">
        <div id="answer">
          <?php
          // input
          $userAge = $_GET["user-age"];
          // process
          if ($userAge >= 17) {
            // output
            echo 'If you are ' . $userAge . ', You can watch R movies alone.';
          } else if ($userAge >= 13) {
            // output
            echo 'If you are ' . $userAge . ', You can watch PG-13 movies alone.';
          } else if ($userAge >= 5) {
            // output
            echo 'If you are ' . $userAge . ', You can watch G or PG movies alone.';
          } else {
            // output
            echo 'If you are ' . $userAge . ', You are too young for most of the movies.';
          }
          ?>
        </div>
      </div>
      <div class="page-content-return">
        <a href="./index.php">Return ...</a>
      </div>
    </main>
  </div>
</body>

</html>
