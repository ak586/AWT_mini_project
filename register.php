
<?php 
include 'config.php';
if(isset($_POST)){
    $name=$_POST['name'];
    $email = $_POST['email'];
    $pass=$_POST['password'];
    $sql = "select *from users where email = '$email'";  
    $result= mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 
     

    $sqlquery = "INSERT INTO Users VALUES
    ('$email','$name','$pass')";

    
     if($count==0){
      $result = mysqli_query($conn,$sqlquery);
      echo" <h1>Sucessfull</h1>";
     }
     else{
      echo"<h1>already exists</h1>";
     }

    
}

?>
