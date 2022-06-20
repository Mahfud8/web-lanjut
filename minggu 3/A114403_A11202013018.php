<?php
function namaStr ($fname){ //fungsi string
    echo "Nama Anda : $fname";
	echo "<br><br>";
	
	//susunan huruf
	echo "Baca dari kiri :<br>".chunk_split($fname,1," ");
	echo "<br><br>";
	
	//membalik susunan huruf 
	$name=str_replace(" ","",$fname); //menghapus spasi
	$namaTerbalik = strrev($name);
	echo "Dibalik : <br>".chunk_split($namaTerbalik,1,"-");
	echo "<br><br>";
	
	//menampilkan jumlah kata
	echo "Jumlah Kata : ".str_word_count($fname);
	echo "<br><br>";
}

function cekVokalKonsonan($fname){ // fungsi cek vokal&konsonan
	//menghitung huruf vokal
	$a = substr_count($fname,"a"); 
	$i = substr_count($fname,"i"); 
	$u = substr_count($fname,"u"); 
	$e = substr_count($fname,"e"); 
	$o = substr_count($fname,"o"); 
	
	$vokal = $a+$i+$u+$e+$o; 
	echo "Jumlah Huruf Vokal : $vokal";
	echo "<br>";
	
	//menghitung huruf konsonan
	$name=str_replace(" ","",$fname); // menghapus spasi
	$jumlah = strlen($name); //jumlah semua huruf
	$konsonan = $jumlah-$vokal; 
	echo "Jumlah Huruf Konsonan : $konsonan";
}

//memangil fungsi	
namaStr("Muhammad Mahfud");
cekVokalKonsonan("Muhammad Mahfud");

?>