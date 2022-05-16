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
</head>

<body>
    <div class="overflow-hidden">
        <?php include 'navbar.php'?>
        <main>
            <div class="row position-relative overflow-hidden">
                <div class="col-5 position-absolute text-right ps-5 d-none d-md-block" id="shelter-info">
                    <h1>Shelter</h1>
                    <h5>Music Video</h5>
                    <p class="text-white">
                        未来的シミュレーターの中で孤独に暮らす少女・凛（リン）は、
                        毎日永遠の命が続く無限の美しいバーチャルリアリティーの世界で目を覚まし、タブレットを使ってシミュレーターを操作し、自分のための新世界を空想し創造しつづけている。しかし、現実世界の凛は実は昏睡状態にいて、その体は小さな宇宙船内のＶＲシミュレーター内に・・・
                        <br>
                        <br>
                        Rin, a 17-year-old girl, lives inside a futuristic simulator in infinite,
                        beautiful loneliness. Each day, she awakens in virtual reality to create a world for
                        herself,
                        yet in real life, Rin's comatose body floats through the universe, forever trapped inside a
                        virtual simulation she will never wake up from...
                    </p>
                </div>

                <div class="position-absolute p-5 ms-auto">
                    <iframe id="shelter-vid" src="https://www.youtube.com/embed/fzQ6gRAEoy0" title="Shelter Music Video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        srcdoc="<style>
                        * {
                        padding: 0;
                        margin: 0;
                        overflow: hidden;
                        }
                        
                        body, html {
                          height: 100%;
                        }
                        
                        img, svg {
                          position: absolute;
                          width: 100%;
                          top: 0;
                          bottom: 0;
                          margin: auto;
                        }
                        
                        .pl {
                          filter: drop-shadow(1px 1px 10px hsl(206.5, 70.7%, 8%));
                          transition: all 150ms ease-in-out;
                          width: 7%;
                          margin-left: 45%
                        }
                        
                        body:hover .pl {
                          filter: drop-shadow(1px 1px 10px hsl(206.5, 0%, 10%));
                          transform: scale(1.15);
                        }


                      </style>
                      <a href='https://www.youtube.com/embed/fzQ6gRAEoy0?autoplay=1'>
                        <img src='https://img.youtube.com/vi/fzQ6gRAEoy0/maxresdefault.jpg'>
                        <img src='https://i.imgur.com/pgsdSOj.png' class='pl'>
                      </a>
                      " allowfullscreen>
                    </iframe>
                </div>

                <div class="bg">
                    <img src="img/shelter_bg.jpg" alt id="shelter">
                </div>
            </div>

            <div id="particles-js"></div>
            <section class="row" id='sao'>
                <div class="col-sm-12 col-md-6 px-5">
                    <div id="sliderShow" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner mx-auto">
                            <div class="carousel-item active">
                                <img src="img/progressive.png" alt="cover">
                            </div>
                            <div class="carousel-item">
                                <img src="img/progressive2.png" alt="cover">
                            </div>
                            <div class="carousel-item">
                                <img src="img/progressive3.png" alt="cover">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 text-right px-5 d-none d-md-block position-relative">
                    <img src="img/progressive_logo.png" style="width: 75%; padding: 4rem 0;">
                    <p class="text-grey">
                        This is the story of a time before Lightning Flash and the Black Swordsman were known by those
                        names…
                        <br>
                        <br>
                        Asuna Yuuki was a girl in the ninth grade who'd never had anything to do with online games when
                        she accidentally put on the NerveGear that fateful day.
                        <br>
                        <br>
                        The game master speaks.
                        This may be a game, but it's not something you play.
                        “Game Over” means you die in the real world.
                        <br>
                        <br>
                        Hearing this, the players are sent into a state of confusion, and pandemonium reigns in the
                        game. One of these players is Asuna. Despite not even knowing the rules of this new world, she
                        sets out on her journey to the floating steel castle of Aincrad, its apex not yet visible.
                        <br>
                        <br>
                        As she continues to live on in this world where death is always a step away, Asuna has a fateful
                        encounter followed by a parting…

                    </p>
                    <div class="pt-5">
                        <a href="https://anilist.co/anime/125367/Kaguyasama-wa-Kokurasetai-Ultra-Romantic/" class="btn btn-outline-secondary btn-lg">
                            Anilist
                        </a>
                    </div>
                </div>
            </section>

            <section class="row bg-black" id='kaguya'>
                <div class="col-6 p-5 d-none d-md-block position-relative">
                    <h1>Airing</h1>
                    <h5>Kaguya-sama: Love Is War: Ultra Romantic</h5>
                    <p class="text-white-50">
                        The third season of Kaguya-sama: Love Is War, titled
                        , Kaguya-sama: Love Is War: Ultra Romantic, is a 2022 Japanese anime series, based
                        on the manga
                        series of the same title, written and illustrated by.
                        <br>
                        <br>
                        It was announced on October 25, 2020
                        for
                        production
                        during the "Kaguya-sama Wants To Tell You On Stage" special event.
                        The season premiered on
                        April
                        9, 2022, with returning staff and cast members.
                        <br>
                        <br>
                        The opening theme is "Giri Giri" by Masayuki
                        Suzuki
                        featuring Suu from Silent Siren, while the ending theme is
                        "Heart wa Oteage" ("My Heart Does Not Know What to Do") by Airi Suzuki.
                    </p>
                    <div class="pt-5">
                        <a href="https://anilist.co/anime/125367/Kaguyasama-wa-Kokurasetai-Ultra-Romantic/" class="btn btn-outline-secondary btn-lg">
                            Anilist
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <img src="img/kaguyasama_s3.jpg" class="image float-end">
                </div>
            </section>

        </main>
        <?php include 'footer.php'?>
    </div>

    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>