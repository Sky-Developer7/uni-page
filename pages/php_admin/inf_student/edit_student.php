
<?php include ("../../db_con.php");
      include ("../headerr_admin.php"); 

if(isset($_POST['update'])){
    
    $id = $_POST['id_student'];
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $name3 = $_POST['name3'];
    $name4 = $_POST['name4'];

    $c_n = $_POST['c_n'];
    $birth = $_POST['birth'];
    $phone = $_POST['phone'];

    $specialization = $_POST['specialization'];
    $semester = $_POST['semester'];
    $s_year = $_POST['s_year']; 


   $sql = "UPDATE add_student SET name1='$name1', 
   name2='$name2',
   name3='$name3', 
   name4='$name4',

   c_n='$c_n', 
   birth='$birth',
   phone='$phone', 

   specialization='$specialization',
   semester='$semester',
   s_year='$s_year' WHERE id_student = $id";
  
  $result = $conn->query($sql); 

  if ($result == TRUE) {

      header("Location: list_student.php");

  }else{

      echo "Error:" . $sql . "<br>" . $conn->error;

  }

}

if (isset($_GET['id_student'])) {

  $id = $_GET['id_student']; 

  $sql = "SELECT * FROM `add_student` WHERE `id_student`='$id'";
 
  $result = $conn->query($sql); 

  if ($result->num_rows > 0) {        

      while ($row = $result->fetch_assoc()) {

        $name1 = $row['name1'];
        $name2 = $row['name2'];
        $name3 = $row['name3'];
        $name4 = $row['name4'];
    
        $c_n = $row['c_n'];
        $birth = $row['birth'];
        $phone = $row['phone'];
    
        $specialization = $row['specialization'];
        $semester = $row['semester'];
        $s_year = $row['s_year']; 

        $id_student = $row['id_student'];
      } 
    
?>
   
     <div class="containers">
        <div class="box4">

        <form method="post">

        <h5>تعديل بيانات الطالب</h5>    
        
       <div class="row_1">
        <div><input type="text" name="name4" id="name4" value="<?php echo $name4;?>"><label for="name4">اللقب</label></div>
        <div><input type="text" name="name3" id="name3" value="<?php echo $name3;?>"><label for="name3">إسم الجد</label></div>
        <div><input type="text" name="name2" id="name2" value="<?php echo $name2;?>"><label for="name2">إسم الأب</label></div>
        <div><input type="text" name="name1" id="name1" value="<?php echo $name1;?>"><label for="name1">إسم</label></div>
        </div>
        
        <div class="row_2">
        <div><input type="number" name="phone" id="phone" value="<?php echo $phone;?>"><label for="phone">الرقم الهاتف</label></div>
        <div><input type="varchar" name="birth" id="birth" value="<?php echo $birth;?>"><label for="birth">المواليد</label></div>
        <div><input type="number" name="c_n" id="c_n" value="<?php echo $c_n;?>"><label for="c_n">الرقم الأكاديمي</label></div>
        </div>
      
        <div class="row_3">
        <div><input type="number" name="id_student" id="id_student" value="<?php echo $id_student;?>"><label for="id_student">رقم القيد</label></div>
        <div><input type="text" name="specialization" id="specialization" value="<?php echo $specialization;?>"><label for="specialization">تخصص</label></div>
        <div><input type="text" name="semester" id="semester" value="<?php echo $semester;?>"><label for="semester">الفصل الدراسي</label></div>
        <div><input type="text" name="s_year" id="s_year" value="<?php echo $s_year;?>"><label for="s_year">سنة</label></div>
        </div>

        <div class="list_btn4"><button class="btn_delete4"><a href="list_student.php">رجوع</a></button> 
        <button class="btn_edit4" type="submit" name="update"><a>تعديل</a></button></div>
    
        </form>
    </div>
</div>
    </div>

    <?php include ("../footer_admin.php"); ?>
</body>
</html>

<?php

} else{ 

    header('Location: list_student.php');

} 

}

?> 

