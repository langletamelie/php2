<?php
$isEasy = false;
/*

if ($isEasy == true)
{
  $isEasy = 'C\'est facile !!';
}
else
{
  $isEasy = 'C\'est difficile!!!';
}
*/
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP 2.2</title>
  </head>
  <body>
    <p>
<?php
/*
echo $isEasy;
*/
echo $isEasy == true ? 'C\'est facile!!!' : 'C\'est difficile!!!';
// égale à echo $ifEasy != false ? 'c\'est facile' : 'c\'est pas ok';
 ?>
    </p>
  </body>
</html>
