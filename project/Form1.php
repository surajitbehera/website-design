<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        include 'connection.php';

        $student_id='';
        if(isset($_GET['id'])){
            $student_id = $_GET['id'];
            $student_fetch_query = "select * from student_database where studentid=$student_id";

            $result_student = mysqli_query($conn,$student_fetch_query);
            $student_array = mysqli_fetch_array($result_student);
        }
    ?>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="Form1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> 
        <script type="text/javascript" src="Form.js"></script>
    </head>
    <body>
        <form action="<?php 
            if(is_numeric($student_id))
                echo "update.php";
            else
                echo "form.php";
            ?>" method="post"  enctype="multipart/form-data">

            <?php
                if(is_numeric($student_id)){
                    echo '<input type=hidden name=student_id value='.$student_id.'>';
                   echo '<input type=hidden name=action value='.$_GET['action'].'>';
                }
            ?>
            <h1>Student Resistation form</h1>
            <div class="set">
                <div class="box">
                    
                    <div class="mb-3">
                        <h6>Student Photo</h6>
                        <input class="form-control" name="photo" type="file" id="formFileMultiple" multiple required>
                    </div>
                    <h6>First name</h6>
                    <input class="form-control" name="f_name" type="text" placeholder="First name" aria-label="default input example" required value="<?php if(is_numeric($student_id)) echo $student_array['First_name'];?>"/>
                    <h6>Last name</h6>
                    <input class="form-control" name="l_name" type="text" placeholder="Last name" aria-label="default input example" required value="<?php if(is_numeric($student_id)) echo $student_array['Last_name'];?>">
                    <h6>Fathers name</h6>
                    <input class="form-control" name="father_name" type="text" placeholder="Fathers name" aria-label="default input example" required value="<?php if(is_numeric($student_id)) echo $student_array['Fathers_name'];?>">
                    <h6>Mothers name</h6>
                    <input class="form-control" name="mother_name" type="text" placeholder="Mothers name" aria-label="default input example" required value="<?php if(is_numeric($student_id)) echo $student_array['Mothers_name'];?>">
                    <div aria-required="true" required>  
                        <h6>Gender</h6>
                        <div class="form-check form-check-inline" >
                            <input class="form-check-input" type="radio"  name="gender" id="male" <?php if(is_numeric($student_id) and $student_array['Gender']=='male') echo 'checked'; else echo ''; ?> value="male" >
                            <label class="form-check-label" for="inlineRadio">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" <?php if(is_numeric($student_id) and $student_array['Gender']=='female') echo 'checked'; else echo ''; ?> value="fmale" >
                            <label class="form-check-label" for="inlineRadio">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="otherGender" <?php if(is_numeric($student_id) and $student_array['Gender']=='other') echo 'checked'; else echo ''; ?> value="other" />
                            <label class="form-check-label" for="otherGender">Other</label>
                        </div>
                    </div required> 
                    <h6>date of birth</h6>
                    <input class="form-control" type="date" id="birthday" name="birthday" placeholder="dd/mm/yyyy" aria-label="default input example" required value="<?php if(is_string($student_id)) echo $student_array['Date_of_birth'];?>">
                        <div class="col-md-6 mb-4" required>
                            <h6>category</h6>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="sccaste" name="caste" <?php if(is_numeric($student_id) and $student_array['Category']=='sc') echo 'checked'; else echo ''; ?> value="sc" >
                                <label class="form-check-label" for="inlineRadio">SC</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="stcaste" name="caste" <?php if(is_numeric($student_id) and $student_array['Category']=='st') echo 'checked'; else echo ''; ?> value="st" >
                                <label class="form-check-label" for="inlineRadio">ST</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="obcaste" name="caste" <?php if(is_numeric($student_id) and $student_array['Category']=='obc') echo 'checked'; else echo ''; ?> value="obc">
                                <label class="form-check-label" for="inlineRadio">OBC</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="gecaste" name="caste" <?php if(is_numeric($student_id) and $student_array['Category']=='general') echo 'checked'; else echo ''; ?> value="general" >
                                <label class="form-check-label" for="inlineRadio">GENERAL</label>
                            </div>
                        </div>
                    <h6>Religion</h6>
                    <input class="form-control" type="text" name="religion" placeholder="Religion" aria-label="default input example" required value="<?php if(is_numeric($student_id)) echo $student_array['Religion'];?>">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required value="<?php if(is_numeric($student_id)) echo $student_array['Email'];?>">
                    </div>
                    <!-- <h6>Password</h6>
                    <input class="form-control" name="password" type="text" placeholder="password" editable="false" aria-label="default input example" required value=" -->
                    <h6>Phone Number</h6>
                    <input class="form-control" name="phone" type="text" placeholder="Phone no." aria-label="default input example" required value="<?php if(is_numeric($student_id)) echo $student_array['Phone_no'];?>">
                    <h6>Present Address</h6>
                    <input class="form-control" name="address" type="text" placeholder="Address" aria-label="default input example" required value="<?php if(is_numeric($student_id)) echo $student_array['Present_address'];?>">
                    <div class="submit">
                        <button type="submit"  name="submit" value="submit" class="btn btn-danger">Submit</button>
                    </div>

                </div>
            </div>
            
        </form>
        
    </body>
</html>

