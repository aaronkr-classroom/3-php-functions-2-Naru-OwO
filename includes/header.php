<?php 
function write_loge() {
    echo '<img src="img/logo.png" alt="logo" />';
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Chapter 3</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>

        <h1><?php write_loge(); ?> The Candy Store</h1>
        <nav>
            <a href="index.php">Home</a> |
            <a href="candy.php">Candy</a> |
            <a href="about.php">about</a> |
            <a href="contact.php">contact</a>
        </nav>