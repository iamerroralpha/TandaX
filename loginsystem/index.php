<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Página principal de TandaX</h2>
		<?php
			if ( isset ( $_SESSION ['u_id'] ) ) 
			{
				echo "You are logged in!";
			}
		?>
	</div>
</section>

<?php
	include_once 'footer.php';
?>