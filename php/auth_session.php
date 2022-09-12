<?php
if(!isset($_SESSION["username"])) {
    header("Location: ../html/register.html");
    exit();
}
?>