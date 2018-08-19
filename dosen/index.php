<?php
//check level
session_start();
if($_SESSION['level'] == "dosen" AND $_SESSION['username'] == TRUE) {
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
								DASHBOARD
							</h2>
							<div class="header-dropdown m-r--5">

							</div>
						</div>
						<div class="body">
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