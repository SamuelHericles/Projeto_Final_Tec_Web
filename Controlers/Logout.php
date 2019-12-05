<?php
    session_start();
    session_destroy(True);
    header("location:../Views/Login.php"); 
?>