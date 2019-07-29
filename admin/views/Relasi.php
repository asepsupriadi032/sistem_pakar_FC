<?php
include "models/DataRelasi.php";
$rls = new Relasi($connection);

if(@$_GET['act'] == '') {
?>
        <div class="row">
          <div class="col-lg-12">
            <h1>Data Relasi</h1>
            <!--<ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> PENYAKIT</a></li>
            </ol>-->
          </div>
        </div>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>Tambah Data</button>
        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped" id="datatables">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Kode Penyakit</th>
                    <th>Kode Gejala</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody> 
                <?php
                $no = 1;
                $tampil = $rls->tampil();
                while($data = $tampil ->fetch_object()) {
                ?>
                <tr>
                  <td align="center"><?php echo $no++."."; ?></td>
                  <td><?= $data->kd_penyakit; ?></td>
                  <td><?= $data->kd_gejala; ?></td>
                  <td align="center">
                    <a id="edit_relasi" data-toggle="modal" data-target="#edit" data-kd="<?= $data->kd_relasi; ?>" data-penyakit="<?= $data->kd_penyakit; ?>" data-gejala="<?= $data->kd_gejala; ?>">
                      <button class="btn btn=info btn-xs"><i class="fa fa-edit"></i> </button>
                    <a href="?page=relasi&act=del&kd=<?php echo $data->kd_relasi; ?>" onclick="return confirm('Yakin akan menghapus data ini?')">
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> </button>
                    </a>
                  </td>
                </tr>
                <?php
                } ?>
                </tbody>
              </table>
            </div>

                <div id="tambah" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Tambah Data Relasi</h4>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="form-group">
                          <label class="control-label" for="kd_penyakit">Kode Penyakit</label>
                          <select name="kd_penyakit" class="form-control" id="kd_penyakit" required>
                            <?php $rowPenyakit = $rls->getPenyakit();
                                while($row = mysqli_fetch_object($rowPenyakit)){
                            ?>
                            <option value="<?php echo $row->kd_penyakit ?>">[<?php echo $row->kd_penyakit ?>] <?php echo $row->penyakit ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="kd_gejala">Kode Gejala</label>
                          <select name="kd_gejala" class="form-control" id="kd_gejala" required>
                            <?php $rowGejala = $rls->getGejala();
                                while($row = mysqli_fetch_object($rowGejala)){
                            ?>
                            <option value="<?php echo $row->kd_gejala ?>">[<?php echo $row->kd_gejala ?>] <?php echo $row->gejala ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
                      </div>
                    </form>
                    <?php
                    if(@$_POST['tambah']) {
                        // $kd_relasi = $connection->conn->real_escape_string($_POST['kd_relasi']);
                        $kd_penyakit = $connection->conn->real_escape_string($_POST['kd_penyakit']); 
                        $kd_gejala = $connection->conn->real_escape_string($_POST['kd_gejala']);
                      
                        if($kd_penyakit){
                          $rls->tambah($kd_penyakit,$kd_gejala);
                          // var_dump("fdgfdgdf"); exit();
                          header("location: ?page=relasi");
                        }else {
                          echo"<script>alert('Data Gagal Ditambahkan!')</script>";
                        }
                      }
                    ?>
                    </div>
                </div>
              </div>

              <div id="edit" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit Data Relasi</h4>
                    </div>
                    <form id="form" enctype="multipart/form-data">
                      <div class="modal-body" id="modal-edit">
                      
                        <div class="form-group">
                          <label class="control-label" for="kd_penyakit">Kode Penyakit</label>
                          <input type="hidden" name="kd_relasi">
                          <select name="kd_penyakit" class="form-control" id="kd_penyakit" required>
                            <?php $rowPenyakit = $rls->getPenyakit();
                                while($row = mysqli_fetch_object($rowPenyakit)){
                            ?>
                            <option value="<?php echo $row->kd_penyakit ?>">[<?php echo $row->kd_penyakit ?>] <?php echo $row->penyakit ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="kd_gejala">Kode Gejala</label>
                          <select name="kd_gejala" class="form-control" id="kd_gejala" required>
                            <?php $rowGejala = $rls->getGejala();
                                while($row = mysqli_fetch_object($rowGejala)){
                            ?>
                            <option value="<?php echo $row->kd_gejala ?>">[<?php echo $row->kd_gejala ?>] <?php echo $row->gejala ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>  
                      
                      <div class="modal-footer">
                        <input type="submit" class="btn btn-success" name="edit" value="Simpan">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <script src="assets/js/jquery-1.10.2.js"></script>
              <script type="text/javascript">
              $(document).on("click", "#edit_relasi", function() {
                var kdrelasi = $(this).data('kd');
                var kdpnykt = $(this).data('penyakit');
                var kdgejala = $(this).data('gejala');
                $("#modal-edit #kd_relasi").val(kdrelasi);
                $("#modal-edit #kd_penyakit").val(kdpenyakit);
                $("#modal-edit #kd_gejala").val(kdgejala);
               
              })

              $(document).ready(function(e) {
                $("#form").on("submit", (function(e) {
                  e.preventDefault();
                  $.ajax({
                    url : 'models/Proses_edit_relasi.php',
                    type : 'POST',
                    data : new FormData(this),
                    contentType : false,
                    cache : false,
                    processData : false,
                    success : function(msg) {
                      $('.table').html(msg);
                    }
                  });
                }));
              })
              </script>
          </div>
        </div>

<?php
} elseif(@$_GET['act'] == 'del') {
    $rls->hapus($_GET['kd']);
    header("location: ?page=relasi");
}