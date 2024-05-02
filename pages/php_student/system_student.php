<?php require_once ("../db_con.php")?>
<?php include ("header_student.php")?>
  
        <div class="containers">
        <div class="box1">

        <?php 
           $sql = "SELECT * FROM add_student";
           $query = mysqli_query($conn, $sql);
           $result = mysqli_fetch_assoc($query);
           ?>
           
           
        <img src="../images/123.png" class="img_background" alt="background img">
        <h1>جامعة  </h1>
        <h3>  يرحب بك طالب / طالبة   : <?php echo $result ['name1'];?> <?php echo $result ['name2'];?> <?php echo $result ['name3'];?> <?php echo $result ['name4'];?></h3>
        <h4>   رقم القيد  : <?php echo $result ['id_student']; ?></h4>
       </div>
</div>
    </div>

       <?php include ("footer_student.php"); ?>
</body>
</html>
