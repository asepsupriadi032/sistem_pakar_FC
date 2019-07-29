<?php
class Relasi {

    private $mysqli;

    function __construct($conn) {
        $this->mysqli= $conn;
    }

    public function getPenyakit(){
        $db = $this->mysqli->conn;
        $sql = "SELECT * FROM tbl_penyakit";
        $query = $db->query($sql) or die ($db->error);
        return $query;
    }

    public function getGejala(){
        $db = $this->mysqli->conn;
        $sql = "SELECT * FROM tbl_gejala";
        $query = $db->query($sql) or die ($db->error);
        return $query;
    }

    public function tampil($kd = null) {
        $db = $this->mysqli->conn;
        $sql = "SELECT * FROM tbl_relasi";
        if($kd != null) {
            $sql .= " WHERE kd_relasi = $kd";
        }
        $query = $db->query($sql) or die ($db->error);
        // var_dump($query); exit();
        return $query;
    }

    public function tambah($kd_penyakit, $kd_gejala) {
        $db = $this->mysqli->conn;
        $db->query("INSERT INTO tbl_relasi VALUES ('','$kd_penyakit', '$kd_gejala')") or die ($db->error);
    }
    public function edit($sql){
        $db = $this->mysqli->conn;
        $db->query($sql) or die ($db->error);
    }
 
    public function hapus($kd) {
        $db = $this->mysqli->conn;
        $db->query("DELETE FROM tbl_relasi WHERE kd_relasi = '$kd'") or die ($db->error);
    }

    function __destruct() {
        $db = $this->mysqli->conn;
        $db->close();
    }
}
?>