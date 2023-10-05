<?php

require "config/database.php";
if (isset($_POST['submit'])) {
    $id = filter_var($_POST['id']);
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if (!$title || !$description) {
        $_SESSION['edit-category'] = "Enter title and description.";
    } else {
        $query = "UPDATE categories SET id=$id,title='$title',description='$description' WHERE id=$id LIMIT 1";
        $result = mysqli_query($connection, $query);
        if (mysqli_errno($connection)) {
            $_SESSION['edit-category'] = "Failed to update user.";
        } else {
            $_SESSION['edit-category-success'] = "Successfully updated $title category.";
            header('location: ' . ROOT_URL . 'admins/manage-categories.php');
            die();
        }
    }
} else {
    header('location: ' . ROOT_URL . 'admins/edit-category.php');
    die();
}
