<?php
$gender = 'homme';
if ($gender == 'homme')
{
  $genderResult = 'C\'est un développeur !!!';
}else{
  $genderResult = 'C\'est une développeuse !!!';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>PHP 2.5</title>
</head>
<body>
  <p>
    <?php
    echo $genderResult;
    ?>
  </p>
</body>
</html>
