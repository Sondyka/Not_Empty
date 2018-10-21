<?php


$data=$_POST;
	if(isset ($data['log_in'])){
	if ( !empty($data['password']) and !empty($data['login']) ) {
		$login = $data['login']; 
		$password = $data['password']; 

	
		$query = 'SELECT * FROM user WHERE login="'.$login.'" AND password="'.$password.'"';
		$result = mysqli_query($con, $query); 
		$user = mysqli_fetch_assoc($result); 

		if (!empty($user)) {
			$_SESSION['logged_user'] = $user;
header("Location: http://localhost/Hernya/blog.html" ); 
			
		} else {
		
		}
	}}
?>