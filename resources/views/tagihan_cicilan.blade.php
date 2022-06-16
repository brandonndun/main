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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 5.8 - Individual Column Search in Datatables using Ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<!-- <body style="overflow-x: hidden; margin-left:-65px;">
    @include("navbar")
    <div class="card-body" style="text-align: center; font-family : quicksand; margin-top: 29px">
        <h2 class="card-title">Transaksi Tagihan Cicilan</h2>
    </div>
    <div class="container mt-3">
        <table class="table table-bordered">

            <div class="row">
                <div class="col-md-4">
                    <label>Asal</label>
                    <select name='filter' id="filter-asal" class="form-control">
                        <option value=""> Pilih Asal</option>
                    </select>
                </div>
            </div>

            <thead>
                <tr style="background-color:#57B846;">
                    <th scope="col" style="text-align:center; font-family: quicksand">Tanggal</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">ID Produk</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">Asal</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">Tujuan</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">Jumlah</th>
                    <th scope="col" style="text-align:center; font-family: quicksand">Keterangan</th>
                </tr>
            </thead>
            <tbody class="table table-success table-striped" style="text-align: center; font-family: quicksand">
                <?php
            for ($x=0;$x<sizeof($tabel);$x++){
                      echo"
                      <tr>
                        <td>{$tabel[$x]->Tanggal}</td>
                        <td>{$tabel[$x]->ID_PRODUK}</td>
                        <td>{$tabel[$x]->WAREHOUSE_ASAL}</td>
                        <td>{$tabel[$x]->WAREHOUSE_TUJUAN}</td>
                        <td>{$tabel[$x]->JUMLAH}</td>
                        <td>{$tabel[$x]->Keterangan}</td>
                      </tr>";
            }
                    ?>
            </tbody>
        </table>
    </div>

</body> -->

<body>
    <div class="container">
        <br />
        <h3 align="center">Laravel 5.8 - Custom Search in Datatables using Ajax</h3>
        <br />
        <br />
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form-group">
                    <select name="filter_gender" id="filter_gender" class="form-control" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="filter_country" id="filter_country" class="form-control" required>
                        <option value="">Select Country</option>
                        @foreach($country_name as $country)

                        <option value="{{ $country->Country }}">{{ $country->Country }}</option>

                        @endforeach
                    </select>
                </div>

                <div class="form-group" align="center">
                    <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>

                    <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <br />
        <div class="table-responsive">
            <table id="customer_data" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Postal Code</th>
                        <th>Country</th>
                    </tr>
                </thead>
            </table>
        </div>
        <br />
        <br />
    </div>
</body>

</html>