<?php
	$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'hallo@smsvision.net',
    'smtp_pass' => 'Cipanandur2005',
    'mailtype'  => 'html',
    'charset'   => 'iso-8859-1'
	);
	 
	$this->load->library('email', $config);
	$this->email->set_newline("\r\n");
	 
	$mail = $this->email;
	 
	$mail->from('hallo@smsvision.net', 'smsvision');
	$mail->to('uarmoure@gmail.com'); 
	//$mail->cc('another@another-example.com'); 
	//$mail->bcc('them@their-example.com'); 
	 
	$mail->subject('Mail Test');
	$mail->message($pesan);	
	 
	$mail->send();
	 
	echo $mail->print_debugger();
?>


