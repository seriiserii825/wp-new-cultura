<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
/**
// * Template name: Files
 */
get_header(); ?>

<div class="container">
	<div class="page-archive">
		<?php if (have_posts()): ?>
			<?php the_post(); ?>
			<h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>

