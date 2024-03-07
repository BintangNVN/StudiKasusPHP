<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
for ( $i=1; $i<=10; $i++ ){
  $hasil = $i * 1;

  echo $i . " x 1 = ". $hasil . "<br>";
}

echo "<br><br><br>";

for ( $b=1; $b <= 10; $b++ ){
  $hasil2 = $b * 2;

  echo$b . " x 2 = " . $hasil2 . "<br>";
}

echo "<br><br><br>";

for ( $x=1; $x <= 10; $x++ ){
  $hasil3 = $x * 3;

  echo$x . " x 3 = " . $hasil3."<br>";
}
?>

</body>
</html>