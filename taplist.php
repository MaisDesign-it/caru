<?php
/*
Template Name: TapList
*/
?>
<head>
	<?php wp_head();?>
</head>
<body class="container">
<header><?php get_template_part('template-parts/header/header','navbar');?></header>
<?php if ( wp_is_mobile() ) {echo '<hr class="featurette-divider">';}?>
<?php get_template_part('template-parts/taplist/spine','loop');?>
<?php get_template_part('template-parts/footer/site','info');?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
