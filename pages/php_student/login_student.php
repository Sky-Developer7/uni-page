<?php  
include "../db_con.php";
session_start();

if (isset($_POST['id']) && isset($_POST['pass'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$id = test_input($_POST['id']);
	$pass = test_input($_POST['pass']); 

	if (empty($id)) {
		
		header("Location: ../index.html?error=User Name is Required");
		
	}else if (empty($pass)) {
		 
        header("Location: ../index.html?error=Password is Required");

	}else {
        
        $sql = "SELECT * FROM login_test WHERE id='$id' AND pass='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['pass'] === $pass && $row['id'] == $id) {

        		header("Location: system_student.php");

        	}else {
        		header("Location: msg.php");
        	}
        }else {
        	header("Location: msg.php");
        }

	}
	
}else {
	header("Location: msg.php");
}
