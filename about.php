<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('config.php') ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>A-1 Pictures | フライドポテト</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE;?>css/style.css?v=<?php echo filemtime('css/style.css'); ?>" />
</head>
<style>
    body {
        background-image: url(img/bg_introduction.jpeg);
        background-size: cover;
        background-attachment: fixed;
    }
</style>

<body>
    <div class="overflow-hidden">
    <?php include 'includes/navbar.php'?>
        <main>
            <section>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center p-5">
                        <img src="https://i.kym-cdn.com/entries/icons/facebook/000/035/644/juancover.jpg" alt="" class="p-5">
                    </div>
                </div>
            </section>
        </main>
    </div>
    
    <?php include 'includes/footer.php' ?>

    <script>
    var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
          var currentScrollPos = window.pageYOffset;
          if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
          } else {
            document.getElementById("navbar").style.top = "-150px";
          }
          prevScrollpos = currentScrollPos;
        };
    </script>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>