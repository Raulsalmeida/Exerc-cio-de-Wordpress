<?php

#Incluindo CSS


#Ocultar barra Wordpress
function ocultarBarra() {
	return false;
}
add_filter("show_admin_bar", "ocultarBarra");

#Suporte a logo
add_theme_support('custom-logo', array(
	'height'      => 108,
	'width'       => 318,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array('site-title', 'site-description'),
));

?>