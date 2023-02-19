<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD']=="POST"){

    $u=$_POST['username'];
    $p=$_POST['email'];
    $pass=$_POST['password'];
    $sql="INSERT INTO `person`( `username`, `email`, `password`) VALUES ('$u','$p','$pass')";
    mysqli_query($conn,$sql);

}



?>
 
    
    

    <form action="" method="POST">
    <input type="text" name="username" placeholder="username">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="submit"name="submit">
    
    </form>

