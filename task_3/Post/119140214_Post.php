<?php
include "119140214_Login_Post.html";
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


echo "<p><span>Pendaftaran akun Telah Berhasil!!</span><p>";
echo "</div>";