<!DOCTYPE html>
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of a Pyramid, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Peter Zerbinos" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.orange-amber.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Volume of a Pyramid</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of a Pyramid</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content">
        <div id="user-info">
          <?php
          $baseLength = $_GET["base-length"];
          $baseWidth = $_GET["base-width"];
          $pyramidHeight = $_GET["pyramid-height"];

          // process
          $baseArea = $baseLength * $baseWidth;
          $volume = (1 / 3) * $baseArea * $pyramidHeight;

          // output
          echo "The volume is: " . number_format($volume, 2) . " cm³.";
          ?>
        </div>
        <br />
      </div>
      <a href="./index.php">Return</a>
    </main>
  </div>
</body>

</html>
