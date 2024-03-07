<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function isLeapYear($year) {
        return ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0));
      }
      
      $data = [
        [
          'nama' => 'Andi',
          'tahun' => 2008,
        ],
        [
          'nama' => 'Beni',
          'tahun' => 2001,
        ],
        [
          'nama' => 'Dani',
          'tahun' => 2004,
        ],
        [
          'nama' => 'Eko',
          'tahun' => 2006,
        ]
      ];
      
      foreach ($data as $item) {
        $kabisat = isLeapYear($item['tahun'] ) ? "Lahir Pada Tahun Kabisat" : "Lahir BUKAN Pada Tahun Kabisat";
        echo "{$item['nama']}: {$item['tahun']} - {$kabisat}" . PHP_EOL. "<br>";
      }
      
    ?>
</body>
</html>