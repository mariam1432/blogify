<?php
include('./partials/header.php');
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query="SELECT * FROM users WHERE id=$id";
    $result=mysqli_query($connection,$query);
    $user=mysqli_fetch_assoc($result);
} else {
    header('location: ' . ROOT_URL . 'admins/manage-users.php');
}

?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit User</h2>

        <form action="<?= ROOT_URL ?>/admins/edit-user-logic.php" method="post">
        <input type="hidden" name="id" value="<?=$user['id']?>">   
        <input type="text" name="firstname" value="<?=$user['firstname']?>" placeholder="First name">
            <input type="text" name="lastname" placeholder="Last name" value="<?=$user['lastname']?>">
            <select name="userrole" value="<?=$user['is_admin']?>">
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>

            <button type="submit" name="submit" class="btn">Update User</button>
        </form>

    </div>
</section>

<script src="..\js\main.js"></script>
</body>

</html>
<?php
include('../partials/footer.php');
?>