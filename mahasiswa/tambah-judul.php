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
								TAMBAH DATA PENGAJUAN JUDUL
							</h2>
							<div class="header-dropdown m-r--5">
								
							</div>
						</div>
						<div class="body">
							
							<form action="simpan-judul.php" method="POST">
								<div class="form-group">
									<label>JUDUL 1</label>
										<div class="form-line">
											<input type="text" name="judul1" class="form-control" placeholder="Judul 1" />
										</div>
									</div>
									<div class="form-group">
										<label>DESKRIPSI JUDUL 1</label>
										<div class="form-line">
											<textarea name="deskripsi_judul1" class="form-control" placeholder="Deskripsi Judul 1"> </textarea>  
										</div>
									</div>

									<div class="form-group">
										<label>JUDUL 2</label>
										<div class="form-line">
											<input type="text" name="judul2" class="form-control" placeholder="Judul 2" />
										</div>
									</div>

									<div class="form-group">
										<label>DESKRIPSI JUDUL 2</label>
										<div class="form-line">
											<textarea  name="deskripsi_judul2" class="form-control" placeholder="Deskripsi Judul 2" > </textarea>
										</div>
									</div>

									
									<div class="form-group">
										<label>PEMBIMBING 1</label>
										<div class="form-line">
											<input type="text" name="pembimbing1" class="form-control" placeholder="Pembimbing 1" />
										</div>
									</div>

									<div class="form-group">
										<label>PEMBIMBING 2</label>
										<div class="form-line">
											<input type="text" name="pembimbing2" class="form-control" placeholder="Pembimbing 2" />
										</div>
									</div>

									<button type="submit" class="btn bg-green waves-effect">
									<i class="material-icons">save</i>
									<span>SIMPAN</span>
									</button>

									<button type="reset" class="btn bg-orange waves-effect">
									<i class="material-icons">repeat</i>
									<span>RESET</span>
									</button>

							</form>

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