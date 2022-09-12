<html>
    <body>
    <?php
require('../mysql/db.php');

if(isset($_POST['user'])){
    $username = stripslashes($_POST['user']);
    $password = stripslashes($_POST['pass']);
    $result = $database->registerQuery($username, $password);

    if($result){
        echo "<div class='form'>
        <h3>Registrazione avvenutata con successo.</h3><br/>
        <p class='link'>Clicca <a href='login.php'>Login</a></p>
        </div>";
    } else {
        echo "<div class='form'>
        <h3>Errore</h3><br/>
        <p class='link'Clicca <a href='login.php'>Login</a></p>
        </div>";
    }
}

?>
    </body>
</html>