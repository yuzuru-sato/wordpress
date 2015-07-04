<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="ja">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="ja">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <!--[if lt IE 9]>
		<script src="http://wordpress-and.me/wp-content/themes/twentytwelve/js/html5.js" type="text/javascript"></script>
		<![endif]-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
		<!--[if lt IE 9]>
		<link rel='stylesheet' id='twentytwelve-ie-css'  href='http://wordpress-and.me/wp-content/themes/twentytwelve/css/ie.css?ver=20121010' type='text/css' media='all' />
		<![endif]-->
        <?php wp_head(); ?>
    </head>
<body>
<header>
	<div>ヘッダー</div>
</header>