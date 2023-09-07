<?php
include('../partials/header.php')

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

    <section class="form__section">
        <div class="container form__section-container">
            <h2>Add Category</h2>
            <div class="alert__message error">

                <p>This is an error</p>
            </div>
            <form action="" method="post">


                <input type="text" name="category" placeholder="Title">
                <textarea name="description" placeholder="description" rows="4"></textarea>


                <button type="submit" class="btn">Add Category</button>
            </form>

        </div>
    </section>

    <script src="..\js\main.js"></script>
</body>

</html>
<?php
include('partials/footer.php');
?>