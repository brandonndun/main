<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="" href="send.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/Asun-Logo-Header-250 copy.webp" type="image/x-icon">
</head>

<body>
    @include("navbar")


    <h1 style="font-family:quicksand; text-align: center; margin-top: 21px; padding-bottom: 20px;">Transaksi Pembelian
    </h1>

    <div class="container mt-3">
        <table class="table table-bordered">
            <thead>       
                
            
            <!-- <div class="row">
                <div class="col-sm-4" style="width:20%">
                    <label>Warehouse </label>
                    <form action="/filter" method="POST">
                        @csrf
                        <input type="search" name="filter" list="listfilter">
                        <datalist id="listfilter">
                            <option value="solo">Solo</option>
                            <option value="jakarta">Jakarta</option>
                            <option value="surabaya">surabaya</option>
                            <option value="bali">Bali</option>
                        </datalist>
                        <input type="submit" value="search">
                    </form>
                    <!-- <select name='filter' id="filter-asal" class="form-control">
                        <option value="solo">Solo</option>
                        <option value="jakarta">Jakarta</option>
                        <option value="surabaya">surabaya</option>
                        <option value="bali">Bali</option>
                    </select> -->
                </div>
            <!-- </div>  -->


                <tr style="background-color:#57B846;">
                    <th scope="col" style="text-align:center; font-family: quicksand">Transaksi</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">Tanggal</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">Nama Produk</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">Warehouse</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">Supllier</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">Jumlah</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">Harga</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">Status Pembayaran </th>
                </tr>
            </thead>
            <tbody class="table table-success table-striped" style="text-align: center; font-family: quicksand">

            <?php
            for ($x=0;$x<sizeof($pembelian);$x++){
                      echo"
                      <tr>
                      <td>{$pembelian[$x]->ID_TRANSAKSI}</td>
                        <td>{$pembelian[$x]->TANGGAL_PEMBELIAN}</td>
                        <td>{$pembelian[$x]->NAMA_PRODUK}</td>
                        <td>{$pembelian[$x]->Warehouse}</td>
                        <td>{$pembelian[$x]->NAMA_SUPPLIER}</td>
                        <td>{$pembelian[$x]->JUMLAH}</td>
                        <td>{$pembelian[$x]->TOTAL_BELI}</td>
                        <td>{$pembelian[$x]->STATUS_PEMBAYARAN}</td>
                       

                       
                      </tr>";
            }
                    ?>
                
            </tbody>
        </table>
    </div>

</body>

</html>