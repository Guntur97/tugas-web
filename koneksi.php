<?php 
// isi nama host, username mysql, dan password mysql anda
mysql_connect("localhost","id8367088_root","rutnuggan");
 
if($host){
	echo "koneksi host berhasil.<br/>";
}else{
	echo "koneksi gagal.<br/>";
}
// isikan dengan nama database yang akan di hubungkan
$db = mysql_select_db("id8367088_akademik");
 
if($db){
	echo "koneksi database berhasil.";
}else{
	echo "koneksi database gagal.";
}
?>