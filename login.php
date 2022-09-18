<?php 
include'config.php';



if(isset($_POST)){
    $email = $_POST['email'];
    $pass=$_POST['password'];
    $sql = "select *from Users where email = '$email' and password = '$pass'";  
    $result= mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    echo 'Hello world';
    echo $email;
    echo $pass;

    if($count == 1){  
        echo "<h1><center> Login successful </center></h1>";     
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }     
}

?>