<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body> @include('navbar') <h1 style="text-align:center;margin-top:25px; font-family: quicksand"> Product</h1>
    <div style="padding-bottom:30px">
      <a class="btn btn-primary" href="insertproduct" role="button" style="margin-left: 82% ;background-color: #D0F2A4; width:6%; color:black; font-family: quicksand">Insert</a>
    </div>
    <div>
      <div class="row" style=" width:80% ; text-align:center ; margin-left:10% ;  padding-bottom: 50px;">
        <div class='col'>
          <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0% ;">
            <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap" style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
            <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>
            <div class="tombol">
              <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
                <div class="col">
                  <a class="btn btn-primary" href="editproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Edit</a>
                </div>
                <div class="col">
                  <a class="btn btn-primary" href="#" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Delete</a>
                </div>
              </div>
              <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
                <div class="col">
                  <a class="btn btn-primary" href="addproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Add</a>
                </div>
                <div class="col">
                  <a class="btn btn-primary" href="reduceproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Reduce</a>
                </div>
                <div class=" col">
                  <a class="btn btn-primary" href="sendproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Send</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='col'>
          <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0% ;">
            <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap" style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
            <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>
            <div class="tombol">
              <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
                <div class="col">
                  <a class="btn btn-primary" href="editproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Edit</a>
                </div>
                <div class="col">
                  <a class="btn btn-primary" href="#" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Delete</a>
                </div>
              </div>
              <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
                <div class="col">
                  <a class="btn btn-primary" href="addproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Add</a>
                </div>
                <div class="col">
                  <a class="btn btn-primary" href="reduceproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Reduce</a>
                </div>
                <div class=" col">
                  <a class="btn btn-primary" href="sendproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Send</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='col'>
          <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0% ;">
            <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap" style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
            <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>
            <div class="tombol">
              <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
                <div class="col">
                  <a class="btn btn-primary" href="editproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Edit</a>
                </div>
                <div class="col">
                  <a class="btn btn-primary" href="#" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Delete</a>
                </div>
              </div>
              <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
                <div class="col">
                  <a class="btn btn-primary" href="addproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Add</a>
                </div>
                <div class="col">
                  <a class="btn btn-primary" href="reduceproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Reduce</a>
                </div>
                <div class=" col">
                  <a class="btn btn-primary" href="sendproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Send</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="row" style=" width:80% ; text-align:center ; margin-left:10% ;  padding-bottom: 50px;">
        <div class='col'>
          <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0% ;">
            <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap" style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
            <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>
            <div class="tombol">
              <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
                <div class="col">
                  <a class="btn btn-primary" href="editproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Edit</a>
                </div>
                <div class="col">
                  <a class="btn btn-primary" href="#" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Delete</a>
                </div>
              </div>
              <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
                <div class="col">
                  <a class="btn btn-primary" href="addproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Add</a>
                </div>
                <div class="col">
                  <a class="btn btn-primary" href="reduceproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Reduce</a>
                </div>
                <div class=" col">
                  <a class="btn btn-primary" href="sendproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Send</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='col'>
          <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0% ;">
            <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap" style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
            <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>
            <div class="tombol">
              <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
                <div class="col">
                  <a class="btn btn-primary" href="editproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Edit</a>
                </div>
                <div class="col">
                  <a class="btn btn-primary" href="#" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Delete</a>
                </div>
              </div>
              <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
                <div class="col">
                  <a class="btn btn-primary" href="addproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Add</a>
                </div>
                <div class="col">
                  <a class="btn btn-primary" href="reduceproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Reduce</a>
                </div>
                <div class=" col">
                  <a class="btn btn-primary" href="sendproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Send</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='col'>
          <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0% ;">
            <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap" style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
            <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>
            <div class="tombol">
              <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
                <div class="col">
                  <a class="btn btn-primary" href="editproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Edit</a>
                </div>
                <div class="col">
                  <a class="btn btn-primary" href="#" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Delete</a>
                </div>
              </div>
              <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
                <div class="col">
                  <a class="btn btn-primary" href="addproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Add</a>
                </div>
                <div class="col">
                  <a class="btn btn-primary" href="reduceproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Reduce</a>
                </div>
                <div class=" col">
                  <a class="btn btn-primary" href="sendproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Send</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style=" width:80% ; text-align:center ; margin-left:10% ;  padding-bottom: 50px;">
      <div class='col'>
        <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0% ;">
          <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap" style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
          <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>
          <div class="tombol1">
            <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
              <div class="col">
                <a class="btn btn-primary" href="editproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Edit</a>
              </div>
              <div class="col">
                <a class="btn btn-primary" href="#" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Delete</a>
              </div>
            </div>
            <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
              <div class="col">
                <a class="btn btn-primary" href="addproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Add</a>
              </div>
              <div class="col">
                <a class="btn btn-primary" href="reduceproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Reduce</a>
              </div>
              <div class=" col">
                <a class="btn btn-primary" href="sendproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Send</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='col'>
        <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0% ;">
          <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap" style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
          <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>
          <div class="tombol2">
            <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
              <div class="col">
                <a class="btn btn-primary" href="editproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Edit</a>
              </div>
              <div class="col">
                <a class="btn btn-primary" href="#" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Delete</a>
              </div>
            </div>
            <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
              <div class="col">
                <a class="btn btn-primary" href="addproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Add</a>
              </div>
              <div class="col">
                <a class="btn btn-primary" href="reduceproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Reduce</a>
              </div>
              <div class=" col">
                <a class="btn btn-primary" href="sendproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Send</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='col'>
        <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0% ;">
          <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap" style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
          <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>
          <div class="tombol3">
            <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
              <div class="col">
                <a class="btn btn-primary" href="editproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Edit</a>
              </div>
              <div class="col">
                <a class="btn btn-primary" href="#" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Delete</a>
              </div>
            </div>
            <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
              <div class="col">
                <a class="btn btn-primary" href="addproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Add</a>
              </div>
              <div class="col">
                <a class="btn btn-primary" href="reduceproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Reduce</a>
              </div>
              <div class=" col">
                <a class="btn btn-primary" href="sendproduct" role="button" style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black;">Send</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>