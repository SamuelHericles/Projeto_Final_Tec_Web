<?php
    session_start();
    session_unset();
    session_destroy(True);
    //echo "<script> console.log('$_SESSION')</script>";
    header("location:./Login.php"); 
    //exit;
    
?>