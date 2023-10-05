<?php
require 'config/database.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $query = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $post = mysqli_fetch_assoc($result);

    // Retrieve the image filename
    $thumbnail_name = $post['thumbnail'];

    // Construct the file path for the image
    $thumbnail_path = "../images/" . $thumbnail_name;

    // delete post from db
    $delete_post_query = "DELETE FROM posts WHERE id=$id LIMIT 1";
    $delete_post_result = mysqli_query($connection, $delete_post_query);

    if (mysqli_errno($connection)) {
        $_SESSION['delete-post'] = "Could not delete post '{$post['title']}'.";
    } else {
        $_SESSION['delete-post-success'] = "Successfully deleted post '{$post['title']}'.";

        // Check if the file exists, then delete it
        if (file_exists($thumbnail_path)) {
            unlink($thumbnail_path);
        }
    }
}

header('location: ' . ROOT_URL . 'admins/dashboard.php');
die();
