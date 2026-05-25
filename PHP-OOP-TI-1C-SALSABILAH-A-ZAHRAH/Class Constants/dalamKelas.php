<!DOCTYPE html>
<html>
<body>

<?php
//membuat kelas Goodbye
class Goodbye {
    //mendefinisikan konstanta MESSAGE
    //konstanta adalah variabel yang nilainya tidak dapat diubah setelah didefinisikan
  const MESSAGE = "Thank you for visiting W3Schools.com!";

  //metode untuk menampilkan pesan menggunakan konstanta
  public function bye() {
    //mengakses konstanta menggunakan self:: di dalam kelas
    echo self::MESSAGE;
  }
}
//membuat objek baru dari kelas Goodbye
$goodbye = new Goodbye();

//memanggil metode bye untuk menampilkan pesan
$goodbye->bye();
?>

</body>
</html>
