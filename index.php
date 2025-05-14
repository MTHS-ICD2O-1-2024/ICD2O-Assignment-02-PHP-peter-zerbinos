<!DOCTYPE html>
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of a Pyramid" />
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
      <div class="right-image">
        <img src="./images/pyramid.png" alt="pyramid" />
      </div>
      <div class="page-content">Enter the base length, width, and height in cm.</div>
      <br />
      <form action="answer.php" method="GET">
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="base-length" />
          <label class="mdl-textfield__label" for="base-length">Base Length (cm)</label>
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        <br />
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="base-width" />
          <label class="mdl-textfield__label" for="base-width">Base Width (cm)</label>
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        <br />
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="pyramid-height" />
          <label class="mdl-textfield__label" for="pyramid-height">Height (cm)</label>
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        <br />
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          Calculate
        </button>
      </form>
      <br />
    </main>
  </div>
</body>

</html>
