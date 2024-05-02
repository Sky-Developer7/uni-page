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