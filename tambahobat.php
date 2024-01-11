<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Data Obat</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data Obat</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idPasien">ID Obat</label>

                        <input type="text" class="form-control mb-3" name="idObat" placeholder="ID Pasien">

                    </div>
                    <div class="form-group">
                        <label for="nmPasien">Nama Obat</label>

                        <input type="text" class="form-control mb-3" name="nmObat" placeholder="Nama Pasien">

                    </div>
                    <div class="form-group">
                        <label for="nmPasien">Tipe Obat</label>

                        <input type="text" class="form-control mb-3" name="tpObat" placeholder="Nama Pasien">

                    </div>
                    <div class="form-group">
                        <div class="form-group mt-3">
                            <input type="submit" name="Submit" value="Submit" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>