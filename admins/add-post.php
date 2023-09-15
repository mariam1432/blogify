<?php
include('./partials/header.php')

?>


<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Post</h2>
        <div class="alert__message error">

            <p>This is an error</p>
        </div>
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
                <label for="thumbnail">Add thumbnail</label>
                <input type="file" id="thumbnail">

            </div>

            <button type="submit" class="btn">Add Post</button>
        </form>

    </div>
</section>

<script src="..\js\main.js"></script>
</body>

</html>
<?php
include('../partials/footer.php');
?>