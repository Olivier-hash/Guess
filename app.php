<?php

// php form to enter name and email address
if ($_SERVER["REQUEST_mETHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
}


?>