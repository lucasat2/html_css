<?php
   $user=$_POST['username'];
   $pass=$_POST['password'];

   echo "$user $pass";


   if (($user =="admin")&($pass=="123")){

       echo "BEM VINDO!";
    }
    else echo "Usuario ou senha incorretos!";
  
?>