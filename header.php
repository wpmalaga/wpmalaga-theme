<!DOCTYPE html>
<html lang="es">
<head>
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head();?>
</head>
<body <?php body_class();?>>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href=""><?php bloginfo('name'); ?></a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
		<span class="navbar-toggler-icon"></span>
	</button>
</nav>