<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php
	
	$pi = PostMaster::loop_to_post();
	$data['post'] = $pi;
	$template_file = 'page.html';
	if (file_exists(__DIR__.'/views/page-'.$pi->post_name.'.html')){
		$template_file = 'page-'.$pi->post_name.'.html';
	} 
	render_twig($template_file, $data);