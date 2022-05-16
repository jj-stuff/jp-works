<?php 

    $url = '//' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

?>

<nav class="nav bg-black bg-opacity-50 blur">
    <div class="container">
        <div class="row p-2">
            <a href="/home" class="col-sm-2 col-md-1">
                    <img src="img/A-1_White.svg" id='logo' alt="logo" class="navbar-brand d-none d-sm-inline m-0">
            </a>
            <ul class="nav-links my-auto d-flex col-sm-10 col-md-11">
                <li class="nav-item "><a href="home" class="nav-link <?php if (strpos($url,'home') == true) { echo ' on'; }  ?>">Home</a></li>
                <li class="nav-item"><a href="work" class="nav-link <?php if (strpos($url,'work') == true) { echo ' on'; } ?>">Works</a></li>
                <li class="nav-item ms-auto"><a href="about" class="nav-link <?php if (strpos($url,'about') == true) { echo ' on'; } ?>">About Me</a></li>
            </ul>
        </div>
</nav>