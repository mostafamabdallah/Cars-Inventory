# Project name

Car-motors

## Task Description

1. install wordpress
2. custom post type
3. custom taxonomy
4. custom fields
5. Custom archive page
6. Custom single post

## Site plugins

1. Child Theme Configurator.
2. Custom Post Type UI.
3. Advanced Custom Fields.

## Site Exteral libraries

1. Bootstrap.css

## UI Task steps

1. Install wordpress last version.
2. Install xampp program for localhosting.
3. Create database for this site.
4. Install wordpress and link it with site database.
5. Create a user for the site (name:'mostafa',password:'mostafa_abdallah_1994').
6. Change permalinks to post name.
7. Install Child Theme Configurator.
8. Install Custom Post Type UI and add post type with name of 'cars' and texonamy with name of 'cars_category'.
9. Install Advanced Custom Fields and create a new custom fields and assigne it to 'cars' post.

## Manualy code steps

0. Include bootstrap in function.php file 
```php
    wp_enqueue_style('bootstrap',get_stylesheet_directory_uri() . '/bootstrap.min.css');
```
1. In the child theme create a page-cars.php and create cars template

```php
    /** Template Name: Cars */
```

2. Create WP_Query instance for 'post_type' => 'cars'

```php
    $args = array(
	'post_type' => 'cars'
);
$the_query = new WP_Query($args);
```
3. Create HTMl Template using bootstrap and invoke the_field values and assign it to . 
```php
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
```
4. Create a single page for car we can copy the code from single.php file in main theme and name it single-cars.php. 

```php
<?php
/**

 * The template for displaying all single cars

 */
get_header();
/* Start the Loop */
while (have_posts()) :
    the_post();
?>
    <div class="container">
        <div class="card mb-3">
            <img src="<?php the_field('photo'); ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p class="card-text"><small class="text-muted">A/C: <?php the_field('ac') ?> </small></p>
                <p class="card-text"><small class="text-muted">Power: <?php the_field('power') ?></small></p>
                <p class="card-text"><small class="text-muted">Condition <?php the_field('condition') ?></small></p>
                <p class="card-text"><small class="text-muted">keyless Entry <?php the_field('keyless_entry') ?></small></p>
            </div>
        </div>
    <?php
    if (is_attachment()) {
        // Parent post navigation.
        the_post_navigation(
            array(
                /* translators: %s: Parent post link. */
                'prev_text' => sprintf(__('<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone'), '%title'),
            )
        );
    }
    // If comments are open or there is at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
    // Previous/next post navigation.
    $twentytwentyone_next = is_rtl() ? twenty_twenty_one_get_icon_svg('ui', 'arrow_left') : twenty_twenty_one_get_icon_svg('ui', 'arrow_right');
    $twentytwentyone_prev = is_rtl() ? twenty_twenty_one_get_icon_svg('ui', 'arrow_right') : twenty_twenty_one_get_icon_svg('ui', 'arrow_left');
    $twentytwentyone_next_label     = esc_html__('Next Car', 'twentytwentyone');
    $twentytwentyone_previous_label = esc_html__('Previous Car', 'twentytwentyone');
    the_post_navigation(
        array(
            'next_text' => '<p class="meta-nav">' . $twentytwentyone_next_label . $twentytwentyone_next . '</p><p class="post-title">%title</p>',
            'prev_text' => '<p class="meta-nav">' . $twentytwentyone_prev . $twentytwentyone_previous_label . '</p><p class="post-title">%title</p>',
        )
    );
endwhile; // End of the loop.
    ?>
    </div>
    </div>
    <?php get_footer(); ?>
```

5. Create an index.php for the home page og the site.