<?php require_once 'header.php' ?>
<?php
function gagal($LGBT, $judul){
global $nama1, $gender2, $nama2, $gender;
  echo '<div class="container-fluid bg-3 text-center">
    <h3 class="margin">'. $judul .'</h3><br>
    <div class="row">
      <div class="margin">
        <p>'. $LGBT .'</p>
        <img src="gambar/LGBT.jpg" class="img-responsive margin" style="width:100%" alt="Image">
      </div>
    </div>
  </div>';
}

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'embah';

$link = mysqli_connect($host, $user, $pass, $db);
if ( !$link ) {
  die('ada eror '. mysqli_connect_error());
}
function data($pengguna, $pasangan, $hubungan){
  global $link, $nama1, $nama2;
  $pengguna = mysqli_real_escape_string($link, $nama1);
  $pasangan = mysqli_real_escape_string($link, $nama2);
  $masuk = "INSERT INTO pengguna (nama, pasangan, status) VALUES ('$pengguna', '$pasangan', '$hubungan')";
if (mysqli_query($link, $masuk)){
  return true;
}else{
  return false;
}
}

function hasil($keterima){
  global $link, $nama1, $nama2;
  $angka = rand(1,10);
    $query = "SELECT * FROM $keterima WHERE id=$angka";
    $result = mysqli_query($link, $query);
if ( mysqli_num_rows($result) > 0) {
    while ( $data = mysqli_fetch_assoc($result) ){
      echo '<div class="container-fluid bg-3 text-center">
        <h3 class="margin"> Pesan embahDap '. $keterima .'....: </h3><br>
        <div class="row">
          <div class="margin">
            <p>'. $nama1 . " Nama kamu Kan? Dan nama dia adalah". $nama2. " Dengarkan ini ". $data['kata'] .'</p>
            <center>  <img src="gambar/Mutiara.jpg" class="img-responsive margin" style="width: 401px; height: 299px" alt="Image"></center>
            <form action="index.php">
            <input type="submit" value="KEMBALI KE BERANDA" class="btn btn-lg btn-primary">
            </form>
          </div>
        </div>
      </div>';
    }
}
}


if (isset($_GET['Kirim']) && isset($_GET['hubungan'])) {
  $nama1 = strip_tags(trim($_GET['nama_kamu']));
  $gender2 = strip_tags(trim($_GET['gender']));
  $nama2 = strip_tags(trim($_GET['nama_nya']));
  $gender = strip_tags(trim($_GET['kelamin']));
  $hubungan = strip_tags(trim($_GET['hubungan']));
if (data($nama1, $nama2, $hubungan)){
  if ($gender != $gender2){
hasil($hubungan);
}else{
  gagal('Waaah ternyata kamu seorang LGBT, website ini di program hanya untuk orang normal saja, tadi kamu memasukan ' . $nama1 . ' dan ' . $nama2 .
  ' dan juga jenis kelamin yang kamu masukan dua duanya adalah "' . $gender2 . " dan " . $gender. ' yang membuktikan bahwa kamu adalah golongan LGBT,
  bertobatlah cucu ku ajab tuhan sangat pedih <br>
  embahDap..', 'Peringatan Untukmu CUCUKU');
  }
  }
}else{
  echo '<div class="container-fluid bg-3 text-center">
    <h3 class="margin">Maaf CU Kamu Belum Memasukan Data dengan Lengkap</h3><br>
    <div class="row"
    <form action="index.php">
    <input type="submit" value="KEMBALI KE BERANDA" class="btn btn-lg btn-primary">
    </form>
    </div>';
}


mysqli_close($link);
?>

<?php require_once 'footer.php' ?>
