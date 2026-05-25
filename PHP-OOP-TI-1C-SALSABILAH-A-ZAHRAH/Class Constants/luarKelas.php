<!DOCTYPE html>
<html>
<body>

<?php
//membuat kelas Goodbye
class Goodbye {
    //mendefinisikan konstanta MESSAGE
    //konstanta adalah variabel yang nilainya tidak dapat diubah setelah didefinisikan
  const MESSAGE = "Thank you for visiting W3Schools.com!";
}

//diakses menggunakan nama kelas diikuti dengan operator cakupan lingkup (::) dan nama konstanta
echo Goodbye::MESSAGE;
?>

</body>
</html>
