<?php
$age = 17;
$gender = 'homme';
$genderResult = ($gender == 'homme') ? 'un homme' : 'une femme';
$ageResult = ($age >= 18) ? 'majeur' : 'mineur';
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP 2.3</title>
  </head>
  <body>
    <p>
<?php
if ($age >0){
  echo 'Vous êtes ' . $genderResult . ' et vous êtes ' . $ageResult;
}else{
  echo 'Veuillez entrer un age valide';
}
 ?>
    </p>
  </body>
</html>
