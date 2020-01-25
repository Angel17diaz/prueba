<?php
if (isset($_POST['enviar'])) {
	# code...
	if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
		# code...
		$name = $_POST['name'];
		$asunto= $_POST['asunto'];
		$msg = $_POST['msg'];
		$email = $_POST['email'];
        $header = "from: anguede@hotmail.com" . "\r\n";
        $header .= "from: anguede@hotmail.com" . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();

        $mail = @mail($email, $asunto, $msg,$header);
        if ($mail) {
        	# code...

        	echo "<h4>¡Mail enviado exitosamente!</h4>";
        }

	}
}





?>