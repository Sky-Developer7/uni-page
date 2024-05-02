<?php 
    include "../../db_con.php";
    include ("../headerr_admin.php"); 
    ?>

        <div class="containers">
        <div class="box">

        <form action="add_student.php" method="post">

        <h5>تسجيل بيانات الطالب</h5>    
        
       <div class="row_1">
        <div><input type="text" name="name4" id="name4"><label for="name4">اللقب</label></div>
        <div><input type="text" name="name3" id="name3"><label for="name3">إسم الجد</label></div>
        <div><input type="text" name="name2" id="name2"><label for="name2">إسم الأب</label></div>
        <div><input type="text" name="name1" id="name1"><label for="name1">إسم</label></div>
        </div>
        
        <div class="row_2">
        <div><input type="number" name="phone" id="phone"><label for="phone">الرقم الهاتف</label></div>
        <div><input type="varchar" name="birth" id="birth"><label for="birth">المواليد</label></div>
        <div><input type="number" name="c_n" id="c_n"><label for="c_n">الرقم الأكاديمي</label></div>
        </div>
      
        <div class="row_3">
        <div><input type="number" name="id_student" id="id_student"><label for="id_student">رقم القيد</label></div>
        <div><input type="text" name="specialization" id="specialization"><label for="specialization">تخصص</label></div>
        <div><input type="text" name="semester" id="semester"><label for="semester">الفصل الدراسي</label></div>
        <div><input type="text" name="s_year" id="s_year"><label for="s_year">سنة</label></div>
        </div>

        <hr class="hr">
        <h5 style="font-size: 20px;">بيانات تسجيل دخول الطالب</h5>

        <div class="row_4">
        <div><input type="varchar" name="pass" id="pass"><label for="password">كلمة المرور</label></div>
        <div><input type="number" name="id" id="id"><label for="id">رقم القيد </label></div>
        </div>

        <div class="list_btn4"><button class="btn_delete4" type="reset"><a>إلغاء</a></button> 
            <button class="btn"><a type="submit" name="done">تسجيل</a></button></div>
    
        </form>
    </div>
</div>
    </div>

 </footer>
      <!--Jquery-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="../../js/jquery.js"></script>
 
    
    <?php include ("../footer_admin.php"); ?>
   
</body>
</html>

