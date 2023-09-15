<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Check if username or email already exist
    $checkQuery = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        echo "Username or email already exists.";
    } else {
        // Insert user data into the database
        $insertQuery = "INSERT INTO users (username, email, first_name, last_name, password) VALUES ('$username', '$email', '$firstName', '$lastName', '$password')";

        if ($conn->query($insertQuery) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
