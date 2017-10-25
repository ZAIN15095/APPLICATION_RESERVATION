
<html>


<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="stylo.css" />
    <title>Réservation</title>
</head>

<body>

<div id="page_1">

    <form action="index.php"  method="post">

<h1>RESERVATION</h1>

<h3>Prix des places </h3>
<ul>
    <li> Moins de 12 ans = 10 euros </li>
    <li> Plus de 12 ans = 15 euros</li>
</ul>
<h4> Sachiez que le prix de l'assurance vous reviens à 20 euros quel que soit le nombre
    de voyageurs </h4>




<table><tr><td><div>
                <br> <label for="destination"> Destination
                    <input name="destination" id= "destination"

                    <?php
                        echo 'value="'.$destination->get_destination().'"';
                    ?>
                      </input> </label> <br/>




                <label for="palces"> Nombre de palces
                    <input type="number" id="places" name="places" min="0" max= "40"/>
                </label> <br/>



                <input type="checkbox" value="insurance" />
                <label> Assurance annulation <label> <br/>

            </div></td><tr></table>


<button type="submit" class="btn btn-primary" name="step_1"> Suivant</button>
<button name="destroy" class="btn btn-default"> Annulation</button>

</div>
</form>

</body>

</html>