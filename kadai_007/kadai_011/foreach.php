<?php 
  $products = ["name" => "玉ねぎ", "price" => 200, "place" => "北海道"];
  foreach ($products as $key => $value) {
    if ($key == "name") {
      echo "名前:" . $value; 
  } elseif ($key == "price") {
    echo "値段:" . $value;
  } elseif ($key == "place") {
    echo "産地:" . $value;
  } 
  echo "<br>";
}
?>