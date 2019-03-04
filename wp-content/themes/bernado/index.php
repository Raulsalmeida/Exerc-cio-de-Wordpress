<?php get_header(); ?>
<!-- Banner -->
<div id="banner-div" class="container">
  <div class="row">
    <div id="banner-img" class="col-lg">
      <img id="banner" src="http://localhost/wordpress/wp-content/uploads/2019/03/Bernardo-e-Silva-Banner.png">
    </div>
    <div id="banner-titulo">
    	TUDO
    </div>
    <div id="banner-texto">
    	PARA O SEU<br> 
    	CONSULTÓRIO
    </div>
  </div>
</div>
<br>
<!-- Apresentação -->
<div class="container">
  <div class="row">
    <div class="col-sm" id="titulo">
      	<?php
			// The Query
			$bernado_post = new WP_Query( array( 'p' => '45') );
			// The Loop
			if ( $bernado_post->have_posts() ) {
					$bernado_post->the_post();
					echo get_the_title();
			} else {
				echo('vazio');
			}
		?>
    </div>
  </div>
</div>
<!-- A Empresa -->
<div class="container">
  <div class="row">
    <div class="col-lg">
      <img id="empresa" src="http://localhost/wordpress/wp-content/uploads/2019/03/Bernardo-e-Silva-Apresentação.png">
    </div>
    <div class="col-sm" id="texto">
      	<?php
			// The Query
			$bernado_post = new WP_Query( array( 'p' => '45') );
			// The Loop
			if ( $bernado_post->have_posts() ) {
					$bernado_post->the_post();
					echo get_the_content();
			} else {
				echo('vazio');
			}
		?>
    </div>
  </div>
</div>
<!-- Missão -->
<div class="container">
  <div class="row">
	<div class="col-sm" id="topico">
	      	<?php
				// The Query
				$bernado_post = new WP_Query( array( 'p' => '118') );
				// The Loop
				if ( $bernado_post->have_posts() ) {
						$bernado_post->the_post();
						echo get_the_title();
				} else {
					echo('vazio');
				}
			?>
	</div>
  </div>
  <div class="row">
  	<div class="col-sm" id="topico-texto">
      	<?php
			// The Query
			$bernado_post = new WP_Query( array( 'p' => '118') );
			// The Loop
			if ( $bernado_post->have_posts() ) {
					$bernado_post->the_post();
					echo get_the_content();
			} else {
				echo('vazio');
			}
		?>
    </div>
  </div>
</div>
<!-- Visão -->
<div class="container">
  <div class="row">
	<div class="col-sm" id="topico">
	      	<?php
				// The Query
				$bernado_post = new WP_Query( array( 'p' => '120') );
				// The Loop
				if ( $bernado_post->have_posts() ) {
						$bernado_post->the_post();
						echo get_the_title();
				} else {
					echo('vazio');
				}
			?>
	</div>
  </div>
  <div class="row">
  	<div class="col-sm" id="topico-texto">
      	<?php
			// The Query
			$bernado_post = new WP_Query( array( 'p' => '120') );
			// The Loop
			if ( $bernado_post->have_posts() ) {
					$bernado_post->the_post();
					echo get_the_content();
			} else {
				echo('vazio');
			}
		?>
    </div>
  </div>
</div>
<!-- Valores -->
<div class="container">
  <div class="row">
	<div class="col-sm" id="topico">
	      	<?php
				// The Query
				$bernado_post = new WP_Query( array( 'p' => '122') );
				// The Loop
				if ( $bernado_post->have_posts() ) {
						$bernado_post->the_post();
						echo get_the_title();
				} else {
					echo('vazio');
				}
			?>
	</div>
  </div>
  <div class="row">
  	<div class="col-sm" id="topico-texto">
      	<?php
			// The Query
			$bernado_post = new WP_Query( array( 'p' => '122') );
			// The Loop
			if ( $bernado_post->have_posts() ) {
					$bernado_post->the_post();
					echo get_the_content();
			} else {
				echo('vazio');
			}
		?>
    </div>
  </div>
</div>
<br>
<br>

<?php get_footer(); ?>
