<?php
session_start();
require('config/database.php');

if (isset($_POST['submit'])) {
    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);

    if (!$username_email) {
        $_SESSION['signin'] = "Username or email required.";
    } else if (!$password) {
        $_SESSION['signin'] = "Password required.";
    } else {
        $fetch_user_query = "SELECT * FROM users WHERE username='$username_email' OR email='$username_email'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);

        if (mysqli_num_rows($fetch_user_result) == 1) {
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];

            if (password_verify($password, $db_password)) {
                $_SESSION['user-id'] = $user_record['id'];

                // Check if user is an admin
                if ($user_record['is_admin'] == 1) {
                    $_SESSION['user_is_admin'] = true;
                }

                header('location: ' . ROOT_URL . 'admins/');
                exit(); // Exit to prevent further execution
            } else {
                $_SESSION['signin'] = 'Please enter correct information.';
            }
        } else {
            $_SESSION['signin'] = "User not found.";
        }
    }
} else {
    // Redirect if form wasn't submitted
    header('location: ' . ROOT_URL . 'signin.php');
    exit(); // Exit to prevent further execution
}

// Redirect with potential error messages
if (isset($_SESSION['signin'])) {
    $_SESSION['signin-data'] = $_POST;
    header('location: ' . ROOT_URL . 'signin.php');
    exit(); // Exit to prevent further execution
}
