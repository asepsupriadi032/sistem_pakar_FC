<?php
class Saran {
    private $mysqli;

    function __construct($conn) {
        $this->mysqli= $conn;
    }
    public function submit($nama, $email, $no_handphone, $pesan){
        $db = $this->mysqli->conn;
        $db->query("INSERT INTO saran_user VALUES('','$nama', '$email', '$no_handphone', '$pesan')") or die ($db->error);
    }
    public function tampil($nomor = null) {
        $db = $this->mysqli->conn;
        $sql = "SELECT * FROM saran_user";
        if($nomor != null) {
            $sql .= " WHERE no = $nomor";
        }
        $query = $db->query($sql) or die ($db->error);
        return $query;
    }
    public function hapus($nomor){
        $db = $this->mysqli->conn;
        $db->query("DELETE FROM saran_user WHERE no='$nomor'") or die ($db->error);
        }
       
    }
?>