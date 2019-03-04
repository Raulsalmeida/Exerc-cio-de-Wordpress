<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title><?php bloginfo('name'); ?></title>

	<meta name="Description" content="<?php bloginfo("description"); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<div class="MenuCima">
		<div class="Logomarca"><?php the_custom_logo() ?></div>
			<div class="grid-container">
				<div>
					<table>
						<?php
							// The Query
							$bernado_post = new WP_Query( array( 'category_name' => 'menu',) );
							// The Loop
							if ( $bernado_post->have_posts() ) {
								echo '<tr>';
								while ( $bernado_post->have_posts() ) {
									$bernado_post->the_post();
									echo '<td class="menu">' . get_the_title() . '</td>';
								}
								echo '</tr>';
							} else {
								// no posts found
							}

						?>
					</table>
				</div>
			</div>
	</div>

	

	