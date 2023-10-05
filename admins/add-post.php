<?php
include('./partials/header.php');
$query = "SELECT * FROM categories";
$categories = mysqli_query($connection, $query);
$title = $_SESSION['add-post-data']['title'] ?? null;
$body = $_SESSION['add-post-data']['body'] ?? null;

unset($_SESSION['add-post-data']);

?>


<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Post</h2>
        <?php if (isset($_SESSION['add-post'])) : ?>
            <div class="alert__message error">
                <p><?= $_SESSION['add-post'];
                    unset($_SESSION['add-post']);
                    ?></p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>admins/add-post-logic.php" method="post" enctype="multipart/form-data">

            <input type="text" name="title" value="<?= $title ?>" placeholder="Title">
            <select name="category">
                <option>Select category</option>
                <?php while ($category = mysqli_fetch_assoc($categories)) : ?>

                    <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
                <?php endwhile ?>
            </select>
            <textarea name="body" placeholder="Post" rows="10">
            <?= $body ?>
        </textarea>
            <?php if (isset($_SESSION['user_is_admin'])) : ?>
                <div class="form__control inline">
                    <input type="checkbox" value="1" checked name="is_featured" id="is_featured">
                    <label for="is_featured">Featured</label>
                </div>
            <?php endif; ?>
            <div class="form__control">
                <label for="thumbnail">Add thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </div>
            <button type="submit" name="submit" class="btn">Add Post</button>
        </form>
    </div>
</section>

<script src="..\js\main.js"></script>
</body>

</html>
<?php
include('../partials/footer.php');
?>