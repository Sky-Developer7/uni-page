<?php  
session_start();
include "../db_con.php";

if (isset($_POST['id']) && isset($_POST['password'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$id = test_input($_POST['id']);
	$password = test_input($_POST['password']);

	if (empty($id)) {
		header("Location: ../index.html?error=User Name is Required");
	}else if (empty($password)) {
		header("Location: ../index.html?error=Password is Required");
	}else {

        
        $sql = "SELECT * FROM login_admin WHERE id='$id' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	   if ($row['password'] === $password && $row['id'] == $id) {
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['username'] = $row['username'];

        		header("Location: system_admin.php");

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