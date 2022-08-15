
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="editable.css">
    <title>Student database</title>
</head>
<body style="margin: 50px;background-image: url('images.jpg'); background-size:cover; ">
        <div class="box">
            <h1>LIST OF STUDENTS</h1>
            <br>
            <?php

            session_start();
            include 'connection.php';
            // $email =  $_SESSION['email'];
            // WHERE email='$email' 
            $squli_student = "select * from student_database ";
            $result = mysqli_query($conn,$squli_student);
            ?>
            <table class="table">
                    <thead>
                        <th>First_name </th>
                        <th>Last_name </th>
                        <th>Fathers_name </th>
                        <th>Mothers_name </th>
                        <th>Gender </th>
                        <th>Date_of_birth </th>
                        <th>Category </th>
                        <th>Religion </th>
                        <th>Email </th>
                        <th>Phone_no </th>
                        <th>Present_address </th>
                        <th>Action1</th>
                        <th>Action2</th>
                    </thead>
                <tbody>
                    <?php
                        while($fetched_data=mysqli_fetch_row($result)){
                            // echo '<tr>';
                            // echo '<td>'.$fetched_data[1].'</td>';
                            echo '<td>'.$fetched_data[2].'</td>';
                            echo '<td>'.$fetched_data[3].'</td>';
                            echo '<td>'.$fetched_data[4].'</td>';
                            echo '<td>'.$fetched_data[5].'</td>';
                            echo '<td>'.$fetched_data[6].'</td>';
                            echo '<td>'.$fetched_data[7].'</td>';
                            echo '<td>'.$fetched_data[8].'</td>';
                            echo '<td>'.$fetched_data[9].'</td>';
                            echo '<td>'.$fetched_data[10].'</td>';
                            echo '<td>'.$fetched_data[11].'</td>';
                            echo '<td>'.$fetched_data[12].'</td>';
                            
                            echo '<td><a href=form1.php?id='.$fetched_data[0].' &action=edit>EDIT</a></td>';
                            echo '<td><a href=delete.php?id='.$fetched_data[0].' &action=delete>DELETE</a></td>';
                            echo '<tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
</body>
</html>


