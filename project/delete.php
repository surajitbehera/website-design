<?php

include 'connection.php';

$student_id = $_GET['id'];

 $deletequery = "delete from student_database where studentid=$student_id"; 

$query = mysqli_query($conn, $deletequery);
if($query){
	?>
	<script>
		alert('deleted successfull');
	</script>

	<?php
	
}else{
	?>
	<script>
		alert('Not deleted ');
	</script>

	<?php
}


header('location:editable.php');
?>