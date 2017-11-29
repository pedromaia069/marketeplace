<?php
define('DB_HOSTNAME','localhost');
define('DB_USERNAME','');
define('DB_PASSWORD','');
define('DBDATABASE','');
define('DB_PREFIX','CW');
define('DB_CHARSET','utf8');

function DBConnect(){
$link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DBDATABASE)or die(mysqli_connect_error());
mysqli_set_charset($link,DB_CHARSET)or die(mysqli_error($link));
return $link;
}

function BDClose($link){
	@mysqli_close($link) or die (mysqli_error($link));
}


function BDEscape($dados){
	$link = DBConnect();
	
	if(!is_array($dados)){
		$dados = mysqli_real_escape_string($link,$dados);
	}else{
		$arr= $dados;
		
		foreach($arr as $key => $value){
			$key = mysqli_real_escape_string($link,$key);
			$value = mysqli_real_escape_string($link,$value);
			
			$dados[$key] = $value;
		}
	}
	BDClose($link);
	return $dados;
}

function DBExecute($query){
	$link = DBConnect();
	$result = @mysqli_query($link, $query) or die(mysqli_error($link));
	
	BDClose($link);
	
	return $result;
}


?>