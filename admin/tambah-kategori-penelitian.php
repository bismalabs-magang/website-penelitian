<?php
//check level
session_start();
if(isset($_SESSION['level']) == "admin" AND $_SESSION['username']) {
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
						DATA KATEGORI PENELITIAN
						</h2>
						<div class="header-dropdown m-r--5">
							
						</div>
					</div>
					<div class="body">
						
						<form action="simpan-kategori-penelitian.php" method="POST">
							<div class="form-group">
								<label>NAMA KATEGORI</label>
								<div class="form-line">
									<input type="text" name="nama" class="form-control" placeholder="Nama Kategori"/>
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
	?>