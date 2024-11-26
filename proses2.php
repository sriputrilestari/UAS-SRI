<?php
class Penggajian {

    public $no;
    public $nama;
    public $unit;
    public $tglgaji;
    public $jabatan;
    public $lamakerja;
    public $status;
    public $bpjs;
    public $pinjaman;
    public $cicilan;
    public $infaq;

    public function __construct($data) {
        $this->no = $data['no'];
        $this->nama = $data['nama'];
        $this->unit = $data['unit'];
        $this->tglgaji = $data['tglgaji'];
        $this->jabatan = $data['jabatan'];
        $this->lamakerja = $data['lamakerja'];
        $this->status = $data['status'];
        $this->bpjs = $data['bpjs'];
        $this->pinjaman = $data['pinjaman'];
        $this->cicilan = $data['cicilan'];
        $this->infaq = $data['infaq'];

    }

    public function hitungGajiBersih() {
        $gajiPokok = $this->getGajiPokok();
        $bonus = $this->getBonus();
        $potongan = $this->bpjs + $this->pinjaman + $this->cicilan + $this->infaq;
        return ($gajiPokok + $bonus) - $potongan;
    }

    private function getGajiPokok() {
        switch ($this->jabatan) {
            case 'Kepala Sekolah':
                return 10000000;
            case 'Wakasek':
                return 7000000;
            case 'Guru':
                return 5000000;
            case 'Karyawan':
                return 2500000;
            default:
                return 0;
        }
    }

    private function getBonus() {
        return $this->status === 'Tetap' ? 1000000 : 0;
    }
}

// Ambil data dari form
$penggajian = new Penggajian($_POST);
$gajiBersih = $penggajian->hitungGajiBersih();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Gaji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color : #D3F1DF">
    <div class="container mt-5">
        <h1 class="text-center" ><b>Struk Gaji</b></h1>
        <table class="table table-bordered mt-3">
        <tr>
                <th>No</th>
                <td><?= $penggajian->no ?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><?= $penggajian->nama ?></td>
            </tr>
            <tr>
                <th>Unit Pendidikan</th>
                <td><?= $penggajian->unit ?></td>
            </tr>
            <tr>
                <th>Tanggal Gaji</th>
                <td><?= $penggajian->tglgaji ?></td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td><?= $penggajian->jabatan ?></td>
            </tr>
            <tr>
                <th>gaji</th>
                <td></td>
            </tr>
            <tr>
                <th>Lama Kerja</th>
                <td><?= $penggajian->lamakerja ?></td>
            </tr>
            <tr>
                <th>Status Kerja</th>
                <td><?= $penggajian->status ?></td>
            </tr>
            <tr>
                <th>Bonus</th>
                <td></td>
            </tr>
            <tr>
                <th>BPJS</th>
                <td><?= $penggajian->bpjs ?></td>
            </tr>
            <tr>
                <th>Pinjaman</th>
                <td><?= $penggajian->pinjaman ?></td>
            </tr>
            <tr>
                <th>Cicilan</th>
                <td><?= $penggajian->cicilan ?></td>
            </tr>
            <tr>
                <th>Infaq</th>
                <td><?= $penggajian->infaq ?></td>
            </tr>
            <tr>
                <th>Gaji Bersih</th>
                <td>Rp<?= number_format($gajiBersih, 0, ',', '.') ?></td>
            </tr>
        </table>
        <br>
        <center><a href="tampilan.php" class="btn" style="background-color : #5A6C57">Kembali</a></center>
    </div>
</body>
</html>