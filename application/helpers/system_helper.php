<?php
/*
*Redirect Page
*/

function redirect($page = FALSE,){
	if(is_string($page)){
		$location = $page;
	}else{
		$location = $_SERVER('SCRIPT_NAME');
	}
	//Redirect
	
	header('location',$location);	
	exit;
	
	
}

/*
*Check if user is logged in
*/
function isLoggedIn(){
	if(isset($_SESSION['is_logged_in'])){
		return true;
	}else{
		return false
	}
}