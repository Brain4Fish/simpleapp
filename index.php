<html> 
	<head> 
	<title>PHP Test</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
	</head>

<body> 
	<h1>PHP Test</h1>
		<p><b>Hello PHP World</b></p>
		<?php echo "The Current Date and Time is: <br />"; 
		echo date("g:i A l, F j Y.");?> </p>
		<p> Some shitty system
			<?php
			echo gethostname(); // may output e.g,: sandie
			?>
		</p>
		<p> <?php phpinfo(); ?> </p>
	</body> 
</html>
