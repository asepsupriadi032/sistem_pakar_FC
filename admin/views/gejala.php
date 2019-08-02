<?php
include "models/datagejala.php";
$gjl = new Gejala($connection);

if(@$_GET['act'] == '') {
?>
        <div class="row">
          <div class="col-lg-12">
            <h1>Data Gejala</h1>
            <!--<ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> GEJALA </a></li>
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
                    <th>Kode Gejala</th>
                    <th>Nama Gejala</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                $tampil = $gjl->tampil();
                while($data = $tampil ->fetch_object()) {
                ?>
                <tr>
                  <td align="center"><?php echo $no++."."; ?></td>
                  <td><?php echo $data->kd_gejala; ?></td>
                  <td><?php echo $data->gejala; ?></td>
                  <td align="center">
                    <a id="edit_gjl" data-toggle="modal" data-target="#edit" data-id="<?php echo $data->id_gejala; ?>" data-kd="<?php echo $data->kd_gejala; ?>" data-nama="<?php echo $data->gejala; ?>">
                      <button class="btn btn=info btn-xs"><i class="fa fa-edit"></i> </button>
                    <a href="?page=gejala&act=del&kd=<?php echo $data->kd_gejala; ?>" onclick="return confirm('Yakin akan menghapus data ini?')">
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
                      <h4 class="modal-title">Tambah Data Gejala</h4>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="form-group">
                          <label class="control-label" for="kd_gejala">Kode Gejala</label>
                          <input type="text" name="kd_gejala" class="form-control" id="kd_gejala" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="gejala">Nama Gejala</label>
                          <input type="text" name="gejala" class="form-control" id="gejala" required>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
                      </div>
                    </form>
                    <?php
                    if(@$_POST['tambah']) {
                        $kd_gejala = $connection->conn->real_escape_string($_POST['kd_gejala']);
                        $gejala = $connection->conn->real_escape_string($_POST['gejala']);

                        if($gejala){
                          $gjl->tambah($kd_gejala,$gejala);
                          header("location: ?page=gejala");
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
                      <h4 class="modal-title">Edit Data Gejala</h4>
                    </div>
                    <form id="form" enctype="multipart/form-data">
                      <div class="modal-body" id="modal-edit">
                        <div class="form-group">
                          <label class="control-label" for="kd_gejala">Kode Gejala</label>
                          <input type="hidden" name='id_gejala' id="id_gejala">
                          <input type="text" name="kd_gejala" class="form-control" id="kd_gejala" readonly>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="gejala">Gejala</label>
                          <input type="text" name="gejala" class="form-control" id="gejala" required>
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
              $(document).on("click", "#edit_gjl", function() {
                var kdgjl = $(this).data('kd');
                var gjl = $(this).data('nama');
                $("#modal-edit #kd_gejala").val(kdgjl);
                $("#modal-edit #gejala").val(gjl);
              })

              $(document).ready(function(e) {
                $("#form").on("submit", (function(e) {
                  e.preventDefault();
                  $.ajax({
                    url : 'models/proses_edit_gjl.php',
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
} elseif(@$_GET['act'] == "del") {
  $gjl->hapus($_GET['kd']);
  header("location: ?page=gejala");
}