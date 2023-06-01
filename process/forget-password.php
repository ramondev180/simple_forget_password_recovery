<?php
session_start();
require_once "../conn/dbc.php";
if(isset($_POST["submit"])){
    $email = RMC($_POST["email"]);

    if(empty($email)){
        $_SESSION["error"] ="A required field is empty";
    }else{
        $sql="SELECT * FROM `users` WHERE `email` = '$email'";
        $runSQL = runSQL($sql);
        if(mysqli_num_rows($runSQL) > 0){
            $_SESSION["user"] = $email;
            $_SESSION["change_password"] = $email;
            header("location:../change-password.php");
            exit;
        }else{
            $_SESSION["error"] ="This email is not registered";
        }
    }
    header("location:../forget-password.php");
}
?>