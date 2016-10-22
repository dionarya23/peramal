<h1 style="padiing:20px; color: white; background-color: blue;">Hasil Ramalan nya</h1>
<?php

/*Membuat Koneksi Ke database dulu */
$host = 'localhost'; // || 127.0.0.1
$user = 'root';
$pass = '';
$db = 'latihan';

$link = mysqli_connect($host, $user, $pass, $db);
if ( !$link ) {
  die('ada eror '. mysqli_connect_error());
}


//untuk hasil ramalannya membuat fucntion untuk dipanggil kebawah
function untuk_dibawah($status){
  global $link;
  $angka_acak = rand(1,2);
  $query = "SELECT * FROM $status WHERE id=$angka_acak";
  $hasil = mysqli_query($link, $query);
if ( mysqli_num_rows($hasil) > 0){
  while ( $hasil_akhir = mysqli_fetch_assoc($hasil)) {
    echo $hasil_akhir['ramalanya'];
  }
}
}


// Hal Yang Pertama Kali kita buat
if (isset($_GET['Kirim'])) {
  $nama1 = $_GET['nama1'];
  $kelamin1 = $_GET['JK'];
  $nama2 = $_GET['nama2'];
  $kelamin2 = $_GET['Jenis_Kelamin'];
  $status = $_GET['jenis_status'];
 if ( $kelamin1 != $kelamin2 ){
   //function tadi kita pangiil kesini
untuk_dibawah($status);
}else{
  echo "Lgbt loh tobat";
}
}


mysqli_close($link);

 ?>
