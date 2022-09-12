<?php
if(!isset($_SESSION['id'])) {
    header("Location: ../html/register.html");
    exit();
}
?>