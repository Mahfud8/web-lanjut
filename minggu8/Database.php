<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','toko');

class Database{
    public $conn;
    function __construct(){
        $this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    }
    public function insProduct($id, $nama, $hrg, $jml, $ket, $foto){
        $sql = "insert into barang (nama,hrg,jml,keterangan,foto) values ('$nama',$hrg,$jml,'$ket','$foto')";
        $hasil = $this->conn->query($sql);
        return $hasil;
    }
    public function productAll(){
        $sql = "select * from barang";
        $hasil = $this->conn->query($sql);
        return $hasil;
    }
    public function getFoto($id){
        $sql = "select foto from barang where id='$id'";
        $hasil = $this->conn->query($sql);
        while ($ro = $hasil->fetch_assoc()){
            $foto = $row['foto'];
        }
        return $foto;
    }
    public function product($id){
        $sql = "select * from barang where id='$id'";
        $hasil = $this->conn->query($sql);
        return $hasil;
    }
    public function updProduct($id, $nama, $hrg, $jml, $ket, $foto){
        if ($foto==""){
            $sql = "update barang set nama='$nama',hrg='$hrg',jml='$jml',keterangan='$ket' where id='$id'";
        } else{
            $sql = "update barang set nama='$nama',hrg='$hrg',jml='$jml',keterangan='$ket',foto='$foto' where id='$id'";
        }

        $hasil = $this->conn->query($sql);
        return $hasil;
    }
    public function delProduct($id){
        $sql = $sql = "delete from barang where id='$id'";
        $hasil = $this->conn->query($sql);
        return $hasil;
    }
}
?>