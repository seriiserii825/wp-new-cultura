<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
/**
 * // * Template name: Files
 */
get_header(); ?>

<div class="container">
    <div class="page-archive">
		<?php if (have_posts()): ?>
			<?php the_post(); ?>
            <h1 class="files__title"><?php the_title(); ?></h1>
			<?php $files = carbon_get_the_post_meta('crb_downloads'); ?>
			<?php foreach ($files as $file): ?>
                <a target="_blank" href="<?php echo $file['file']; ?>" class="file">
                    <span class="file__title"><?php echo $file['title' . get_lang()]; ?></span>
                    <span class="file__content">
                        <span class="file__icon">
                            <?php
                            $file_extension = pathinfo($file['file'], PATHINFO_EXTENSION);
                            $icon_name = '';

                            if ($file_extension == 'pdf') {
	                            $icon_name = 'pdf';
                            } elseif ($file_extension == 'docx') {
	                            $icon_name = 'doc';
                            } else {
	                            $icon_name = 'save';
                            }
                            ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $icon_name; ?>.svg"
                                 alt="">
                        </span>
                        <span class="file__size"><?php echo $file['size']; ?></span>
                    </span>
                </a>
			<?php endforeach; ?>

		<?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>

