<?php 
     include ("../headerr_admin.php"); 
     include ("../../db_con.php");
     $sql = "SELECT * FROM add_student";
     $result = $conn->query($sql);
?>

        
       <div class="containers1">
            <h5 class="h_login_student">قائمة طالبة</h5>  
        <table class="table_list" border="1">
            <thead>
                <tr> 
        
                    <th>إجراء</th>

                    <th>السنة الدراسية</th>
                    <th>الفصل الدراسي</th>  
                    <th>تخصص</th>
                    <th>الرقم قيد</th>

                    <th>الرقم هاتف</th>
                    <th>تاريخ الميلاد</th>
                    <th>الرقم الأكاديمي</th>

                    <th>اللقب</th>
                    <th>أسم الجد</th>
                    <th>إسم الأب</th>
                    <th>إسم</th>                    
                    
                </tr>
            </thead>

            <tbody>

  <?php
     if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
 ?>

        
        <tr>     
        <td>  <div class="list_btn"><button class="btn_delete"> <a href="delete_student.php?id_student=<?php echo $row['id_student']; ?>">حذف</a></button> 
             <button class="btn_edit"> <a href="edit_student.php?id_student=<?php echo $row['id_student']; ?>">تعديل</a></button></div></td>
        <td> <?php echo $row['s_year'];  ?> </td>
        <td> <?php echo $row['semester'];  ?> </td>
        <td> <?php echo $row['specialization'];  ?> </td>
        <td> <?php echo $row['id_student'];  ?> </td>

        <td> <?php echo $row['phone'];  ?> </td>
        <td> <?php echo $row['birth'];  ?> </td>
        <td> <?php echo $row['c_n'];  ?> </td>

        <td> <?php echo $row['name4'];  ?> </td>
        <td> <?php echo $row['name3'];  ?> </td>
        <td> <?php echo $row['name2'];  ?> </td>
        <td> <?php echo $row['name1'];  ?> </td>
        



    </tr>
    <?php 
        }
 }
  ?>
            </tbody>
        </table>
   </div></div>

   
   <?php include ("../footer_admin.php"); ?>
   <!--Jquery-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>





