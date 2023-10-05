<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $previous_thumbnail_name = filter_var($_POST['previous_thumbnail_name'], FILTER_SANITIZE_SPECIAL_CHARS);

    $title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);
    $is_featured = filter_var($_POST['is_featured'], FILTER_SANITIZE_NUMBER_INT);

    $is_featured = $is_featured == 1 ? 1 : 0;

    if (!$title || !$body || !$category_id) {
        $_SESSION['edit-post'] = 'Cannot update. Please fill out all fields.';
    } else {
        // Check if a thumbnail was uploaded
        if (!empty($_FILES['thumbnail']['name'])) {
            $thumbnail = $_FILES['thumbnail'];

            $time = time();
            $thumbnail_name = $time . $thumbnail['name'];
            $thumbnail_tmp_name = $thumbnail['tmp_name'];
            $thumbnail_destination_path = '../images/' . $thumbnail_name;
            $allowed_files = ['png', 'jpeg', 'jpg'];
            $extension = pathinfo($thumbnail_name, PATHINFO_EXTENSION);

            if (in_array($extension, $allowed_files)) {
                if ($thumbnail['size'] < 200000) {
                    move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);

                    // Check if a previous thumbnail exists, then delete it
                    if (!empty($previous_thumbnail_name)) {
                        $previous_thumbnail_path = '../images/' . $previous_thumbnail_name;
                        if (file_exists($previous_thumbnail_path)) {
                            unlink($previous_thumbnail_path);
                        }
                    }
                } else {
                    $_SESSION['edit-post'] = 'Could not upload. File size too big, should be less than 2mb.';
                }
            } else {
                $_SESSION['edit-post'] = 'File should be png, jpg, jpeg.';
            }
        }
    }

    if (isset($_SESSION['edit-post'])) {
        $_SESSION['edit-post-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admins/edit-post.php');
        die();
    } else {
        if ($is_featured == 1) {
            $zero_all_is_featured_query = "UPDATE posts SET is_featured=0";
            $zero_all_is_featured_result = mysqli_query($connection, $zero_all_is_featured_query);
        }

        if (isset($thumbnail_name)) {
            $thumbnail_to_insert = $thumbnail_name;
        } else {
            $thumbnail_to_insert = $previous_thumbnail_name;
        }

        $query = "UPDATE posts SET title='$title', body='$body', thumbnail='$thumbnail_to_insert', is_featured=$is_featured, category_id=$category_id WHERE id=$id LIMIT 1";
        $res = mysqli_query($connection, $query);

        if (!$res) {
            $_SESSION['edit-post'] = 'Error inserting post: ' . mysqli_error($connection);
        } else {
            $_SESSION['edit-post-success'] = 'Post updated successfully';
            header('location: ' . ROOT_URL . 'admins/dashboard.php');
            die();
        }
    }
} else {
    header('location: ' . ROOT_URL . 'admins/edit-post.php');
    die();
}
