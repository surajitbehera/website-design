<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="register.css">
   <title>registation of admiin</title>
</head>
<body>
   <div class="registration-form">
      <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            };
         };
      ?>
      <h1>Registration Form</h1>
      <form action="admin.php" method="POST">
         <p>Full Name</p>
         <input type="text" name="username" placeholder=" Enter Full Fullname">
         <p>Email</p>
         <input type="email" name="email" placeholder="Enter Your Email">
         <p>Password</p>
         <input type="password" name="password" placeholder=" Enter Your Password">
         <p>Conform Password</p>
         <input type="password" name="cpassword" placeholder="Conform Your Password">
         <button type="submit">Register Now</button>
         <p>already have an account? <a href="admin.php">login now</a></p>
      </form>
   </div>
</body>
</html>




<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title> -->

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" type="css" href="register_form.css">  
          
</head>
<body> -->
   
<!-- <div class="form-container">
    <p ></p>
   <form action="registration.php" method="POST">
      <h3>register now</h3> -->
      <!-- <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?> -->
      <!-- <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="admin.php">login now</a></p>
   </form>

</div>

</body>
</html>  -->