<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP 基礎練習</title>
  </head>

  <body>
    <p>
      <?php 
        $scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

        $total = 0;
        foreach ($scores as $score) {
          $total += $score;
        }

        $count = count($scores);

        $average  = $total / $count;

        echo "合計:" . $total . "<br>";
        echo "平均:" . $average ."<br>";
      ?>
    </p>  
  </body>
</html>