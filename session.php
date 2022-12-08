<?php

 session_start();
  $_SESSION["kulanıcı_adi"]="ayberk";
  $_SESSION["parola"]=123456;
    
  //unset($_SESSION["parola"]);
    
  var_dump($_SESSION);
  
  //echo $_SESSION["kulanıcı_adi"];
  //session_destroy();
?>