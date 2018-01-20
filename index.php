<?php
    session_start();
    $_SESSION['cartesJ1'] = 26;
    $_SESSION['cartesJ2'] = 26;

    header('Location: ./main.php');
?>