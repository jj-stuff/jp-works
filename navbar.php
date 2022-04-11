<?php 
    // gets the current URI, remove the left / and then everything after the / on the right
    $directory = explode('/',ltrim($_SERVER['REQUEST_URI'],'/'));

    // loop through each directory, check against the known directories, and add class   
    $directories = array("index", "work","about"); // set home as 'index', but can be changed based of the home uri
    foreach ($directories as $folder){
    $active[$folder] = ($directory[0] == $folder)? "active":"noactive";
    }
?>

<nav class="nav bg-black bg-opacity-50 blur">
    <div class="container">
        <div class="row p-3">
            <a href="" class="col-1">
                    <img src="img/A-1_White.svg" id='logo' alt="logo" class="navbrand">
            </a>
            <ul class="nav-links my-auto d-flex col-11">
                <li class="nav-item "><a href="index" class="nav-link <?php echo $active['index']?>">Home</a></li>
                <li class="nav-item"><a href="work" class="nav-link <?php echo $active['work']?>">Works</a></li>
                <li class="nav-item ms-auto"><a href="about" class="nav-link <?php echo $active['about']?>">About Me</a></li>
            </ul>
        </div>
</nav>