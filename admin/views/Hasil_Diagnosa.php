<?php
include "models/DataHasil.php";
$hsl = new Hasil($connection);

if(@$_GET['act'] == '') {
?>
        <div class="row">
          <div class="col-lg-12">
            <h1>Hasil Diagnosa</h1>
          </div>
        </div>
       
        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped" id="datatables">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Anak</th>
                    <th>Usia Anak</th>
                    <th>Jenis Kelamin Anak</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                $tampil = $hsl->tampil();
                while($data = $tampil ->fetch_object()) {
                ?>
                <tr>
                  <td align="center"><?php echo $no++."."; ?></td>
                  <!-- <td><?php //echo $data->id_pasien; ?></td> -->
                  <td><?php echo $data->nama_anak; ?></td>
                  <td><?php echo $data->usia_anak; ?> tahun</td>
                  <td><?php echo $data->jk_anak; ?></td>
                  <td align="center">
                    <!-- <a id="edit_hasil" data-toggle="modal" data-target="#edit" data-id="<?php //echo $data->id_pasien; ?>" data-nama="<?php //echo $data->nama_anak; ?>" data-usia="<?php //echo $data->usia_anak; ?>" data-jk="<?php //echo $data->jk_anak; ?>">
                      <button class="btn btn=info btn-xs"><i class="fa fa-eye"></i> </button>
                    </a> -->
                    <a target="_blank" href="detail_diagnosa.php?id_pasien=<?php echo $data->id_pasien ?>">
                      <i class="fa fa-eye"></i>
                    </a>
                    <a href="?page=hasil&act=del&id=<?php echo $data->id_pasien; ?>" onclick="return confirm('Yakin akan menghapus data ini?')">
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> </button>
                    </a>
                  </td>
                </tr>
                <?php
                } ?>
                </tbody>
              </table>
            </div>

              <div id="edit" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit Data Hasil Diagnosa</h4>
                    </div>
                    <form id="form" enctype="multipart/form-data">
                      <div class="modal-body" id="modal-edit">
                        <div class="form-group">
                          <label class="control-label" for="nama_anak">Nama Anak</label>
                          <input type="hidden" name='id_pasien' id="id_pasien">
                          <input type="text" name="nama_anak" class="form-control" id="nama_anak" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="usia_anak">Usia Anak</label>
                          <input type="text" name="usia_anak" class="form-control" id="usia_anak" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="jk_anak">Jenis Kelamin Anak</label>
                          <div class="form-check-inline">
                            <label class="form-check-label" for="radio1">
                                <input type="radio" class="form-check-input" id="radio" name="jk_anak" id="radio1" value="laki-laki" style="margin-right:5px">Laki-laki
                            </label><br>
                            <label class="form-check-label" for="radio2">
                                <input type="radio" class="form-check-input" id="radio" name="jk_anak" id="radio2" value="perempuan" style="margin-right:5px">Perempuan
                            </label>
                          </div>
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
              $(document).on("click", "#edit_hasil", function() {
                var idpasien = $(this).data('id');
                var namaAnak = $(this).data('nama');
                var usiaAnak = $(this).data('usia');
                var jkAnak = $(this).data('jk');
                $("#modal-edit #id_pasien").val(idpasien);
                $("#modal-edit #nama_anak").val(namaAnak);
                $("#modal-edit #usia_anak").val(usiaAnak);
                $("#modal-edit #jk_anak").val(jkAnak);
              })

              $(document).ready(function(e) {
                $("#form").on("submit", (function(e) {
                  e.preventDefault();
                  $.ajax({
                    url : 'models/Proses_edit_hasil.php',
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
  $hsl->hapus($_GET['id']);
  header("location: ?page=hasil");
}