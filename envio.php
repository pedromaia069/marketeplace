<?php

	if(isset($_POST['email2']) && isset($_POST['name2']) && isset($_POST['message2'])){
		// O remetente deve ser um e-mail do seu dom?nio conforme determina a RFC 822.
		// O return-path deve ser ser o mesmo e-mail do remetente.
		$headers =  'MIME-Version: 1.0' . "\r\n"; 
		$headers .= 'From: Convite Bonco de Servidore <contato@ecomptec.com.br>' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

		$sub = "PHP mail" ;
         //       $site = "http://www.appservidores.esy.es/cadastro.php?pass=" . $pass;

		$msg = $_POST['message2'];
		$email = $_POST['email2'];
        $email2 = "contato@ecomptec.com.br";

        $msg .= "<br>"." <p>Esse email foi envial por: ". $_POST['name2'] . "<br>" . "O email de contato ?: " . $email . "</p>";

		$envio = mail($email2, $sub, $msg, $headers);

		if($envio)
        		header("Location:index.php");
        		
	}else{
	    header("Location:index.php");
    }

?>	