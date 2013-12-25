<!doctype html>
<html>
	<head>
		<title>Admin</title>
		<meta charset="utf-8" />
		
		<link href="ext/resources/ext-theme-gray/ext-theme-gray-all.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		
		<?php echo $this->content(); ?>
		
		<script type="text/javascript" charset="utf-8" src="//cdn.sencha.io/ext-4.2.0-gpl/ext-all.js"></script>
		
		<?php
		$sources = array (
			'store/Users.js',
			'controller/Home.js',
			'controller/Settings.js',
			'controller/Users.js',
			'view/home/Index.js',
			'view/settings/Index.js',
			'view/users/Edit.js',
			'view/users/List.js',
			'view/Viewport.js',
			'app.js'
		);
		?>
		
		<script type="text/javascript" src="js/libraries/Router.js"></script>
		<?php foreach ($sources as $source) { ?>
			<script type="text/javascript" src="js/admin/<?php echo $source; ?>"></script>
		<?php } ?>
	</body>
</html>