<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../config.php') ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Kaguya-sama<?php echo TITLE ?></title>
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
                    <h2>かぐや様は告らせたい-ウルトラロマンティック-</h1>
                </div>
            </div>
        </header>

        <!-- YouTube -->
        <div class="row p-5 pt-2">
            <div class="col-12 youtube">
                <iframe src="https://www.youtube.com/embed/RN4FFgHpAZo" title="YouTube video player" frameborder="0"
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


                <a href="https://anilist.co/anime/125367/Kaguyasama-wa-Kokurasetai-Ultra-Romantic/"
                    class="btn btn-outline-secondary float-start" target="_blank">
                    Anilist
                </a>
            </div>
        </div>
        <!-- content/cover/img -->
        <div class="p-5 pt-0 row">
            <div class="col-sm-12 col-md-6 cover-left">
                <img src="../img/kg3_cover.jpeg" width="100%" height="100%">
            </div>
            <div class="col-6 cover-right p-5 d-none d-md-block blur">
                <div class="tabcontent" id="intro">
                    <p>
                        <h3 class="title">INTRODUCTION</h3>
                        The third season of Kaguya-sama: Love Is War, titled Kaguya-sama: Love Is War: Ultra Romantic,
                        is a 2022 Japanese anime series, based on the manga series of the same title, written and
                        illustrated by Aka Akasaka. It was announced on October 25, 2020 for production during the
                        "Kaguya-sama Wants To Tell You On Stage" special event. The season premiered on April 9, 2022,
                        with returning staff and cast members. The opening theme is "Giri Giri" by Masayuki Suzuki
                        featuring Suu from Silent Siren, while the ending theme is "Heart wa Oteage" ("My Heart Does Not
                        Know What to Do") by Airi Suzuki. In episode 5, the ending theme is "My Nonfiction" by Makoto
                        Furukawa and Konomi Kohara as their characters of Miyuki and Chika, respectively.
                    </p>
                </div>
                <div class="tabcontent" id="story">
                    <p>
                        <h3 class="title">STORY</h3>
                        The proudly privileged top two students of an elite school each makes it their mission to be the
                        first to extract a confession of love from the other.
                        <br><br>
                        Shuchiin Academy is home to students from Japan's most successful and wealthy families, as well
                        the nation's most brilliant young scholars. Among them, the Student Council President, Miyuki
                        Shirogane, and the Student Council Vice President, Kaguya Shinomiya, are the best of the best.
                        They would be perfect together, if not for their shared pride and narcissism. Two geniuses
                        develop over the top and clever schemes to try and get the other to confess their love first,
                        because to them, love is war, and the first to confess their feelings loses.
                        <br><br>
                        Considered a genius due to having the highest grades in the country, Miyuki Shirogane leads the
                        prestigious Shuchiin Academy's student council as its president, working alongside the beautiful
                        and wealthy vice president Kaguya Shinomiya. The two are often regarded as the perfect couple by
                        students despite them not being in any sort of romantic relationship. However, the truth is that
                        after spending so much time together, the two have developed feelings for one another;
                        unfortunately, neither is willing to confess, as doing so would be a sign of weakness. With
                        their pride as elite students on the line, Miyuki and Kaguya embark on a quest to do whatever is
                        necessary to get a confession out of the other. Through their daily antics, the battle of love
                        begins.
                        <br><br>
                        It is difficult to be a genius, other people believe that you are a superhuman and have no
                        problems. However, it is wrong. Kaguya Shinomiya and Miyuki Shirogane are these two geniuses,
                        who are the top students of the Shuchiin Academy. They both become members of the student
                        council and develop feeling for each other; yet, neither are willing to admit them. Kaguya-sama:
                        Love is War is a love story of Kaguya Shinomiya and Miyuki Shirogane; whoever makes a
                        declaration of love first- loses 'the war'.
                    </p>
                </div>
                <div class="tabcontent" id="char">
                    <p>
                        <h3 class="title">CHARACTERS</h3>
                        Kaguya Shinomiya. voiced by Alexis Tipton <br>
                        Miyuki Shirogane. voiced by Aaron Dismuke <br>
                        Chika Fujiwara. voiced by Jad Saxton <br>
                        Yu Ishigami. voiced by Austin Tindle <br>
                        Ai Hayasaka. ...<br>
                        Nagisa Kashiwagi. ...<br>
                        Tsubasa Tanuma. ...<br>
                        Miko Iino.
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
                        Original: Aka Akasaka (serialized in
                        Shueisha's "Weekly Young Jump")<br>
                        Director: Mamoru Hatakeyama
                        Series composition: Yasuhiro Nakanishi<br>
                        Character design: Yuko Yahiro<br>
                        Total animation director: Hiroshi Yamukai
                        Tetsuya Kawakami Koji Akitaka<br>
                        Prop design: Takayuki Kito<br>
                        Art director: Risa Wakabayashi<br>
                        Art setting: Hiroki Matsumoto, Yoshikiya
                        Hira<br>
                        Color design: Kanako Hokari<br>
                        Color design assistant Ayaka Murakami<br>
                        CG director: Hiroki Kuribayashi Animation<br>
                        director: Masaharu Okazaki<br>
                        Editing: Megumi Matsuhara<br>
                        Music: Yoshi Haoka<br>
                        Acoustic director: Hitoshi Aketagawa<br>
                        Production: A-1 Pictures<br>
                        Production: Kaguya The production
                        committee I want to tell you<br>
                    </p>
                </div>
                <div class="col-6">
                    <b class="c__title">CAST</b>
                    <p>
                        Kaguya Shinomiya. voiced by Alexis Tipton <br>
                        Miyuki Shirogane. voiced by Aaron Dismuke <br>
                        Chika Fujiwara. voiced by Jad Saxton <br>
                        Yu Ishigami. voiced by Austin Tindle <br>
                        Ai Hayasaka. ...<br>
                        Nagisa Kashiwagi. ...<br>
                        Tsubasa Tanuma. ...<br>
                        Miko Iino.
                    </p>
                </div>

            </div>
            <p class="credits">© Akasaka Aka / Shueisha / Kaguya-sama wants to tell the production committee<br>
                © 赤坂アカ／集英社・かぐや様は告らせたい製作委員会</p>
        </div>
    </main>
    <?php include '../includes/footer.php'?>




    <script src="../js/info.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>