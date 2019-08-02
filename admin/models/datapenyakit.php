<?php
class Penyakit {

    private $mysqli;

    function __construct($conn) {
        $this->mysqli= $conn;
    }

    public function tampil($kd = null) {
        $db = $this->mysqli->conn;
        $sql = "SELECT * FROM tbl_penyakit";
        if($kd != null) {
            $sql .= " WHERE kd_penyakit = $kd";
        } 
        $query = $db->query($sql) or die ($db->error);
        return $query;
    }

    public function tambah($kd_penyakit,$penyakit, $solusi, $pencegahan, $deskripsi, $penyebab, $gambar) {
        $db = $this->mysqli->conn;
        $db->query("INSERT INTO tbl_penyakit VALUES ('$kd_penyakit', '$penyakit', '$solusi', '$pencegahan', '$deskripsi', '$penyebab', '$gambar')") or die ($db->error);
    }
    public function edit($sql){
        // var_dump($sql); die();
        $db = $this->mysqli->conn;
        $db->query($sql) or die ($db->error);
    }
 
    public function hapus($kd) {
        $db = $this->mysqli->conn;
        $db->query("DELETE FROM tbl_penyakit WHERE kd_penyakit = '$kd'") or die ($db->error);
    }

    function __destruct() {
        $db = $this->mysqli->conn;
        $db->close();
    }
}
?>