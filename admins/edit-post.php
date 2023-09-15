<?php
include('./partials/header.php')

?>



<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Post</h2>

        <form action="" method="post" enctype="multipart/form-data">


            <input type="text" name="title" placeholder="Title">
            <select>
                <option value="1">Travel</option>
                <option value="1">Travel</option>
                <option value="1">Travel</option>
                <option value="1">Travel</option>
                <option value="1">Travel</option>
            </select>
            <textarea name="body" placeholder="Post" rows="10"></textarea>
            <div class="form__control inline">
                <input type="checkbox" checked name="" id="is_featured">
                <label for="is_featured">Featured</label>
            </div>
            <div class="form__control">
                <label for="thumbnail">Update thumbnail</label>
                <input type="file" id="thumbnail">

            </div>

            <button type="submit" class="btn">Update Post</button>
        </form>

    </div>
</section>

<script src="..\js\main.js"></script>
</body>

</html>
<?php
include('../partials/footer.php');
?>