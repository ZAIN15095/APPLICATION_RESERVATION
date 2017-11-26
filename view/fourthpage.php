<html>
<head>
    <meta charset="utf-8" />
    <link href='#' rel='stylesheet'>
    <title>Confirmation</title>
</head>
<body>
<form method='POST' action="index.php">
    <h1>Confirmation des réservations</h1>
    Votre demande a bien été enregistrée.
    Merci de bien vouloir verser <?php echo $reservation->getPrice() ?> euros sur le compte 000-000000-00.<br />
    <input type='submit' value="Retour à la page d'accueil" class="button" name='annuler'>
</form>
</body>
</html>
