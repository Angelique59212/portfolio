<body class="second-background">
<div id="contact">
    <div id="contact-container">
        <h1 id="about">Formulaire de Contact</h1>
        <form action="/?c=user&a=contact" method="post">
            <div>
                <label for="name"></label>
                <input type="text" id="name" name="name" placeholder="nom" required>

                <label for="mail"></label>
                <input type="email" name="mail" id="mail" placeholder="Entrez votre mail" required>

                <label for="message"></label>
                <textarea name="message" id="message" cols="30" rows="10" minlength="20" maxlength="250"
                          placeholder="Votre message (min 20 caractères, max 250)" required></textarea>

                <button id="btn-contact" class="btn btn-secondary" type="submit" name="submit">Envoyer</button>

            </div>
        </form>
    </div>
</div>
</body>
