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

<body>

    @include('navbar')

    <h1 style="text-align:center;margin-top:25px; font-family: quicksand"> Product</h1>
    <div style="padding-bottom:30px">
    <a class="btn btn-primary" href="insertproduct" role="button"
    style="margin-left: 82% ;box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; width:6%; color:black; font-family: quicksand; border: none">Insert</a>
    </div>

    <div>
        <div class="row" style=" width:80% ; text-align:center ; margin-left:10% ;  padding-bottom: 50px;">
    
            <div class='col'>
                <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0% ;">
                    <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap"
                        style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
                    <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>
    
    
                    <div class="tombol">
    
                        <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
    
                            <div class="col">
                            <a class="btn btn-primary" href="editproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Edit</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="#" role="button"
                            style="width:90% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Delete</a>
                            </div>
                        </div>
    
    
                        <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
                            <div class="col">
                            <a class="btn btn-primary" href="addproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Add</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="reduceproduct" role="button"
                            style="width: 92%; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Reduce</a>
                            </div>
    
                            <div class=" col">
                            <a class="btn btn-primary" href="sendproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Send</a>
                            </div>
                        </div>
    
                    </div>
    
    
                </div>
            </div>
            
    
            <div class='col'>
            <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0% ;">
                    <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap"
                        style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
                    <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>
    
    
                    <div class="tombol">
    
                        <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
                        
                        <div class="col">
                            <a class="btn btn-primary" href="editproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Edit</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="#" role="button"
                            style="width:90% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Delete</a>
                            </div>
                        </div>
    
    
                        <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
                            
                        <div class="col">
                            <a class="btn btn-primary" href="addproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Add</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="reduceproduct" role="button"
                            style="width: 92%; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Reduce</a>
                            </div>
    
                            <div class=" col">
                            <a class="btn btn-primary" href="sendproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Send</a>
                            </div>
                        </div>
    
                    </div>
    
    
                </div>
            </div>
    
            <div class='col'>
            <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0% ;">
                    <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap"
                        style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
                    <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>
    
    
                    <div class="tombol">
    
                        <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
    
                        <div class="col">
                            <a class="btn btn-primary" href="editproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Edit</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="#" role="button"
                            style="width:90% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Delete</a>
                            </div>
                        </div>
    
    
                        <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
                            <div class="col">
                            <a class="btn btn-primary" href="addproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Add</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="reduceproduct" role="button"
                            style="width: 92%; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Reduce</a>
                            </div>
    
                            <div class=" col">
                            <a class="btn btn-primary" href="sendproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Send</a>
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
                    <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap"
                        style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
                    <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>
    
    
                    <div class="tombol">
    
                        <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
    
                        <div class="col">
                            <a class="btn btn-primary" href="editproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Edit</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="#" role="button"
                            style="width:90% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Delete</a>
                            </div>
                        </div>
    
    
                        <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
                            <div class="col">
                            <a class="btn btn-primary" href="addproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Add</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="reduceproduct" role="button"
                            style="width: 92%; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Reduce</a>
                            </div>
    
                            <div class=" col">
                            <a class="btn btn-primary" href="sendproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Send</a>
                            </div>
                        </div>
    
                    </div>
    
    
                </div>
            </div>
    
            <div class='col'>
            <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0% ;">
                    <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap"
                        style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
                    <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>
    
    
                    <div class="tombol">
    
                        <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
    
                        <div class="col">
                            <a class="btn btn-primary" href="editproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Edit</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="#" role="button"
                            style="width:90%; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Delete</a>
                            </div>
                        </div>
    
    
                        <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
                            <div class="col">
                            <a class="btn btn-primary" href="addproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Add</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="reduceproduct" role="button"
                            style="width: 92%; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Reduce</a>
                            </div>
    
                            <div class=" col">
                            <a class="btn btn-primary" href="sendproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Send</a>
                            </div>       
                        </div>
    
                    </div>
    
    
                </div>
            </div>
    
            <div class='col'>
            <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0% ;">
                    <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap"
                        style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
                    <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>
    
    
                    <div class="tombol">
    
                        <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
    
                        <div class="col">
                            <a class="btn btn-primary" href="editproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Edit</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="#" role="button"
                            style="width:90% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Delete</a>
                            </div>
                        </div>
    
    
                        <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
                            <div class="col">
                            <a class="btn btn-primary" href="addproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Add</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="reduceproduct" role="button"
                            style="width: 92%; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Reduce</a>
                            </div>
    
                            <div class=" col">
                            <a class="btn btn-primary" href="sendproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Send</a>
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
                    <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap"
                        style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
                    <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>


                <div class="tombol1">

                    <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">

                    <div class="col">
                            <a class="btn btn-primary" href="editproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Edit</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="#" role="button"
                            style="width:90%; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Delete</a>
                            </div>
                        </div>
    
    
                        <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
                            <div class="col">
                            <a class="btn btn-primary" href="addproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Add</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="reduceproduct" role="button"
                            style="width: 92%; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Reduce</a>
                            </div>
    
                            <div class=" col">
                            <a class="btn btn-primary" href="sendproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Send</a>
                            </div>
                    </div>

                </div>


            </div>
        </div>

        <div class='col'>
        <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0% ;">
                    <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap"
                        style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
                    <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>


                <div class="tombol2">

                    <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">
                    
                    <div class="col">
                            <a class="btn btn-primary" href="editproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Edit</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="#" role="button"
                            style="width:90% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Delete</a>
                            </div>
                        </div>
    
    
                        <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
                            <div class="col">
                            <a class="btn btn-primary" href="addproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Add</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="reduceproduct" role="button"
                            style="width: 92%; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Reduce</a>
                            </div>
    
                            <div class=" col">
                            <a class="btn btn-primary" href="sendproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Send</a>
                            </div>
                    </div>

                </div>


            </div>
        </div>

        <div class='col'>
        <div class="produk" style="box-shadow: 15px 15px 5px grey; border-radius:0% ;">
                    <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap"
                        style=" border-radius:0%;width:100%; padding-bottom:10px; margin-top:10px; ">
                    <h2 style="text-align:center ; padding-bottom:5px; font-family: quicksand"> Nama produk</h2>


                <div class="tombol3">

                    <div class="row" style="width:60%;margin-left:20%; padding-bottom:20px">

                    <div class="col">
                            <a class="btn btn-primary" href="editproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Edit</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="#" role="button"
                            style="width:90%; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Delete</a>
                            </div>
                        </div>
    
    
                        <div class="row" style="width:90%;margin-left:5%; padding-bottom:30px">
                            <div class="col">
                            <a class="btn btn-primary" href="addproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Add</a>
                            </div>
    
                            <div class="col">
                            <a class="btn btn-primary" href="reduceproduct" role="button"
                            style="width: 92%; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Reduce</a>
                            </div>
    
                            <div class=" col">
                            <a class="btn btn-primary" href="sendproduct" role="button"
                            style="width:80% ; box-shadow: 3px 3px 2px grey; background-color: #D0F2A4; color: black; border: none">Send</a>
                            </div>
                    </div>

                </div>

                
            </div>
        </div>
    </div>
    <footer class="page-footer font-large special-color-dark pt-4" style="margin-top : 100px;">

       
