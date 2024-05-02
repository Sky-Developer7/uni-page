<?php include ("../headerr_admin.php"); ?>
<?php include ("../../db_con.php"); ?>

<?php

// php code to search data in mysql database and set it in input text

if(isset($_POST['search']))
{
    // id to search
    $id_student = $_POST['id_student'];
    
    
    // mysql search query
    $query = "SELECT name1, name2, name3, name4, phone, birth, c_n, specialization, semester, s_year FROM `add_student` WHERE `id_student` = $id_student";
    
    $result = mysqli_query($conn, $query);
    
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
        $name1 = $row['name1'];
        $name2 = $row['name2'];
        $name3 = $row['name3'];
        $name4 = $row['name4'];

        $phone = $row['phone'];
        $birth = $row['birth'];
        $c_n = $row['c_n'];

        $specialization = $row['specialization'];
        $semester = $row['semester'];
        $s_year = $row['s_year'];

      }  
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
            $name1 = "";
            $name2 = "";
            $name3 = "";
            $name4 = "";

           $phone = "";
           $birth = "";
           $c_n = "";

           $specialization = "";
           $semester = "";
           $s_year = "";
    }
    
    
    mysqli_free_result($result);
    mysqli_close($conn);
    
}

// in the first time inputs are empty
else{
    $name1 = "";
    $name2 = "";
    $name3 = "";
    $name4 = "";

           $phone = "";
           $birth = "";
           $c_n = "";

           $specialization = "";
           $semester = "";
           $s_year = "";
}


?>

<div class="containers">

  <div class="box4">
  
  <form method="post">
   <h5>بحث عن بيانات الطالب</h5> 

  <div class="row_0">
    <button type="submit" name="search" id="btn_search">بحث</button>
    <div><input type="number" name="id_student" id="search"><label for="id_student">رقم القيد</label></div>
  </div>
  
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

  <div class="row_3" style="margin-left: 120px;">
  <div><input type="text" name="specialization" id="specialization" value="<?php echo $specialization;?>"><label for="specialization">تخصص</label></div>
  <div><input type="text" name="semester" id="semester" value="<?php echo $semester;?>"><label for="semester">الفصل الدراسي</label></div>
  <div><input type="text" name="s_year" id="s_year" value="<?php echo $s_year;?>"><label for="s_year">سنة</label></div>
  </div>

  </form>
</div>
</div>
</div>

           </form>
           <?php include ("../footer_admin.php"); ?>

        </body>
        </html>