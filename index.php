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

    <?php include 'navbar.html'?>
    <div class="main">
        <section class="row" style="background-image: url(img/moon1920.jpg);">
            <div class="col-8">
            </div>
            <div class="col-4">
                <img src="img/proud.jpeg" alt="">
            </div>
        </section>
        <section class="row bg-black">
            <div class="col-8 pt-5">
                <h2>Recent Work</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium et vel commodi dolorum beatae
                    earum
                    odio laborum eaque at, quae soluta a mollitia molestias quia quisquam. Rerum nihil molestiae dolore?
                </p>
            </div>
            <div class="col-4 p-5">
                <img src="img/clouds.jpg" height="500px">
            </div>
        </section>
        <section class="row bg-black bg-opacity-75">
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