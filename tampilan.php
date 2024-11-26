<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TAMPILAN</title>
</head>
<body style="background-color : #D3F1DF">
   
<div class="container mt-1">
   <div class="text-center mb-3">
    <img alt="Logo Yayasan Assalaam" class="mx-auto mb-1" height="190" src="yayasan_assalaam-removebg-preview.png" width="260"/>
    <h1 class="h3 font-weight-bold"> PENGGAJIHAN </h1>
    <h2 class="h4"> GURU/KARYAWAN YAYASAN ASSALAAM </h2>
   </div>

   <form action="proses2.php" method="post">
    <!--data penggajihan -->
    <div class="card shadow " >
        <div class="card-header" style="background-color : #85A98F"> Data Penggajihan </div>
        <div class="card-body">
            <p>No</p>
        <input type="text" name="no" id="" placeholder="No" class="form-control">
            <br>
            <p>Nama</p>
        <input type="text" name="nama" id="" placeholder="Nama" class="form-control">
            <br>
            <p>Unit Pendidikan</p>
        <select name="unit" id="" class="form-select">
            <option value="">Pilih Unit Pendidikan</option>
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
        </select>
            <br>
            <p>Tanggal Gaji</p>
        <input type="date" name="tglgaji" id="" class="form-control">
            <br>

            <!-- GAJI -->
        <div class="container">
        <div class="row">
        <div class="col">
          <h2 class="text-center">Gaji</h2>
          <p>Jabatan</p>
        <select name="jabatan" id="" class="form-select">
        <option value="">Pilih Jabatan</option>
        <option value="Kepala Sekolah">Kepala Sekolah</option>
        <option value="Wakasek">Wakasek</option>
        <option value="Guru">Guru</option>
        <option value="Karyawan">Karyawan</option>
      </select>
          <br>
          <p>Lama Kerja</p>
      <input type="text" name="lamakerja" id="" placeholder="Lama Kerja" class="form-control">
          <br>
          <p>Status Kerja</p>
      <select name="status" id="" class="form-select">
        <option value="">Pilih Status Kerja</option>
        <option value="Tetap">Tetap</option>
        <option value="Kontrak">Kontrak</option>
      </select>
          <br>
    </div>

    <!--POTONGAN-->
    <div class="col">
      <h2 class="text-center">Potongan</h2>
        <p>BPJS</p>
      <input type="number" name="bpjs" id="" placeholder="BPJS" class="form-control">
        <br>
        <p>Pinjaman</p>
      <input type="number" name="pinjaman" id="" placeholder="Pinjaman" class="form-control">
        <br>
        <p>Cicilan</p>
    <input type="number" name="cicilan" id="" placeholder="Tabungan" class="form-control">
        <br>
        <p>Infaq</p>
    <input type="number" name="infaq" id="" placeholder="Lainnya" class="form-control">
        <br>
    </div>
    </div>
        <br>
        <center><button class="btn " name="proses" style="background-color : #5A6C57">Proses</button></center>
  </div>
</div>
    </form></div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>
</html>