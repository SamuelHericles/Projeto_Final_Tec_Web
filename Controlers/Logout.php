<?php
    session_start();
    session_destroy(True);
    header("location:./Login.php"); 
?>