<?php
/*Header template*/
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head()?>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="<?php echo home_url(); ?>">Mosaic</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">

                <?php 
                    wp_nav_menu( $arg = array(
						'container' => false,
                        'menu_class' => 'navbar-nav ml-auto',
                        'theme_location' => 'primary'
                    ));
                
                ?>
			
			</div> 
		</div>
	</nav>