<?php include ("header_student.php"); ?>
<?php require_once ("../db_con.php"); ?>


<div class="containers">

  <div class="box2"  id="print">
  
  <?php 
           $sql = "SELECT * FROM add_student";
           $query = mysqli_query($conn, $sql);
           $result = mysqli_fetch_assoc($query);
  ?>
  <form method="post">
    
  <div class="row_01">
    <div><input type="date"></div> 
    <h5 class="h_id_student">بطاقة الطالب</h5>  
  </div>

  

 <div class="row_1">
  <div><input type="text" name="name4" id="name4" value="<?php echo $result ['name4']; ?>"><label for="name4">اللقب</label></div>
  <div><input type="text" name="name3" id="name3" value=" <?php echo $result ['name3']; ?>"><label for="name3">إسم الجد</label></div>
  <div><input type="text" name="name2" id="name2" value=" <?php echo $result ['name2']; ?>"><label for="name2">إسم الأب</label></div>
  <div><input type="text" name="name1" id="name1" value="<?php echo $result ['name1']; ?>"><label for="name1">إسم</label></div>
  </div>
  
  <div class="row_2">
  <div><input type="number" name="phone" id="phone" value="<?php echo $result ['phone']; ?>"><label for="phone">الرقم الهاتف</label></div>
  <div><input type="varchar" name="birth" id="birth" value="<?php echo $result ['birth']; ?>"><label for="birth">المواليد</label></div>
  <div><input type="number" name="c_n" id="c_n" value="<?php echo $result ['c_n']; ?>"><label for="c_n">الرقم الأكاديمي</label></div>
  </div>

  <div class="row_3">
  <div><input type="text" name="specialization" class="specializ" value="<?php echo $result ['specialization']; ?>"><label for="specialization">تخصص</label></div>
  <div><input type="text" name="semester" class="sem" value="<?php echo $result ['semester']; ?>"><label for="semester">الفصل الدراسي</label></div>
  <div><input type="text" name="s_year" class="year" value="<?php echo $result ['s_year']; ?>"><label for="s_year">سنة</label></div>
  </div>

  <div class="row_04">
    <div><h6>المسجل العام</h6></div>
  </div>

  <div class="row_5">
    <div>....................</div>
  </div>
  </div>

  </form>
  <button onClick="window.print()" class="printer"><i class="fa-solid fa-print" style="padding-right: 6px;"></i>طباعة</button>
</div>
</div>
</div>
    
    <?php include ("footer_student.php"); ?>
   
</body>
</html>

    
        
