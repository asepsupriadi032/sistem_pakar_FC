<?php
include "datapenyakit.php";
include "database.php";


// die();
try {
    $connection = new Database("localhost","id10524213_lailla","pakarbalita123","id10524213_sistempakar");
    
    // print_r($_POST['kd_penyakit']); exit();
    $pnykt = new Penyakit($connection);
    // print_r($_POST['submit']);die();
    $kd_penyakit = $connection->conn->real_escape_string($_POST['kd_penyakit']);
    $penyakit = $connection->conn->real_escape_string($_POST['penyakit']);
    $solusi = $connection->conn->real_escape_string($_POST['solusi']);
    $pencegahan = $connection->conn->real_escape_string($_POST['pencegahan']);
    $deskripsi = $connection->conn->real_escape_string($_POST['deskripsi']);
    $penyebab = $connection->conn->real_escape_string($_POST['penyebab']);
    $submit = $connection->conn->real_escape_string($_POST['submit']);
    $uploadDir = "../../img/";

    if($submit == "Simpan"){
        if(!empty($_FILES['gambar']['tmp_name'])){
            if(is_uploaded_file($_FILES['gambar']['tmp_name'])){
                
                $uploadFile = $_FILES['gambar'];
                // Extract nama file
                $extractFile = pathinfo($uploadFile['name']);
                $size = $_FILES['gambar']['size']; //untuk mengetahui ukuran file
                $tipe = $_FILES['gambar']['type'];// untuk mengetahui tipe file
                $sameName = 0; // Menyimpan banyaknya file dengan nama yang sama dengan file yg diupload
                $handle = opendir($uploadDir);
                while(false !== ($file = readdir($handle))){ // Looping isi file pada directory tujuan
                    // Apabila ada file dengan awalan yg sama dengan nama file di uplaod
                    if(strpos($file,$extractFile['filename']) !== false)
                    $sameName++; // Tambah data file yang sama
                }
                //   var_dump($sameName); exit();
                
                /* Apabila tidak ada file yang sama ($sameName masih '0') maka nama file pakai
                * nama ketika diupload, jika $sameName > 0 maka pakai format "namafile($sameName).ext */
                $newName = empty($sameName) ? $uploadFile['name'] : $extractFile['filename'].'('.$sameName.').'.$extractFile['extension'];
                
                if(move_uploaded_file($uploadFile['tmp_name'],$uploadDir.$newName)){
                    
                    $gambar=$newName;
                    $pnykt->tambah($kd_penyakit,$penyakit,$solusi,$pencegahan,$deskripsi,$penyebab,$gambar);
                    header("location: ". $_POST['redirect_to']);
                    
                }else{
                    echo "gagal";
                }
                
            }
        }else{
            $gambar = "";
            $pnykt->tambah($kd_penyakit,$penyakit,$solusi,$pencegahan,$deskripsi,$penyebab,$gambar);
                    header("location: ". $_POST['redirect_to']);
        }
    }else{
        // print_r($_FILES['gambar']['name']); 
        if(!empty($_FILES['gambar']['tmp_name'])){//cek apakah file gambar berisi inputan
            if(is_uploaded_file($_FILES['gambar']['tmp_name'])){
                //kondisi jika file gambar terisi
                $uploadFile = $_FILES['gambar'];
                // Extract nama file
                $extractFile = pathinfo($uploadFile['name']);
                $size = $_FILES['gambar']['size']; //untuk mengetahui ukuran file
                $tipe = $_FILES['gambar']['type'];// untuk mengetahui tipe file
                $sameName = 0; // Menyimpan banyaknya file dengan nama yang sama dengan file yg diupload
                $handle = opendir($uploadDir);
                while(false !== ($file = readdir($handle))){ // Looping isi file pada directory tujuan
                    // Apabila ada file dengan awalan yg sama dengan nama file di uplaod
                    if(strpos($file,$extractFile['filename']) !== false)
                    $sameName++; // Tambah data file yang sama
                }
                //   var_dump($sameName); exit();
                
                /* Apabila tidak ada file yang sama ($sameName masih '0') maka nama file pakai
                * nama ketika diupload, jika $sameName > 0 maka pakai format "namafile($sameName).ext */
                $newName = empty($sameName) ? $uploadFile['name'] : $extractFile['filename'].'('.$sameName.').'.$extractFile['extension'];
                

                if(move_uploaded_file($uploadFile['tmp_name'],$uploadDir.$newName)){
                    
                    $gambar=$newName;
                    $pnykt->edit("UPDATE tbl_penyakit SET penyakit = '$penyakit', solusi = '$solusi', pencegahan = '$pencegahan', deskripsi = '$deskripsi', penyebab = '$penyebab', gambar = '$gambar' WHERE kd_penyakit = '$kd_penyakit' ");
                   // print_r("berhasil"); die();
                    header("location: ". $_POST['redirect_to']);
                    
                }else{
                    echo "gagal";
                }
                
            }
        }else{

            // var_dump($_POST); die();
            //kondisi edit jika kondisi file gambar tidak terisi
            $pnykt->edit("UPDATE tbl_penyakit SET kd_penyakit = '$kd_penyakit', penyakit = '$penyakit', solusi = '$solusi', pencegahan = '$pencegahan', deskripsi = '$deskripsi', penyebab = '$penyebab' WHERE kd_penyakit = '$kd_penyakit' ");
                   // print_r("berhasil"); die();
                    header("location: ". $_POST['redirect_to']);
        }
    }
} catch(Exception $e){
    print_r($e->getMessage());
    die();
}




?>