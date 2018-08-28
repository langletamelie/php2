<?php
$isOk = true;
if ($isOk == true)
{
  $isOk = 'c\'est ok !!';
}else {
  $isOk = 'C\'est pas bon !!!';
}
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>PHP 2.8</title>
</head>
<body>
  <p>
    <?php
    echo $isOk;
    ?>
  </p>
</body>
</html>
