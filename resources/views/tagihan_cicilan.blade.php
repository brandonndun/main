<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="" href="send.css"> 
    <title>Transaksi Tagihan Cicilan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/Asun-Logo-Header-250 copy.webp" type="image/x-icon">
  </head>
  <body style="overflow-x: hidden; margin-left:-65px;">
  @include("navbar")
    <div class="card-body" style="text-align: center; font-family : quicksand; margin-top: 29px">
      <h2 class="card-title">Transaksi Tagihan Cicilan</h2>
    </div>
    <div class="laporan-tagihan" style="width: 1179px;; border: solid; margin-left: 167px; margin-top: 51px; background-color: #57B846; padding: 75px; border-radius: 31px" id="laporan-tagihan">
      <div class="icon" style="position: relative; width: 20%; height: 10px">
        <img src="img/house-door.svg" style="height: 39px; margin-top: -57px">
        <h4 class="nama-reseller" style="margin-left: -50px; margin-top: -3px; font-family : quicksand">Nama Reseller</h4>
        <h4 class="tagihan" style="margin-left: 285px; margin-top: -111px; font-family : quicksand; white-space: nowrap">Tagihan</h4>
        <h4 class="angka" style="margin-left: 252px; margin-top: 44px; font-family : quicksand; white-space: nowrap">Rp 1.500.000</h4>
        <div style="width: 2px; height: 100px; position: absolute; background: black; margin-left: 432px; margin-top: -105px"></div>
        <h4 class="dibayar" style="margin-left: 489px; margin-top: -111px; font-family : quicksand; white-space: nowrap">Sudah Dibayar</h4>
        <h4 class="angka2" style="margin-left: 507px; margin-top: 44px; font-family : quicksand; white-space: nowrap">Rp 500.000</h4>
        <div style="width: 2px; height: 100px; position: absolute; background: black; margin-left: 708px; margin-top: -101px"></div>
        <h4 class="kekurangan-pembayaran" style="margin-left: 764px; margin-top: -111px; font-family : quicksand; white-space: nowrap">Kekurangan Pembayaran</h4>
        <h4 class="angka3" style="margin-left: 836px; margin-top: 44px; font-family : quicksand; white-space: nowrap; color: red">Rp 1.000.000</h4>
      </div>
    </div>
    <div class="riwayat-pembayaran" style="width: 1179px; border: solid; margin-left: 167px; margin-top: 72px; background-color: #DDF5D5; padding: 186px; border-radius: 31px; margin-bottom: 70px" id="riwayat-pembayaran">
      <div style="width: 1179px; height: 2px; position: absolute; background: black; margin-left: -188px; margin-top: -1px"></div>
      <div style="width: 1179px; height: 2px; position: absolute; background: black; margin-left: -188px; margin-top: 88px"></div>
      <h4 class="riwayat-pembayaran" style="margin-left: -162px; margin-top: -174px; font-family : quicksand">Riwayat Pembayaran</h4>
      <h4 class="pembayaran" style="margin-left: -162px; margin-top: 95px; font-family : quicksand">Pembayaran</h4>
      <h4 class="jatuh-tempo" style="margin-left: 93px; margin-top: -37px; font-family : quicksand">Jatuh Tempo</h4>
      <h4 class="dibayar" style="margin-left: 352px; margin-top: -37px; font-family : quicksand">Dibayar</h4>
      <h4 class="nominal" style="margin-left: 557px; margin-top: -37px; font-family : quicksand">Nominal</h4>
      <h4 class="metode" style="margin-left: 724px; margin-top: -37px; font-family : quicksand; white-space: nowrap">Metode Pembayaran</h4>
      <h4 class="jenis" style="margin-left: -162px; margin-top: 51px; font-family : quicksand">Uang Muka (DP)</h4>
      <h4 class="tanggal" style="margin-left: 98px; margin-top: -36px; font-family : quicksand">20/03/2002</h4>
      <h4 class="tanggal2" style="margin-left: 331px; margin-top: -36px; font-family : quicksand">20/03/2002</h4>
      <h4 class="nominal" style="margin-left: 540px; margin-top: -36px; font-family : quicksand">Rp 500.000</h4>
      <h4 class="metode" style="margin-left: 804px; margin-top: -36px; font-family : quicksand">Tunai</h4>
    </div>
    @include('footer')
  </body>
</html>