<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Calculatrice</title>
    </head>
    <body>
        <h1>Une calculatrice en PHP</h1>
        <form action="" method="post">
            <input type="text" name="chiffre1" placeholder="0" />
            <input type="text" name="chiffre2" placeholder="0" />
            <input type="submit" name="addition" value="+" />
            <input type="submit" name="soustraction" value="-" />
            <input type="submit" name="multiplication" value="*" />
            <input type="submit" name="division" value="/" />
            <button type="submit">RAZ</button>
        </form>
        <p>Résultat : <?= calculate(); ?></p>
    </body>
</html>
<?php
function calculate() {
    if (isset($_POST['addition'])) {
        return (int)$_POST['chiffre1'] + (int)$_POST['chiffre2'];
    }
    if (isset($_POST['soustraction'])) {
        return (int)$_POST['chiffre1'] - (int)$_POST['chiffre2'];
    }
    if (isset($_POST['multiplication'])) {
        return (int)$_POST['chiffre1'] * (int)$_POST['chiffre2'];
    }
    if (isset($_POST['division'])) {
        return (int)$_POST['chiffre1'] / (int)$_POST['chiffre2'];
    }
}
?>