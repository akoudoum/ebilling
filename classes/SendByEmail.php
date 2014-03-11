<?php


class		SendByEmail extends ObjectModel
{

	public      $destinataire;
	
	public 		$expediteur;
	
	public      $objet;
	
	public 		$message;
	
	public 		$piecejointe;

	
 	protected 	$fieldsRequired = array('destinataire', 'expediteur','objet');
 	protected 	$fieldsSize = array();
 	protected 	$fieldsValidate = array('destinataire' => 'isEmail', 'expediteur' => 'isEmail');
	protected   $fieldsUnique = array();
 	protected 	$fieldsLabel = array('destinataire'=>'Destinataire', 'expediteur'=>'Expediteur', 'objet'=>'Objet');

	
	public function __construct(){
	}
	
		
	public function getFields()
	{
		$fields['destinataire'] = pSQL($this->destinataire);
		$fields['expediteur'] = pSQL($this->expediteur);
		$fields['objet'] = pSQL($this->objet);
		$fields['message'] = pSQL($this->message);
		$fields['piecejointe'] = pSQL($this->piecejointe);
		return $fields;
	}
	
	
	public function SendEmail(){
          
		   
		  if (strtoupper(substr(PHP_OS,0,3)=='WIN')) { 
			  $eol="\r\n"; 
			} elseif (strtoupper(substr(PHP_OS,0,3)=='MAC')) { 
			  $eol="\r"; 
			} else { 
			  $eol="\n"; 
			} 
		  $file_name = str_replace("../factures/", "", $this->piecejointe);
		  
		  $file = fopen($this->piecejointe, 'rb');
          $f_contents = fread($file, filesize($this->piecejointe));
          $f_contents=chunk_split(base64_encode($f_contents));  
          $f_type=filetype($this->piecejointe);
          fclose($file);
          
		  $headers .= 'From: '.$this->expediteur.$eol; 
          $headers .= 'Reply-To: '.$this->expediteur.$eol; 
          $headers .= 'Return-Path: '.$this->expediteur.$eol;     // these two to set reply address 
          $headers .= "Message-ID:<".$now." TheSystem@".$_SERVER['SERVER_NAME'].">".$eol; 
          $headers .= "X-Mailer: PHP v".phpversion().$eol;           // These two to help avoid spam-filters 
 
          $mime_boundary=md5(time()); 
          $headers .= 'MIME-Version: 1.0'.$eol; 
          $headers .= "Content-Type: multipart/related; boundary=\"".$mime_boundary."\"".$eol; 
		
            $msg .= "--".$mime_boundary.$eol; 
			$msg .= "Content-Type: application/pdf; name=\"".$file_name."\"".$eol;   // sometimes i have to send MS Word, use 'msword' instead of 'pdf' 
			$msg .= "Content-Transfer-Encoding: base64".$eol; 
			$msg .= "Content-Disposition: attachment; filename=\"".$file_name."\"".$eol.$eol; // !! This line needs TWO end of lines !! IMPORTANT !! 
			$msg .= $f_contents.$eol.$eol; 
			 
			$msg .= "Content-Type: multipart/alternative".$eol; 
			
			/*
			$msg .= "--".$mime_boundary.$eol; 
			$msg .= "Content-Type: text/plain; charset=iso-8859-1".$eol; 
			$msg .= "Content-Transfer-Encoding: 8bit".$eol; 
			$msg .= "This is a multi-part message in MIME format.".$eol; 
			$msg .= "If you are reading this, please update your email-reading-software.".$eol; 
			$msg .= "+ + Text Only Email from Genius Jon + +".$eol.$eol; 
			
			*/
			$msg .= "--".$mime_boundary.$eol; 
			$msg .= "Content-Type: text/plain; charset=iso-8859-1".$eol; 
			$msg .= "Content-Transfer-Encoding: 8bit".$eol; 
			$msg .= $this->message.$eol.$eol; 
			
			
            $msg .= "--".$mime_boundary."--".$eol.$eol;  
            
          
          ini_set(sendmail_from,$this->expediteur);
		  mail($this->destinataire, $this->objet, $msg, $headers);
		  ini_restore(sendmail_from); 
	}

	
}
?>


