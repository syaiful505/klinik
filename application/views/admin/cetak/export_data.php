<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Data Peserta Didik Baru</title>
</head>
<body>
    <?php
        header('Content-Type: application/vnd-ms-excel');
        header('Content-Disposition: attachment; filename=Data Peserta.xls');
    ?>
    <center>
        <h2>Data Peserta</h2>
    </center>
    <table border="1">
        <tr>
            <th>No</th>
            <th style="background-color: greenyellow;">Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Jalur</th>
            <th>Jenis</th>
            <th>NIK</th>
            <th>Alamat</th>
            <th>Rt</th>
            <th>Rw</th>
            <th>desa</th>
            <th>Kecamatan</th>
            <th>Kabupaten</th>
            <th>kode pos</th>
            <th>Tempat Tinggal</th>
            <th>No Hp</th>
            <th>No Telpon</th>
            <th>E-Mail</th>
            <th>Tinggi Badan</th>
            <th>Berat Badan</th>
            <th>jarak tempuh</th>
            <th>waktu tempuh</th>
            <th>jumlah saudara</th>
            <th>photo</th>
            <th>ayah</th>
            <th>tahun ayah</th>
            <th>pendidikan ayah</th>
            <th>pekerjaan ayah</th>
            <th>gaji ayah</th>
            <th>nama ibu</th>
            <th>tahun ibu</th>
            <th>pendidikan ibu</th>
            <th>pekerjaan ibu</th>
            <th>gaji ibu</th>
            <th>tanggal pendaftaran</th>
        </tr>
        
        <?php
        include_once('connect.php');
        $no = 1;
        $data_peserta = mysqli_query($connect,"SELECT * FROM tbl_daftar");
        while ($data = mysqli_fetch_assoc($data_peserta)) { ?>
            <tr>
            <!-- $data['csiswa_id']; -->
                <td><?= $no++; ?></td>
                <td><?= $data['csiswa_nama']; ?></td>
                <td><?= $data['csiswa_tmp_lahir']; ?></td>
                <td><?= $data['csiswa_tgl_lahir']; ?></td>
                <td>
                    <?php if($data['csiswa_jenkel']=='L'):?>
                        Laki-Laki
                    <?php else:?>
                        Perempuan
                    <?php endif;?>
                </td>
                <td><?= $data['csiswa_jalur']; ?></td>
                <td><?= $data['csiswa_jenis']; ?></td>
                <td>'<?= $data['csiswa_no']; ?></td>
                <td><?= $data['csiswa_alamat']; ?></td>
                <td><?= $data['csiswa_rt']; ?></td>
                <td><?= $data['csiswa_rw']; ?></td>
                <td><?= $data['csiswa_desa']; ?></td>
                <td><?= $data['csiswa_kec']; ?></td>
                <td><?= $data['csiswa_kab']; ?></td>
                <td><?= $data['csiswa_pos']; ?></td>
                <td><?= $data['csiswa_tmp_tgl']; ?></td>
                <td><?= $data['csiswa_hp']; ?></td>
                <td><?= $data['csiswa_tlp']; ?></td>
                <td><?= $data['csiswa_email']; ?></td>
                <td><?= $data['csiswa_tinggi']; ?></td>
                <td><?= $data['csiswa_berat']; ?></td>
                <td><?= $data['csiswa_jarak']; ?></td>
                <td><?= $data['csiswa_waktu']; ?></td>
                <td><?= $data['csiswa_sdr']; ?></td>
                <td><?= $data['csiswa_photo']; ?></td>
                <td><?= $data['csiswa_ayh']; ?></td>
                <td><?= $data['csiswa_thn_ayh']; ?></td>
                <td><?= $data['csiswa_pdk_ayh']; ?></td>
                <td><?= $data['csiswa_job_ayh']; ?></td>
                <td><?= $data['csiswa_gaji_ayh']; ?></td>
                <td><?= $data['csiswa_ibu']; ?></td>
                <td><?= $data['csiswa_thn_ibu']; ?></td>
                <td><?= $data['csiswa_pdk_ibu']; ?></td>
                <td><?= $data['csiswa_job_ibu']; ?></td>
                <td><?= $data['csiswa_gaji_ibu']; ?></td>
                <td><?= $data['csiswa_tgl_input']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </center>

</body>
</html>