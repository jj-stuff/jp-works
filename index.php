<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showcase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="d-flex flex-column">
        <?php 
    // gets the current URI, remove the left / and then everything after the / on the right
    $directory = explode('/',ltrim($_SERVER['REQUEST_URI'],'/'));

    // loop through each directory, check against the known directories, and add class   
    $directories = array("index", "work","about"); // set home as 'index', but can be changed based of the home uri
    foreach ($directories as $folder){
    $active[$folder] = ($directory[0] == $folder)? "active":"noactive";
    }
    ?>
        <?php include 'navbar.php'?>
        <div>
            <section class="row" id='moon'>
                <div class="col-8">
                </div>
                <div class="col-4">
                    <img src="img/proud.jpeg" alt="">
                </div>
            </section>
            <section class="row bg-black">
                <div class="col-8 p-5" style="position: relative;">
                    <div class="d-sm-none d-md-block">
                        <h1>Airing</h1>
                        <h5>Kaguya-sama: Love Is War: Ultra Romantic</h5>
                        <p class="text-white-50">
                            The third season of Kaguya-sama: Love Is War, titled
                            , Kaguya-sama: Love Is War: Ultra Romantic, is a 2022 Japanese anime series, based
                            on the manga
                            series of the same title, written and illustrated by. It was announced on October 25, 2020
                            for
                            production
                            during the "Kaguya-sama Wants To Tell You On Stage" special event. The season premiered on
                            April
                            9, 2022, with returning staff and cast members. The opening theme is "Giri Giri" by Masayuki
                            Suzuki
                            featuring Suu from Silent Siren, while the ending theme is
                            "Heart wa Oteage" ("My Heart Does Not Know What to Do") by Airi Suzuki.
                        </p>
                    </div>
                    <button class="btn-primary">Anilist</button>
                </div>
                <div class="col-sm-12 col-md-4">
                    <img src="img/kaguyasama_s3.jpg" height="">
                </div>
            </section>
            <section class="row bg-black bg-opacity-50">
                <div class="col-4">
                    <img src="img/proud.jpeg" alt="">
                </div>
                <div class="col-8 text-right">
                    <h1>WOW somehting here</h1>
                </div>
            </section>
        </div>

        <?php include 'footer.html' ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
</body>

</html>