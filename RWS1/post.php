<?php
  $url = 'http://localhost/ToCode4/RWS1/user.php';
  $id = $_POST["id"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  
	$data = array('id' => $id, 'email' => $email, 'password' => $password);

	
	$options = array(
		'http' => array(
			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			'method'  => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	if ($result === FALSE) {}

	var_dump($result);
?>