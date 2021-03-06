<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Isi Berat Badan BMI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
</head>
<body>

        <form class="form-horizontal p-5 shadow h-100" style="background-color:white;" method="POST" action="class_bmipasien.php">
            <div class="text-center">
              <h3 class="mb-5 text-mg">Formulir Pengisian Index Berat Badan (BMI)</h3>
            </div>
            <!------kolom input nama------>
              <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label"><b>Nama</b></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nama_pasien" required>
                </div>
              </div>
              <br>

            <!------kolom input berat badan------>
              <div class="form-group row">
                <label for="beratbadan" class="col-sm-4 col-form-label"><b>Berat</b></label>
                <div class="col-sm-6">
                  <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control" name="berat_pasien" required>
                    <div class="input-group-prepend">
                      <div class="input-group-text">kg</div>
                    </div>
                  </div>
                </div>
              </div>
              <br>

            <!------kolom input tinggi badan------>
              <div class="form-group row">
                <label for="tinggibadan" class="col-sm-4 col-form-label"><b>Tinggi Badan</b></label>
                <div class="col-sm-6">
                  <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control" name="tinggi_pasien" required>
                    <div class="input-group-prepend">
                      <div class="input-group-text">cm</div>
                    </div>
                  </div>
                </div>
              </div>
              <br>

            <!------kolom input umur------>
            <div class="form-group row">
                <label for="umur" class="col-sm-4 col-form-label"><b>Umur</b></label>
                <div class="col-sm-6">
                  <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control" name="umur_pasien" required>
                    <div class="input-group-prepend">
                      <div class="input-group-text">Tahun</div>
                    </div>
                  </div>
                </div>
              </div>
              <br>

            <!------kolom input jenis kelamin------>
            <div class="row">
              <legend class="col-form-label col-sm-4 pt-0"><b>Jenis Kelamin</b></legend>
              <div class="col-sm-8">

                <div class="form-check mr-auto">
                  <input class="form-check-input" type="radio" id="laki" name="jenis_kelamin" value="Laki-Laki" required>
                  <label class="form-check-label mr-5" for="laki">
                    Laki-Laki
                  </label>
                  <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
                  <label class="form-check-label" for="perempuan">
                    Perempuan
                  </label>
                </div>
              </div>  <!---col-->
            </div> <!---row-->
            <br>
            <!-------tombol submit----->
              <div class="text-center">
                <input class="btn btn-primary" type="submit" value="Kirim" name="proses"/>
              </div>
          </form>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
    </body>
      <!-- Footer -->
  <footer>
	<h4 style="text-align: center;">Imadudin Abdurahim</h4>
  </footer>
</html>