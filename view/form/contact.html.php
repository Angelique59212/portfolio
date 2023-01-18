<body class="second-background">
<div id="contact">
    <div id="contact-container">
        <h1 id="about">Formulaire de Contact</h1>
        <?php

        if (isset($_SESSION['message'])) {?>
        <?php
        unset($_SESSION['message']);
        }

        $_SESSION['mail'] = null;?>
        <form action="/?c=user&a=contact" method="post" id="form">
            <div>
                <label for="name"></label>
                <input type="text" id="name" name="name" placeholder="nom" required>

                <label for="mail"></label>
                <input type="email" name="mail" id="mail" placeholder="Entrez votre mail" required>

                <label for="message"></label>
                <textarea name="message" id="message" cols="30" rows="10" minlength="20" maxlength="250" placeholder="Votre message (min 20 caractères, max 250)" required></textarea>


                <button id="btn-contact" class="btn btn-secondary" type="submit" name="submit">Envoyer</button>
            </div>
        </form>
        <img src="/build/image/contact.jpg" alt="contact">
    </div>
</div>
<?php
if (isset($_SESSION['mail'])) {
            if ($_SESSION['mail'] === "mail-success") {?>
                <div class="message">
                    <p>Votre message a bien été envoyé.</p>
                    <button id="close">x</button>
                </div><?php
            }
            else {
                echo "Erreur lors de l'envoi";
            }
        }?>
</body>
