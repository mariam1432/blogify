<?php
include('partials/header.php');

// fetch featured posts

$featured_post_query = "SELECT * from posts WHERE is_featured=1";
$featured_result = mysqli_query($connection, $featured_post_query);
$featured = mysqli_fetch_assoc($featured_result);

$posts_query = "SELECT * from posts ORDER BY date_time DESC LIMIT 9";
$posts = mysqli_query($connection, $posts_query);

?>
<!-- show featured post if there's any -->
<?php if (mysqli_num_rows($featured_result) == 1) : ?>
    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="./images/<?= $featured['thumbnail'] ?>" />
            </div>
            <div class="post__info">
                <?php
                $category_id = $featured['category_id'];
                $category_query = "SELECT * from categories WHERE id=$category_id";
                $category_result = mysqli_query($connection, $category_query);
                $category = mysqli_fetch_assoc($category_result);

                ?>
                <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $category['id'] ?>" class="category__button">
                    <?= $category['title'] ?>
                </a>
                <h2 class="post__title">
                    <a href="<?= ROOT_URL ?>post.php?id=<?= $featured['id'] ?>"><?= $featured['title'] ?></a>
                </h2>
                <p><?= substr($featured['body'], 0, 300) ?>...</p>
                <div class="post__author">
                    <?php
                    $author_id = $featured['author_id'];
                    $author_query = "SELECT id,firstname,lastname,avatar from users WHERE id=$author_id";
                    $author_result = mysqli_query($connection, $author_query);
                    $author = mysqli_fetch_assoc($author_result);
                    ?>
                    <div class="post__author-avatar">
                        <img src="./images/<?= $author['avatar'] ?>" />
                    </div>
                    <div class="author__info">

                        <h5>By : <?= "{$author['firstname']} {$author['lastname']}" ?></h5>
                        <small><?= date("M d, Y - H:i", strtotime($featured['date_time'])) ?></small>
                    </div>
                </div>
            </div>
        </div>


    </section>
<?php endif; ?>
<!-- list of Postss -->
<section class="posts <?= $featured ? '' : 'section__extra-margin' ?>">
    <div class="container posts__container">
        <?php while ($post = mysqli_fetch_assoc($posts)) : ?>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/<?= $post['thumbnail'] ?>" />

                </div>
                <div class="post__info">
                    <?php
                    $c_id = $post['category_id'];
                    $category_query = "SELECT * from categories WHERE id=$c_id";
                    $res = mysqli_query($connection, $category_query);
                    $post_category = mysqli_fetch_assoc($res);
                    ?>
                    <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $post_category['id'] ?>" class="category__button"><?= $post_category['title'] ?></a>
                    <h3 class="post__title">
                        <a href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>

                    </h3>
                    <p class="post__body">

                        <?= substr($post['body'], 0, 150) ?>... </p>
                    <div class="post__author">
                        <?php
                        $author_id = $post['author_id'];
                        $author_query = "SELECT id,firstname,lastname,avatar from users WHERE id=$author_id";
                        $author_result = mysqli_query($connection, $author_query);
                        $author = mysqli_fetch_assoc($author_result);
                        ?>
                        <div class="post__author-avatar">
                            <img src="./images/<?= $author['avatar'] ?>" />
                        </div>
                        <div class="author__info">

                            <h5>By : <?= "{$author['firstname']} {$author['lastname']}" ?></h5>
                            <small><?= date("M d, Y - H:i", strtotime($post['date_time'])) ?></small>
                        </div>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>

    </div>
</section>


<?php include('./category-section.php') ?>
<!-- footer -->
<script src="./js/main.js"></script>

<?php
include('partials/footer.php');
?>
<!-- https://www.youtube.com/watch?v=I010T-UvmRM&t=29532s -->