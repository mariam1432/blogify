<?php
include('./partials/header.php')

?>


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