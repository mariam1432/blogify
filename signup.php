<?php

require('./config/constants.php');
// get back form data from registration error
$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
unset($_SESSION['signup-data']);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogify</title>
    <link rel='stylesheet' href='./css/style.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v4.0.0/css/line.css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins:ital,wght@0,400;0,600;0,700;0,900;1,400;1,700;1,800&display=swap" rel="stylesheet">

</head>

<body>

    <section class="form__section">
        <div class="container form__section-container">
            <h2>Signup</h2>
            <?php if (isset($_SESSION['signup'])) : ?>
                <div class="alert__message error">

                    <p><?= $_SESSION['signup'];
                        unset($_SESSION['signup']);
                        ?></p>
                </div>
            <?php endif; ?>
            <form action="<?= ROOT_URL ?>signup-logic.php" method="post" enctype="multipart/form-data">

                <input type="text" value="<?= $firstname ?>" name="firstname" placeholder="First name">
                <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Last name">
                <input type="text" name="username" value="<?= $username ?>" placeholder="User name">
                <input type="email" name="email" value="<?= $email ?>" placeholder="Email">
                <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="password">
                <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Confirm Password">
                <div class="form__control">
                    <label for="avatar">User Picture</label>
                    <input type="file" id="avatar" name="avatar">
                </div>
                <button type="submit" name='submit' class="btn">Signup</button>
                <small>Already have an account?<a href="signin.php">Sign in</a></small>
            </form>

        </div>
    </section>

    <script src="js\main.js"></script>
</body>

</html>