<?php
include('partials/header.php');
$post = null;
if (isset($_GET['id'])) {
    $post_id = mysqli_real_escape_string($connection, $_GET['id']); // Sanitize the input

    $post_query = "SELECT 
        posts.*, 
        users.firstname, 
        users.lastname, 
        users.avatar
    FROM 
        posts
    JOIN 
        users ON posts.author_id = users.id
   
    WHERE posts.id = $post_id";

    $result = mysqli_query($connection, $post_query);

    if ($result) {
        $post = mysqli_fetch_assoc($result);
    } else {
        $post = null;
    }
} else {
    header('location: ' . ROOT_URL . 'blog.php');
    die();
}
?>
<section class="singlepost">
    <div class="container singlepost__container">
        <h2><?= $post['title'] ?></h2>
        <div class="post__author">
            <div class="post__author-avatar">
                <img src="./images/<?= $post['avatar'] ?>" alt="img" />
            </div>
            <div class="author__info">
                <h5>By : <?= "{$post['firstname']} {$post['lastname']}" ?></h5>
                <small><?= date('M d,Y - H:i', strtotime($post['date_time'])) ?></small>
            </div>
        </div>
        <div class="singlepost__thumbnail">
            <img src="./images/<?= $post['thumbnail'] ?>" />

        </div>
        <p><?= $post['body'] ?></p>


    </div>


</section>



<!-- footer -->
<script src="js\main.js"></script>

<?php
include('partials/footer.php');
?>