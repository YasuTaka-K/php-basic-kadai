<?php 
// foodクラス
class Food {
  private $name;
  private $price;

  // コンストラクタ
  public function __construct(string $name, int $price) {
    $this -> name = $name;
    $this -> price = $price;
  }

  // priceを出力するメソッド
  public function show_price() {
    echo $this -> price . "<br>";
  }
}

// animalクラス
class Animal {
  private $name;
  private $height;
  private $weight;

  // コンストラクタ
  public function __construct(string $name, int $height, int $weight) {
    $this -> name = $name;
    $this -> height = $height;
    $this -> weight = $weight;
  }

  // heightを出力するメソッド
  public function show_height() {
    echo $this -> height . "<br>";
  }
}

// food クラスオブジェクト作成
$potato = new Food("potato", 250);
print_r($potato);
echo "<br>";

// animalクラスオブジェクト作成
$dog = new Animal("dog", 60, 5000);
print_r($dog);
echo "<br>";

// priceとheightの表示
$potato -> show_price();
$dog -> show_height();
?>