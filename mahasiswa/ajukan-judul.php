<?php
//check level
session_start();
if(isset($_SESSION['level']) == "mahasiswa" AND $_SESSION['username']) {
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
								DATA AJUKAN JUDUL SKRIPSI
							</h2>
							<div class="header-dropdown m-r--5">
								<li class="dropdown">
									<a href="tambah-judul.php" class="btn btn-success btn-md">AJUKAN JUDUL</a>
								</li>
							</div>
						</div>
						<div class="body">
							<table class="table table-bordered dataTable js-exportable">
								<thead>
								<tr>
									<th scope="col">NIM</th>
									<th scope="col">JUDUL1</th>
									<th scope="col">JUDUL2</th>

									<th scope="col">STATUS JUDUL1</th>
									<th scope="col">STATUS JUDUL2</th>
									<th scope="col" style="width: 20%">AKSI</th>


								</tr>
								</thead>
								<tbody>
									<?php
										include('../config/koneksi.php');
										
										$nim = $_SESSION['username'];
										
										$query = "SELECT * FROM tbl_skripsi WHERE nim = '$nim' ORDER BY id_skripsi DESC";
										
										$hasil = mysqli_query($connection, $query);

										while($row = mysqli_fetch_array($hasil)) {

											//button status 1
											if($row['status_judul1'] == "menunggu"){

												$button = '<button type="button" class="btn btn-warning waves-effect">MENUNGGU</button>';

											}elseif($row['status_judul1'] == "diterima"){

												$button = '<button type="button" class="btn btn-success waves-effect">DITERIMA</button>';

											}elseif($row['status_judul1'] == "ditolak"){

												$button = '<button type="button" class="btn btn-danger waves-effect">DITOLAK</button>';

											}else{

												$button = 'xxx';

											}

											//button status 2
											if($row['status_judul2'] == "menunggu"){

												$button2 = '<button type="button" class="btn btn-warning waves-effect">MENUNGGU</button>';

											}elseif($row['status_judul2'] == "diterima"){

												$button2 = '<button type="button" class="btn btn-success waves-effect">DITERIMA</button>';

											}elseif($row['status_judul2'] == "ditolak"){

												$button2 = '<button type="button" class="btn btn-danger waves-effect">DITOLAK</button>';

											}else{

												$button2 = 'xxx';

											}
									?>
									<tr>
										<td><?php echo $row["nim"] ?></td>
										<td><?php echo $row["judul1"] ?></td>
										<td><?php echo $row["judul2"] ?></td>
										<td style="text-align: center;"><?php echo $button ?></td>
										<td><?php echo $button2 ?></td>
										<td style="text-align: center">
											<a href="edit-judul.php?id=<?php echo $row["id_skripsi"] ?>" class="btn btn-success btn-sm">Edit</a>

											<a href="delete-judul.php?id=<?php echo $row["id_skripsi"] ?>" class="btn btn-danger btn-sm">Delete</a>
										</td>
									</tr>

								<?php } ?>

								</tbody>
							</table>
						</div>
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