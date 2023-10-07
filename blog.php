<?php
include('partials/header.php');

$posts_query  = "SELECT 
posts.*,
users.firstname,
users.lastname,
users.avatar,
categories.title AS category_title
FROM posts
JOIN users ON users.id=posts.author_id
JOIN categories ON categories.id=posts.category_id
ORDER BY date_time DESC";
$posts = mysqli_query($connection, $posts_query);
?>

<section class="search__bar">
    <form action="<?= ROOT_URL ?>search.php" method="GET" class="container search__bar-container">
        <div>
            <i class="uil uil-search"></i>
            <input type="search" name="search" id="" placeholder="search">
        </div>
        <button type="submit" name="submit" class="btn">Go</button>
    </form>

</section>
<!-- list of Postss -->
<?php if (mysqli_num_rows($posts) > 0) : ?>
    <section class="posts">
        <div class="container posts__container">
            <?php while ($post = mysqli_fetch_assoc($posts)) : ?>
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

                            <?= substr($post['body'], 0, 150) ?>... </p>
                        <div class="post__author">

                            <div class="post__author-avatar">
                                <img src="./images/<?= $post['avatar'] ?>" />
                            </div>
                            <div class="author__info">

                                <h5>By : <?= "{$post['firstname']} {$post['lastname']}" ?></h5>
                                <small><?= date("M d, Y - H:i", strtotime($post['date_time'])) ?></small>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>

        </div>
    </section>
<?php else : ?>
    <div class="alert__message error" style="display:flex;align-items:center;justify-content:center">
        <p>No posts found.</p>
    </div>
<?php endif; ?>
<?php include('./category-section.php'); ?>
<!-- footer -->
<script src="js\main.js"></script>

<?php
include('partials/footer.php');
?>