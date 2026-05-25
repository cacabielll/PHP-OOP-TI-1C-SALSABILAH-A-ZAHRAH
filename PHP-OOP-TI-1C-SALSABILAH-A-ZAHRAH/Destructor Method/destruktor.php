<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct() {
    echo "Name: " . $this->name . ". Color: " . $this->color .".<br>";
  }
}

$apple = new Fruit('Apple', 'Red');
$banana = new Fruit('Banana', 'Yellow');

//membuat objek baru bernama $grape
$grape = new Fruit('Grape', 'Purple');
//mmembuat objek baru bernama $melon
$melon = new Fruit('Melon', 'Green');
?>
 
</body>
</html>
