<?php
session_start();
require_once "./conn/dbc.php";
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
            <form class="shadow mt-5 p-3" method="POST" action="./process/login.php">
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
                <h1 class="mb-3">Login</h1>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <a href="forget-password.php">Forget password</a>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</body>

</html>