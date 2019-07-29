<?php
class Gejala {

    private $mysqli;

    function __construct($conn) {
        $this->mysqli= $conn;
    }

    public function tampil($kd = null) {
        $db = $this->mysqli->conn;
        $sql = "SELECT * FROM tbl_gejala";
        if($kd != null) {
            $sql .= " WHERE id_gejala = $kd";
        }
        $query = $db->query($sql) or die ($db->error);
        return $query;
    }

    public function tambah($kd_gejala, $gejala) {
        $db = $this->mysqli->conn;
        $db->query("INSERT INTO tbl_gejala VALUES ('$kd_gejala', '$gejala')") or die ($db->error);
    }
    
    public function edit($sql){
        $db = $this->mysqli->conn;
        $db->query($sql) or die ($db->error);
    }

    public function hapus($kd) {
        $db = $this->mysqli->conn;
        $db->query("DELETE FROM tbl_gejala WHERE kd_gejala = '$kd'") or die ($db->error);
    }

    function __destruct() {
        $db = $this->mysqli->conn;
        $db->close();
    }
}
?>