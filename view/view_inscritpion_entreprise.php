<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription entreprise</title>

    <link rel="stylesheet" type="text/css" href="/style/inscription_entreprise.css">
</head>

<?php require('header.php'); ?>

<body>

<div class="wrapper">
    <div class="formulaire">
        <form name="inscriptionentreprise" method="post" action="#">
            <div id="partie1">
                <span class="titre"> Genre </span> <br/>
                <label><input type="radio" name="sexe" value="homme" class="option-input radio"/>Homme</label>
                <label><input type="radio" name="sexe" value="femme" class="option-input radio"/>Femme</label><br/>

                <span class="titre"> Civilité </span> <br/>
                <label> <input type="radio" name="civilite" value="M." class="option-input radio"/>M.</label>
                <label><input type="radio" name="civilite" value="Mlle" class="option-input radio"/> Mlle</label>
                <label><input type="radio" name="civilite" value="Mme" class="option-input radio"/> Mme</label> <br/>
            </div>

            <div id="coordonnées">
                    <input type="text" class="input" placeholder="Nom">
                    <input type="text" class="input" placeholder="Prénom">
                    <!--<input type="date" name="dateNaissance" class="dateNaissance">-->
                    <input type="text" class="input" placeholder="Nom de l'entreprise">
                    <input type="text" class="input" placeholder="Poste dans l'entreprise">
                    <input type="email" class="input" placeholder="Mail">
                    <input type="password" class="input" placeholder="Mot de passe">
                    <input type="password" class="input" placeholder="Confirmation du mot de passe">
            </div>
        <input type="submit" value="Valider mon inscription" id="submit">
        </form>
    </div>
</div>

</body>

<?php require('footer.php'); ?>

</html>