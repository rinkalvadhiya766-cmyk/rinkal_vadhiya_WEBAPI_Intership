<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "recaptcha_login"
);

if(!$conn)
{
    die("Connection Failed");
}
?>