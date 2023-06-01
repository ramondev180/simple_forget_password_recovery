<?php
session_start();
require_once "../conn/dbc.php";
if(isset($_POST["submit"])){
    $email = RMC($_POST["email"]);
    $password = RMC($_POST["password"]);

    if(empty($email) && empty($password)){
        $_SESSION["error"] ="A required field is empty";
    }else{
        $sql="SELECT * FROM `users` WHERE `password` = '$password'  AND `email` = '$email'";
        $runSQL = runSQL($sql);
        if(mysqli_num_rows($runSQL) > 0){
            $_SESSION["user"] = $email;
            $_SESSION["success"] ="Successfully login";
            header("location:../dashboard.php");
        }else{
            $_SESSION["error"] ="Invalid credentials";
        }
    }
    header("location:../");
}
?>