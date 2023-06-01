<?php


function RMC($data)
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "assignment";
    //connection
    $data = strip_tags($data);
    $data = stripslashes($data);   //remove this later
    //$data = urlencode($data);   //add this
    $con = mysqli_connect($server, $username, $password, $database);
    $data = mysqli_real_escape_string($con, $data);
    //$data = htmlspecialchars($data);
    $data = trim($data);
    return $data;
}


function runSQL($sql)
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "assignment";
    //connection
    $con = mysqli_connect($server, $username, $password, $database);
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
    return $result;
}
