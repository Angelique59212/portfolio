<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap');
    </style>
    <title>Portfolio</title>
</head>
<body><?php


function getMessages(string $type): void
{
    if (isset($_SESSION[$type])) { ?>
        <div class="message-<?= $type ?>">
            <p><?= $_SESSION[$type] ?></p>
            <button id="close">x</button>
        </div> <?php
        unset($_SESSION[$type]);
    }
}

// Error and success messages.
getMessages('error');
getMessages('success');?>

<header>
    <h1>Angélique Dehainaut</h1>
    <p>Développeuse Web FullStack</p>
    <p>Conceptrice Développeuse d'Application</p>
</header>

<div>
    <?= $html ?>
</div>

<footer class="frame">
    <a class="custom-btn" href="/index.php?c=home&a=home" id="more"><span>Click!</span><span>Accueil</span></a>
    <a class="custom-btn"  href="/index.php?c=user&a=about" id="more"><span id="btn1">Click!</span><span>A propos</span></a>
    <a class="custom-btn" id="more"><span>Click!</span><span>Compétences</span></a>
    <a class="custom-btn" id="more"><span>Click!</span><span>Projets</span></a>
    <a class="custom-btn" id="more"><span>Click!</span><span>Contact</span></a>
</footer>




<script src="/build/js/front-bundle.js"></script>
</body>
</html>




