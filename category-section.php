<?php
$categories_query = "SELECT * from categories ORDER BY title";
$categories_result = mysqli_query($connection, $categories_query);
?>
<section class="category__buttons">
    <div class="container category__buttons-container">
        <?php while ($category = mysqli_fetch_assoc($categories_result)) : ?>
            <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $category['id'] ?>" class="category__button"><?= $category['title'] ?></a>
        <?php endwhile; ?>
    </div>
</section>