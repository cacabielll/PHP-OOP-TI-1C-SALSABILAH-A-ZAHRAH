<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;

  public function get_details() {
    echo "Name: " . $this->name . ".";
  }
}

$apple = new Fruit();
$apple->name = "Apple";
$apple->get_details();

//membuat objek baru bernama $banana
$banana = new Fruit();
$banana->name = "Banana";
$banana->get_details();

//membuat objek baru bernama $grape
$grape = new Fruit();
$grape->name = "Grape";
$grape->get_details();

//membuat objek baru bernama $melon
$melon = new Fruit();
$melon->name = "Melon";
$melon->get_details();
?>
 
</body>
</html>
