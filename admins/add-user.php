<?php
include('./partials/header.php')

?>


<section class="form__section">
    <div class="container form__section-container">
        <h2>Add User</h2>
        <div class="alert__message error">
            <p>This is an error</p>
        </div>
        <form action="" method="post" enctype="multipart/form-data">


            <input type="text" name="firstName" placeholder="First name">
            <input type="text" name="lastName" placeholder="Last name">
            <input type="text" name="userName" placeholder="User name">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="password">
            <input type="password" name="confirmPassword" placeholder="Confirm Password">
            <select>
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <div class="form__control">
                <label for="avatar">User Picture</label>
                <input type="file" id="avatar">
            </div>
            <button type="submit" class="btn">Add User</button>
        </form>

    </div>
</section>

<script src="..\js\main.js"></script>
</body>

</html>
<?php
include('../partials/footer.php');
?>