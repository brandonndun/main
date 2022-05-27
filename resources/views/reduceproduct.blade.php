<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="" href="reduce.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Reduce Product</title>
</head>
<body style="overflow: hidden">
@include('navbar')
<div class="footer" style="bottom: -75px;position:absolute;width:-webkit-fill-available;">
@include('footer')
</div>

  <div class="gambar" style="display:flex">
    <div class = "image">
    <img src="img/icon-image-512.webp" style="width : 500px; margin-left: 200px;" class="img-fluid" alt="...">
    </div>

  <div class="inputbox" style="display:flex; flex-direction: column;">
    <div class="form-nama-produk">
        <input type="nama produk" class="form-control" style="width: 444px; border: solid; margin-left: 20px; margin-top: 120px; background-color:#D0F2A4; font-family : quicksand; border-radius: 19px" id="nama_produk" placeholder="Nama Produk :">
    </div>

  <div class="jumlah" style="align-items: center; display: flex; margin-left: 39px; font-family : quicksand ">
      <label for=""style="margin-top: 18px">Jumlah</label>
    <div class="jumlah">
        <input type="jumlah" class="form-control" style="width: 326px;; border: solid; margin-left: 52px; margin-top: 20px; background-color:#D0F2A4; border-radius: 19px" id="jumlah">
    </div>
    </div>

  <div class="keterangan" style="align-items: center; display: flex; margin-left: 22px; font-family : quicksand ">
      <label for=""style="margin-top: 18px">Keterangan</label>
    <div class="keterangan">
        <textarea type ="text" class="form-control" style="width: 326px;; border: solid; margin-left: 40px; margin-top: 20px; background-color:#D0F2A4; height: 100px; border-radius: 19px" id="keterangan"></textarea>
    </div>
    </div>

    <div class="button-cancel" style= "display: flex; margin-top: 126px; margin-left: 141px">
    <button type="button-cancel" style="background-color: #D0F2A4; color:black; border: solid; font-family : quicksand; padding-top: 0px; font-size: 14px; margin-top: -34px; margin-left: 13px; border-radius: 19px" class="btn btn-secon btn-lg" enable>Cancel</button>
    </div>

    <div class="button-reduce" style= "display: flex; margin-top: -63px; margin-left: 289px;">
    <button type="button-reduce" style="background-color: #D0F2A4; color: black; border: solid; font-family : quicksand; padding-top: 0px; margin-top: 7px; font-size: 14px; margin-top: 15px; border-radius: 19px" class="btn btn-secon btn-lg" enable>Reduce</button >
    </div>  
</body>
</html>