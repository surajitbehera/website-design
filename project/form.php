<!-- <!DOCTYPE html>
<html lang="en"> -->
<?php 
    include 'connection.php';
    // echo '<pre>';print_r($_REQUEST);
    $firstname = $_POST['f_name'];
    $lastname = $_POST['l_name'];
    $fathername=$_POST['father_name'];
    $mothername=$_POST['mother_name'];
    $birthday = date("Y-m-d", strtotime($_POST['birthday'])) ;
    $gender = $_POST['gender'];
    $category = $_POST['caste'];
    $religion = $_POST['religion'];
    $email = $_POST['email'];
    // $pass = $_POST['password'];
    $number = $_POST['phone'];
    $address = $_POST['address'];
   //echo '<pre>';
   //print_r($_FILES); exit;
   // $photo_ar=$_FILES['photo'];
    //$photonm=$photo_ar['name'];
    $time=time();
    $target_dir="uploads/";
    $photo=basename($_FILES["photo"]["name"]);
    $target_file=$target_dir . basename($_FILES["photo"]["name"]);
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo '';
    }else{
        echo !Error;
    }

        $stmt = mysqli_query($conn,"insert into student_database(Student_photo,First_name,Last_name,Fathers_name,Mothers_name,Gender,Date_of_birth,Category,Religion,Email,Phone_no,Present_address) values('$photo','$firstname','$lastname','$fathername','$mothername','$gender','$birthday','$category','$religion','$email','$number','$address')");
    
    // echo "registration successfully...";
    // exit;

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="submit.css">
    <title>Display After submit</title>
</head>
<body>
    <div class="container">
        <!-- <button type="submit" class="btn" onclick="openpopup()"></button> -->
        <div class="popup" id="popup">
            <img src="tick.png">
            <h2>Thank You!</h2>
            <p>Your details has been successfully submited. Thanks!</p>
            <a href="form1.php"><button type="button" onclick="closepopup()">Another Response</button></a>
            <a href="home.php"><button type="button" onclick="closepopup()">home</button></a>
        </div>
    </div>
    <!-- <script>
        let popup = document.getElementById("popup");
        function openpopup(){
            popup.classList.add("open-popup");
        }
        function closepopup(){
            popup.classList.remove("open-popup")
        }
    </script> -->
</body>
</html>