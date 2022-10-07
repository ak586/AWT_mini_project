<?php
include 'config.php'
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>FoodHouse</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="CSS/style.css">
    
</head>
<body>
   

   <!-- navbar start -->

  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Brand</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ms-auto  ">


   <li class="nav-item">
    <a class="nav-link" href="">About</a>
   </li>
   <li class="nav-item">
    <a class="nav-link" href="">Receipe</a>
   </li>
   <li class="nav-item">
    <a class="nav-link" href="">Plan</a>
   </li>
   <li >
   <button class="btn btn-outline-success">Login</button>
   </li>
    </ul>
    </div>
  </nav>

  <!-- end of the navbar -->



  <div class=" main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<form action="register.php" method="POST">
				<label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="name" placeholder="Name" required="">
				<input type="email" name="email" placeholder="Email" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<button class="su-button" type="submit">Sign up</button>
			</form>
		</div>

		<div class="login">
			<form action="login.php" method="POST">
				<label for="chk" aria-hidden="true">Login</label>
               
				<input type="email" name="email" placeholder="Email" required="">
				<input type="password" name="password" placeholder="Password" required="" minlength="5">
				<button  class="lg-button" type="submit">Login</button>
			</form>
		</div>
	</div>
    
    
</body>
</html>
