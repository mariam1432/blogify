<?php
include('./partials/header.php');

$query = "SELECT * FROM categories";
$categories = mysqli_query($connection, $query);
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $post_query = "SELECT * from posts WHERE id=$id";
    $result = mysqli_query($connection, $post_query);
    $post = mysqli_fetch_assoc($result);
} else {
    header('location: ' . ROOT_URL . 'admins/');
}
?>



<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Post</h2>

        <form action="<?= ROOT_URL . 'admins/edit-post-logic.php' ?>" method="post" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?= $post['id'] ?>">
            <input type="hidden" name="previous_thumbnail_name" value="<?= $post['thumbnail'] ?>">


            <input type="text" name="title" value="<?= $post['title'] ?>" placeholder="Title">
            <select name="category">
                <option>Select category</option>
                <?php while ($category = mysqli_fetch_assoc($categories)) : ?>

                    <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
                <?php endwhile ?>
            </select>
            <textarea name="body" placeholder="Post" rows="10">
            <?= $post['body'] ?>
            </textarea>
            <div class="form__control inline">
                <input type="checkbox" checked name="is_featured" id="is_featured">
                <label for="is_featured">Featured</label>
            </div>
            <div class="form__control">
                <label for="thumbnail">Update thumbnail</label>
                <input type="file" id="thumbnail" name="thumbnail">

            </div>

            <button type="submit" name="submit" class="btn">Update Post</button>
        </form>

    </div>
</section>

<script src="..\js\main.js"></script>
</body>

</html>
<?php
include('../partials/footer.php');
?>