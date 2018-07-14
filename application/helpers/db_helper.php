<?php
/*Get categories*/
function get_categories_h(){
	$CI = get_instance();
	$categories = $CI->Product_model->get_categories();
	return $categories;
	
}

?>