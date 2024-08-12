<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10];

  // 昇順・降順の関数
        function sort_2way(&$array, $order) {
          if($order === TRUE) {
            echo "昇順にソートします。" . "<br>";
            sort($array);
          } else if($order === FALSE) {
            echo "降順にソートします。" . "<br>";
            rsort($array);
          }

          foreach ($array as $num) {
            echo $num . "<br>";
          }
        }

        // 昇順を画面に表示
        sort_2way($nums, TRUE);
        
        // 降順を画面に表示
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>