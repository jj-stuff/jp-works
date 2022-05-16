<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>A-1 Pictures | フライドポテト</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            background: url(img/clouds.webp);
            background-size: cover;
            background-attachment: fixed;
            background-color: rgb(33, 33, 33);
        }
        
        .wrap{
            padding-top: calc(5.6rem - 3px);
        }
    </style>
</head>

<body class="blur">
    <div class="overflow-hidden">
        <?php include 'navbar.php'?>
        <div class="wrap">
        <main class='container bg-black bg-opacity-25'>
            
            <div class="row header ps-5 pt-5">
                <h1 class="fw-normal">Animations</h1>
            </div>

            <!-- First Row -->
            <section class="row p-5">
                <div class="media-card col-sm-6 col-md-3">
                    <a href="https://anilist.co/anime/140999/Sword-Art-Online-Progressive--Kuraki-Yuuyami-no-Scherzo/"><img src="img/DeepNight.jpg" alt class="w-100"></a>
                    <a href="https://anilist.co/anime/140999/Sword-Art-Online-Progressive--Kuraki-Yuuyami-no-Scherzo/" class="title">
                        <p>
                            Sword Art Online: Progressive
                        </p>
                    </a>
                </div>

                <div class="media-card col-sm-6 col-md-3">
                    <a href="https://anilist.co/anime/100182/Sword-Art-Online-Alicization/"><img src="img/alicization.jpg" alt class="w-100"></a>
                    <a href="https://anilist.co/anime/100182/Sword-Art-Online-Alicization/" class="title">
                        <p>Sword Art Online: Alicization </p>
                    </a>
                </div>

                <div class="media-card col-sm-6 col-md-3">
                    <a href="https://anilist.co/anime/20665/Shigatsu-wa-Kimi-no-Uso/"><img src="img/your-lie.png" alt class="w-100"></a>
                    <a href="https://anilist.co/anime/20665/Shigatsu-wa-Kimi-no-Uso/" class="title">
                        <p>
                            Shigatsu wa Kimi no Uso 
                        </p>
                    </a>
                </div>

                <div class="media-card col-sm-6 col-md-3">
                    <a href="https://anilist.co/anime/125367/Kaguyasama-wa-Kokurasetai-Ultra-Romantic/"><img src="img/kaguyasama_s3.jpg" alt class="w-100"></a>
                    <a href="https://anilist.co/anime/125367/Kaguyasama-wa-Kokurasetai-Ultra-Romantic/" class="title">
                        <p>Kaguya-sama wa Kokurasetai: Ultra Romantic</p>
                    </a>
                </div>
            </section>

            <!-- 2nd Row -->
            <section class="row p-5">
                <div class="media-card col-sm-6 col-md-3">
                    <a href="https://anilist.co/anime/21234/Boku-dake-ga-Inai-Machi/"><img src="img/erased.jpg" alt class="w-100"></a>
                    <a href="https://anilist.co/anime/21234/Boku-dake-ga-Inai-Machi/" class="title">
                        <p>
                            Boku dake ga Inai Machi 
                        </p>
                    </a>
                </div>
                <div class="media-card col-sm-6 col-md-3">
                    <a href="https://anilist.co/anime/97731/Shelter/"><img src="img/shelter.png" alt class="w-100"></a>
                    <a href="https://anilist.co/anime/97731/Shelter/" class="title">
                        <p>
                           Shelter
                        </p>
                    </a>
                </div>

                <div class="media-card col-sm-6 col-md-3">
                    <a href="https://anilist.co/anime/9989/Ano-Hi-Mita-Hana-no-Namae-wo-Bokutachi-wa-Mada-Shiranai/"><img src="img/anohana.png" alt class="w-100"></a>
                    <a href="https://anilist.co/anime/9989/Ano-Hi-Mita-Hana-no-Namae-wo-Bokutachi-wa-Mada-Shiranai/" class="title">
                        <p>
                            Ano Hi Mita Hana no Namae wo Bokutachi wa Mada Shiranai.
                        </p>
                    </a>
                </div>

                <div class="media-card col-sm-6 col-md-3">
                    <a href="https://anilist.co/anime/116589/86-Eighty-Six/"><img src="img/86.jpg" alt class="w-100"></a>
                    <a href="https://anilist.co/anime/116589/86-Eighty-Six/" class="title">
                        <p>
                            86: Eighty Six 
                        </p>
                    </a>
                </div>
            </section>
        </main>
        </div>
        <?php include 'footer.php'?>
    </div>

    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>