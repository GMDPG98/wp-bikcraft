<?php $portfolio = get_page_by_title('portfolio'); ?>
<ul class="portfolio_lista">

	<?php if(have_rows('item_portfolio', $portfolio)): while(have_rows('item_portfolio', $portfolio)) : the_row(); ?>
		<li class="grid-8"><img src="<?php the_sub_field('portfolio_imagem1'); ?>" 
		alt="<?php the_sub_field('portfolio_imagem_descricao1'); ?>"></li>
		<li class="grid-8"><img src="<?php the_sub_field('portfolio_imagem2'); ?>" 
		alt="<?php the_sub_field('portfolio_imagem_descricao2'); ?>"></li>
		<li class="grid-16"><img src="<?php the_sub_field('portfolio_imagem3'); ?>" 
		alt="<?php the_sub_field('portfolio_imagem_descricao3'); ?>"></li>
	<?php endwhile; else : endif; ?>
	</ul>

<ul class="portfolio_lista">
	<?php if(have_rows('item_portfolio2', $portfolio)): while(have_rows('item_portfolio2', $portfolio)) : the_row(); ?>
		<li class="grid-8"><img src="<?php the_sub_field('portfolio_imagem1'); ?>" 
		alt="<?php the_sub_field('portfolio_imagem_descricao1'); ?>"></li>
		<li class="grid-8"><img src="<?php the_sub_field('portfolio_imagem2'); ?>" 
		alt="<?php the_sub_field('portfolio_imagem_descricao2'); ?>"></li>
		<li class="grid-16"><img src="<?php the_sub_field('portfolio_imagem3'); ?>" 
		alt="<?php the_sub_field('portfolio_imagem_descricao3'); ?>"></li>
	<?php endwhile; else : endif; ?>
</ul>

<?php if(!is_page('portfolio')) { ?>
<div class="call">
	<p><?php the_field('chamada_portfolio', $portfolio); ?></p>
	<a href="<?php bloginfo('url'); ?>/portfolio" class="btn">Portfólio</a>
</div>
<?php } ?>