<?php
    session_start();

    if( !isset($_SESSION['userId']) ) {
        header('location: ../index.php');
        exit();
    } 
    $username = $_SESSION['username'];

    $session = "<i class='icon-user'></i> @" . $username;
    echo "
        <a class='menu-toggle rounded' href='#'>
            <i class='fas fa-bars'></i>
        </a>
        <nav id='sidebar-wrapper'>
            <ul class='sidebar-nav'>
                <li class='sidebar-brand'>
                    <a class='js-scroll-trigger' href='#page-top'> $session </a>
                </li>
                <li class='sidebar-nav-item'>
                    <a class='js-scroll-trigger' href='../index.php'> <i class='icon-home'></i> Home</a>
                </li>
                <li class='sidebar-nav-item'>
                    <a class='js-scroll-trigger' href='../plugins/user-logout.php'> <i class='icon-logout'></i> Logout</a>
                </li>
            </ul>
        </nav>
    ";
?>