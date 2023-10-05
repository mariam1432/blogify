<?php
require 'config/database.php';
if (isset($_POST['submit'])) {

    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if (!$title) {
        $_SESSION['add-category'] = "Please enter title.";
    } else  if (!$description) {
        $_SESSION['add-category'] = "Please enter description.";
    }
    if (isset($_SESSION['add-category'])) {
        $_SESSION['add-category-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admins/add-category.php');
        die();
    } else {
        $query = "INSERT INTO categories (title,description) values('$title','$description')";
        $result = mysqli_query($connection, $query);
        if (mysqli_errno($connection)) {
            $_SESSION['add-category'] = "Could not add category.";
            header('location: ' . ROOT_URL . 'admins/add-categories.php');
            die();
        } else {
            $_SESSION['add-category-success'] = "Category $title added successfully!";
            header('location: ' . ROOT_URL . 'admins/manage-categories.php');
            die();
        }
    }
} else {
    header('location: ' . ROOT_URL . 'admins/add-category.php');
    die();
}
