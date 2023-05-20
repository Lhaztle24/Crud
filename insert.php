<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', '$age')";

    if ($mysqli->query($sql) === TRUE) {
        echo "User created successfully";
    } else {
        echo "Error creating user: " . $conn->error;
    }

    $mysqli->close();
}

?>