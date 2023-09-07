<?php
include('partials/header.php')

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
            <div class="alert__message success">

                <p>This is an error</p>
                </div>
                <form action="" method="post">

                    <input type="text" name="firstName" placeholder="First name">
                    <input type="text" name="lastName" placeholder="Last name">
                    <input type="text" name="userName" placeholder="User name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="password">
                    <input type="password" name="confirmPassword" placeholder="Confirm Password">
                    <div class="form__control">
                        <label for="avatar">User Picture</label>
                        <input type="file" id="avatar">
                    </div>
                    <button type="submit" class="btn">Signup</button>
                    <small>Already have an account?<a href="signin.php">Sign in</a></small>
                </form>
         
        </div>
    </section>

    <script src="js\main.js"></script>
</body>

</html>
<?php
include('partials/footer.php');
?>