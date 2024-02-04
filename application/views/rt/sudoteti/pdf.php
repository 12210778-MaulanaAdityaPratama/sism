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
<h3 id="judul" style="text-align: center;">SURAT DOMISILI</h3>
<center>Yang bertanda tangan di bawah ini Ketua RT. 012 / RW. 004 Kelurahan Penggilingan Kecamatan Cakung, dengan ini menyatakan : </center><center></center>
<p></p>
<table style="height: 162px;">
<tbody>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Nama</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $sudoteti->nama; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">NIK</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $sudoteti->nik; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Tempat Tanggal Lahir</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $sudoteti->tempat_lahir; ?>,  <?php echo $sudoteti->tgl_lahir; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Jenis Kelamin</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $sudoteti->jenis_kelamin; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Status Perkawinan</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $sudoteti->status_perkawinan; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Warga Negara</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $sudoteti->warga_negara; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Agama</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $sudoteti->agama; ?></td>
</tr>
<tr style="height: 36px;">
<td style="width: 204.2px; height: 18px;">Alamat Asal</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $sudoteti->alamat_asal; ?></td>
</tr>
</tbody>
</table>
<p>Bahwa yang namanya tersebut diatas benar berdomisili diwilayah kami, dan surat keterangan domisili ini untuk keperluan  <?php echo $sudoteti->keterangan; ?></p>
<p>surat domisili ini belaku selama yang bersangkutan bertempat tinggal diwilayah kami. Apabila yang bersangkutan pindah alamat agar melapor kepada pengurus RT.</p>
<p>Demikian surat keterangan domisili ini dibuat agar dipergunakan sebagaimana mestinya.</p>

<div style="width: 50%; text-align: left; float: right;">Purwodadi, 20 Januari 2020</div>
<br /><br /><br /><br /><br />
<div style="width: 50%; text-align: left; float: right;"><?php echo $sudoteti->nama; ?></div>
</div>

    
</body>
</html>