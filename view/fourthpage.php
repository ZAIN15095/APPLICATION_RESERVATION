<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Confirmation </title>
    <meta content-type="text/html; charset=utf-8">
    <link href='view/css/style.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form method='POST' action="index.php">
<<<<<<< HEAD
    <div class="w3-padding w3-display-middle">
        <div class="container">
            <div class="w3-container">
                <p class="w3-jumbo w3-animate-fading" >Confirmation des réservations</p>
            </div>
            Votre demande a bien été enregistrée.
            Merci de bien vouloir verser <?php echo $reservation->getPrice() ?> euros sur le compte 000-000000-00.</br/></br>
            <div class="btn-group">
                <input type='submit' value="Retour à la page d'accueil" class="btn btn-primary" name='cancel'>
            </div>
        </div>
=======
    <div class="container">
    <h1>Confirmation des réservations</h1>
    Votre demande a bien été enregistrée.
    Merci de bien vouloir verser <?php echo $reservation->getPrice() ?> euros sur le compte 000-000000-00.<br />

        <div class="btn-group">
            <input type='submit' value="Retour à la page d'accueil" class="btn btn-primary" name='cancel'>
        </div>

    <input type='submit' value="Retour à la page d'accueil" class="button" name='cancel'>

>>>>>>> 8f5e7547b7c8489d1c92b82154966d4f948ba6ed
    </div>
</form>
</body>
</html>
