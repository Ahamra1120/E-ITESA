<?php
session_start(); // Start the session
include 'connect.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Set session variables
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['status'] = $row['status'];

        // Redirect based on user status
        if ($row['status'] == 'admin') {
            header("Location: admin/index.php");
        } elseif ($row['status'] == 'user') {
            header("Location: user/index.php");
        } else {
            echo "Invalid status!";
        }
    } else {
        echo "Username or password is incorrect!";
    }
} else {
    echo "Please submit the form.";
}

mysqli_close($conn);
?>
