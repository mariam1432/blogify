<?php
include('partials/header.php');
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($connection, $_GET['id']); // Sanitize the input

    $query = "SELECT * from categories WHERE id=$id";

    $result = mysqli_query($connection, $query);

    $category = mysqli_fetch_assoc($result);

    $post_by_category = "SELECT 
    posts.*,
    users.firstname,
    users.lastname,
    users.avatar,
    categories.title AS category_title
    FROM posts
    JOIN users ON users.id=posts.author_id
    JOIN categories ON categories.id=posts.category_id
    WHERE posts.category_id=$id";
    $post_result = mysqli_query($connection, $post_by_category);
} else {
    header('location: ' . ROOT_URL . 'blog.php');
    die();
}
?>

<header class="category__title">
    <h2><?= $category['title'] ?></h2>
    <p style="margin:0 2rem 0 2rem"><?= $category['description'] ?></p>
</header>
<!-- list of Postss -->
<?php if (mysqli_num_rows($post_result) > 0) : ?>
    <section class="posts">
        <div class="container posts__container">
            <?php while ($post = mysqli_fetch_assoc($post_result)) : ?>
                <article class="post">
                    <div class="post__thumbnail">
                        <img src="./images/<?= $post['thumbnail'] ?>" />

                    </div>
                    <div class="post__info">
                        <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $post['category_id'] ?>" class="category__button"><?= $post['category_title'] ?></a>
                        <h3 class="post__title">
                            <a href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>

                        </h3>
                        <p class="post__body">
                            <?= substr($post['body'], 0, 150) ?> ...</p>
                        <div class="post__author">
                            <div class="post__author-avatar">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="img" />
                            </div>
                            <div class="post__author-info">
                                <h5>By : <?= "{$post['firstname']} {$post['lastname']}" ?></h5>
                                <small><?= date('M d,Y - H:i', strtotime($post['date_time'])) ?></small>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>

        </div>
    </section>
<?php else : ?>
    <div class="alert__message error" style="display:flex;align-items:center;justify-content:center">
        <p>No posts found for this category.</p>
    </div>
<?php endif; ?>

<?php include('./category-section.php') ?>

<!-- footer -->
<script src="js\main.js"></script>

<?php
include('partials/footer.php');
?>