<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Exercice 6 </h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>

<h2> Résultat </h2>

<select>
      <?php
      $elements = array("Monsieur", "Madame", "Mademoiselle");
      
    function alimenterListeDeroulante($elements){
      foreach($elements as $value){
      ?>
      <option value="<?php echo strtolower($value); ?>"><?php echo $value; 
      }
}

alimenterListeDeroulante($elements);
?>

</select>

</body>

</html>