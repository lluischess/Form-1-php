 <!DOCTYPE html>
 <html>
 <head>
    <title>Formulari</title>
 </head>
 <body>
    <?php
    $Nom = $Cognom = $Nif = $Població = $postal = $naixement = $Telefon = $Sexe = $Estat = "";
    $Nom = isset($_POST["Nom"]) ? $_POST["Nom"]:"";
    $Cognom = isset($_POST["Cognom"]) ? $_POST["Cognom"]:"";
    $Nif = isset($_POST["Nif"]) ? $_POST["Nif"]:"";
    $Població = isset($_POST["Població"]) ? $_POST["Població"]:"";
    $postal = isset($_POST["postal"]) ? $_POST["postal"]:"";
    $naixement = isset($_POST["naixement"]) ? $_POST["naixement"]:"";
    $Telefon = isset($_POST["Telefon"]) ? $_POST["Telefon"]:"";
    $Sexe = isset($_POST["Sexe"]) ? $_POST["Sexe"]:"";
    $Estat = isset($_POST["Estat"]) ? $_POST["Estat"]:"";
    ?>
    <center>
    <form method="post" action="resumen.php">

   <h2><legend>Dades del client:</legend></h2>
   
    Nom:<br>
    <input type="text" name="Nom" value="<?php echo $Nom;?>" id="Nom">
    <br>
    Cognom:<br>
    <input type="text" name="Cognom" value="<?php echo $Cognom;?>" id="Cognom">
    <br>
    Nif:<br>
    <input type="text" name="Nif" value="<?php echo $Nif;?>" id="Nif">
    <br>
    Població:<br>
    <input type="text" name="Població" value="<?php echo $Població;?>" id="Població">
    <br>
    Codi postal:<br>
    <input type="text" name="postal" value="<?php echo $postal;?>" id="postal">
    <br>
    Data de naixement:<br>
    <input type="text" name="naixement" value="<?php echo $naixement;?>" id="naixement">
    <br>
    Telefon:<br>
    <input type="text" name="Telefon" value="<?php echo $Telefon;?>" id="Telefon">
    <br>
    <p>Sexe<br>
        <select name="Sexe" id="Sexe" value="<?php echo $Sexe;?>">
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
        </select>
    </p>
    <p>Estat civil<br>
        <select name="Estat" id="Estat" value="<?php echo $Estat;?>">
            <option value="0">Casat</option>
            <option value="1">Solter</option>
            <option value="2">vidu</option>
            <option value="3">Separat</option>
            <option value="4">Altres</option>
        </select>
    </p>
    <input type="submit" value="Guardar" action="resumen.php">
  
</form>
<form action="inicio.php">
    <input type="hidden" name="Nom2" value="<?php echo $Nom;?>">
    <input type="submit" value="Volver" action="inicio.php">
</form>
</center>
 </body>
 </html>


 <?php 
 
?>