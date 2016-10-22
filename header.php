<!--===============================================
= HAYO Mau ngapain Neken CTRl + U             =
= Buat Aplikasi Sendiri                       =
= By: Dion Arya Pamungkas                     =
= @DionArya_P fb.com/dion.aryapamungkas       =
=============================================== -->
<!DOCTYPE html>
<html lang="id">
<meta charset="utf-8">
<head>
  <title> <?php
     if (isset($_GET['nama_kamu']) && isset($_GET['nama_nya'])) {
       echo 'Ramalan Untuk '. $_GET['nama_kamu'] . " dan ". $_GET['nama_nya'];
     }else{
       echo "EmbahDap | Si peramal Cinta";
     }
   ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="gambar/favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 {
      background-color: #d11b82; /* Pink */
      color: #ffffff;
  }
  .bg-2 {
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 {
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 {
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
  <script type="text/javascript">
function validasi_input(form){
  function check_radio(radio)
 {
// memeriksa apakah radio button sudah ada yang dipilih
    for (i = 0; i < radio.length; i++)
    {
      if (radio[i].checked === true)
      {
        return radio[i].value;
      }
    }
   return false;
   }
   var radio_val = check_radio(form.kelamin, form.gender);
   if (radio_val === false)
    {
      alert("Cu Kamu Belum Memilih Jenis Kelamin!");
      return false;
    }
   return (true);
}
</script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://fb.com/dion.aryapamungkas">MbahDAP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://twitter.com/DionArya_P">Dibuat Oleh: Dion Arya Pamungkas</a></li>
      </ul>
    </div>
  </div>
</nav>
