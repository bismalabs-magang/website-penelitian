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
						TAMBAH DATA PENELITIAN
						</h2>
						<div class="header-dropdown m-r--5">
							
						</div>
					</div>
					<div class="body">
						
						<form action="simpan-penelitian.php" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label>JUDUL PENELITIAN</label>
								<div class="form-line">
									<input type="text" name="nama" class="form-control" placeholder="judul penelitian" />
								</div>
							</div>
							<div class="form-group">
								<label>FILE PENELITIAN</label>
								<input type="file" name="file">
					
							</div>
							<div class="form-group">
								<label>DESKRPSI PENELITIAN</label>
								<textarea class="form-control" rows="3" name="deskripsi" placeholder="Masukkan Deskripsi Penelitian"></textarea>
					
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
?>