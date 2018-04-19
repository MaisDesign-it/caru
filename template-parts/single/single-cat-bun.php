<?php $iframechecker = ( isset($_GET["access_method"]) && trim($_GET["access_method"]) == 'iframe' ) ?true : false;?>
<?php if (($iframechecker === true)){
	get_template_part('template-parts/menucibo/post','iframe');
	}else{
	get_template_part('template-parts/menucibo/post','normal');};?>