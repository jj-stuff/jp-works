<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../config.php') ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Erased<?php echo TITLE ?></title>
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
                <p class='col-md-3 col-sm-12'>TV SHOW | 2016 WINTER</p>
                <a class="col-9 d-none d-md-block line"></a>
            </div>
            <div class="row">
                <div class="title ">
                    <h2>僕だけがいない街</h1>
                        <h3>ERASED</h3>
                </div>
            </div>
        </header>

        <!-- YouTube -->
        <div class="row p-5 pt-2">
            <div class="col-12 youtube">
                <iframe src="https://www.youtube.com/embed/DwmxEAWjTQQ" title="YouTube video player" frameborder="0"
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


                <a href="https://anilist.co/anime/21234/Boku-dake-ga-Inai-Machi/"
                    class="btn btn-outline-secondary float-start" target="_blank">
                    Anilist
                </a>
            </div>
        </div>
        <!-- content/cover/img -->
        <div class="p-5 pt-0 row">
            <div class="col-sm-12 col-md-6 cover-left">
                <img src="../img/bokumachi_cover.jpeg" width="100%" height="100%">
            </div>
            <div class="col-6 cover-right p-5 d-none d-md-block blur">
                <div class="tabcontent" id="intro">
                    <p>
                        <h3 class="title">INTRODUCTION</h3> <br>
                        Satoru Fujinuma is a 29 year old manga artist struggling to make a name for himself following
                        his debut. But, that was not the only thing in his life that Satoru was feeling frustrated
                        about… He has a unique supernatural ability of being forced to prevent deaths and catastrophes
                        by being sent back in time before the incident occurred, repeating time until the accident is
                        prevented. One day, he gets involved in an accident that has him framed as a murderer. Desperate
                        to save the victim, he sends himself back in time only to find himself as a grade-schooler one
                        month before fellow classmate Kayo Hinazuki went missing. Satoru now embarks on a new quest: to
                        save Kayo and solve the mystery behind her disappearance.
                    </p>
                </div>
                <div class="tabcontent" id="story">
                    <p>
                        <h3 class="title">STORY</h3>
                        29-year-old Satoru Fujinuma is sent back in time 18 years to prevent the events leading to his
                        mother's death, which began with a series of kidnappings while he was in 5th grade.
                        <br> <br>
                        Struggling manga author Satoru Fujinuma is beset by his fear to express himself. However, he has
                        a supernatural ability of being able to prevent deaths and casualties by being sent back in time
                        before an incident occurrs, repeating time until it is prevented. One day, he is involved with
                        an incident with his mother. Desperate to prevent the incident, he gets sent back in time only
                        to find himself as a grade-schooler. Satoru brings himself to a new journey; using his abilty to
                        prevent the past from changing into a deplorable future.
                        <br> <br>
                        A 29 year old man lives a quiet and peaceful life working at a pizza place when he is
                        experiencing a strange phenomenon he calls 'Revival'. When 'Revival' happens, Satoru Fujinuma is
                        brought back into the past where he must prevent an incident from happening. One day, he gets
                        falsely accused of the murder of his mother, and the phenomenon occurs, but this time he gets
                        sent back 18 years in the past which is during his elementary school period. With the mind of a
                        29 year old and the body of a child, he needs to find out what he must change to revoke this
                        accusation and get back to the present.
                    </p>
                </div>
                <div class="tabcontent" id="char">
                    <p>
                        <h3 class="title">CHARACTORS</h3> <br>
                        Satoru Fujinuma: Tao Tsuchiya Shinnosuke
                        Mitsushima<br>
                        Kayo Hinazuki: Aoi Yuki Airi<br>
                        Katagiri: Chinatsu Akasaki<br>
                        Kenya: Hiromi Taichi:
                        Akari Kito<br>
                        Osamu: Ayaka Nanase<br>
                        Kazu: Yukitoshi Kikuchi<br>
                        Jun: Hiroshi Mizushima<br>
                        Sachiko Fujinuma: Minami Takayama<br>
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
                        Original: Kei Sanbe (serialized in Young Ace) <br>
                        Director: Tomohiko Ito <br>
                        Series composition: Taku Kishimoto<br>
                        Character design: Keigo Sasaki<br>
                        Color design: Azusa Sasaki<br>
                        Art director: Masaru Sato<br>
                        Art setting: Hiroyuki Hasegawa<br>
                        Photo director: Toshiaki Aoshima<br>
                        CG director: Shinji<br>
                        Nasu : Shigeru Nishiyama<br>
                        Music: Yuki Kajiura<br>
                        Sound Director: Miwa Iwanami<br>
                        Animation Production: A-1 Pictures<br>
                    </p>
                </div>
                <div class="col-6">
                    <b class="c__title">CAST</b>
                    <p>
                        Satoru Fujinuma: Tao Tsuchiya Shinnosuke
                        Mitsushima<br>
                        Kayo Hinazuki: Aoi Yuki Airi<br>
                        Katagiri: Chinatsu Akasaki<br>
                        Kenya: Hiromi Taichi:
                        Akari Kito<br>
                        Osamu: Ayaka Nanase<br>
                        Kazu: Yukitoshi Kikuchi<br>
                        Jun: Hiroshi Mizushima<br>
                        Sachiko Fujinuma: Minami Takayama<br>
                    </p>
                </div>

            </div>
            <p class="credits">©2016 三部けい／KADOKAWA／アニメ「僕街」製作委員会</p>
        </div>
    </main>
    <?php include '../includes/footer.php'?>




    <script src="../js/info.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>