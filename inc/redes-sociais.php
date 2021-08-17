<?php $contato = get_page_by_title('contato'); ?>

<ul>
	<?php if(have_rows('redes_sociais', $contato)): while(have_rows('redes_sociais', $contato)) : the_row(); ?>
	<li><a href="<?php the_sub_field('link_social1'); ?>" target="_blank">
	<img src="<?php the_sub_field('icone_social1'); ?>" alt="<?php the_sub_field('nome_social1'); ?>"></a></li>
	<li><a href="<?php the_sub_field('link_social2'); ?>" target="_blank">
	<img src="<?php the_sub_field('icone_social2'); ?>" alt="<?php the_sub_field('nome_social2'); ?>"></a></li>
	<li><a href="<?php the_sub_field('link_social3'); ?>" target="_blank">
	<img src="<?php the_sub_field('icone_social3'); ?>" alt="<?php the_sub_field('nome_social3'); ?>"></a></li>
	<?php endwhile; else : endif; ?>
</ul>