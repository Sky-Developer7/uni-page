<?php 
   include ("../../db_con.php");

if (isset($_GET['id_student'])) {

$id = $_GET['id_student'];

$sql = "DELETE FROM `add_student` WHERE `id_student`='$id'";

 $result = $conn->query($sql);

 if ($result == TRUE) {

    header ("Location: list_student.php");

}else{

    echo "Error:" . $sql . "<br>" . $conn->error;

}

} 

?>
