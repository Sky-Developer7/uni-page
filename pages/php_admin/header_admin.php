<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="admin dashboard">
    <title>System</title>
    <link rel="stylesheet" href="../css/style_system.css">
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@200;300;400&family=Noto+Kufi+Arabic:wght@200;300;400&family=Scheherazade+New:wght@500;600&display=swap" rel="stylesheet">
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <header class="header">
        <div id="logo"><img src="../images/logo.png" alt="logo"></div>
        <div id="title"><h1>جامعة  </h1></div>
     </header>


    <div class="system">

        <div class="items">

        <div><a href="system_admin.php">الصفحة الرئيسية</a></div>

        <div><a class="sub_btn" href="#"><i class="fa-solid fa-angle-left dropdown"></i>  طالب  </a>
        <div class="dropdown_menu">
            <a href="inf_student/student.php" class="sub-item">إضافة</a><br>
            <a href="inf_student/search_student.php" class="sub-item">بحث</a><br>
            <a href="inf_student/list_student.php" class="sub-item">قائمة طالبه</a><br>
            <a href="inf_student/login_student.php" class="sub-item">تسجيل الدخول</a><br>
        </div>
        </div>

        <div><a href="inf_table/table.php">  الجدول  </a></div>

        <div><a class="sub_btn" href="#"><i class="fa-solid fa-angle-left dropdown" style="color: white;"></i>  نتائج  </a>
        <div class="dropdown_menu">
            <a href="inf_reslult/result.php">إضافة</a><br>
            <a href="inf_reslult/search.php">بحث</a><br>
            <a href="inf_result/all_results.php"> جميع نتائج</a><br>
            </div>
            </div>
 
        <div><a href="courses/courses.php">  مقررات  </a></div>

        <div><a href="e_books/e_books.php">  مناهج  </a></div>

        <div><a href="logout.php">تسجيل الخروج<i class="fa-solid fa-right-from-bracket" style="color: white; padding-left:8px;"></i></a></div>
        </div> 

      <!--Jquery-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('.dropdown_menu').click(function(){
    	$("div").css("display", "block");
    });
});
</script>
      
      <script>
    //jquery for toggle sub menus
     $('.sub_btn').click(function(){
      $(this).next('.dropdown_menu').slideToggle();
      $(this).find('.dropdown').toggleClass('rotate');
    });
      </script>
     

</body>
</html>

