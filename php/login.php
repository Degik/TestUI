<?php
require('../mysql/db.php');
include('user/user.php');
include('user/adminUser.php');

if(isset($_POST['user'])){
    $username = stripslashes($_POST['user']);
    $password = stripslashes($_POST['user']);
    $statement = $database->loginQuery($username, $password);
    $fetch = $statement->fetch_assoc();
    // fetch raccoglie le informazioni es: $fetch['username']

    if($statement->num_rows >= 1){
        if(password_verify($password, $fetch['adminPassword'])){
            session_create_id();
            $user = new User($fetch['adminUsername'], $fetch['adminPassword'], session_id());
            echo "Nome: " . $user->getUsername() . " Passowrd: " . $user->getPassword() . " Session: " . $user->getSessionId();
        }
    } else {
        echo "Account non trovato"
    }
}
?>