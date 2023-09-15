<?php
require 'config/database.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogify</title>
    <link rel='stylesheet' href='../css/style.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v4.0.0/css/line.css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins:ital,wght@0,400;0,600;0,700;0,900;1,400;1,700;1,800&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="<?= ROOT_URL ?>index.php" class="nav__logo">Blogify</a>
            <ul class="nav__items">
                <li>
                    <a href='<?= ROOT_URL ?>blog.php'>Blog</a>
                </li>
                <li>
                    <a href='<?= ROOT_URL ?>about.php'>About</a>
                </li>
                <li>
                    <a href='<?= ROOT_URL ?>services.php'>Services</a>
                </li>
                <li>
                    <a href='<?= ROOT_URL ?>contact.php'>Contact</a>
                </li>
                <li>
                    <a href='<?= ROOT_URL ?>signin.php'>Sign in</a>
                </li>
                <li>
                    <a href='<?= ROOT_URL ?>signup.php'>Sign up</a>
                </li>
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="img" />
                    </div>
                    <ul>
                        <li><a href="<?= ROOT_URL ?>admins/dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Logout</a></li>

                    </ul>
                </li>
            </ul>
            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>

        </div>
    </nav>