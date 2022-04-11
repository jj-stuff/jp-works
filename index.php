<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/starsil.svg">
    <title>A-1 Pictures | フライドポテト</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="overflow-hidden">
        <?php include 'navbar.php'?>
        <div>
            <section class="row" id='moon'>
                <div class="col-8">
                </div>
                <div class="col-4">
                </div>
            </section>
            
            <section class="row bg-black bg-opacity-25" id='sao'>
                <div class="col-sm-12 col-md-7">
                    <img src="img/progressive.png" alt="cover" class="image">
                </div>
                <div class="col-5 text-right d-none d-md-block" style="position: relative;">
                        <h1>SAO</h1>
                        <h5>Sword Art Online: Alicization</h5>
                        <p class="text-white-50">
                            The Soul Translator is a state-of-the-art full-dive interface which interacts with the
                            user's Fluctlight—the technological equivalent of a human soul—and fundamentally differs
                            from the orthodox method of sending signals to the brain. The private institute Rath aims to
                            perfect their creation by enlisting the aid of Sword Art Online survivor Kazuto Kirigaya. He
                            works there as a part-time employee to test the system's capabilities in the Underworld: the
                            fantastical realm generated by the Soul Translator. As per the confidentiality contract, any
                            memories created by the machine in the virtual world are wiped upon returning to the real
                            world. Kazuto can only vaguely recall a single name, Alice, which provokes a sense of unease
                            when mentioned in reality.
                        </p>
                        <a href="https://anilist.co/anime/124140/Sword-Art-Online-Progressive--Hoshinaki-Yoru-no-Aria/"
                            target="_blank"><img src="img/anilist.svg" class="btn-right" width="150px"></a>
                </div>
            </section>

            <section class="row bg-black" id='airing'>
                <div class="col-7 p-5 d-none d-md-block" style="position: relative;">
                        <h1>Airing</h1>
                        <h5>Kaguya-sama: Love Is War: Ultra Romantic</h5>
                        <p class="text-white-50">
                            The third season of Kaguya-sama: Love Is War, titled
                            , Kaguya-sama: Love Is War: Ultra Romantic, is a 2022 Japanese anime series, based
                            on the manga
                            series of the same title, written and illustrated by. It was announced on October 25, 2020
                            for
                            production
                            during the "Kaguya-sama Wants To Tell You On Stage" special event. The season premiered on
                            April
                            9, 2022, with returning staff and cast members. The opening theme is "Giri Giri" by Masayuki
                            Suzuki
                            featuring Suu from Silent Siren, while the ending theme is
                            "Heart wa Oteage" ("My Heart Does Not Know What to Do") by Airi Suzuki.
                        </p>
                        <a href="https://anilist.co/anime/125367/Kaguyasama-wa-Kokurasetai-Ultra-Romantic/"
                            target="_blank"><img src="img/anilist.svg" class="btn-left" width="150px"></a>
                </div>
                <div class="col-sm-12 col-md-5">
                    <img src="img/kaguyasama_s3.jpg" class="image float-end">
                </div>
            </section>
        </div>
        <?php include 'footer.html' ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
</body>

</html>