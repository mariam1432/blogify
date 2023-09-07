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
            <h2>Edit User</h2>

            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="firstName" placeholder="First name">
                <input type="text" name="lastName" placeholder="Last name">
                <option value="0">Author</option>
                <option value="1">Admin</option>
                </select>
                <div class="form__control">
                    <label for="avatar">Update Picture</label>
                    <input type="file" id="avatar">
                </div>
                <button type="submit" class="btn">Update User</button>
            </form>

        </div>
    </section>

    <script src="..\js\main.js"></script>
</body>

</html>
<?php
include('../partials/footer.php');
?>