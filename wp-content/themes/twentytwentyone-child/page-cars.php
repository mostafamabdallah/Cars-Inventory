<?php /** Template Name: Cars */?>



<?php get_header(); ?>

<?php

$args = array(
	'post_type' => 'cars'
);

$the_query = new WP_Query($args); ?>
<div class="container">
	<?php if ($the_query->have_posts()) : ?>
		<h1 style="text-align: center; margin-bottom: 20px;">Inventory</h1>
		<div class="row justify-content-around">
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

				<div class="card col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3 m-1">
					<a href="<?php the_permalink(); ?>">
						<img src="<?php the_field('photo'); ?>" class="card-img-top" alt="...">
					</a>

					<div class="card-body">
						<h5 class="card-title"><?php the_title(); ?></h5>
						<p class="card-text">Condition: <?php the_field('condition') ?></p>
						<a href="<?php the_permalink(); ?>" class="btn btn-primary">More detail</a>
					</div>
				</div>
			<?php endwhile; ?>
		</div>

		<?php wp_reset_postdata(); ?>

	<?php endif; ?>
</div>





<?php get_footer(); ?>