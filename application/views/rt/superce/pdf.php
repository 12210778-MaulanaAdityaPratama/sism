<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>surat pernyataan cerai</title>
</head>
<body>
<p>&nbsp;</p>
<div id="halaman">
<h3 id="judul" style="text-align: center;">SURAT PERNYATAAN CERAI</h3>
<center>Yang bertanda tangan di bawah ini Ketua RT. 012 / RW. 004 Kelurahan Penggilingan Kecamatan Cakung, dengan ini menerangkan bahwa : </center><center></center>
<p></p>
<table style="height: 162px;">
<tbody>
<p>I. Yang Mengajukan Cerai</p>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Nama Lengkap</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superce->nama; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Tempat Tanggal Lahir</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superce->tempat_lahir1; ?>,  <?php echo $superce->tgl_lahir1; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Jenis Kelamin</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superce->jenis_kelamin; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Warga Negara</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superce->warga_negara1; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Agama</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superce->agama1; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Pekerjaan</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superce->pekerjaan1; ?></td>
</tr>
<tr style="height: 36px;">
<td style="width: 204.2px; height: 18px;">Alamat</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 36px;"><?php echo $superce->alamat1; ?></td>
</tr>

<p>II. Yang diceraikan</p>
<tr>
<td style="width: 204.2px; height: 18px;">Nama Lengkap</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superce->nama_2; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Tempat Tanggal Lahir</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superce->tempat_lahir2; ?>,  <?php echo $superce->tgl_lahir2; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Warga Negara</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superce->warga_negara2; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Agama</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superce->agama2; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 204.2px; height: 18px;">Pekerjaan</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 18px;"><?php echo $superce->pekerjaan2; ?></td>
</tr>
<tr style="height: 36px;">
<td style="width: 204.2px; height: 18px;;">Alamat</td>
<td style="width: 30.7px; height: 18px;">:</td>
<td style="width: 447.1px; height: 36px;"><?php echo $superce->alamat2 ?></td>
</tr>
</tbody>
</table>
<p>Yang mana nama-nama tersebut diatas adalah benar warga RT. 012 / RW. 004 Kelurahan Penggilingan Kecamatan Cakung dan pasangan suami / istri yang sudah berstatus <?php echo $superce->status1; ?> </p>
<p>Demikian surat keterangan sudah bercerai ini kami buat dengan sebenarnya untuk dipergunakan sebagaimana mestinya.</p>

<div style="width: 50%; text-align: left; float: right;">Purwodadi, 20 Januari 2020</div>
<br /><br /><br /><br /><br />
<div style="width: 50%; text-align: left; float: right;"><?php echo $superce->nama; ?></div>
</div>

    
</body>
</html>