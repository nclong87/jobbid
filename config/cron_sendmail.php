<?php
	//include ('/home/jobbid/public_html/library/dataprovider.php');
	//include ('/home/jobbid/public_html/library/sendmail.php');
	include ('/home/jobbid/public_html/config/cronconfig.php');
	include (ROOT.DS.'library'.DS.'dataprovider.php');
	include (ROOT.DS.'library'.DS.'sendmail.php');
	$conn=new DataProvider();
	$senders = $conn->get_cache('senders');
	$mail=new sendmail();
	$conn->lstNewProject();
	$data = $conn->getListSendmail();
	if(!empty($data)){
		$arr = array();
		foreach($data as $e) {
			try {
				echo 'Send mail to <b>'.$e->to.'</b><br/>';
				$sender = $senders['secSender'];
				if($e->isprior == 1)
					$sender = $senders['priSender'];
				$mail->send($e->to, $e->subject, $e->content,$sender);
				sleep(3);
				array_push($arr,$e->id);
			} catch (Exception $e) {
			}
		}
		$conn->hadSend($arr);
	}
	$conn->close();
	echo 'DONE';
	
?>