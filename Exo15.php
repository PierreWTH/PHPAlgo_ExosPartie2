<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une adresse e-mail a le bon format. </p>

<h2> Résultat </h2>

<?php

$email = "pierre.wietrich@gmail.fr";

 if (filter_var($email, FILTER_VALIDATE_EMAIL))
{

    echo "L'adresse ".$email. " est une adresse mail valide.";
}

else {

    echo "L'adresse ".$email. " n'est pas une adresse mail valide.";
}


?>
</body>
</html>

