<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

<h1>Test</h1>






<script src="/build/js/front-bundle.js"></script>
</body>
</html>