<?php
session_start();
require_once "./conn/dbc.php";

if(!isset($_SESSION["user"])){
    header("location:./index.php");
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<?php

?>

<body>
    <div class="container">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 m-auto">
            <div class="shadow mt-5 p-3" >
                <?php
                if (isset($_SESSION["error"])) {
                ?>
                    <div class="alert alert-danger">
                        <?= $_SESSION["error"] ?>
                    </div>
                <?php
                    unset($_SESSION["error"]);
                } ?>
                <?php
                if (isset($_SESSION["success"])) {
                ?>
                    <div class="alert alert-success">
                        <?= $_SESSION["success"] ?>
                    </div>
                <?php
                    unset($_SESSION["success"]);
                } ?>
                <h1 class="mb-3">Dashboard</h1>

                <h4>Welcome <?=$_SESSION["user"]?></h4>
                <a href="./process/logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</body>

</html>