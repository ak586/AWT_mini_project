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
   
   <nav>
    <ul >
        <div class="first" > <li>logo</li>
       </div>
       <div class="second">
        <li><a href="">About</a> </li>
        <li>Recipes</li>
        <li>Pricing</li>
        <li class="wrap"> <button class="button">Login</button></li>
    </div>
       
        
    </ul>
   </nav>

   <!-- login form  -->
   <div class="center_box">
   <div class=" main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<form action="register.php" method="POST">
				<label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="name" placeholder="Name" required>
				<input type="email" name="email" placeholder="Email" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<button type="submit">Sign up</button>
			</form>
		</div>

		<div class="login">
			<form action="login.php" method="POST">
				<label for="chk" aria-hidden="true">Login</label>
               
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="password" placeholder="Password" required minlength="5">
				<button type="submit">Login</button>
			</form>
		</div>
	</div>
    </div>

    
</body>
</html>