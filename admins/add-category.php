<?php
include('partials/header.php');
$title = $_SESSION['add-category-data']['title'] ?? null;
$description = $_SESSION['add-category-data']['description'] ?? null;
unset($_SESSION[''])

?>


<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Category</h2>
        <?php if (isset($_SESSION['add-category'])) : ?>
            <div class="alert__message error">
                <p><?= $_SESSION['add-category'];
                    unset($_SESSION['add-category']);
                    ?></p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>admins/add-category-logic.php" method="POST">


            <input type="text" name="title" placeholder="Title" value="<?php $title ?>">
            <textarea name="description" placeholder="description" rows="4"><?php $description ?></textarea>


            <button type="submit" name="submit" class="btn">Add Category</button>
        </form>

    </div>
</section>

<script src="..\js\main.js"></script>
</body>

</html>
<?php
include('../partials/footer.php');
?>