<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://kit.fontawesome.com/f43daa6159.js" crossorigin="anonymous"></script>
 <link rel="shortcut icon" href="img/Asun-Logo-Header-250 copy.webp" type="image/x-icon">
</head>
<body>
    <div class="logodurian">
        <img src="img/Asun-Logo-Header-250.webp">
    </div>
    <div class="wrapper">
        <div class="wrapper-header">
            <!-- <div class="icon"><i class="fa faa-sign-in fa-2x"></i></div> -->
            <h2 class="title">Sign Up</h2>
        </div>
        <div class="wrapper-main">
            <form action="/register" method="POST">
                @csrf
                <div class="group">
                    <label for="warehouse">Warehouse</label>
                    <div class="icons">
                        <i class="fa-solid fa-warehouse"></i>
                    </div>
                    <input type="text" placeholder="Warehouse" name="warehouse" required>
                    <datalist id="dropdownMenuButton1" class="dropdown dropdown-menu">
                                <option value="Jakarta">
                                <option value="Surabaya">
                                <option value="Bali">
                                <option value="Solo">
                            </datalist>   
                </div>
                <div class="group">
                        <label for="nama">Nama</label>
                        <div class="icons">
                            <i class="fa-solid fa-pencil"></i>
                        </div>
                            <input type="text" placeholder="Nama" name="nama" required>
                    </div>
                <div class="group">
                    <label for="email">Username</label>
                    <div class="icons">
                        <i class="fa-solid fa-circle-user"></i>
                    </div>
                        <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="group">
                    <label for="password">Password</label>
                    <div class="icons">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                        <input type="password" placeholder="Password" name="password"required>
                </div>
                <div class="group">
                <input type="submit" value="CREATE AN ACCOUNT">
                <!-- <input type="reset" value="Reset"> -->
                </div>
            </form>
 </div>
 </div>
</body>
</html>