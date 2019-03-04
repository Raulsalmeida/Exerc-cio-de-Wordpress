<?php wp_footer(); ?>

<div class="MenuBaixo">
	<div class="container">
	  <div class="row">
	    <div class="col-sm" id="form">
      		<?php echo do_shortcode( '[wpforms id="130" title="false" description="false"]' ); ?>
    	</div>
	    <div class="col-sm">
	    	<!-- Logo -->
	    	<div class="row">
	    		<img id="logo-footer" src="http://localhost/wordpress/wp-content/uploads/2019/03/Bernardo-e-Silva-Logo-Branca.png">
	    	</div>
	    	<!-- Contatos -->
	    	<div id="contatos" class="row">
	    		<table>
				<?php
				// The Query
					$bernado_post = new WP_Query( array( 'category_name' => 'footer',) );
					// The Loop
					if ( $bernado_post->have_posts() ) {
						echo '<td>';
						while ( $bernado_post->have_posts() ) {
							$bernado_post->the_post();
								echo '<tr>' . get_the_content() . '</tr>';
						}
						echo '</td>';
					} else {
						// no posts found
					}
				?>
			</table>
	    	</div>

		    <div id="direitos" class="row">
		     	©2017 Bernado & Silva<br>
		     	Todos os direitos reservados
		    </div> 
	    </div>
	    <div id="iframe" class="col-sm">
	      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbernardodental%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
	    </div>
	  </div>
	</div>
</div>

</body>
</html>