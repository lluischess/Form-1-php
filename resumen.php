 <!DOCTYPE html>
 <html>
 <head>
    <title>Resumen</title>
    <style type="error">.error{color: #ffffff;}</style>
    
 </head>
 <body>
    <center>
     <form method="post" action="Form.php">

   <h2><legend>Resum</legend></h2>
   <?php
   $Nom = $Cognom = $Nif = $Població = $postal = $naixement = $Telefon = $Sexe = $Estat = "";
    $Nom = isset($_POST["Nom"]) ? $_POST["Nom"]:"";
    $Cognom = isset($_POST["Cognom"]) ? $_POST["Cognom"]:"";
    $Nif = isset($_POST["Nif"]) ? $_POST["Nif"]:"";
    $Població = isset($_POST["Població"]) ? $_POST["Població"]:"";
    $postal = isset($_POST["postal"]) ? $_POST["postal"]:"";
    $naixement = isset($_POST["naixement"]) ? $_POST["naixement"]:"";
    $Telefon = isset($_POST["Telefon"]) ? $_POST["Telefon"]:"";
    $Sexe = array(0 => 'Hombre',
                    1 => 'Mujer');

    $Sexe = isset($_POST["Sexe"]) ? $_POST["Sexe"]:"";


    
    $Estat = isset($_POST["Estat"]) ? $_POST["Estat"]:"";
    ?>
    Nom:<br>
    <input type="text" name="Nom" value="<?php echo $Nom;?>" readonly>
    <br>
    Cognom:<br>
    <input type="text" name="Cognom" value="<?php echo $Cognom;?>" readonly>
    <br>
    Nif:<br>
    <input type="text" name="Nif" value="<?php echo $Nif;?>" readonly>
    <br>
    Població:<br>
    <input type="text" name="Població" value="<?php echo $Població;?>" readonly>
    <br>
    Codi postal:<br>
    <input type="text" name="postal" value="<?php echo $postal;?>" readonly>
    <br>
    Data de naixement:<br>
    <input type="text" name="naixement" value="<?php echo $naixement; ?>" readonly>
    <br>
    Telefon:<br>
    <input type="text" name="Telefon" value="<?php echo $Telefon; ?>" readonly>
    <br>
    Sexe:<br>
    <input type="text" name="Sexe" value="<?php echo $Sexe; ?>" readonly>
    <br>
    Estat civil:<br>
    <input type="text" name="Estat" value="<?php echo $Estat; ?>" readonly>
    <br><br>
    <input type="submit" value="Editar">
</form>
    </center>
 </body>
 </html>


