<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    <?php
     class Food{
      private $name;
      private $price;

      public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price= $price;
      }
     }

     class Animal{
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $price){
        $this->name = $name;
        $this->height =$height;
        $this->weight =$weight;
      }
     }
$food = new Food('potato', 250);
$animan= new Animal('dog', 60, 5000);

print_r($food . '<br>'. $animal);
    ?>

  </p>

</body>
</html>