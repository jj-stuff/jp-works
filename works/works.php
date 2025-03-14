<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../config.php') ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <title>WORKS<?php echo TITLE ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo filemtime('../css/style.css'); ?>" />
    <link rel="stylesheet" href="<?php echo BASE;?>css/radio.css">
    <style>
        body {
            background: url(../img/bg_lyrics.jpeg);
            background-size: cover;
            background-attachment: fixed;
            background-color: rgb(33, 33, 33);
        }
        
        nav{
            display: block;
            position: relative !important;
        }

        header h1{
            font-size: 3.5rem;
        }

        .sortfield{
            border: 2px whitesmoke solid;
        }
    </style>
</head>

<body class="blur">
    <div class="overflow-hidden">

        <?php include "../includes/navbar.php" ?>

        <main class='container' >
            <article class="row">
                <header class="ps-5">
                    <h1 class="fw-bold p-5">Works</h1>
                </header>
            <div class="content-left d-none d-md-flex col-md-2 ps-5 pt-5">
            </div>

            <aside class="content-right col-md-10 col-sm-12">
                <!-- First Row -->
                <section class="row p-5">
                    <div class="media-card col-sm-6 col-md-3">
                        <a href="saps"><img src="../img/DeepNight.jpg" alt class="w-100"></a>
                        <a href="saps"
                            class="title">
                            <p>
                                Sword Art Online: Progressive
                            </p>
                        </a>
                    </div>

                    <div class="media-card col-sm-6 col-md-3">
                        <a href="saps"><img
                                src="../img/alicization.jpg" alt class="w-100"></a>
                        <a href="saps" class="title">
                            <p>Sword Art Online: Alicization </p>
                        </a>
                    </div>

                    <div class="media-card col-sm-6 col-md-3">
                        <a href="kimiuso"><img src="../img/your-lie.png"
                                alt class="w-100"></a>
                        <a href="kimiuso" class="title">
                            <p>
                                Shigatsu wa Kimi no Uso
                            </p>
                        </a>
                    </div>

                    <div class="media-card col-sm-6 col-md-3">
                        <a href="kg3"><img
                                src="../img/kaguyasama_s3.jpg" alt class="w-100"></a>
                        <a href="kg3"
                            class="title">
                            <p>Kaguya-sama wa Kokurasetai: Ultra Romantic</p>
                        </a>
                    </div>
                </section>

                <!-- 2nd Row -->
                <section class="row p-5">
                    <div class="media-card col-sm-6 col-md-3">
                        <a href="bokumachi"><img src="../img/erased.jpg"
                                alt class="w-100"></a>
                        <a href="bokumachi" class="title">
                            <p>
                                Boku dake ga Inai Machi
                            </p>
                        </a>
                    </div>
                    <div class="media-card col-sm-6 col-md-3">
                        <a href="shelter"><img src="../img/shelter.png" alt
                                class="w-100"></a>
                        <a href="shelter" class="title">
                            <p>
                                Shelter
                            </p>
                        </a>
                    </div>

                    <div class="media-card col-sm-6 col-md-3">
                        <a
                            href="anohanna"><img
                                src="../img/anohana.png" alt class="w-100"></a>
                        <a href="anohanna"
                            class="title">
                            <p>
                                Ano Hi Mita Hana no Namae wo Bokutachi wa Mada Shiranai.
                            </p>
                        </a>
                    </div>

                    <div class="media-card col-sm-6 col-md-3">
                        <a href="86"><img src="../img/86.jpg" alt
                                class="w-100"></a>
                        <a href="86" class="title">
                            <p>
                                86: Eighty Six
                            </p>
                        </a>
                    </div>
                </section>
            </aside>
        </article>

        </main>

        <?php include '../includes/footer.php'?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
