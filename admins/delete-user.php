<?php
require 'config/database.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        $avatar_name = $user['avatar'];
        $avatar_path = "../images/" . $avatar_name;

        if (file_exists($avatar_path)) {
            unlink($avatar_path);
        }

        $thumbnails_query = "SELECT thumbnail FROM posts WHERE author_id=$id";
        $thumbnails_result = mysqli_query($connection, $thumbnails_query);

        if (mysqli_num_rows($thumbnails_result)>0) {
            while ($thumbnail = mysqli_fetch_assoc($thumbnails_result)) {
                $thumbnail_path = "../images/" . $thumbnail['thumbnail'];

                if (file_exists($thumbnail_path)) {
                    unlink($thumbnail_path);
                }
            }
        } else {
            $_SESSION['delete-user'] = 'Error fetching thumbnails: ' . mysqli_error($connection);
        }

        // delete user from db
        $delete_user_query = "DELETE FROM users WHERE id=$id";
        $delete_user_result = mysqli_query($connection, $delete_user_query);

        if ($delete_user_result) {
            $_SESSION['delete-user-success'] = "Successfully deleted user '{$user['firstname']} {$user['lastname']}'.";
        } else {
            $_SESSION['delete-user'] = 'Error deleting user: ' . mysqli_error($connection);
        }
    } else {
        $_SESSION['delete-user'] = 'User not found.';
    }
}

header('location: ' . ROOT_URL . 'admins/manage-users.php');
die();
