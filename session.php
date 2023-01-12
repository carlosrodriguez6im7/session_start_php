<?php

;

if($_POST['loginEmail'] == 'carlos@correo.com'){
    session_start();
    $_SESSION['autorizado'] = true;
    header('Location: home.php');
    exit();
}else{
    header('Location: login.php');
    exit();
}

/*

if(!isset($_SESSION['txtUser'])){
    header('Location: ejemplo.php');
    exit();
} else {
    $_SESSION["usuario"]=$_POST['txtUser'];
    echo "Hola";
}
*/

/*
if(isset($_POST["login"])){

        $_SESSION["usuario"]=$_POST['txtUser'];
        echo "Bienvenido ".$_SESSION["usuario"]."</br>";
    }else{
        echo "Debes iniciar sesión";
    }
*/

?>
