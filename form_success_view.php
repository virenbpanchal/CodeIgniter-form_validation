<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CodeIgniter Form-Validation Form-Success-View</title>
</head>
<body>
<div id="container">
	<h3>Your form was successfully submitted !</h3>
	<p><?php echo anchor('form_controller', 'Try it again!'); ?></p>
</div>
</body>
</html>