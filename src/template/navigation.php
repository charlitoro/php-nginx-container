<?php
    session_start();

    $session = "<i class='icon-login'></i>  Login";
    if( isset($_SESSION['userId']) ) {
        $session = "<i class='icon-user'></i> ".$_SESSION['username'];
    }
        
?>
<a class='menu-toggle rounded' href='#'>
    <i class='fas fa-bars'></i>
</a>
<nav id='sidebar-wrapper'>
    <ul class='sidebar-nav'>
        <li class='sidebar-brand'>
            <a class='js-scroll-trigger' href='../platform/collect.php'> <?php echo $session ?> </a>
        </li>
        <li class='sidebar-nav-item'>
            <a class='js-scroll-trigger' href='#page-top'> <i class='icon-home'></i>  Home</a>
        </li> 
        <li class='sidebar-nav-item'>
            <a class='js-scroll-trigger' href='#about'> <i class='icon-info'></i> About</a>
        </li>
        <li class='sidebar-nav-item'>
            <a class='js-scroll-trigger' href='#services'> <i class='icon-music-tone'></i> Services</a>
        </li>
    </ul>
</nav>