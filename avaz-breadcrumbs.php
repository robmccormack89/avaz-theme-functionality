<?php

function the_breadcrumb()
{
	
	
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="crumbs" class="breadcrumbs uk-breadcrumb">','</p>' );
}
	
	
	
}

