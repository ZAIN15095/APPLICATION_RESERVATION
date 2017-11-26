<html>
<head>
    <Title> Réservation </Title>
    <link rel="stylesheet" type="text/css" href="Style.css" media="screen" />
</head>
<body>
<form method="POST" action="index.php">
    <div id="wrapper">
        <h1 align="center">Réservation</h1>
        <table align="center">
            <tr>
                <td align="left">Le prix de la place est de 10 euros jusqu'à 12 ans et ensuite de 15 euros.</td>
            </tr>
            <tr>
                <td align="left">Le prix de l'assurance annulation est de 20 euros quel que soit le nombre de voyageurs.</td>
            </tr>
        </table>
        </p>
        <br>
        <table align="center"  bgcolor=#008CBA>
            <tr>
                <td colspan="2" align="left"> Destination  </td>
            </tr>
            <tr>
                <td colspan="2"> <input type="text" name="destination" maxlength="40" value='<?php if (isset($reservation))
                        echo $reservation->get_destination()?>' </td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php
                    if(isset($reservation)){
                        if($reservation->set_display_error(True) && ($reservation->get_destination()=="" || is_numeric($reservation->get_destination())||
                                $reservation->get_destination()==" " || !is_string($reservation->get_destination()) )){
                            echo "<error> Veuillez entrer une destination valide </error>";
                        }
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="left"> Nombre de place </td>
            </tr>
            <tr>
                <td colspan="2"> <input type="text" value='<?php if(isset($reservation) ) echo $reservation->get_number_places() ?>' name="number_places"/> </td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php
                    if(isset($reservation)){
                        if($reservation->set_display_error(True) && ($reservation->get_number_places()=="" || (int)($reservation->get_number_places())<=0 || (int)($reservation->get_number_places())>10)){
                            echo "<error> Il faut qu'il y ait minimum une place et maximum 10 places </error>";
                        }
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td align="left">Assurance</td>
                <td>
                    <?php
                    echo "<input type=\"checkbox\" name=\"insurance\" value=\"insurance\"";
                    if(isset($reservation) && $reservation->get_checkbox())
                    {
                        echo "verify";
                    }
                    echo "/>";
                    ?>
                </td>
            </tr>
        </table>
        <br>
        <table align="center">
            <tr>
                <td> <input type="submit" value="continuer" class="button" name="details"> </td>
                <td> <input type="submit" value="cancel" class="button" name="annuler"/> </td>
            </tr>
        </table>
    </div>
    <form>
</body>
</html>

