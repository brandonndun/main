<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Insert Product - Durian Asun</title>
	<link rel="shortcut icon" href="img/Asun-Logo-Header-250 copy.webp" type="image/x-icon"> </head>

<body> @include("navbar")
	<form action="/insertproduk" method="post" id="insert-form" enctype="multipart/form-data">
		<div class="baa" style="padding-bottom: 10px;">
			<div class="container">
				<h1 class="text-center mt-5">Insert Product Baru</h1>
				<div class="row" style="margin-top: -120px;">
					<div class="col"> <img src="img/image-gallery.png" alt="image-gallery.png" style="width: 50%; display: block; margin-left: auto; margin-right: auto; margin-top: 150px;">
						<label type="button" for="input-file" class="btn d-flex justify-content-center align-middle" style="background-color: #D0F2A4; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none; align-items: center; position: absolute; left: 23%; margin-top: 20px;">Insert Photo</label>
						<input type="file" style="display:none" id="input-file" name="foto"> </div>
					<div class="col" style="margin-top: 190px;">
						<div class="form-group row">
							<div class="col-sm-10" style="width: 70%">
								<input type="text" class="form-control" id="inputNama" style="background-color: #D0F2A4; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none; margin-top: 10px;" placeholder="Nama Produk" name="nama_produk" required> </div>
						</div>
						<div class="form-group row">
							<div class="col-sm-10" style="width: 50%">
								<input type="text" class="form-control" id="inputKet" style="background-color: #D0F2A4; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none; margin-top: 10px;" placeholder="Keterangan" name="keterangan" required> </div>
						</div>
						<div class="form-group row">
							<div class="col-sm-10" style="width: 70%">
								<input type="text" class="form-control" id="inputKet" style="background-color: #D0F2A4; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none; margin-top: 10px;" placeholder="Warehouse Asal" name="warehouse_asal" required> </div>
							<div class="form-group row">
								<div class="col-sm-10" style="width:50%">
									<input type="text" class="form-control" id="inputKet" style="background-color: #D0F2A4; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none; margin-top: 10px;" placeholder="Jumlah" name="jumlah" required> </div>
							</div>
							<button type="submit" class="btn d-flex justify-content-center align-middle" style="background-color: #D0F2A4; border-radius: 10px; box-shadow: 3px 3px 2px grey; border: none; margin-top: 131px; align-items: right; right: 19%; margin-left: 442px; width: 17%">Insert</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
        <script>
            const form = document.querySelector('#insert-form')
            const fileInput = document.querySelector('#input-file')

            form.addEventListener('submit', async (e) => {
                e.preventDefault()
                const data = new FormData()
                data.append('nama_produk', document.querySelector('input[name=nama_produk]').value)
                data.append('keterangan', document.querySelector('input[name=keterangan]').value)
                data.append('warehouse_asal', document.querySelector('input[name=warehouse_asal]').value)
                data.append('jumlah', document.querySelector('input[name=jumlah]').value)
                if (fileInput.files && fileInput.files[0])
                    data.append('foto', fileInput.files[0])
                const result = await fetch('/insertproduk', {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    method: 'POST',
                    body: data
                })
                if (result.status === 200)
                    location.href = '/product'
                console.log(result)
            })
        </script>
</body>
</html>