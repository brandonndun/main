<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Product  - Durian Asun</title>
    <link rel="shortcut icon" href="img/Asun-Logo-Header-250.webp" type="image/x-icon">
</head>
<body>
@include("navbar")
    <div class="container">
        <h1 class="text-center mt-5" style="font-family:quicksand">Edit Product</h1>
        <div class="row" style="margin-top: -120px;">
            <div class="col">
                <img src="../img/image-gallery.png" alt="image-gallery.png" style="width: 50%; display: block; margin-left: auto; margin-right: auto; margin-top: 150px;">
                <label type="button" for ="myfile" class="btn d-flex justify-content-center align-middle" style="background-color: #D0F2A4; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none; align-items: center; position: absolute; left: 45%; margin-top: 46px;">Edit Photo</label>
                <input type="file" style="display:none" id="myfile" name="filefoto">
            </div>
            <div class="col" style="margin-top: 230px">
                <form action="/edit/{{$kota}}" method="POST">
                    @csrf
                    <input type="hidden" name="idproduk" value="{{$edit[0]->id_produk}}"/>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input name="nama" type="text" class="form-control" id="inputNama" style="background-color: #D0F2A4; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none;" placeholder="Nama Produk">
                    </div>
                </div>
                
                <button type="submit" class="btn d-flex justify-content-center align-middle" style="background-color: #D0F2A4; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none; margin-top: 106px; position: absolute; align-items: right; right: 19%;">Save</button>
                </form>
            </div> 
        </div>
    </div>
    
</body>
</html>