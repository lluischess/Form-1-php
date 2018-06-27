 <!DOCTYPE html>
 <html>
 <head>
    <title>Index</title>
 </head>
 <body>
    <?php 
         $Nom2 = "";
         $Nom2 = isset($_POST["Nom2"]) ? $_POST["Nom2"]:"";
     ?>
    <center>
    <form method="post" action="Form.php">
  <h2><legend>Index</legend></h2>
    Cliente:<br>
    <input type="text" name="Nom" value="<?php echo $Nom2;?>">
    <br><br>
    <input type="submit" value="Entrar">
  
</form>
</center>
 </body>
 </html>


 <?php 
 
?>