<?php
$isOk = false;
if ($isOk == false)
{
  $isOk = 'C\'est pas bon !!!';
}else {
  $isOk = 'c\'est ok !!';
}
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>PHP 2.7</title>
</head>
<body>
  <p>
    <?php
    echo $isOk;
    ?>
  </p>
</body>
</html>
