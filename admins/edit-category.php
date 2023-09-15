<?php
include('./partials/header.php')

?>


<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Category</h2>

        <form action="" method="post">
            <input type="text" name="category" placeholder="Title">
            <textarea name="description" placeholder="description" rows="4"></textarea>
            <button type="submit" class="btn">Update Category</button>
        </form>

    </div>
</section>

<script src="..\js\main.js"></script>
</body>

</html>
<?php
include('../partials/footer.php');
?>