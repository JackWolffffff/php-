<?php
	/**
	* 
	*/
	class CustomException extends Exception
	{
		
		public function errorMessage ()
		{
			# code..
			$errorMsg = 'Error on line ' . $this->getLine() . 'in' . $this->getFile().'<b>'.$this->getMessage().'<b> is a valid E-mail address';
			return $errorMsg;
		}
	}

	$email = "123@qq.com";

	try{
		throw new CustomException($email);		
		
	} catch(CustomException $e){
		echo $e->getMessage();
	}
	
?>