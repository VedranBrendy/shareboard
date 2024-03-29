<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shareboard</title>
	<link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/style.css">
</head>
<body>

	 <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Shareboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
          </li>
        </ul>

        <ul class="navbar-nav navbar-right mr-3">
          <?php if (isset($_SESSION['is_logged_in'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name'];?> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
          </li>
            
         <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
          </li>
           <?php endif; ?>
        </ul>

      </div>
    </nav>
	<div class="container">
      <div class="my-3">
        <?php Messages::display(); ?> 
        </div>
		<div class="row justify-content-center">
			<?php require($view); ?>
		</div>
	</div>
	


</body>
</html>