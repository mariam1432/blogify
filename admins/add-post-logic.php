<?php
require 'config/database.php';

if (isset($_POST['submit'])) {


    $author_id = $_SESSION['user-id'];
    $title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT); // Changed to filter as number
    $is_featured = filter_var($_POST['is_featured'], FILTER_SANITIZE_NUMBER_INT); // Changed to filter as number
    $thumbnail = $_FILES['thumbnail'];

    $is_featured = $is_featured == 1 ? 1 : 0; // Improved ternary expression

    if (!$title || !$body || !$category_id || !$thumbnail['name']) {
        $_SESSION['add-post'] = 'Please fill out all fields.';
    } else {
        $time = time();
        $thumbnail_name = $time . $thumbnail['name'];
        $thumbnail_tmp_name = $thumbnail['tmp_name'];
        $thumbnail_destination_path = '../images/' . $thumbnail_name;
        $allowed_files = ['png', 'jpeg', 'jpg'];
        $extension = pathinfo($thumbnail_name, PATHINFO_EXTENSION);
        if (in_array($extension, $allowed_files)) {
            if ($thumbnail['size'] < 200000) {
                move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);
            } else {
                $_SESSION['add_post'] = 'File size too big, should be less than 2mb.';
            }
        } else {
            $_SESSION['add_post'] = 'File should be png, jpg, jpeg.';
        }
    }

    if (isset($_SESSION['add-post'])) {
        $_SESSION['add-post-data'] = $_POST;

        header('location: ' . ROOT_URL . 'admins/add-post.php');
        die();
    } else {
        if ($is_featured == 1) {
            $zero_all_is_featured_query = "UPDATE posts SET is_featured=0";
            $zero_all_is_featured_result = mysqli_query($connection, $zero_all_is_featured_query);
        }

        $query = "INSERT INTO posts (title, body, thumbnail, is_featured, category_id, author_id) VALUES ('$title', '$body', '$thumbnail_name', $is_featured, $category_id, $author_id)";
        $res = mysqli_query($connection, $query);

        if (!$res) {


            $_SESSION['add-post'] = 'Error inserting post: ' . mysqli_error($connection);
        } else {
            $_SESSION['add-post-success'] = 'New Post added successfully';
            header('location: ' . ROOT_URL . 'admins/dashboard.php');
            die();
        }
    }
} else {
    header('location: ' . ROOT_URL . 'admins/add-post.php');
    die();
}
