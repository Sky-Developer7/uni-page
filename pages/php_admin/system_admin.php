<?php 
    include "../db_con.php";
    include ("header_admin.php"); 
    ?>
    
    

    
     <div class="containers">
        <div class="box1">
        <?php 
           $sql = "SELECT * FROM login_admin";
           $query = mysqli_query($conn, $sql);
           $result = mysqli_fetch_assoc($query);
           ?>
           
        <img src="../images/123.png" class="img_background" alt="img background">
        <h1>جامعة  </h1>
        <h3><?php echo $result ['username']; ?> :مرحبا </h3>
        <h4><?php echo $result ['id']; ?> :الرقم الوظيفي  </h4>
    </div>
</div>
    </div>

       <?php include ("footer_admin.php"); ?>
</body>
</html>





