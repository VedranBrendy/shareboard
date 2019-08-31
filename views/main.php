<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Shareboard</title>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Shareboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
      </li>
    </ul>

        <ul class="navbar-nav mr-5">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
  <div class="row justify-content-center">
    <div class="my-5">
      <?php require($view); ?>
    </div>
  </div>
</div>

</body>
</html>