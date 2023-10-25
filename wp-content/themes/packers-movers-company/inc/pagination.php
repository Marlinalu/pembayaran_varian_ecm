<?php
/**
 *
 * Pagination Functions
 *
 * @package Packers Movers Company
 */

if( !function_exists('packers_movers_company_archive_pagination_x') ):

	// Archive Page Navigation
	function packers_movers_company_archive_pagination_x(){

		the_posts_pagination();
	}

endif;
add_action('packers_movers_company_archive_pagination','packers_movers_company_archive_pagination_x',20);