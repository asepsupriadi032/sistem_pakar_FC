<?php
include "models/datasaran.php";
$srn = new Saran($connection);
if(@$_GET['act'] == '') {
?>

	<div class="row">
		<div class="col-lg-12">
			<h1>Saran User</h1>
		</div>
    </div>
	<div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped" id="datatables">
                <thead>
					<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Email</th>
					<th>No. Handphone</th>
					<th>Pesan</th>
					<th>Opsi</th>
					</tr>
				</thead>

</tbody>
	<?php
	$num=1;
	$tampil = $srn->tampil();
	while($data = $tampil->fetch_object()) {
	?>
		<tr>
			<td align="center"><?php echo $num++."."; ?></td>
			<td><?= $data->nama; ?></td>
			<td><?= $data->email; ?></td>
			<td><?= $data->no_handphone; ?></td>
            <td><?= $data->pesan; ?></td>
            <td align="center">
					<a href="?page=saran_user&act=del&nomor=<?php echo $data->no; ?> echo $data" onclick="return confirm('Yakin akan menghapus data ini?')">
				<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> </button></a>
			</td>
		</tr>
		<?php
		} ?>
		</tbody>
	</table>
</div>

<?php
} else if(@$_GET['act']=='del'){
    $srn->hapus($_GET['nomor']);
    header("location: ?page=saran_user");
}