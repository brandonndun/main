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
    <link rel="shortcut icon" href="img/Asun-Logo-Header-250 copy.webp" type="image/x-icon">

<body style="overflow-x: hidden">
    @include("navbar")
    <h1 class="text-center mt-5">Send Product</h1>
    <form action="/sendtopencatatan" method="POST">
        @csrf
        <div class="gambar" style="display:flex">
            <div class="image">
            <img src="../img/pancake.jpeg" style="width : 350px; margin-left: 350px; margin-top: 61px;" class="img-fluid" alt="...">
            </div>
            <div class="inputbox" style="display:flex; flex-direction: column;">
                <div class="form-nama-produk">
                    <input type="name" class="form-control"
                        style="width: 444px; margin-left: 60px; margin-top: 85px; background-color:#D0F2A4; font-family : quicksand; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none; "
                        id="nama_produk" placeholder="Nama Produk :" value="{{$view_produk[0]->NAMA_PRODUK}}" disabled>
                        <input type="hidden" name="produk" value="{{$view_produk[0]->NAMA_PRODUK}}">
                        <input type="hidden" name="idproduk" value="{{$view_produk[0]->ID_PRODUK}}">
                </div>
                <div class="form-asal-warehouse">
                    <input type="name" class="form-control"
                        style="width: 444px; margin-left: 60px; margin-top: 20px; background-color:#D0F2A4; font-family : quicksand; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none;"
                        id="nama_produk" placeholder="Asal Warehouse :" value="{{$warehouse}}" disabled>
                        <input type="hidden" name="warehouse-asal" value="{{$warehouse}}">
                </div>
                <div>
                    <div class="dropdown row mt-3">
                        <div class="col-3">
                            <label for="dropdownMenuButton1" style="margin-top: 10px; margin-left: 77px; font-family : quicksand">Tujuan</label>
                        </div>
                        <div class="col-auto">
                            <input class="btn btn-secon dropdown-toggle" type="search" name="TujuanWarehouse" list="dropdownMenuButton1"
                                aria-expanded="false" style="margin-left: 48px;width: 320px; background-color: #D0F2A4; color: black; font-family : quicksand;border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none;" placeholder="Tujuan Warehouse" required>
                            <datalist id="dropdownMenuButton1" class="dropdown dropdown-menu">
                                <option value="Jakarta">
                                <option value="Surabaya">
                                <option value="Bali">
                                <option value="Solo">
                            </datalist>   
                        </div>
                    </div>
                    <div class="jumlah"
                        style="align-items: center; display: flex; margin-left: 39px; font-family : quicksand ">
                        <label for="" style="margin-top: 20px; margin-left: 38px">Jumlah</label>
                        <div class="jumlah">
                            <input type="number" class="form-control" name="jumlah"
                                style="width: 173px; border: solid; margin-left: 200px; margin-top: 20px; background-color:#D0F2A4; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none;"
                                id="jumlah">
                        </div>
                    </div>
                    
                    <div class="button-cancel" style="display: flex; margin-top: 126px; margin-left: 141px">
                        <button type="button-cancel"
                            style="background-color: #D0F2A4; color:black; font-family : quicksand; padding-top: 0px; font-size: 14px; height: 29px; margin-left: 283px; margin-top: -68px; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none;"
                            class="btn btn-secon btn-lg" enable>Cancel</button>
                    </div>
                    <div class="button-send" style="display: flex; margin-top: -51px; margin-left: 289px;">
                        <input type="submit" style="background-color: #D0F2A4; color: black;  font-family : quicksand; padding-top: 0px; font-size: 14px; height: 30px; margin-left: 59px; margin-top: -17px; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none;" class="btn btn-secon btn-lg" value="Send">
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                        crossorigin="anonymous"></script>
                    
                    <!-- <div style="background-color:black; height: 40px;"> -->
                </div>
            </div>
        </div>
    </form>
</body>

</html>