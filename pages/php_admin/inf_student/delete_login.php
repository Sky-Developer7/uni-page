<?php 
   include ("../../db_con.php");

if (isset($_GET['id'])) {

$id = $_GET['id'];

$sql = "DELETE FROM `login_test` WHERE `id`='$id'";

 $result = $conn->query($sql);

 if ($result == TRUE) {

    header ("Location: login_student.php");

}else{

    echo "Error:" . $sql . "<br>" . $conn->error;

}

} 

?>