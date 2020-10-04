<?php

$connect = mysqli_connect("localhost","root","","examtool");

if(!$connect)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>