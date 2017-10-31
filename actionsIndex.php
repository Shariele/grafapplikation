<?php

$action = $_REQUEST['action'];

switch($action){
	case 'createChart':
		
    $username = $_POST['name'];
    $str = $_POST['value'];

    //Krypterar lösenordet med md5
    // $password = md5($str);
    
    // $adr = $_SERVER['REMOTE_ADDR'];

    $sql = "SELECT * FROM account WHERE username = '$username'";
    $sth = $pdo->prepare($sql);
	$sth->execute();

	$result = $sth->fetchAll();
	if(!empty($result)){
		$_SESSION['existing_username'] = "There is already an user with that username, please try another username";
        header('location: register.php?');
	}else{
		$sql = "INSERT INTO account(username, email, password, ip) VALUES('$username','$email','$password','$adr')";
        $sth = $pdo->prepare($sql);
		$sth->execute();

		header('location: register.php');
    	log_to_file("log.log", "Account $username has been created");
        $_SESSION['success'] = "Your account has been successfully created!";
	}


	break;
}