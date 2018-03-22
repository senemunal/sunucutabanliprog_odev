	<?php
	if($_POST) 
	{
		echo"Bağlanti yapıldı";
	}else{
		
		echo"Bağlanti yapilmadi.";
	}

    #if(strpos($_POST["email"], 'hotmail.com') !== false) header("Location: http://oys.deu.edu.tr");

	#else if(strpos($_POST["email"], 'gmail.com') !== false)header("Location: http://debis.deu.edu.tr/debis.php");
	
	
	$gelen_posta=strip_tags(trim($_POST["email"])); 

	$kelime=strstr($gelen_posta,"hotmail.com");
     if($kelime=="")
	 {
		 header("Location: http://debis.deu.edu.tr/debis.php");
		 
	 }else{
		 header("Location: http://oys.deu.edu.tr");
		 
	 }








	
	
	?>
