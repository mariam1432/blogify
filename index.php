<?php
include('partials/header.php')

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogify</title>
    <link rel='stylesheet' href='./css/style.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v4.0.0/css/line.css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins:ital,wght@0,400;0,600;0,700;0,900;1,400;1,700;1,800&display=swap" rel="stylesheet">

</head>

<body>
    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60" />
            </div>
            <div class="post__info">
                <a href="category-post.php" class="category__button">Wild Life</a>
                <h2 class="post__title">
                    <a href="post.php">Why do we use it?</a>
                </h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="img" />
                    </div>
                    <div class="author__info">
                        <h5>By : jon doe</h5>
                        <small>11/2/23</small>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- list of Postss -->
    <section class="posts">
        <div class="container posts__container">
            <article class="post">
                <div class="post__thumbnail">
                    <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60" />

                </div>
                <div class="post__info">
                    <a href="category-post.php" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">1914 translation by H. Rackham</a>

                    </h3>
                    <p class="post__body">
                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="img" />
                        </div>
                        <div class="post__author-info">
                            <h5>By : jon doe</h5>
                            <small>11/2/23</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60" />

                </div>
                <div class="post__info">
                    <a href="category-post.php" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">1914 translation by H. Rackham</a>

                    </h3>
                    <p class="post__body">
                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="img" />
                        </div>
                        <div class="post__author-info">
                            <h5>By : jon doe</h5>
                            <small>11/2/23</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60" />

                </div>
                <div class="post__info">
                    <a href="category-post.php" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">1914 translation by H. Rackham</a>

                    </h3>
                    <p class="post__body">
                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="img" />
                        </div>
                        <div class="post__author-info">
                            <h5>By : jon doe</h5>
                            <small>11/2/23</small>
                        </div>
                    </div>
                </div>
            </article>

        </div>
    </section>

    <section class="category__buttons">
        <div class="container category__buttons-container">
            <a href="category-post.php" class="category__button">Art</a>
            <a href="category-post.php" class="category__button">History</a>
            <a href="category-post.php" class="category__button">Nature</a>
            <a href="category-post.php" class="category__button">Tech</a>
            <a href="category-post.php" class="category__button">Fashion</a>
            <a href="category-post.php" class="category__button">Wild Life</a>
            <a href="category-post.php" class="category__button">Lifestyle</a>

        </div>
    </section>
    <!-- footer -->
    <script src="js\main.js"></script>
</body>

</html>
<?php
include('partials/footer.php');
?>