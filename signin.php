<?php

require('config/constants.php');
$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;
unset($_SESSION['signin-data']);

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
            <h2>signin</h2>
            <?php if (isset($_SESSION['signup-success'])) : ?>
                <div class="alert__message success">

                    <p><?= $_SESSION['signup-success'];
                        unset($_SESSION['signup-success']);
                        ?></p>
                </div>
            <?php elseif (isset($_SESSION['signin'])) : ?>
                <div class="alert__message error">

                    <p><?= $_SESSION['signin'];
                        unset($_SESSION['signin']);
                        ?></p>
                </div>
            <?php endif; ?>
            <form action="<?= ROOT_URL ?>signin-logic.php" method="post">


                <input type="text" name="username_email" name="email" value="<?= $username_email ?>" placeholder="Enter Email or Username">
                <input type="password" name="password" name="email" value="<?= $password ?>" placeholder="password">

                <button type="submit" name="submit" class="btn">Signup</button>
                <small>Don't have an account yet?<a href="signup.php">Sign up</a></small>
            </form>

        </div>
    </section>

    <script src="js\main.js"></script>
</body>

</html>