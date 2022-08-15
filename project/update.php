<?php
    include 'connection.php';
    echo '<pre>';print_r($_FILES);
    print_r($_REQUEST);
    
    /*foreach($_REQUEST as $key=>$value)
    {
        $$key=$value;
    }*/
    $fname=$_REQUEST['f_name'];
    $lname=$_REQUEST['l_name'];
    $fathername=$_REQUEST['father_name'];
    $mothername=$_REQUEST['mother_name'];
    $gender=$_REQUEST['gender'];
    $dob=$_REQUEST['birthday'];
    $category =$_REQUEST['caste'];
    $religion =$_REQUEST['religion'];
    $email=$_REQUEST['email'];
    // $password=$_REQUEST['password'];
    $phone=$_REQUEST['phone'];
    $paddress=$_REQUEST['address'];
    $studentid = $_REQUEST['student_id'];
    
    $sqlqr="update student_database set First_name='$fname',Last_name='$lname',Fathers_name='$fathername',Mothers_name='$mothername',Gender='$gender',Date_of_birth='$dob',Category='$category',Religion='$religion',Email='$email',Phone_no='$phone',Present_address='$paddress' where studentid='$studentid'";
    $result1=mysqli_query($conn,$sqlqr);
    
    // mysqli_query($conn,"DELETE FROM facilities WHERE studentid=$studentid");
    // foreach($facilities as $facilityid) {
    //     $sql_in = "insert into facilities(facilityid,studentid) values($facilityid,$studentid)";
    //     $result_f = mysqli_query($conn,$sql_in);
    // } 
    header('Location: editable.php');
?>