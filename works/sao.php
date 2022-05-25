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
        @font-face {
            font-family: Motiva;
            src: url(../fonts/MotivaSansRegular.woff.ttf);
        }
        body {
            background: url(../img/bg_lyrics.jpeg);
            background-size: cover;
            background-attachment: fixed;
            background-color: rgb(33, 33, 33);
        }

        :root {
            --border-config: 2px solid white;
        }
        
        nav{
            display: block;
            position: relative !important;
        }

        .line {
            border-top: white 3px solid;
            margin-top: 9px;
        }


        .cover-right{
            border-top: var(--border-config);
            border-bottom: var(--border-config);
            border-right: var(--border-config);
        }

        .cover-left{
            padding: 0px;
        }

        .w-text{
            padding-top: 1.5em;
            font-weight: 400;
            font-size: 1rem;
            word-wrap: break-word;
            color: #eaeaea;
            text-align: center;
            font-family: Motiva;
        }

        .w-title{
            font-weight: bold;
        }

        .btn{
            margin: 0em 0.2em;
        }
    </style>
</head>

<body class="blur">
    <div class="overflow-hidden">
        <?php include "../includes/navbar.php" ?>
        <main class="container">
            <!-- header -->
            <header class="px-5 py-4">
                <div class="row">
                    <p class='col-md-3 col-sm-12'>MOVIE | 2022 AUTUMN</p>
                    <a class="col-9 d-none d-md-block line"></a>
                </div>
                <div class="row">
                    <div class="title text-center">
                        <h2>劇場版 ソードアート・オンライン －プログレッシブ－ 冥き夕闇のスケルツォ</h1>
                    </div>
                </div>
            </header>
            <!-- buttons -->
            <div class="row d-none d-md-block">
                <div class="col-12 text-end px-5 py-3">
                    <button class="btn-success btn">Indrotucton</button>
                    <button class="btn-primary btn">Story</button>
                    <button class="btn-danger btn">Characters</button>
                </div>
            </div>
            <!-- content/cover/img -->
            <div class="p-5 pt-0 row">
                <div class="col-sm-12 col-md-6 cover-left">
                    <img src="../img/DeepNight.jpg" width="100%" height="100%">
                </div>
                <div class="col-6 cover-right p-5 d-none d-md-block blur">
                    <p class="w-text">
                        <h3 class="w-title">STORY</h3>
                        This is the story of a time before Lightning Flash and the Black Swordsman were known by those names… 
                        <br><br>
                        Asuna Yuuki was a girl in the ninth grade who'd never had anything to do with online games when she accidentally put on the NerveGear that fateful day.<br><br>
                        The game master speaks.
                        This may be a game, but it's not something you play.
                        “Game Over” means you die in the real world.
                        <br><br>
                        Hearing this, the players are sent into a state of confusion, and pandemonium reigns in the game. One of these players is Asuna. Despite not even knowing the rules of this new world, she sets out on her journey to the floating steel castle of Aincrad, its apex not yet visible.
                        <br><br>
                        As she continues to live on in this world where death is always a step away, Asuna has a fateful encounter followed by a parting…
                        <br><br>
                        Despite being at the mercy of this strange reality, she fights on valiantly until someone appears before her: the solitary swordsman, Kirito…
                    </p>
                    <!-- <p class="w-text">
                        <h3 class="w-title">INTRODUCTION</h3>
                        The Sword Art Online light novel series (published by Dengeki Bunko) by Reki Kawahara, winner of the 15th Dengeki Novel Prize (Grand Prize).
                        Telling the tale of Kirito and his exploits inside the next-generation VRMMORPG, Sword Art Online, the series has enjoyed immense popularity ever since the first volume was published in April 2009, and as of 2021 has sold more than 26 million copies worldwide.
                        <br><br>
                        Season 1 of the anime first aired in 2012. Along with the four seasons that have been broadcast up to today (a total of 97 episodes*), the series has been adapted into various forms of media such as videogames and comics.
                        <br><br>
                        The hit film Sword Art Online the Movie -Ordinal Scale premiered in 2017 and grossed over 2.5 billion yen.
                        Sword Art Online Progressive is a reboot written by the original author himself, starting where it all began on Ainrcrad’s first floor, then expanding and going even deeper into the storyline.
                        <br><br>
                        This new Aincrad Arc, told by original creator Reki Kawahara through Asuna’s eyes, has been made into a feature-length film with all-new animation.
                        <br><br>
                        This may be a game, but it's not something you play…
                        <br><br>
                        “Game Over” means you die in the real world.
                        Sword Art Online, the death game where it all began,
                        will soon be released in movie theaters.
                    </p> -->
                </div>
            </div>
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