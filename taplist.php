<?php
/*
Template Name: TapList
*/
?>
<head>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/mainstyle.css';?>" />
	<?php wp_head();?>
</head>
<body class="container">
<header><?php get_template_part('template-parts/header/header','navbar');?></header>
<?php if ( wp_is_mobile() ) {echo '<hr class="featurette-divider">';}?>
<?php get_template_part('template-parts/taplist/spine','loop');?>
<?php get_template_part('template-parts/footer/site','info');?>
</body>
