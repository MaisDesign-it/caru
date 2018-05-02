<?php if (wp_is_mobile()){;?>
	<?php get_template_part('template-parts/menucibo/selettore/selettore','mobile');?>
<?php }else{;?>
	<?php get_template_part('template-parts/menucibo/selettore/selettore','desktop');?>
<?php };?>