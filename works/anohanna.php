<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../config.php') ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <title>AnoHanna<?php echo TITLE ?></title>
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
                <p class='col-md-3 col-sm-12'>TV SHOW | 2022 SPRING</p>
                <a class="col-9 d-none d-md-block line"></a>
            </div>
            <div class="row">
                <div class="title text-center">
                    <h2>あの日見た花の名前を僕達はまだ知らない。</h2>
                    <h4>anohana: The Flower We Saw That Day</h4>
                </div>
            </div>
        </header>

        <!-- YouTube -->
        <div class="row p-5 pt-2">
            <div class="col-12 youtube">
                <iframe src="https://www.youtube.com/embed/DONLsQWdQzA" title="YouTube video player" frameborder="0"
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


                <a href="https://anilist.co/anime/9989/Ano-Hi-Mita-Hana-no-Namae-wo-Bokutachi-wa-Mada-Shiranai/"
                    class="btn btn-outline-secondary float-start" target="_blank">
                    Anilist
                </a>
            </div>
        </div>
        <!-- content/cover/img -->
        <div class="p-5 pt-0 row">
            <div class="col-sm-12 col-md-6 cover-left">
                <img src="../img/anohana.png" width="100%" height="100%">
            </div>
            <div class="col-6 cover-right p-5 d-none d-md-block blur">
                <div class="tabcontent" id="intro">
                    <p>
                        <h3 class="title">INTRODUCTION</h3> <br>
                        Jinta Yadomi and his group of childhood friends have become estranged after a tragic accident split them apart. Now in their high school years, a sudden surprise forces each of them to confront their guilt over what happened that day and come to terms with the ghosts of their past.
                    </p>
                </div>
                <div class="tabcontent" id="story">
                    <p>
                        <h3 class="title">STORY</h3>
                        In Chichibu, Saitama, a group of six sixth-grade-age childhood friends drift apart after one of them, Meiko "Menma" Honma, dies in an accident. Five years after the incident, the leader of the group, Jinta Yadomi, has withdrawn from society, does not attend high school, and lives as a recluse. One summer day, the ghost of an older-looking Menma appears beside him and asks to have a wish granted, reasoning that she cannot pass on into the afterlife until it is fulfilled. At first, he only tries to help her minimally because he thinks he is hallucinating. But since Menma does not remember what her wish is, Jinta gathers his estranged friends together once again, believing that they are the key to solving this problem. All of the group joins him, though most of them do so reluctantly. However, things grow increasingly complicated when his friends accuse him of not being able to get over Menma's death, as they cannot see her and believe Jinta is hallucinating. Menma shows her presence to the group in order to prove that she is indeed real. All the group members eventually wish to shoulder the blame for Menma's death and long-hidden feelings among the group are rekindled. The group struggles as they grow from trying to help Menma move on and help each other move on as well.
                    </p>
                </div>
                <div class="tabcontent" id="char">
                    <p>
                        <h3 class="title">CHARACTERS</h3><br>
                        Jintan (Jinta Yadomi): Miyu Irino<br>
                        Menma (Meiko Honma): Ai Kayano Anaru <br>
                        (Naruko Anjo): Haruka Tomatsu<br>
                        Yukiatsu (Yukiatsu): Takahiro Sakurai<br>
                        Tsuruko (Toriko Tsurumi): Saori Hayami<br>
                        Poppo ( Kukawa) Railroad): Takayuki Kondo<br>
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
                        Original: Super Peace Busters <br>
                        Director: Tatsuyuki Nagai<br>
                        Screenplay: Mari Okada<br>
                        Character Design / Animation Director:
                        Masayoshi Tanaka<br>
                        Music: REMEDIOS<br>
                        Art Director: Takaki Fukushima<br>
                        Color Setting: Kazuko Nakajima<br>
                        Shooting / CG Director: Shinji Nasu<br>
                        Shigeru Director: Hitoshi Akedagawa<br>
                        Animation Producer: Mikihiro Iwata<br>
                        Chief Producer: Hiroyuki Shimizu, Koji
                        Yamamoto (Fuji TV)<br>
                        Producers: Shunsuke Saito, Noriko Ozaki<br>
                        Production: A-1 Pictures<br>
                        Production: "Anohana" Production<br>
                        Committee (Aniplex / Fuji Television /
                        Dentsu) )<br>
                    </p>
                </div>
                <div class="col-6">
                    <b class="c__title">CAST</b>
                    <p>
                        Jintan (Jinta Yadomi): Miyu Irino<br>
                        Menma (Meiko Honma): Ai Kayano Anaru <br>
                        (Naruko Anjo): Haruka Tomatsu<br>
                        Yukiatsu (Yukiatsu): Takahiro Sakurai<br>
                        Tsuruko (Toriko Tsurumi): Saori Hayami<br>
                        Poppo ( Kukawa) Railroad): Takayuki Kondo<br>
                    </p>
                </div>

            </div>
            <p class="credits">©ANOHANA PROJECT</p>
        </div>
    </main>
    <?php include '../includes/footer.php'?>




    <script src="../js/info.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>