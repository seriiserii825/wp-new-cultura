<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header(); ?>

<div class="container">
    <div class="page-archive">
		<?php if (have_posts()): ?>
			<?php the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php if(get_post_type() == 'bfd_download'): ?>
				<?php echo do_shortcode('[download id="680" show_count="true" format="inline"]') ?>
            <?php else: ?>
				<?php the_content(); ?>
            <?php endif; ?>
		<?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>




