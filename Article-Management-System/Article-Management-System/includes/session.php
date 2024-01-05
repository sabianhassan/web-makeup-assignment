<!-- session code	-->
<?php if (isset($_SESSION['success'])): ?>
		<div class="alert alert-success m-5" role="alert">
			<strong>Success!</strong>
				<?php 
					echo $_SESSION['success']; 
				?>
		</div>

	<?php
	unset($_SESSION['success']);
	endif 
	?>


	<?php if (isset($_SESSION['error'])): ?>
		<div class="alert alert-danger m-5" role="alert">
			<strong>Error!</strong>
				<?php 
					echo $_SESSION['error']; 
				?>
		</div>

	<?php
	unset($_SESSION['error']);
	endif 
	?>

	<!-- finished session code -->
	