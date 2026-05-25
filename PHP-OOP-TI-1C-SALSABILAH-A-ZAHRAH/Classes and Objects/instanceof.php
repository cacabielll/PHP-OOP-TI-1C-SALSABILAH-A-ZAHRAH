<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;
}

$apple = new Fruit();
var_dump($apple instanceof Fruit);

$grape = new Fruit();
var_dump($grape instanceof Fruit);
?>
 
</body>
</html>
