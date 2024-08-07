<?php
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'portfolio';

    $conn = mysqli_connect($server, $user, $password, $db);

    // SUBMITTING THE CONTACTS FORM

    if (isset($_POST['sub'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $query = "INSERT INTO `contacts`(`Name`, `Email`,`Message`) VALUES ('$name', '$email', '$message')";
        $result = mysqli_query($conn, $query);
        header("location: index.php#contact");
        header("location: index.php?error=Your message has been submitted! Thank you.");
    }
?>