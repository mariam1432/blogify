<?php
require 'config/database.php';
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $update_post_category = "UPDATE posts SET category_id=12 where category_id=$id";
    $update_res = mysqli_query($connection, $update_post_category);
    if (!mysqli_error($connection)) {
        $query = "SELECT * FROM categories WHERE id=$id";
        $result = mysqli_query($connection, $query);
        $category = mysqli_fetch_assoc($result);

        // delete category from db
        $delete_category_query = "DELETE FROM categories WHERE id=$id LIMIT 1";
        $delete_category_result = mysqli_query($connection, $delete_category_query);
        if (mysqli_errno($connection)) {
            $_SESSION['delete-category'] = "Could not delete category '{$category['title']}'.";
        } else {
            $_SESSION['delete-category-success'] = "Successfully deleted category '{$category['title']}'.";
        }
    }
}
header('location: ' . ROOT_URL . 'admins/manage-categories.php');
die();
