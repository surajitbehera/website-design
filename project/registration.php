<?php

include 'connection.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select =  (" insert into registration(email,password)values('$email','$pass')");


   $result = mysqli_query($conn, $select);
    
    header('location: admin.php');
}
?>