<div class="container">

   
    <ul class="list-unstyled list-inline text-center">

        <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
                <a href="https://www.facebook.com/Durianasunmedan" class="btn-floating btn-lg btn-fb" type="button"
                    role="button"><i class="fab fa-facebook-f"></i></a>
            </a>
        </li>


        <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
                <a href="https://www.instagram.com/durianaroisby/" class="btn-floating btn-lg btn-ins" type="button" role="button"><i
                        class="fab fa-instagram"></i></a>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
                <a class="btn-floating btn-lg btn-gplus" type="button" role="button"><i
                        class="fab fa-google-plus-g"></i></a>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
                <a href="https://www.youtube.com/channel/UC3Po2UCPQAPj0fgohUGQwkg" class="btn-floating btn-lg btn-yt" type="button" role="button"><i
                        class="fab fa-youtube"></i></a>
            </a>
        </li>
        <li class="list-inline-item">
            <a  class="btn-floating btn-dribbble mx-1">
                <a href="https://api.whatsapp.com/send/?phone=628176867685&text&app_absent=0" class="btn-floating btn-lg btn-whatsapp" type="button" role="button"><i
                        class="fab fa-whatsapp"></i></a>
            </a>
        </li>
    </ul>
   

</div>



<div class="footer-copyright text-center py-3">Durian Asun Surabaya

</div>


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