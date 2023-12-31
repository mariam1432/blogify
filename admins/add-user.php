<?php
include('./partials/header.php');
$firstname = $_SESSION['add-user-data']['firstname'] ?? null;
$lastname = $_SESSION['add-user-data']['lastname'] ?? null;
$username = $_SESSION['add-user-data']['username'] ?? null;
$email = $_SESSION['add-user-data']['email'] ?? null;
$createpassword = $_SESSION['add-user-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['add-user-data']['confirmpassword'] ?? null;

unset($_SESSION['add-user-data']);
?>


<section class="form__section">
    <div class="container form__section-container">
        <h2>Add User</h2>
        <?php if (isset($_SESSION['add-user'])) : ?>
            <div class="alert__message error">
                <p><?= $_SESSION['add-user'];
                    unset($_SESSION['add-user']);
                    ?></p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>admins/add-user-logic.php" method="POST" enctype="multipart/form-data">


            <input type="text" value="<?= $firstname ?>" name="firstname" placeholder="First name">
            <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Last name">
            <input type="text" name="username" value="<?= $username ?>" placeholder="User name">
            <input type="email" name="email" value="<?= $email ?>" placeholder="Email">
            <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="password">
            <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="password">

            <select name="userrole">
                <option>Select a user role</option>
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <div class="form__control">
                <label for="avatar">User Picture</label>
                <input type="file" id="avatar" name="avatar">
            </div>
            <button type="submit" name="submit" class="btn">Add User</button>
        </form>

    </div>
</section>

<script src="..\js\main.js"></script>
</body>

</html>
<?php
include('../partials/footer.php');
?>