<?php
//check level
session_start();
if(isset($_SESSION['level']) == "dosen" AND $_SESSION['username']) {
?>
<?php
//include header.php
include("part/header.php");
?>
<?php
//include sidebar.php
include("part/sidebar.php");
?>
<!-- start content -->
<section class="content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h2>
						DETAIL SKRIPSI MAHASISWA
						</h2>
					</div>
					<div class="body">
						<table class="table table-bordered dataTable js-exportable">
							<tbody>
								<?php
									include('../config/koneksi.php');
									$id = $_GET['id'];
									$query = "SELECT * FROM tbl_skripsi WHERE id_skripsi = '$id'";
									$hasil = mysqli_query($connection, $query);
									while($row = mysqli_fetch_array($hasil)) {
								?>
								<tr>
									<tr>
										<td><b>JUDUL 1</b> </td>
										<td><?php echo $row["judul1"] ?></td>
									</tr>
									<tr>
										<td><b>DESKRIPSI JUDUL 1</b> </td>
										<td><?php echo $row["deskripsi_judul1"] ?></td>
									</tr>
									<tr>
										<td><b>STATUS JUDUL 1</b> </td>
										<td><div class="alert alert-info text-center" style="background-color: #0b841a;margin-top:20px">
											Judul Diterima
										</div></td>
									</tr>
									<tr>
										<td><a href="" class="btn btn-success btn-sm">Setujui</a>
										<a href="delete-dosen.php?id=<?php echo $row["nidn"] ?>" class="btn btn-danger btn-sm">Tolak</a></td>
										<td></td>
									</tr>
									<tr>
										<td><b>JUDUL 2</b> </td>
										<td><?php echo $row["judul2"] ?></td>
									</tr>
									<tr>
										<td><b>DESKRIPSI JUDUL 2</b> </td>
										<td><?php echo $row["deskripsi_judul2"] ?></td>
									</tr>
									<tr>
										<td><b>STATUS JUDUL 2</b> </td>
										<td><div class="alert alert-info text-center" style="background-color: #0b841a;margin-top:20px">
											Judul Diterima
										</div></td>
									</tr>
									<tr>
										<td><a href="" class="btn btn-success btn-sm">Setujui</a>
										<a href="" class="btn btn-danger btn-sm">Tolak</a></td>
										<td></td>
									</tr>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end content -->
	<?php
	//include footer.php
	include("part/footer.php");
	?>
	<?php }else{ ?>
	<?php header("location:../login.php")  ?>
	<?php } ?>