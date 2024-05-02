<?php
include "../../db_con.php"; 
  
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $name3 = $_POST['name3'];
    $name4 = $_POST['name4'];

    $c_n = $_POST['c_n'];
    $birth = $_POST['birth'];
    $phone = $_POST['phone'];
    $id_student = $_POST['id_student'];
    $specialization = $_POST['specialization'];
    $semester = $_POST['semester'];
    $s_year = $_POST['s_year'];    
    
    $id = $_POST['id'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO add_student (name1, name2, name3, name4, c_n, birth,
    phone, id_student, specialization, semester, s_year) VALUES ('$name1', '$name2',
    '$name3', '$name4', '$c_n', '$birth', '$phone', '$id_student',
    '$specialization', '$semester', '$s_year')";
    
    $sql1 = "INSERT INTO login_test (id, pass) VALUES ('$id', '$pass') ";

    $conn->query($sql);
    $conn->query($sql1);
    $conn->close();
    
	header("Location: list_student.php");
  
?>