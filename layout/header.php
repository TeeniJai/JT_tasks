<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="styling.css" rel="stylesheet">
  <title>
    <?php
    echo $title
      ?>
  </title>
  <script src="../JS/site.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <img src="logo.png" alt="Hamk logo" style="height: 25px; width: 60px; margin-right: 80px">
      <a class="navbar-brand" href="index.html">Web Programming</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="ex1.php">Exercise 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Exercise 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="variable.php">Exercise 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="controlflow.php">Exercise 4</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="array.php">Exercise 5</a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>