<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat domisili tempat tinggal</title>
</head>
<body>
<p>&nbsp;</p>
<div id="halaman">
<h3 id="judul" style="text-align: center;">SURAT PERNYATAAN BELUM MENIKAH</h3>
<center>Yang bertanda tangan di bawah ini Ketua RT. 012 / RW. 004 Kelurahan Penggilingan Kecamatan Cakung, dengan ini menyatakan : </center><center></center>
<p></p>
<table style="height: 162px;">
<tbody>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Nama</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superbeme->nama; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">NIK</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superbeme->nik; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Tempat Tanggal Lahir</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superbeme->tempat_lahir; ?>,  <?php echo $superbeme->tgl_lahir; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Jenis Kelamin</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superbeme->jenis_kelamin; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Warga Negara</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superbeme->warga_negara; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Agama</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superbeme->agama; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Pekerjaan</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superbeme->pekerjaan; ?></td>
</tr>
<tr style="height: 36px;">
<td style="width: 204.2px; height: 18px;">Alamat</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superbeme->alamat; ?></td>
</tr>
</tbody>
</table>
<p>Pemilik nama tersebut diatas adalah warga RT. 012 / RW. 004 Kelurahan Penggilingan Kecamatan Cakung. Sejauh pengamatan yang kami lakukan, bahwasanya yang bersangkutan BELUM PERNAH MENIKAH.</p>
<p>Surat Keterangan Belum Menikah ini diberikan kepada yang bersangkutan untuk keperluan  <?php echo $superbeme->keperluan; ?></p>
<p>Demikian surat keterangan ini dibuat agar dipergunakan sebagaimana mestinya.</p>

<div style="width: 50%; text-align: left; float: right;">Purwodadi, 20 Januari 2020</div>
<br /><br /><br /><br /><br />
<div style="width: 50%; text-align: left; float: right;"><?php echo $superbeme->nama; ?></div>
</div>

    
</body>
</html>