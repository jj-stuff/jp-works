<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../config.php') ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Your Lie In April<?php echo TITLE ?></title>
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
                <p class='col-md-3 col-sm-12'>TV SHOW | 2014 FALL</p>
                <a class="col-9 d-none d-md-block line"></a>
            </div>
            <div class="row">
                <div class="title">
                    <h2>四月は君の嘘</h2>
                    <h4>Your Lie In April</h4>
                </div>
            </div>
        </header>

        <!-- YouTube -->
        <div class="row p-5 pt-2">
            <div class="col-12 youtube">
                <iframe src="https://www.youtube.com/embed/3aL0gDZtFbE" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>

        <!-- buttons -->
        <div class="row d-none d-md-block mt-5 pt-2">
            <div class="col-12 px-5 py-3 tab">
                <button class="btn tab_btn float-end" onclick="textswitch(event, 'char')">Characters</button>
                <button class="btn tab_btn float-end" onclick="textswitch(event, 'story')">Story</button>
                <button class="btn tab_btn float-end" onclick="textswitch(event, 'intro')" id="defualt">Indrotucton</button>
                

                <a href="https://anilist.co/anime/20665/Shigatsu-wa-Kimi-no-Uso/"
                class="btn btn-outline-secondary float-start" target="_blank">
                Anilist
                </a>
            </div>
        </div>
        <!-- content/cover/img -->
        <div class="p-5 pt-0 row">
            <div class="col-sm-12 col-md-6 cover-left">
                <img src="../img/april_cover.jpeg" width="100%" height="100%">
            </div>
            <div class="col-6 cover-right p-5 d-none d-md-block blur">
                <div class="tabcontent" id="intro">
                    <p>
                        <h3 class="title">INTRODUCTION</h3> <br>
                        Piano prodigy Arima Kousei dominated the competition and all child musicians knew his name. But after his mother, who was also his instructor, passed away, he had a mental breakdown while performing at a recital. This resulted in him no longer being able to hear the sound of his piano playing. Two years later, Kousei hasn’t touched the piano and views the world without any flair or color. He was content at living out his life with his good friends Tsubaki and Watari until, one day, a girl changed everything. Miyazono Kaori is a pretty, free spirited violinist whose playing style reflects her personality. Kaori helps Kousei return to the music world and show that it should be free and mold breaking unlike the structured and rigid style Kousei was used to.
                    </p>
                </div>
                <div class="tabcontent" id="story">
                    <p>
                        <h3 class="title">STORY</h3>
                        Fourteen-year-old piano prodigy Kōsei Arima becomes famous after winning several music competitions. When his mother Saki suddenly dies, Kōsei has a mental breakdown while performing at a piano recital; this results in him becoming unable to hear the sound of his piano, even though his hearing is otherwise unaffected. <br><br>

                        Two years later, Kōsei has not touched the piano and views the world in monochrome. He does not focus on excelling in any activities and often spends time with his friends Tsubaki Sawabe and Ryōta Watari. Kōsei meets Kaori Miyazono, an audacious, free-spirited, fourteen-year-old violinist whose playing style reflects her manic personality. Kaori helps Kōsei return to playing the piano and shows him his playing style can be free and groundbreaking. As Kaori continues to uplift Kōsei's spirits, he quickly realizes he loves her, although she seems to be interested in Ryōta.
                        <br><br>
                        During a performance, Kaori, who is anaemic and needs routine testing, collapses and is hospitalized. She invites Kōsei to play with her at a gala but she does not arrive. Her health deteriorates and she becomes dejected. Kōsei plays a duet with a friend, which motivates Kaori to attempt a risky potentially deadly surgery so she may possibly play with Kosei once more. While playing in the finals of the Eastern Japan Piano Competition, Kōsei sees Kaori's spirit accompanying him and realizes she has died during the surgery.
                    </p>
                </div>
                <div class="tabcontent" id="char">
                    <p>
                        <h3 class="title">CHARACTERS</h3>
                        Kousei Arima. voiced by Max Mittelman <br>
                        Kaori Miyazono. voiced by Erica Lindbeck <br>
                        Tsubaki Sawabe. voiced by Erica Mendez <br>
                        Ryota Watari. voiced by Kyle McCarley <br>
                    </p>
                </div>
            </div>
        </div>



        <!-- staff -->
        <div class="p-5 row">
            <!-- names -->
            <div class="row">
                <div class="col-6">
                    <b class="c__title">STAFF</b>
                    <p>
                        Original: Naoshi Arakawa "Monthly Shonen <br>
                        Magazine" serialized / Kodansha <br>
                        Director: Kyohei Ishiguro <br>
                        Series composition / Screenplay: Takao 
                        Yoshioka <br>
                        Character design / Animation director: 
                        Yukiko Aikei<br>
                        Prop design: Akira Takada<br>
                        Art setting: Yoshinori Shiozawa<br>
                        Art director: Hisayo Usui<br>
                        Color Design: Kazuko Nakajima<br>
                        3D Director: Ryuta Ono (Graphnicica)<br>
                        Photo: Norihiro Sekiya (Graphnicica)<br>
                        Editing: Akinori Mishima (Graphnicica)<br>
                        Acoustic Director: Hitoshi Aketagawa<br>
                        Music: Katsutoshi Yokoyama<br>
                        Animation Production: A-1 Pictures<br>
                        Production: "April is Your Lie "Production
                        Committee<br>
                    </p>
                </div>
            <div class="col-6">
                
                    <b class="c__title">CAST</b>
                    <p>
                        Kousei Arima. voiced by Max Mittelman <br>
                        Kaori Miyazono. voiced by Erica Lindbeck <br>
                        Tsubaki Sawabe. voiced by Erica Mendez <br>
                        Ryota Watari. voiced by Kyle McCarley <br>
                    </p>
                </div>

            </div>
            <p class="credits">© Naoshi Arakawa / Kodansha / "Your Lie in April" Production Committee</p>
        </div>
    </main>
    <?php include '../includes/footer.php'?>




    <script src="../js/info.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>