<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>

<div id="container">
	<h1>Hola mundo!</h1>

	<div id="body">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita sunt, quisquam modi voluptatem debitis soluta, officiis in molestiae amet corporis cupiditate impedit qui. Illum odio libero veniam quod, illo voluptas!</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>