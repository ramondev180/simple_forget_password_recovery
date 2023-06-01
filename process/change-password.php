<?php
session_start();
require_once "../conn/dbc.php";
if(isset($_POST["submit"])){
    $new_password = RMC($_POST["new_password"]);
    $confirm_password = RMC($_POST["confirm_password"]);

    if(empty($new_password) && empty($confirm_password)){
        $_SESSION["error"] ="A required field is empty";
    }else if($new_password != $confirm_password){
        $_SESSION["error"] ="Password are not the same";
    }
    else{
        $email = $_SESSION["change_password"];
     
        $sql="UPDATE `users` SET `password` = '$new_password' WHERE `email` = '$email'";
        $runSQL = runSQL($sql);
        if($runSQL){
            $_SESSION["user"] = $email;
            $_SESSION["success"] ="Successfully change password! please login";
            unset($_SESSION["change_password"]);
            header("location:../index.php");
        }else{
            $_SESSION["error"] ="This email is not registered";
        }
    }
    header("location:../");
}
?>