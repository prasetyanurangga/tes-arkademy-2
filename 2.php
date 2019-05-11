
<?php 
function is_email_valid($email__) 
{
	 if(preg_match("/^([a-zA-Z0-9.]{4,}+)@([a-zA-Z0-9_\-\.]+)\.([a-z]{2,5})$/", $email__))
	  { 		
	  				return true; 	
	  
	  }
	 else
	  {
	  	 		return false;
		 	} 
		 	
} 
function is_username_valid($username__) 
{
	 	if(preg_match("/^[a-z\.]{8}$/", $username__))
	 	 {
	 	 	 		return true;
	 		}
	  else
	 	 {
	 	 	 		return false;
	  	} 
	 
} 

echo is_username_valid("angga.nu"); 
//Data Valid | return true 
echo is_username_valid("Angga@2001"); 
//Data Tidak Valid | return false 
echo is_email_valid("Angg&a2@gmail.co.id"); 
//Data Valid | return true 
echo is_email_valid("Angga.2@gmail.co.id"); 
//Data Tidak Valid | return false 
?>