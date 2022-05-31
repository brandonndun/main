<!DOCTYPE html>
<html>

<Head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/Asun-Logo-Header-250 copy.webp" type="image/x-icon">
</Head>


<body>
@include('navbar')
    <div class="home_body">

        <div class="youtube_page ">

            <h1 style="text-align:center; padding-top:20px ; padding-bottom:20px;">Welcome to Durian Asun Storage</h1>


            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qHG825iQWj4"></iframe>
            </div>
            </iframe>
        </div>

        <h1 style="text-align:center;">OUR BEST PRODUCTS</h1>

        <div class="katalog-home">

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="img/durianpetruk.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Durian Petruk</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/durianmedan.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Durian medan</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/durianmusang.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Durian Musang</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <div class="carousel-home">
        <h1 style="text-align:center; padding-top:25px" ;>WHAT INSIDE OUR WAREHOUSE</h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding-top:15px;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/5.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/6.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/8.png" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/9.png" alt="fifth slide">
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
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
    <!-- Footer -->
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