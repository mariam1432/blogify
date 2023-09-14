<?php
include('../partials/header.php')

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogify</title>
    <link rel='stylesheet' href='../css/style.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v4.0.0/css/line.css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins:ital,wght@0,400;0,600;0,700;0,900;1,400;1,700;1,800&display=swap" rel="stylesheet">

</head>

<body>

    <section class="dashboard">
        <div class="container dashboard__container">
            <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-left-b"></i></button>
            <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>

            <aside>
                <ul>
                    <li>
                        <a href="add-post.php">
                            <i class="uil uil-pen"></i>
                            <h5>Add Post</h5>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard.php">
                            <i class="uil uil-postcard"></i>
                            <h5>Manage Post</h5>
                        </a>
                    </li>
                    <li>
                        <a href="add-user.php">
                            <i class="uil uil-user-plus"></i>
                            <h5>Add User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-users.php" class="active">
                            <i class="uil uil-user"></i>
                            <h5>Manage User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="add-category.php">
                            <i class="uil uil-edit"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-categories.php">
                            <i class="uil uil-pen"></i>
                            <h5>Manage Category</h5>
                        </a>
                    </li>
                </ul>
            </aside>
            <main>
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Emma</td>
                            <td>emma@yopmail.com</td>
                            <td> <a href="edit-user.php" class="btn sm">Edit</a></td>
                            <td> <a href="delete-user.php" class="btn sm danger">Delete</a></td>
                            <td>yes</td>
                        </tr>
                        <tr>
                            <td>Simon</td>
                            <td>simon@yopmail.com</td>
                            <td> <a href="edit-user.php" class="btn sm">Edit</a></td>
                            <td> <a href="delete-user.php" class="btn sm danger">Delete</a></td>
                            <td>no</td>


                        </tr>
                        <tr>
                            <td>jacob</td>
                            <td>jacob@yopmail.com</td>
                            <td> <a href="edit-user.php" class="btn sm">Edit</a></td>
                            <td> <a href="delete-user.php" class="btn sm danger">Delete</a></td>
                            <td>yes</td>

                        </tr>
                    </tbody>
                </table>
            </main>


        </div>
    </section>

    <script src="..\js\main.js"></script>
</body>

</html>
<?php
include('../partials/footer.php');
?>