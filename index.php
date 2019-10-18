<!DOCTYPE html>
<html>
<title>&phi;ctional</title>
<meta charset="UTF-16">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="Homepage von Alexander Goetz: Hier entsteht irgendwann irgendwas">
<meta name="keywords" content="phictional, gilgamensch, st0ppelbart, backslashzero, Alexander Phi. Goetz, Alexander Goetz">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu+Mono">
<style>
    :root {
        --color-turquoise-2: #00fff5;
        /* img-sea */
        --color-olive-light: #d8ca9d;
        /* img-olivetree */
        --color-olive: #a09061;
        /* img-ceiling img-cliff */
        --color-sunset-orange: #d43e00;
        /* img-sunset */
        --color-orange: #ff8a30;
        /* img-gate */

        /* Background Images in Asset folder */
        --img-olivetree: url('/assets/olivetree-50.jpg');
        --img-sea: url('/assets/sea-50.jpg');
        --img-sunset: url('/assets/sunset-3-50.jpg');
        --img-ceiling: url('/assets/ceiling-50.jpg');
        --img-cliff: url('/assets/cliff-2-50.jpg');
        --img-gate: url('/assets/gate-2-50.jpg');

    }

    * {
        <?php $nmbr=rand(0, 5);
        $imgs=array("--img-olivetree", "--img-sea", "--img-sunset", "--img-ceiling", "--img-cliff", "--img-gate");
        $clrs=array("--color-olive-light", "--color-turquoise-2", "--color-sunset-orange", "--color-olive", "--color-olive", "--color-orange");

        echo "--color-highlight: var(".$clrs[$nmbr].");";
        echo "--img-background: var(".$imgs[$nmbr].");";
        ?>
    }

    body,
    h1 {
        font-family: "Raleway", sans-serif;
        text-shadow: 1px 1px 40px #000000;
    }

    body,
    html {
        height: 100%
    }

    .bgimg {
        background-color: dimgrey;
        background-image: var(--img-background);
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }

    .emp {
        font-family: roboto, monospaced;
        color: var(--color-highlight);
    }

    .icon:hover {
        color: var(--color-highlight);
    }

    .noselect {
        cursor: default;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

</style>


<body>

    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white noselect">
        <div class="w3-display-bottomleft w3-padding-large w3-xlarge">
            <span class="w3-tooltip">
                <img src="Logo.svg" alt="φctional Logo" class="icon" width="20" height="20"/>
                <span class="w3-text w3-small"><a href="impressum.html" style="text-decoration: none">Impressum &amp; Datenschutz</a></span>
            </span>
        </div>
        <div class="w3-display-middle" style="cursor:default">
            <h1 class="w3-jumbo w3-animate-top">&nbsp;<e class="emp">&phi;</e>ctional</h1>
            <hr class="w3-border-grey" style="margin:auto;width:40%">
            <p class="w3-large w3-center">Hier entsteht <e class="emp">irgend</e>wann <e class="emp">irgend</e>was</p>

        </div>
        <div class="w3-display-bottomright w3-padding-large w3-xlarge">
            <span id="Mail" class="icon w3-tooltip">
                <span class="w3-text"><a href="pgp-key.txt" target="_blank">
                        <i class="fas fa-key icon" title="PGP"></i></a></span>
                <a href="mailto:info@phictional.de"><i class="fas fa-envelope" title="Mail"></i></a></span>
            <a id="Twitter" class="icon" target="_tab" href="https://twitter.com/PhictionalOne">
                <i class="fab fa-twitter icon" title="Twitter"></i></a>
            <a id="mastodon" class="icon" target="_tab" rel="me" href="https://toot.kif.rocks/@phi">
                <i class="fab fa-mastodon icon" title="Mastodon"></i></a>
            <a id="Github" class="icon" target="_tab" href="https://github.com/PhictionalOne">
                <i class="fab fa-github icon" title="Github"></i></a>
        </div>
    </div>

</body>

</html>
