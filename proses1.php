<?php
if(isset($_POST['proses'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tgl_gaji = $_POST['tgl_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status_kerja = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $cicilan = $_POST['cicilan'];
    $lainnya = $_POST['lainnya'];

 $gaji = [
        'Kepala Sekolah' => 10000000,
        'Wakasek' => 7000000,
        'Guru' => 5000000,
        'Karyawan' => 2500000,
    ];
    if($status_kerja == "Tetap"){
        $bonus = 1000000;
      }else if($status_kerja == "Kontrak"){
        $bonus = 0;
      }else{
        echo "Eror!!";
      }
      $hasil_gaji = $gaji[$jabatan];
      $gaji_bersih = ($hasil_gaji + $bonus) - ($bpjs + $pinjaman + $cicilan + $lainnya);
  
      class Gaji{
        function StrukGaji($no2,$nama2,$unit2,$tgl_gaji2,$jabatan2,$gaji2,$lama_kerja2,$status_kerja2,$bonus2,$bpjs2,$pinjaman2,$cicilan2,$lainnya2,$gaji_bersih2){
        echo "<table align='center'>";
        echo "<tr>
              <td>No</td>
              <td>:</td>
              <td>$no2</td>
              </tr>";
        echo "<tr>
              <td>Nama</td>
              <td>:</td>
              <td>$nama2</td>
              </tr>";
        echo "<tr>
              <td>Unit Pendidikan</td>
              <td>:</td>
              <td>$unit2</td>
              </tr>";
        echo "<tr>
              <td>Tanggal Gaji</td>
              <td>:</td>
              <td>$tgl_gaji2</td>
              </tr>";
              echo "<tr>
              <td>Jabatan</td>
              <td>:</td>
              <td>$jabatan2</td>
              </tr>";
        echo "<tr>
              <td>Gaji</td>
              <td>:</td>
              <td>$gaji2</td>
              </tr>";
        echo "<tr>
              <td>Lama Kerja</td>
              <td>:</td>
              <td>$lama_kerja2</td>
              </tr>";
        echo "<tr>
              <td>Status Kerja</td>
              <td>:</td>
              <td>$status_kerja2</td>
              </tr>";
        echo "<tr>
              <td>Bonus</td>
              <td>:</td>
              <td>$bonus2</td>
              </tr>";
              echo "<tr>
              <td>BPJS</td>
              <td>:</td>
              <td>$bpjs2</td>
              </tr>";
        echo "<tr>
              <td>Pinjaman</td>
              <td>:</td>
              <td>$pinjaman2</td>
              </tr>";
        echo "<tr>
              <td>Cicilan</td>
              <td>:</td>
              <td>$cicilan2</td>
              </tr>";
        echo "<tr>
              <td>Infaq</td>
              <td>:</td>
              <td>$lainnya2</td>
              </tr>";
        echo "<tr>
              <td>Gaji Bersih</td>
              <td>:</td>
              <td>$gaji_bersih2</td>
              </tr>";
              echo "</table>";
            }
            }
            $gaji = new Gaji();
             echo "<div class='card mt-5 ms-5 me-5 ps-5 pe-5'><div class='card-body fs-3'>";
            echo "<h2 class='text-center'>Struk Gaji</h2>";
            echo $gaji->StrukGaji($no,$nama,$unit,$tgl_gaji,$jabatan,$hasil_gaji,$lama_kerja,$status_kerja,$bonus,$bpjs,$pinjaman,$cicilan,$lainnya,$gaji_bersih);
             echo "</div></div>";
    }
