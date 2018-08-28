<?php
$age = 17;
if ($age <0){
  $conditionAge = 'Veuillez entrer un age valide';
}elseif ($age >= 18){
  $conditionAge  = 'Vous êtes majeur';
}else {
  $conditionAge = 'Vous êtes mineur';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>PHP 2.1</title>
</head>
<body>
  <p>
    <?php
echo $conditionAge;
     ?>
  </p>
</body>
</html>
