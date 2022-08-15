<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css" href="admin.css">

</head>
<body>
   
<div class="login-form">

   <form action="editable.php" method="POST">
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <!-- <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password"> -->
      <p>Email Id</p>
      <input type="email" id="email" name="email" placeholder="Enter email">
      <p>Password</p>
      <input type="password" id="password" name="password" placeholder="Password">
      <button type="submit">Login</button>
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>