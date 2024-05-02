<?php 
     include ("../headerr_admin.php"); 
     include ("../../db_con.php");
     $sql = "SELECT * FROM login_test";
     $result = $conn->query($sql);
?>

 
       <div class="containers1">
            <h5 class="h_login_student">قائمة تسجيل دخول الطــلاب</h5>  
        <table class="table_list" border="1">
            <thead>
                <tr> 
        
                    <th>إجراء</th>

                    <th>كلمة المرور</th>
                    <th>الرقم قيد</th>                 
                    
                </tr>
            </thead>

            <tbody>

  <?php
     if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
 ?>

        
        <tr>     
        <td>  <div class="list_btn1"><button class="btn_delete1"> <a href="delete_login.php?id=<?php echo $row['id']; ?>">حذف</a></button> 
             <button class="btn_edit1"> <a href="edit_login.php?id=<?php echo $row['id']; ?>">تعديل</a></button></div></td>
   
        <td> <?php echo $row['pass'];  ?> </td>
        <td> <?php echo $row['id'];  ?> </td>

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