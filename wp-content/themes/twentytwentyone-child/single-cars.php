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