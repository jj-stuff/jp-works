<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../config.php') ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Shelter<?php echo TITLE ?></title>
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
                <p class='col-md-3 col-sm-12'>MUSIC VIDEO | 2016.10-</p>
                <a class="col-9 d-none d-md-block line"></a>
            </div>
            <div class="row">
                <div class="title text-start">
                    <h2>Shelter</h1>
                        <h6>シェルター</h6>
                </div>
            </div>
        </header>

        <!-- YouTube -->
        <div class="row p-5 pt-2">
            <div class="col-12 youtube">
                <iframe src="https://www.youtube.com/embed/fzQ6gRAEoy0" title="YouTube video player" frameborder="0"
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


                <a href="https://anilist.co/anime/97731/Shelter/" class="btn btn-outline-secondary float-start"
                    target="_blank">
                    Anilist
                </a>
            </div>
        </div>
        <!-- content/cover/img -->
        <div class="p-5 pt-0 row">
            <div class="col-sm-12 col-md-6 cover-left">
                <img src="../img/shelter_cover.jpg" width="100%" height="100%">
            </div>
            <div class="col-6 cover-right p-5 d-none d-md-block blur">
                <div class="tabcontent" id="intro">
                    <p>
                        <h3 class="title">INTRODUCTION</h3> <br>
                        ダンスミュージックシーンの若手代表にして日本カルチャーの影響を公言するクリエイター、ポーター・ロビンソンが盟友マデオンとの共作、さらにアニメーション・スタジオ「A-1
                        Pictures」とのコラボレーションで生み出した音楽と映像で伝える感動のストーリー！
                        <br><br>
                        Musician and producer, Porter Robinson, known for his emotional electronic music and a penchant
                        for incorporating iconic visuals in his work, presents his latest integration of both in
                        "Shelter" the video. A long time fan of Japanese pop culture, he teamed up with Japanese
                        animation powerhouse, "A-1 Pictures" to create a moving story for his shimmering new
                        collaborative single, "Shelter," with his close friend and fellow musician, Madeon.
                    </p>
                </div>
                <div class="tabcontent" id="story">
                    <p>
                        <h3 class="title">STORY</h3> <br>
                        未来的シミュレーターの中で孤独に暮らす少女・凛（リン）は、
                        毎日永遠の命が続く無限の美しいバーチャルリアリティーの世界で目を覚まし、タブレットを使ってシミュレーターを操作し、自分のための新世界を空想し創造しつづけている。しかし、現実世界の凛は実は昏睡状態にいて、その体は小さな宇宙船内のＶＲシミュレーター内に・・・
                        <br><br>
                        Rin, a 17-year-old girl, lives inside a futuristic simulator in infinite,
                        beautiful loneliness. Each day, she awakens in virtual reality to create a world for herself,
                        yet in real life, Rin’s comatose body floats through the universe, forever trapped inside a
                        virtual simulation she will never wake up from...
                    </p>
                </div>
                <div class="tabcontent" id="char">
                    <p>
                        <h2 class="title">CHARACTERS</h3> <br>
                        <h4>Rin</h4>
                        17歳の女の子。孤独の世界を退屈に感じ、外の世界を知りたいと思うようになる。そしてどうして自分はひとりなんだろうと。
                        <br><br>
                        A 17-year-old girl. Trapped in her beautiful, yet lonely days,
                        she begins to wonder about the outside world, and why she is all alone.
                        <br><br>
                        <h4>Shigeru</h4>
                        日本人科学者。
                        <br><br>
                        A Japanese scientist and engineer.
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
                        Original: Porter Robinson <br>
                        Music: Porter Robinson / Madeon<br>
                        Director: Toshifumi Akai<br>
                        Character design / animation director:
                        Megumi Kouno<br>
                        Color design: Kazuko Nakajima<br>
                        Art director: Yusuke Takeda<br>
                        Photo director: Yuya Sakuma<br>
                        Editing: Akinori Mishima (Graphnicica)<br>
                        Sound director: Fujita Akiko<br>
                        Sound production: HALF H ・ P STUDIO<br>
                        Animation production: A-1 Pictures<br>
                    </p>
                </div>
                <div class="col-6">
                    <b class="c__title">CAST</b>
                    <p>
                    Rin: Sachika Misawa
                    </p>
                </div>

            </div>
        </div>
    </main>
    <?php include '../includes/footer.php'?>




    <script src="../js/info.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>