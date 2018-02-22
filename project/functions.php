<?php
//Custom post type: Cursos
function create_post_type() {
	register_post_type( 'curso',
	  array(
		'labels' => array(
		  'name' => __( 'Cursos' ),
		  'singular_name' => __( 'Curso' )
		),
		// 'taxonomies' => array('category'),
		'taxonomies' => array(),
		'public' => true,
		'has_archive' => true,
	  )
	);
  }
  add_action( 'init', 'create_post_type' );