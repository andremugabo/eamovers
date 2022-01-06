<!DOCTYPE html>
<html>
<head>
	<title><?=$msg?></title>
	<link rel="stylesheet" type="text/css" href="../../css/home.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1.0">
</head>
<body>
	<div class="header">
		<div class="elogo">
			<div class="plogo"><img src="../../photo/logo1.png"></div>
			<div class="tlogo"><b><h4>EAST</h4><h4>AFRICAN</h4><h4>MOVERS</h4></b><h6>PACKING TEAM</h6></div>
		</div>
		<div class="emenu">
			<ul>
				<li><a href="../../" class="<?php if($msga=='HOME'){ echo"aactive";} ?>">HOME</a></li>
				<li><a href="../../web/about" class="<?php if($msga=='ABOUT'){ echo"aactive";} ?>">ABOUT</a></li>
				<li><a href="../../web/services" class="<?php if($msga=='SERVICES'){ echo"aactive";} ?>">SERVICES</a></li>
				<li><a href="#" class="<?php if($msga=='GALLERY'){ echo"aactive";} ?>">GALLERY</a></li>
				<li><a href="#" class="<?php if($msga=='CONTACT'){ echo"aactive";} ?>">CONTACT</a></li>
			</ul>
		</div>
	</div>
	<div class="body">