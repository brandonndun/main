<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/Asun-Logo-Header-250 copy.webp" type="image/x-icon">
</head>

<body> @include('navbar') <h1 style="text-align:center;margin-top:25px; font-family: quicksand"> Product</h1>
    <div style="padding-bottom:30px">
      <a class="btn btn-primary" href="/insertproduct" role="button" style="margin-left: 77% ;box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; width:12%; color:black; font-family: quicksand; border: none">Insert Produk Baru</a>
      <div class="button-insert-lama">

      </div>
    <div>
    <div class="row" style=" width:82% ; text-align:center ; margin-left:10% ;  padding-bottom: 50px; ">
      @foreach($product as $produk)
        <div class='col'>
            <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0%; width: 338px">
              <img class="card-img-top" src="/img/pancake.jpeg" alt="Card image cap" style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
              <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand">{{$produk -> nama_produk}}</h2>
              <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand; font-size: 18px;">{{$produk -> stock}}</h2>
              <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand; font-size: 18px">{{$produk -> Warehouse}}</h2>
              
    
    
              <div class="tombol">
    
                <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
                  <form action="/editproduct/{{$kota}}" method="post">
                    @csrf
                      <div class="col">
                        <input type="hidden" name="idproduk" value="{{$produk->id_produk}}"/>
                        <button type="submit" class="btn btn-primary" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none; font-family: quicksand">Edit</button>
                      </div>
                  </form>
                  <form action="/deleteproduk/{{$kota}}" method="post">
                    @csrf
                    <div class="col">
                    <input type="hidden" name="idproduk" value="{{$produk->id_produk}}"/>
                      <button type="submit" class="btn btn-primary" role="button" style="width:90% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none; font-family: quicksand">Delete</button>
                    </div>
                  </form>
              </div>
    
    
              <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
                <div class="col">
                  <form action="/addproduct/{{$kota}}" method="POST">
                    @csrf
                    <input type="hidden" name="idproduk" value="{{$produk->id_produk}}"/>
                    <input type="submit" class="btn btn-primary" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none; font-family: quicksand" value="Add">
                  </form>    
                </div>
    
                <div class="col">
                  <a class="btn btn-primary" href="/reduceproduct/{{$produk->id_produk}}" role="button"
                    style="width: 92%; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none; font-family: quicksand">Reduce</a>
                </div>
    
                <div class=" col">
                  <form action="/sendproduct" method="POST">
                    @csrf
                    <input type="hidden" name="idproduk" value="{{$produk->id_produk}}"/>
                    <input type="hidden" name="warehouse" value="{{$produk -> Warehouse}}"/>
                    <input class="btn btn-primary" type="submit" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none; font-family: quicksand" value="Send">
                  </form>
                </div>
              </div>
            </div>
    
    
      </div>  
    </div>
            @endforeach
    <footer class="page-footer font-large special-color-dark pt-4" style="margin-top : 100px;">

       


</footer>
<div class="codeboostrap">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
            integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>