<?php
class Hasil{
    private $mysqli;

    function __construct($conn){
        $this->mysqli = $conn;
    }
    public function tampil($id = null) {
        $db = $this->mysqli->conn;
        $sql = "SELECT * FROM data_pasien";
        if($id != null) {
            $sql .= " WHERE id_pasien = $id";
        }
        $query = $db->query($sql) or die ($db->error);
        return $query;
    }
    public function tambah($id_pasien, $nama_anak, $usia_anak, $jk_anak){
        $db = $this->mysqli->conn;
        $db->query("INSERT INTO tbl_hasil VALUES('', '$nama_anak', '$usia_anak', '$jk_anak')") or die ($db->error);
    }
    public function edit($sql){
        $db = $this->mysqli->conn;
        $db->query($sql) or die ($db->error);
    }
    public function hapus($id){
        $db = $this->mysqli->conn;
        $db->query("DELETE FROM data_pasien WHERE id_pasien='$id'") or die ($db->error);
    }
    function __destruct() {
        $db = $this->mysqli->conn;
        $db->close();   
    }
}
?>