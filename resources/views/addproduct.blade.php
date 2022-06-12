<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add Product  - Durian Asun</title>
    <link rel="shortcut icon" href="img/Asun-Logo-Header-250 copy.webp" type="image/x-icon">
</head>
<body>
@include("navbar")
    <div class="container">
        <h1 class="text-center mt-5">Add Product</h1>
        <div class="row" style="">
            <div class="col">
                <img src="img/image-gallery.png" alt="image-gallery.png" style="width: 50%; display: block; margin-left: auto; margin-right: auto; ">
            </div>
            <div class="col" style="margin-top:50px">
                <form action="/add" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-auto">
                            <input type="text" name="nama" class="form-control" id="inputNama" style="background-color: #D0F2A4; width: 515px; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none; margin-bottom: 20px; color: grey;" value="{{$get_data_produk[0]->NAMA_PRODUK}}" disabled>
                            <input type="hidden" name="idproduk" value="{{$get_data_produk[0]->ID_PRODUK}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-3"><label for="inputSup" style="font-family : quicksand">Supplier : </label></div>
                        <div class="col-auto" style="">
                            <input type="text" name="supplier" class="form-control" id="inputSup" style="background-color: #D0F2A4; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none; width: 350px;" placeholder="" required>
                        </div>
                    </div>
                    <div class="dropdown row mt-3">
                        <div class="col-3">
                            <label for="dropdownMenuButton1" style="font-family : quicksand">Warehouse : </label>
                        </div>
                        <div class="col-auto">
                            <input class="btn btn-secon dropdown-toggle" type="search" name="Warehouse" list="dropdownMenuButton1"
                                aria-expanded="false" style="width: 173px; background-color: #D0F2A4; color: black; font-family : quicksand;border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none; width: 350px" placeholder="Nama Warehouse" required>
                            <datalist id="dropdownMenuButton1" class="dropdown dropdown-menu">
                                <option value="Jakarta">
                                <option value="Surabaya">
                                <option value="Bali">
                                <option value="Solo">
                            </datalist>   
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">
                            <label for="inputJumlah" class="col-form-label" style="font-family : quicksand">Jumlah :</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="jumlah" class="form-control" id="inputJumlah" style="background-color: #D0F2A4; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none; width: 350px;" placeholder="" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">
                            <label for="inputHarga" class="col-form-label" style="font-family : quicksand">Harga :</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="Harga" class="form-control" id="inputHarga" style="background-color: #D0F2A4; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none; width: 350px;" placeholder="" required>
                        </div>
                    </div>
                    <div class="dropdown row mt-3">
                        <div class="col-3">
                            <label for="dropdownMenuButton1" style="font-family : quicksand">Status Pembayaran : </label>
                        </div>
                        <div class="col-auto">
                            <input class="btn btn-secon dropdown-toggle" type="search" name="Pembayaran" list="dropdownStatus"
                                aria-expanded="false" style="width: 173px; background-color: #D0F2A4; color: black; font-family : quicksand;border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none; width: 350px" placeholder="Status Pembayaran" required>
                            <datalist id="dropdownStatus" class="dropdown dropdown-menu">
                                <option value="Lunas">
                                <option value="Belum Lunas">
                            </datalist>   
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight mt-4" style="margin-right: 120px">
                        <button type="button" class="btn d-flex justify-content-center align-middle" style="background-color: #D0F2A4; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none;">Cancel</button>
                        <input type="submit" style="background-color: #D0F2A4; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none; " class="btn d-flex justify-content-center align-middle me-3" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>