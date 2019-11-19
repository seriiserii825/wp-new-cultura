<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_downloads_posts_options' );
function crb_downloads_posts_options() {
	Container::make( 'post_meta', __( 'Block title and short text' ) )
	         ->or_where( 'post_id', '=', 690 )
	         ->add_fields( array(

		         Field::make('complex', 'crb_downloads', __('Downloads fields'))
			         ->add_fields(array(
				         Field::make( 'text', 'title_ru', __( 'Title ru' ) )
						->set_width(50),
				         Field::make( 'text', 'title_ro', __( 'Title ro' ) )
					         ->set_width(50),
				         Field::make( 'text', 'size', __( 'File size' ) ),
				         Field::make( 'file', 'file', __( 'File download' ) )
				         ->set_value_type('url')
			         ))
			         ->set_layout('tabbed-horizontal'),
	         ) );
}

