<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/style.css"/>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://kit.fontawesome.com/f43daa6159.js" crossorigin="anonymous"></script>
 <link rel="shortcut icon" href="img/Asun-Logo-Header-250 copy.webp" type="image/x-icon">
</head>
<body>
    <div class="logodurian" style="text-align:center; margin-top:  35px;">
        <img src="img/Asun-Logo-Header-250.webp"  style="width: 15%; margin: 11px; margin-left: -7px"  >
    </div>
    
    <div class="wrapper" style="border: outset; box-shadow: 10px 10px 5px grey; margin-top:20px" >
        <div class="wrapper-header">
            <!-- <div class="icon"><i class="fa fa-sign-in fa-2x"></i></div> -->
            <h2 class="title">Sign In</h2>
        </div>
        <div class="wrapper-main">
            <form action="/ceksignin" method="post">
                @csrf
                <div class="group">
                    <label for="username">Username</label>
                    <div class="icons">
                        <i class="fa-solid fa-circle-user"></i>
                    </div>
                        <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="group">
                    <label for="password">Password</label>
                    <div class="icons">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <input type="password" name="password"placeholder="Password" required>
                </div>
                @if(session()->has('error'))
            <div class="alert" style="background: hsla(0, 100%, 70%, 0.3); color: #B22222; width:100%;">
                {{session()->get('error')}}
            </div>
            @endif
                <!-- <h3>Forget username/password ?</h3> -->
                <div class="group">
                   
                    <input type="submit" value="Sign In">
                    <a style="display:flex; justify-content:center;"href ="/signups">Dont Have an account?</a>
            <!-- <input type="reset" value="Reset"> -->
            </form>
        </div>
    </div>
</body>
</html>