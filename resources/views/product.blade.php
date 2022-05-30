<!DOCTYPE html>
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
    <title>Product - Durian Asun</title>
</head>

<body style="margin-bottom: 94px; overflow-x: hidden">
@include("navbar")
    <h1 class="text-center mt-5">Product</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mt-5 mx-1" style="width: 24rem; border-radius: 10px; margin-top: 25px;">
                    <div class="d-flex justify-content-around">
                        <img class="card-img-top" src="img/musang.jpeg" alt="Card image cap" style="width: 280px;">
                    </div>
                    <div class="card-body" style="background-color: #57B846;">
                        <h5 class="card-title">Durian Musang</h5>
                        <div class="row d-flex justify-content-center">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="/editproduct" class="btn ml-5" style="background-color: #D0F2A4; color:black;">Edit</a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <a href="#" class="btn mr-5" style="background-color: #D0F2A4; color:black;">Delete</a>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-around mt-3">
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/addproduct" class="btn" style="background-color: #D0F2A4; color:black;">Add</a>
                            </div>
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/reduceproduct" class="btn" style="background-color: #D0F2A4; color:black;">Reduce</a>
                            </div>
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/sendproduct" class="btn" style="background-color: #D0F2A4; color:black;">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-5 mx-4" style="width: 24rem; border-radius: 10px; margin-top: 25px;">
                    <div class="d-flex justify-content-around">
                        <img class="card-img-top" src="img/icecream.jpeg" alt="Card image cap" style="width: 280px;;">
                    </div>
                    <div class="card-body" style="background-color: #57B846;">
                        <h5 class="card-title">Ice Cream Durian</h5>
                        <div class="row d-flex justify-content-center">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="/editproduct" class="btn ml-5" style="background-color: #D0F2A4; color:black;">Edit</a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <a href="#" class="btn mr-5" style="background-color: #D0F2A4; color:black;">Delete</a>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-around mt-3">
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/addproduct" class="btn" style="background-color: #D0F2A4; color:black;">Add</a>
                            </div>
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/reduceproduct" class="btn" style="background-color: #D0F2A4; color:black;">Reduce</a>
                            </div>
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/sendproduct" class="btn" style="background-color: #D0F2A4; color:black;">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-5 mx-5" style="width: 24rem; border-radius: 10px; margin-top: 25px;">
                    <div class="d-flex justify-content-around">
                        <img class="card-img-top" src="img/medan.jpeg" alt="Card image cap" style="width: 280px;">
                    </div>
                    <div class="card-body" style="background-color: #57B846;">
                        <h5 class="card-title">Durian Medan</h5>
                        <div class="row d-flex justify-content-center">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="/editproduct" class="btn ml-5" style="background-color: #D0F2A4; color:black;">Edit</a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <a href="#" class="btn mr-5" style="background-color: #D0F2A4; color:black;">Delete</a>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-around mt-3">
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/addproduct" class="btn" style="background-color: #D0F2A4; color:black;">Add</a>
                            </div>
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/reduceproduct" class="btn" style="background-color: #D0F2A4; color:black;">Reduce</a>
                            </div>
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/sendproduct" class="btn" style="background-color: #D0F2A4; color:black;">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
                

                            
            
        </div>

    </div>
    
        <div class="row">
            <div class="col-md-4">
                <div class="card mt-5 mx-1" style="width: 24rem; border-radius: 10px; margin-top: 25px;">
                    <div class="d-flex justify-content-around">
                        <img class="card-img-top" src="img/palu.jpeg" alt="Card image cap" style="width: 280px; ">
                    </div>
                    <div class="card-body" style="background-color: #57B846;">
                        <h5 class="card-title">Durian Palu</h5>
                        <div class="row d-flex justify-content-center">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="/editproduct" class="btn ml-5" style="background-color: #D0F2A4; color:black;">Edit</a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <a href="#" class="btn mr-5" style="background-color: #D0F2A4; color:black;">Delete</a>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-around mt-3">
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/addproduct" class="btn" style="background-color: #D0F2A4; color:black;">Add</a>
                            </div>
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/reduceproduct" class="btn" style="background-color: #D0F2A4; color:black;">Reduce</a>
                            </div>
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/sendproduct" class="btn" style="background-color: #D0F2A4; color:black;">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-5 mx-4" style="width: 24rem; border-radius: 10px; margin-top: 25px;">
                    <div class="d-flex justify-content-around">
                        <img class="card-img-top" src="img/pancake1.jpeg" alt="Card image cap" style="width: 280px;">
                    </div>
                    <div class="card-body" style="background-color: #57B846;">
                        <h5 class="card-title">Pancake Durian</h5>
                        <div class="row d-flex justify-content-center">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="/editproduct" class="btn ml-5" style="background-color: #D0F2A4; color:black;">Edit</a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <a href="#" class="btn mr-5" style="background-color: #D0F2A4; color:black;">Delete</a>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-around mt-3">
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/addproduct" class="btn" style="background-color: #D0F2A4; color:black;">Add</a>
                            </div>
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/reduceproduct" class="btn" style="background-color: #D0F2A4; color:black;">Reduce</a>
                            </div>
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/sendproduct" class="btn" style="background-color: #D0F2A4; color:black;">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-5 mx-5" style="width: 24rem; border-radius: 10px; margin-top: 25px;">
                    <div class="d-flex justify-content-around">
                        <img class="card-img-top" src="img/pancake.jpeg" alt="Card image cap" style="width: 280px;">
                    </div>
                    <div class="card-body" style="background-color: #57B846;">
                        <h5 class="card-title">Pancake Durian isi 8</h5>
                        <div class="row d-flex justify-content-center">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="/editproduct" class="btn ml-5" style="background-color: #D0F2A4; color:black;">Edit</a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <a href="#" class="btn mr-5" style="background-color: #D0F2A4; color:black;">Delete</a>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-around mt-3">
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/addproduct" class="btn" style="background-color: #D0F2A4; color:black;">Add</a>
                            </div>
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/reduceproduct" class="btn" style="background-color: #D0F2A4; color:black;">Reduce</a>
                            </div>
                            <div class="col-6 col-md-4 d-flex justify-content-center">
                                <a href="/sendproduct" class="btn" style="background-color: #D0F2A4; color:black;">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</body>

</html>