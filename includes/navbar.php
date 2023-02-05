<?php 

    $url = '//' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

?>

<nav class="nav bg-opacity-50 blur" id="navbar">
    <div class="container">
        <div class="row p-2">
            <a href="<?php echo BASE;?>home" class="col-sm-2 col-md-1">
                    <img src="<?php echo BASE;?>img/A-1_White.svg" id='logo' alt="logo" class="navbar-brand d-none d-sm-inline m-0">
            </a>
            <ul class="nav-links my-auto d-flex col-sm-10 col-md-11">
                <li class="nav-item "><a href="<?php echo BASE;?>home" class="nav-link <?php if (strpos($url,'home') == true) { echo ' on'; }  ?>">Home</a></li>
                <li class="nav-item"><a href="<?php echo BASE;?>works" class="nav-link <?php if (strpos($url,'works/') == true) { echo ' on'; } ?>">Works</a></li>
                <li class="nav-item ms-auto"><a href="<?php echo BASE;?>about" class="nav-link <?php if (strpos($url,'about') == true) { echo ' on'; } ?>">About Me</a></li>
            </ul>
        </div>
</nav>



