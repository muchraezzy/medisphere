<?php include('core/init.php'); ?>

<?php 
	if(isset($_POST['login']){
		//Get Variables  
		$username = $_POST('username');
		$password = md5($_POST('password'));
		
		//Create User Object
		$user = new User;
		
		if($user->login($username, $password)){
			redirect ('index.php','You have successfully logged in','success');
		}else{
			redirect ('index.php','Your login is invalid','error');
		}
	}else{
		
		redirect('index.php')
	}