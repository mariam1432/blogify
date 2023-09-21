<?php

require('config/database.php');
//signupform data
if (isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];
    var_dump($avatar['name']);
    $is_admin = filter_var($_POST['userrole'], FILTER_VALIDATE_INT);
    //   validation
    if (!$firstname) {
        $_SESSION['add-user'] = 'Please enter your first name.';
    } else if (!$lastname) {
        $_SESSION['add-user'] = 'Please enter your last name.';
    } else if (!$username) {
        $_SESSION['add-user'] = 'Please enter your username.';
    } else if (!$email) {
        $_SESSION['add-user'] = 'Please enter a valid email.';
    } else if (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['add-user'] = 'Password should be 8+ charachters.';
    } else if (!$avatar['name']) {
        $_SESSION['add-user'] = 'Please add an avatar.';
    } else {
        if ($confirmpassword !== $createpassword) {
            $_SESSION['add-user'] = 'Passwords do not match!.';
        } else {
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if (mysqli_num_rows($user_check_result) > 0) {
                $_SESSION['add-user'] = 'Username or email already exists';
            } else {
                //working on image
                $time = time();

                $avatar_name = $time . $avatar['name'];
                $avatar_temp_name = $avatar['tmp_name'];
                $avatar_destination_path = '../images/' . $avatar_name;
                //make sure avatar is an image!
                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extention = explode('.', $avatar_name);
                $extention = end($extention);
                if (in_array($extention, $allowed_files)) {
                    if ($avatar['size'] < 1000000) {
                        // upload finallyyyy
                        move_uploaded_file($avatar_temp_name, $avatar_destination_path);
                    } else {
                        $_SESSION['add-user'] = 'File size to big.should be less than 1mb.';
                    }
                } else {
                    $_SESSION['add-user'] = 'File should be png,jpg or jpeg.';
                }
            }
        }
    }
    if (isset($_SESSION['add-user'])) {
        // pass data back to add-user
        $_SESSION['add-user-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admins/add-user.php');

        die();
    } else {
        // insert new user
        $insert_user_query = "INSERT INTO users (firstname,lastname,username,email,password,avatar,is_admin) VALUES('$firstname','$lastname','$username','$email','$hashed_password','$avatar_name',$is_admin)";
        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if (!mysqli_errno($connection)) {
            $_SESSION['add-user-success'] = "New user $firstname $lastname added succefully!";
            header('location: ' . ROOT_URL . 'admins/manage-users.php');
            die();
        }
    }
} else {
    header('location: ' . ROOT_URL . 'admins/add-user.php');
    die();
}
