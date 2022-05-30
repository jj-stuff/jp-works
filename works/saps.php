<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../config.php') ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Sword Art Online<?php echo TITLE ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo filemtime('../css/style.css'); ?>" />
    <link rel="stylesheet" href="../css/radio.css">
    <link rel="stylesheet" href="../css/works.css">
</head>

<style>
    .c__title {
        font-size: 1.6rem;

    }
</style>


<body class="blur">
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

        <!-- YouTube -->
        <div class="row p-5">
            <div class="col-12 youtube">
                <iframe src="https://www.youtube.com/embed/4Uv8VUYS5JQ" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>

        <!-- buttons -->
        <div class="row d-none d-md-block mt-5 pt-2">
            <div class="col-12 px-5 py-3 tab">
                <button class="btn tab_btn float-end" onclick="textswitch(event, 'char')">Characters</button>
                <button class="btn tab_btn float-end" onclick="textswitch(event, 'story')">Story</button>
                <button class="btn tab_btn float-end" onclick="textswitch(event, 'intro')"
                    id="defualt">Indrotucton</button>


                <a href="https://anilist.co/anime/124140/Sword-Art-Online-Progressive--Hoshinaki-Yoru-no-Aria/"
                    class="btn btn-outline-secondary float-start" target="_blank">
                    Anilist
                </a>
            </div>
        </div>
        <!-- content/cover/img -->
        <div class="p-5 pt-0 row">
            <div class="col-sm-12 col-md-6 cover-left">
                <img src="../img/DeepNight.jpg" width="100%" height="100%">
            </div>
            <div class="col-6 cover-right p-5 d-none d-md-block blur">
                <div class="tabcontent" id="intro">
                    <p>
                        <h3 class="title">INTRODUCTION</h3>
                        The Sword Art Online light novel series (published by Dengeki Bunko) by Reki Kawahara,
                        winner of the 15th Dengeki Novel Prize (Grand Prize).
                        Telling the tale of Kirito and his exploits inside the next-generation VRMMORPG, Sword Art
                        Online, the series has enjoyed immense popularity ever since the first volume was published
                        in April 2009, and as of 2021 has sold more than 26 million copies worldwide.
                        <br><br>
                        Season 1 of the anime first aired in 2012. Along with the four seasons that have been
                        broadcast up to today (a total of 97 episodes*), the series has been adapted into various
                        forms of media such as videogames and comics.
                        <br><br>
                        The hit film Sword Art Online the Movie -Ordinal Scale premiered in 2017 and grossed over
                        2.5 billion yen.
                        Sword Art Online Progressive is a reboot written by the original author himself, starting
                        where it all began on Ainrcrad’s first floor, then expanding and going even deeper into the
                        storyline.
                        <br><br>
                        This new Aincrad Arc, told by original creator Reki Kawahara through Asuna’s eyes, has been
                        made into a feature-length film with all-new animation.
                        <br><br>
                        This may be a game, but it's not something you play…
                        <br><br>
                        “Game Over” means you die in the real world.
                        Sword Art Online, the death game where it all began,
                        will soon be released in movie theaters.
                    </p>
                </div>
                <div class="tabcontent" id="story">
                    <p>
                        <h3 class="title">STORY</h3>
                        This is the story of a time before Lightning Flash and the Black Swordsman were known by
                        those names…
                        <br><br>
                        Asuna Yuuki was a girl in the ninth grade who'd never had anything to do with online games
                        when she accidentally put on the NerveGear that fateful day.<br><br>
                        The game master speaks.
                        This may be a game, but it's not something you play.
                        “Game Over” means you die in the real world.
                        <br><br>
                        Hearing this, the players are sent into a state of confusion, and pandemonium reigns in the
                        game. One of these players is Asuna. Despite not even knowing the rules of this new world,
                        she sets out on her journey to the floating steel castle of Aincrad, its apex not yet
                        visible.
                        <br><br>
                        As she continues to live on in this world where death is always a step away, Asuna has a
                        fateful encounter followed by a parting…
                        <br><br>
                        Despite being at the mercy of this strange reality, she fights on valiantly until someone
                        appears before her: the solitary swordsman, Kirito…
                    </p>
                </div>
                <div class="tabcontent" id="char">
                    <p>
                        <h3 class="title">CHARACTERS</h3>
                        KIRITO <br>
                        VA <br>
                        Yoshitsugu Matsuoka (JPN) / Bryce Papenbrook (ENG)
                        A boy who is swept up into the death game, Sword Art Online.
                        Despite his feminine facial features and slender silhouette, he boasts astonishing skill as
                        a fighter in SAO.
                        <br><br>
                        ASUNAASUNA YUUKI <br>
                        VA<br>
                        Haruka Tomatsu (JPN) / Cherami Leigh (ENG)
                        A girl who, like Kirito, is drawn into Sword Art Online.
                        Though she's pessimistic about ever being able to log out of the game, she resolves to fight
                        on thanks to her comrade-in-arms' encouraging words.
                        <br><br>
                        MITOMISUMI TOZAWA<br>
                        VA<br>
                        Inori Minase (JPN) / Anairis Quiñones (ENG)
                        A girl who loves games. Her classmate and one of the few friends she trusts is Asuna, who
                        she invites into the world of SAO.
                    </p>
                </div>
            </div>
        </div>



        <!-- staff -->
        <div class="p-5 row">
            <!-- names -->
            <div class="row">
                <div class="col-6">
                    <b class="c__title">CAST</b>
                    <p>
                        Kirigaya, Kazuto Kirigaya, Kazuto <br>
                        Matsuoka, Yoshitsugu <br>

                        Yuuki, Asuna Yuuki, Asuna <br>
                        Tomatsu, Haruka<br>

                        Tozawa, Misumi Tozawa, Misumi <br>
                        Minase, Inori<br>

                        Tsuboi, Ryoutarou Tsuboi, Ryoutarou<br>
                        Hirata, Hiroaki<br>

                        Ayano, Keiko Ayano, Keiko<br>
                        Hidaka, Rina<br>

                        Kayaba, Akihiko Kayaba, Akihiko<br>
                        Yamadera, Kouichi<br>
                    </p>
                </div>
                <div class="col-6">
                    <b class="c__title">STAFF</b>
                    <p>
                        Written by. Reki Kawahara(Dengeki Bunko) <br>
                        Original Illustration / Character Design Concept. abec. <br>
                        Director. Manabu Ono. <br>
                        Assistant Director. Takashi Sakuma. <br>
                        Character Design. Shingo Adachi. Go Suzuki. <br>
                        Chief Animation Directors. Go Suzuki. Yumiko Yamamoto. <br>
                        Prop Design. Asami Hayakawa. Kiminori Ito. <br>
                        Monster Design. Toshiya Kouno. <br>
                    </p>
                </div>
            </div>
            <p class="credits">©2020 川原 礫／KADOKAWA／SAO-P Project</p>
        </div>
    </main>
    <?php include '../includes/footer.php'?>




    <script src="../js/info.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>