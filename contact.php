
<?php $page = 'contact';
include('header.php'); ?>
    <main>
        <section class="contact">
            <div class="container">
                <h2>Nous contacter</h2>
                    <form method="post" action="form.php">
                        <div class="form_container">
                            <div class="form_first">
                                <div class="champ">
                                    <label for="nom">Votre nom</label>
                                    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom">
                                </div>
                                <div class="champ">
                                    <label for="mail">Votre e-mail</label>
                                    <input type="email" id="mail" name="mail" placeholder="Entrez votre adresse e-mail">
                                </div>
                            </div>
                            
                                <div class="champ">
                                    <label for="message">Votre message</label>
                                    <textarea name="message" placeholder="Tapez votre message"></textarea>
                                </div>
                         
                        </div>
                        <div class="champ btn_submit">
                                <input type="submit" value="Envoyer" class="submit">
                        </div>    
                    </form>
            </div>
        </section>
    </main>
<?php include('footer.php'); ?>