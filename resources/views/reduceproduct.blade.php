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
    <link rel="shortcut icon" href="img/Asun-Logo-Header-250 copy.webp" type="image/x-icon">
</head>
<body style="overflow: hidden">
@include('navbar')
<form action = "/productreduce" method = "post">
  @csrf
<h1 class="text-center mt-5">Reduce Product</h1>
<div class="footer" style="bottom: -75px;position:absolute;width:-webkit-fill-available;">
</div>

  <div class="gambar" style="display:flex">
    <div class = "image">
    <img src="../img/icon-image-512.webp" style="width : 300px; margin-left: 285px;" class="img-fluid" alt="...">
    </div>

  <div class="inputbox" style="display:flex; flex-direction: column;">
    <div class="form-id-produk">
        <input readonly type="text" name="idproduk" class="form-control"value="{{$i[0]->ID_PRODUK}}" style="width: 444px; margin-left: 117px; margin-top: 52px; background-color:LightGray; font-family : quicksand; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none;" id="id_produk" placeholder="ID Produk :">
    </div>

    <div class="inputbox" style="display:flex; flex-direction: column;">
    <div class="form-nama-produk">
        <input readonly type="text" name="namaproduk" class="form-control"value="{{$i[0]->NAMA_PRODUK}}" style="width: 444px; margin-left: 117px; margin-top: 52px; background-color:#D0F2A4; font-family : quicksand; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none;" id="nama_produk" placeholder="Nama Produk :" required>
    </div>

    <div class="tujuan" style="align-items: center; display: flex; margin-left: 22px; font-family : quicksand ">
      <label for=""style="margin-top: 45px; margin-left: 100px">Warehouse Tujuan</label>
    <div class="tujuan">
        <!-- <input type ="text" name="keterangan" class="form-control" style="width: 326px; margin-left: 26px; margin-top: 21px; background-color:#D0F2A4; height: 100px; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none;" id="keterangan" required></textarea> -->
        <div class="col-auto">
                                <input class="btn btn-secon dropdown-toggle" type="search" name="Tujuan" list="dropdownMenuButton2"
                                    aria-expanded="false" style="width: 276px; margin-left: 26px; margin-top: 21px; background-color:#D0F2A4; height: 50px; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none;" placeholder="Warehouse Tujuan" required>
                                <datalist id="dropdownMenuButton2" class="dropdown dropdown-menu" name="tujuan">
                                    <option value="Bali">Bali
                                    <option value="Solo">Solo
                                    <option value="Surabaya">Surabaya
                                    <option value="Jakarta">Jakarta
                                </datalist>   
                            </div>
      </div>
      </div>

  <div class="jumlah" style="align-items: center; display: flex; margin-left: 39px; font-family : quicksand ">
      <label for=""style="margin-top: 30px; margin-left: 80px">Jumlah</label>
    <div class="jumlah">
        <input type="text" name="jumlah" class="form-control" style="width: 326px; margin-bottom: -40px; margin-left: 62px; background-color:#D0F2A4; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none;" id="jumlah" required>
    </div>
    </div>

  <div class="keterangan" style="align-items: center; display: flex; margin-left: 22px; font-family : quicksand ">
      <label for=""style="margin-top: 45px; margin-left: 100px">Keterangan</label>
    <div class="keterangan">
        <!-- <input type ="text" name="keterangan" class="form-control" style="width: 326px; margin-left: 26px; margin-top: 21px; background-color:#D0F2A4; height: 100px; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none;" id="keterangan" required></textarea> -->
        <div class="col-auto">
            <input class="btn btn-secon dropdown-toggle" type="search" name="Keterangan" list="dropdownMenuButton1"
             aria-expanded="false" style="width: 326px; margin-left: 26px; margin-top: 21px; background-color:#D0F2A4; height: 50px; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none;" placeholder="Keterangan" required>
           <datalist id="dropdownMenuButton1" class="dropdown dropdown-menu">
            <option value="Barang terjual">Barang terjual
              <option value="Barang rusak">Barang rusak                              
         </datalist>   
          </div>
      </div>

    </div>

    <div class="button-cancel" style= "display: flex; margin-top: 120px; margin-left: 141px">
    <a href ="/product" style="background-color: #D0F2A4; color:black; font-family : quicksand; padding-top: 0px; font-size: 14px; margin-top: -100px; height: 30px; margin-left: 340px; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none;" class="btn btn-secon btn-lg">Cancel</a>
    </div>

    <div class="button-reduce" style= "display: flex; margin-top: -83px; margin-left: 289px;">
    <a href ="/product"><button type="submit" style="background-color: #D0F2A4; color: black; font-family : quicksand; padding-top: 0px;font-size: 14px; margin-left: 82px; height: 30px; margin-top: -35px; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none;" class="btn btn-secon btn-lg" >Reduce</button ></a>
    </div>  
    @if(session()->has('error'))
                <script>
                    alert("Data berhasil di ubah");
                    </script>
                @endif
    </form>
    
</body>
</html>