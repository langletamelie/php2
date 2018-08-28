<?php
$age = 24;
if ($age >= 18)
{
  $conditionAge  = 'Tu es majeur';
}else {
  $conditionAge = 'Tu n\'est pas majeur';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>PHP 2.6</title>
</head>
<body>
  <p>
    <?php
    echo $conditionAge;
    ?>
  </p>
</body>
</html>
