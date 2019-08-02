<?php
include "models/datapenyakit.php";
$pnykt = new Penyakit($connection);

if(@$_GET['act'] == '') {
?>
        <div class="row">
          <div class="col-lg-12">
            <h1>Data Penyakit</h1>
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
                    <th>Nama Penyakit</th>
                    <th>Solusi</th>
                    <th>Cara Pencegahan</th>
                    <th>Deskripsi</th>
                    <th>Penyebab</th>
                    <th>Gambar</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody> 
                <?php
                $no = 1;
                $tampil = $pnykt->tampil();
                while($data = $tampil ->fetch_object()) {
                ?>
                <tr>
                  <td align="center"><?php echo $no++."."; ?></td>
                  <td><?php echo $data->kd_penyakit; ?></td>
                  <td><?php echo $data->penyakit; ?></td>
                  <td><?php echo $data->solusi; ?></td>
                  <td><?php echo $data->pencegahan; ?></td>
                  <td><?php echo $data->deskripsi; ?></td>
                  <td><?php echo $data->penyebab; ?></td>
                    <td align="center">
                      <?php if(!empty($data->gambar)){?>
                        <img src="<?php echo "../img/".$data->gambar; ?>" width="70px" height="70px">
                      <?php }else {?>
                        <img src="../img/no-image.jpg" width="70px" height="70px">
                      <?php } ?>
                    </td>
                    <td align="center">
                      <a id="edit_pnykt" data-toggle="modal" data-target="#edit" data-kd="<?php echo $data->kd_penyakit; ?>" data-nama="<?php echo $data->penyakit; ?>" data-solusi="<?php echo $data->solusi; ?>" data-pencegahan="<?php echo $data->pencegahan; ?>" data-dskrps="<?= $data->deskripsi; ?>" data-pnybb="<?= $data->penyebab; ?>" data-gmbr="<?= $data->gambar; ?>">
                        <button class="btn btn=info btn-xs"><i class="fa fa-edit"></i> </button>
                      <a href="?page=penyakit&act=del&kd=<?php echo $data->kd_penyakit; ?>" onclick="return confirm('Yakin akan menghapus data ini?')">
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
                      <h4 class="modal-title">Tambah Data Penyakit</h4>
                    </div>
                    <form method="post" enctype="multipart/form-data" action="<?php echo "models/proses_penyakit.php";?>">
                      <div class="modal-body">
                        <div class="form-group">
                        <input type="hidden" name="redirect_to" value="<?=$_SERVER['REQUEST_URI'];?>" id="">
                          <label class="control-label" for="kd_penyakit">Kode Penyakit</label>
                          <input type="text" name="kd_penyakit" class="form-control" id="kd_penyakit" >
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="penyakit">Nama Penyakit</label>
                          <input type="text" name="penyakit" class="form-control" id="penyakit" >
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="solusi">Solusi</label>
                          <textarea type="text" name="solusi" class="form-control" id="solusi"></textarea>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="pencegahan">Pencegahan</label>
                          <textarea type="text" name="pencegahan" class="form-control" id="pencegahan"></textarea>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="deskripsi">Deskripsi</label>
                          <textarea type="text" name="deskripsi" class="form-control" id="deskripsi"></textarea>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="penyebab">Penyebab</label>
                          <textarea type="text" name="penyebab" class="form-control" id="penyebab"></textarea>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="gambar">Gambar</label>
                          <div style="padding-bottom:5px">
                              <img src="" width="80px" id="pict">
                          </div>
                          <input type="file" name="gambar" class="form-control" id="gambar"> 
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <input type="submit" class="btn btn-success" name="submit" value="Simpan">
                      </div>
                    </form>
                    </div>
                </div>
              </div>

              <div id="edit" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit Data Penyakit</h4>
                    </div>
                    <form id="form" enctype="multipart/form-data" action="<?php echo "models/proses_penyakit.php";?>" method="post">
                      <div class="modal-body" id="modal-edit">
                        <div class="form-group">
                          <label class="control-label" for="kd_penyakit">Kode Penyakit</label>
                        <input type="hidden" name="redirect_to" value="<?=$_SERVER['REQUEST_URI'];?>" id="">
                          <input type="text" name="kd_penyakit" class="form-control" id="kd_penyakit" readonly>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="penyakit">Nama Penyakit</label>
                          <input type="text" name="penyakit" class="form-control" id="penyakit" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="solusi">Solusi</label>
                          <textarea name="solusi" class="form-control" id="solusi"></textarea>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="pencegahan">Pencegahan</label>
                          <textarea name="pencegahan" class="form-control" id="pencegahan"></textarea>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="deskripsi">Deskripsi</label>
                          <textarea name="deskripsi" class="form-control" id="deskripsi"></textarea>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="penyebab">Penyebab</label>
                          <textarea name="penyebab" class="form-control" id="penyebab"></textarea>
                        </div>
                        <div class="form-group">
                          <img id="pict" width="50" height="50">
                          <label class="control-label" for="gambar">Gambar</label>
                          <input type="file" name="gambar" class="form-control" id="gambar"> 
                        </div>
                      </div>
                      <div class="modal-footer">
                        <!-- <button type="reset" class="btn btn-danger">Reset</button> -->
                        <input type="submit" class="btn btn-success" name="submit" value="Ubah">
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <script src="assets/js/jquery-1.10.2.js"></script>
              <script type="text/javascript">
              $(document).on("click", "#edit_pnykt", function() {
                var kdpnykt = $(this).data('kd');
                var pnykt = $(this).data('nama');
                var sls = $(this).data('solusi');
                var pncghn = $(this).data('pencegahan');
                var dskrps = $(this).data('dskrps');//ambil berdasarkan apa yg dikirim dari link
                // alert(dskrps);
                var pnybb = $(this).data('pnybb');
                var gmbr = $(this).data('gmbr');
                $("#modal-edit #kd_penyakit").val(kdpnykt);
                $("#modal-edit #penyakit").val(pnykt);
                $("#modal-edit #solusi").val(sls);
                $("#modal-edit #pencegahan").val(pncghn);
                $("#modal-edit #deskripsi").val(dskrps);
                $("#modal-edit #penyebab").val(pnybb);
                $("#modal-edit #pict").attr("src", "../img/"+gmbr);
              })

              // $(document).ready(function(e) {
              //   $("#form").on("submit", (function(e) {
              //     e.preventDefault();
              //     $.ajax({
              //       url : 'models/proses_edit_pnykt.php',
              //       type : 'POST',
              //       data : new FormData(this),
              //       contentType : false,
              //       cache : false,
              //       processData : false,
              //       success : function(msg) {
              //         $('.table').html(msg);
              //       }
              //     });
              //   }));
              // })
              </script>
          </div>
        </div>

<?php
} elseif(@$_GET['act'] == 'del') {
    $pnykt->hapus($_GET['kd']);
    header("location: ?page=penyakit");
}