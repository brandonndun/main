<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="" href="send.css">
    <title>Send Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body style="overflow-x: hidden">
    @include("navbar")
    <h1 class="text-center mt-5">Send Product</h1>
    </div>

    <div class="gambar" style="display:flex">
        <div class="image">
            <img src="img/icon-image-512.webp" style="width : 500px; margin-left: 200px;" class="img-fluid" alt="...">
        </div>
        <div class="inputbox" style="display:flex; flex-direction: column;">
            <div class="form-nama-produk">
                <input type="nama produk " class="form-control"
                    style="width: 444px; border: solid; margin-left: 20px; margin-top: 120px; background-color:#D0F2A4; font-family : quicksand; border-radius: 26px; "
                    id="nama_produk" placeholder="Nama Produk :">
            </div>
            <div class="form-asal-warehouse">
                <input type="nama produk" class="form-control"
                    style="width: 444px; border: solid; margin-left: 20px; margin-top: 20px; background-color:#D0F2A4; font-family : quicksand; border-radius: 26px"
                    id="nama_produk" placeholder="Asal Warehouse :">
            </div>
            <div>
                <div class="dropdown">
                    <label for="" style="margin-top: 18px; margin-left: 42px; font-family : quicksand">Tujuan</label>
                    <button class="btn btn-secon dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false"
                        style="margin-top: 21px; margin-left: 197px; width: 173px; border-radius: 19px; background-color: #D0F2A4; color: black; font-family : quicksand; border: solid  ">Nama
                        Warehouse</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="#">Jakarta</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Surabaya</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Bali</a>
                        </li>
                    </ul>
                </div>
                <div class="jumlah"
                    style="align-items: center; display: flex; margin-left: 39px; font-family : quicksand ">
                    <label for="" style="margin-top: 10px">Jumlah</label>
                    <div class="jumlah">
                        <input type="jumlah" class="form-control"
                            style="width: 326px;; border: solid; margin-left: 52px; margin-top: 20px; background-color:#D0F2A4; border-radius: 26px"
                            id="jumlah">
                    </div>
                </div>
                <div class="button-cancel" style="display: flex; margin-top: 126px; margin-left: 141px">
                    <button type="button-cancel"
                        style="background-color: #D0F2A4; color:black; border: solid; font-family : quicksand; padding-top: 0px; font-size: 14px; margin-top: -34px; border-radius: 26px"
                        class="btn btn-secon btn-lg" enable>Cancel</button>
                </div>
                <div class="button-send" style="display: flex; margin-top: -51px; margin-left: 289px;">
                    <button type="button-send"
                        style="background-color: #D0F2A4; color: black; border: solid; font-family : quicksand; padding-top: 0px; font-size: 14px; margin-top: 16px; border-radius: 26px"
                        class="btn btn-secon btn-lg" enable>Send</button>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                    crossorigin="anonymous"></script>
                <!-- @include('footer') -->
                <!-- <div style="background-color:black; height: 40px;"> -->
                </div>
</body>
</html>