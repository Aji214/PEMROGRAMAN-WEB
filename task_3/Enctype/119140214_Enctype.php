<?php
include "119140214_Login_Enctype.html";
echo " <div class='kotak'> ";


echo "Jenis Pasien:";
echo $_POST["pasien"];
echo "<br>";

echo "Nama Pasien:";
echo $_POST["nama"];
echo "<br>";


echo "Jenis Kelamin:";
echo $_POST["jk"];
echo "<br>";

echo "Tempat Lahir:";
echo $_POST["TL"];
echo "<br>";

echo "Tanggal Lahir:";
echo $_POST["tgl"];
echo "<br>";

echo "Nomor Hanphone:";
echo $_POST["Nomor_HP"];
echo "<br>";


echo "Pilih Poli Klinik:";
echo $_POST["poli"];
echo "<br>";

echo "Pilih Hari:";
echo $_POST["hari"];
echo "<br>";

echo "Upload Bukti Pembayaran:";

echo "<br>";
$foto = $_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$foto);
echo "<br>";
echo ' <img src="foto/'.$foto.'"width="100" >';


echo "<p><span>Pendaftaran akun Telah Berhasil!!</span><p>";
echo "</div>";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    <img src=" 'foto/'.$foto. <?php echo $foto;?>" alt="">

</body>
</html>