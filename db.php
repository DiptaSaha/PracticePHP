<?php
$connection = mysqli_connect('localhost','root','','blogsite');

if ($connection) {
    // echo "succesfully db connected";
}

else {
    die("db not connected");
}

?>