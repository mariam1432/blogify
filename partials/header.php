<?php
require'config/database.php';

?>
  <nav >
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">Blogify</a>
            <ul class="nav__items">
                <li>
                    <a href='blog.php'>Blog</a>
                </li>
                <li>
                    <a href='about.php'>About</a>
                </li>
                <li>
                    <a href='services.php'>Services</a>
                </li>
                <li>
                    <a href='contact.php'>Contact</a>
                </li>
                <li>
                    <a href='signin.php'>Sign in</a>
                </li>
                <li> 
                    <a href='signup.php'>Sign up</a>
                </li>
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="img"/>
                    </div>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Logout</a></li>

                    </ul>
                </li>
            </ul>
            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>

        </div>
    </nav>