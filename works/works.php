<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../config.php') ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <title><?php echo TitleWork ?></title>
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
    </style>
</head>

<body class="blur">
    <div class="overflow-hidden">

        <?php include "../includes/navbar.php" ?>

        <main class='container' >
            <article class="row">
                <div class="header ps-5">
                    <h1 class="fw-bold p-5">Works</h1>
                </div>
            <div class="content-left d-none d-md-flex col-md-2 ps-5 pt-5">
                <div class='sortfield'>
                    <h3 class="fw-bold fs-2">Sort By</h3>
                    <form>
                        <label for="year" class='radio'>
                            <input type="radio" name="sort" id='year' class="radio__input">
                            <div class="radio__radio"></div>
                            YEAR
                        </label>
                        <label for="name" class='radio'>
                            <input type="radio" name="sort" id='name' class="radio__input">
                            <div class="radio__radio"></div>
                            NAME
                        </label>
                        <label for="pop" class='radio'>
                            <input type="radio" name="sort" id='pop' class="radio__input">
                            <div class="radio__radio"></div>
                            POPULARITY
                        </label>
                    </form>
                </div>
            </div>

            <aside class="content-right col-md-10 col-sm-12">
                <!-- First Row -->
                <section class="row p-5">
                    <div class="media-card col-sm-6 col-md-3">
                        <a href="sao"><img src="../img/DeepNight.jpg" alt class="w-100"></a>
                        <a href="https://anilist.co/anime/140999/Sword-Art-Online-Progressive--Kuraki-Yuuyami-no-Scherzo/"
                            class="title">
                            <p>
                                Sword Art Online: Progressive
                            </p>
                        </a>
                    </div>

                    <div class="media-card col-sm-6 col-md-3">
                        <a href="https://anilist.co/anime/100182/Sword-Art-Online-Alicization/"><img
                                src="../img/alicization.jpg" alt class="w-100"></a>
                        <a href="https://anilist.co/anime/100182/Sword-Art-Online-Alicization/" class="title">
                            <p>Sword Art Online: Alicization </p>
                        </a>
                    </div>

                    <div class="media-card col-sm-6 col-md-3">
                        <a href="https://anilist.co/anime/20665/Shigatsu-wa-Kimi-no-Uso/"><img src="../img/your-lie.png"
                                alt class="w-100"></a>
                        <a href="https://anilist.co/anime/20665/Shigatsu-wa-Kimi-no-Uso/" class="title">
                            <p>
                                Shigatsu wa Kimi no Uso
                            </p>
                        </a>
                    </div>

                    <div class="media-card col-sm-6 col-md-3">
                        <a href="https://anilist.co/anime/125367/Kaguyasama-wa-Kokurasetai-Ultra-Romantic/"><img
                                src="../img/kaguyasama_s3.jpg" alt class="w-100"></a>
                        <a href="https://anilist.co/anime/125367/Kaguyasama-wa-Kokurasetai-Ultra-Romantic/"
                            class="title">
                            <p>Kaguya-sama wa Kokurasetai: Ultra Romantic</p>
                        </a>
                    </div>
                </section>

                <!-- 2nd Row -->
                <section class="row p-5">
                    <div class="media-card col-sm-6 col-md-3">
                        <a href="https://anilist.co/anime/21234/Boku-dake-ga-Inai-Machi/"><img src="../img/erased.jpg"
                                alt class="w-100"></a>
                        <a href="https://anilist.co/anime/21234/Boku-dake-ga-Inai-Machi/" class="title">
                            <p>
                                Boku dake ga Inai Machi
                            </p>
                        </a>
                    </div>
                    <div class="media-card col-sm-6 col-md-3">
                        <a href="https://anilist.co/anime/97731/Shelter/"><img src="../img/shelter.png" alt
                                class="w-100"></a>
                        <a href="https://anilist.co/anime/97731/Shelter/" class="title">
                            <p>
                                Shelter
                            </p>
                        </a>
                    </div>

                    <div class="media-card col-sm-6 col-md-3">
                        <a
                            href="https://anilist.co/anime/9989/Ano-Hi-Mita-Hana-no-Namae-wo-Bokutachi-wa-Mada-Shiranai/"><img
                                src="../img/anohana.png" alt class="w-100"></a>
                        <a href="https://anilist.co/anime/9989/Ano-Hi-Mita-Hana-no-Namae-wo-Bokutachi-wa-Mada-Shiranai/"
                            class="title">
                            <p>
                                Ano Hi Mita Hana no Namae wo Bokutachi wa Mada Shiranai.
                            </p>
                        </a>
                    </div>

                    <div class="media-card col-sm-6 col-md-3">
                        <a href="https://anilist.co/anime/116589/86-Eighty-Six/"><img src="../img/86.jpg" alt
                                class="w-100"></a>
                        <a href="https://anilist.co/anime/116589/86-Eighty-Six/" class="title">
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

    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>