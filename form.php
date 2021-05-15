<?php include 'header.php' ?>
<main id="swup" class="transition-fade">
<content id='contactFormContent'>
    <form id='contactForm' form action="mailto:pecapel.dev@gmail.com" method="post" enctype="text/plain">
        <fieldset>
            <img src="source/img_form.jpg" id="formpicture">
            <div class='champ'>
                <label for='nom'>Nom: </label>
                <input type='text' id='nom' name='Nom' minlenght='2' maxlength='25' required>
            </div>
            <div class='champ'>
                <label for='prenom'>Prénom: </label>
                <input type='text' id='prenom' name='Prenom' minlenght='2' maxlength='25' required>
            </div>
            <div class='champ'>
                <label for='mail'>Votre adresse mail:</label>
                <input type='mail' id='mail' name='Email' required>
            </div>
            <div class='champ'>
                <label for='motif'> Pourquoi souhaitez vous me contacter?</label>
                <select id='motif' name='motif'>
                    <option value='don'>Compliments/Dons</option>
                    <option value='menace'>Insultes/Menaces</option>
                    <option value='error'>Signaler un problème technique</option>
                    <option value='autres'>Autres informations</option>
                </select>
                <div class='champ'>
                    <label for='text'>Ecrivez votre message:</label><br>
                    <textarea name='Message' palcehorder='Message' rows='10' cols='35' maxlength='500'></textarea>
                </div>
                <input type='submit' value='Envoyez'>
        </fieldset>
    </form>
</content>
</main>
<?php include 'footer.php' ?>
