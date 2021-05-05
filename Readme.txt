********************************************
******Include in Theme's Functions.php******
********************************************

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Therapists',
		'menu_title'	=> 'Therapists',
		'menu_slug' 	=> 'therapists',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}