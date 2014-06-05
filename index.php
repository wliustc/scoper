<?php
	ob_start();
?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html" charset = "utf-8"/>
		<script src="KickStart/jquery-1.11.0.min.js"></script>
		<script src="KickStart/js/kickstart.js"></script>
		<link rel="stylesheet" href="KickStart/css/kickstart.css" media="all"/>
		<link rel="stylesheet" href="css/index.css" media="all"/>
		
		<title>Scoper</title>
	</head>
	<body>
		<?php
			require('tophead/tophead.php'); 
			ob_end_flush();
		?>
		<div id="logopic"> <img src="image/logo.png" alt="logo"/>
		</div>
		<form id="main_form" method="get" action="main/getweb.php" target="_blank">
			<input id ="text1" type="text" name="con"/>	
			<button class="tooltip medium blue pop" value = 1 name="page"><i class ="icon-search"></i>Search</button>
		</form>
	</body>
</html>