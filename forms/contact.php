<?php
 include "conn.php";  // tawgon ang connection file sang database
 session_start();

 if(isset($_POST['reg_button'])){ /// para ini sa form action niya

  $name=$_POST['nm']; /// column name kag variable name sang input type
  $email=$_POST['email'];
  $sub=$_POST['sub'];
  $mess=$_POST['mess']
 

   $insertusers=mysqli_query($conn, "INSERT INTO users VALUES('0','$name','$email','$sub','$mess')"); /// mag insert ka data sa table

   if($insertusers==true){
       ?>
       <script>
           alert("Account Accepted! Welcome Users!");
           window.location.href="login.php";// js para sa tup an kung mag login ka
           </script>
           <?php

   }else{
       ?>
       <script>
           alert("Error Registration/nTry Again!");
           window.location.href="reg.php";// js para sa tup an kung may error sa login 
           </script>
           <?php
   }
 
} 
?>