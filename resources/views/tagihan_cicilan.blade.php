<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="" href="send.css">
    <title>Transaksi Tagihan Cicilan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/Asun-Logo-Header-250 copy.webp" type="image/x-icon">
</head>

<body style="overflow-x: hidden; margin-left:-65px;">
    @include("navbar")
    <div class="card-body" style="text-align: center; font-family : quicksand; margin-top: 29px">
        <h2 class="card-title">Transaksi Tagihan Cicilan</h2>
    </div>
    <div class="container mt-3">
        <table class="table table-bordered">
            <thead>
                <tr style="background-color:#57B846;">
                    <th scope="col" style="text-align:center; font-family: quicksand">ID Transaksi</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">Warehouse</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">ID Produk </th>
                    <th scope="col" style="text-align:center; font-family: quicksand">Tanggal</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">Nama Supllier</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">Biaya</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">Status Pembayaran</th>
                </tr>
            </thead>
            
        </table>
    </div>

</body>

</html>