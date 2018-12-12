<?php
if(isset($_POST['browser'])){	
	
	    $to = "manoj.zeroit@gmail.com, manoj.zeroit@gmail.com";
		$subject = "HTML email";
		$message =
		 "
		<html>
		<head>
		<title>HTML email</title>
		</head>
		<body>
		<p>This email contains HTML Tags!</p>
		<table>	
		
			<tr><th style='text-align: left;'>Phone</th></tr>		
			<tr><td>".$_POST['phone']."</td></tr>
			
			<tr><th style='text-align: left;'>OS</th></tr>
			<tr><td>".$_POST['os']."</td></tr>
			
			<tr><th style='text-align: left;'>Osversion</th></tr>
			<tr><td>".$_POST['osversion']."</td></tr>			
			
			<tr><th style='text-align: left;'>Browser</th></tr>
			<tr><td>".$_POST['browser']."</td></tr>
			
			<tr><th style='text-align: left;'>Browser Major Version</th></tr>
			<tr><td>".$_POST['browserMajorVersion']."</td></tr>
			
			<tr><th style='text-align: left;'>Browser Version</th></tr>
			<tr><td>".$_POST['browserVersion']."</td></tr>
			
			<tr><th style='text-align: left;'>Mobile</th></tr>
			<tr><td>".$_POST['mobile']."</td></tr>	
			
			<tr><th style='text-align: left;'>Date Time</th></tr>
			<tr><td>".$_POST['datetime']."</td></tr>	
			
			<tr><th style='text-align: left;'>Language</th></tr>
			<tr><td>".$_POST['language']."</td></tr>	
			
		</table>
		</body>
		</html>
		";
		

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <manoj.zeroit@gmail.com>' . "\r\n";
		$headers .= 'Cc: manoj.zeroit@gmail.com' . "\r\n";

		mail($to,$subject,$message,$headers);
	
	
}
?>


<?php if (!is_customize_preview()) { edit_post_link('');} ?>
<?php get_footer(); ?>