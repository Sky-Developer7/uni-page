
<?php include ("../../db_con.php");
      include ("../headerr_admin.php"); 

if(isset($_POST['update'])){
    
    $id = $_POST['id'];
    $pass = $_POST['pass'];


   $sql = "UPDATE login_test SET id='$id', 
   pass='$pass'
   WHERE id = $id";
  
  $result = $conn->query($sql); 
  if ($result == TRUE) {
      header("Location: login_student.php");

  }else{

      echo "Error:" . $sql . "<br>" . $conn->error;

  }

}

if (isset($_GET['id'])) {

  $id = $_GET['id']; 

  $sql = "SELECT * FROM `login_test` WHERE `id`='$id'";
 
  $result = $conn->query($sql); 

  if ($result->num_rows > 0) {        

      while ($row = $result->fetch_assoc()) {

        $pass = $row['pass'];
        $id = $row['id'];
      } 
    
?>

     

     <div class="containers">
        <div class="box3">

        <form method="post">

        <h5>تعديل بيانات تسجيل دخول الطالب</h5>

        <div class="row_04">
        <div><input type="text" name="pass" id="pass" value="<?php echo $pass;?>"><label for="password">كلمة المرور</label></div>
        <div><input type="number" name="id" id="id" value="<?php echo $id;?>"><label for="id">رقم القيد </label></div>
        </div>

         <div class="list_btn3"><button class="btn_delete3"><a href="login_student.php">رجوع</a></button> 
            <button class="btn_edit3" type="submit" name="update"><a>تعديل</a></button></div>
    
        </form>
    </div>
</div>
    </div>

    <?php include ("../footer_admin.php"); ?>
</body>
</html>

<?php

} else{ 

    header('Location: login_student.php');

} 

}

?> 
