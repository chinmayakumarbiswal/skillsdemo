<?php
    session_start();
    if(isset($_SESSION['usrid']))
    {
        session_destroy();
        header('location:http://localhost/skill/');
    }
    else
    {
        header('location:http://localhost/skill/');
    }
?>