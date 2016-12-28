<?php

/**
 * Main landing page
 */

use ClanAOD\Repositories\DivisionRepository;

get_header();

$divisions = DivisionRepository::allDivisions();

include(get_template_directory() . '/assets/forms/applyForm.php');
include(get_template_directory() . '/assets/partials/introVideo.php');
include(get_template_directory() . '/assets/partials/heroVideo.php');
include(get_template_directory() . '/assets/partials/navbar.php'); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; endif; ?>

<script type="text/javascript">

    jQuery(function ($) {

        $(".apply-form").easyModal();

        /**
         * Handle social media links
         */
        $(".social-media-sites li").click(function () {
            var link = $(this).attr('data-link');
            if (link) {
                window.open(link);
            }
        })
    })
</script>

<?php get_footer() ?>

