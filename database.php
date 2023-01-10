<?php

$servername = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password);

if(! $con)
{
    die("sorry can't connect ". mysqli_connect_error());
}
else{
    echo "success!";
}

?>
