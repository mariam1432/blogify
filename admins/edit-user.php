<?php
include('./partials/header.php')

?>

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