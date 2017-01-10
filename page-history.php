<?php

/**
 * Template Name: History Template
 */

get_header(); ?>

<?php include(get_template_directory() . '/assets/partials/navbar.php'); ?>

    <div id="timeline" class="timeline-container">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            var timelineBlocks = $('.timeline-block'),
                offset = 0.8;

            //hide timeline blocks which are outside the viewport
            hideBlocks(timelineBlocks, offset);

            //on scolling, show/animate timeline blocks when enter the viewport
            $(window).on('scroll', function () {
                (!window.requestAnimationFrame)
                    ? setTimeout(function () {
                        showBlocks(timelineBlocks, offset);
                    }, 100)
                    : window.requestAnimationFrame(function () {
                        showBlocks(timelineBlocks, offset);
                    });
            });

            function hideBlocks(blocks, offset) {
                blocks.each(function () {
                    ( $(this).offset().top > $(window).scrollTop() + $(window).height() * offset ) && $(this).find('.timeline-bullet, .timeline-content').addClass('is-hidden');
                });
            }

            function showBlocks(blocks, offset) {
                blocks.each(function () {
                    ( $(this).offset().top <= $(window).scrollTop() + $(window).height() * offset && $(this).find('.timeline-bullet').hasClass('is-hidden') ) && $(this).find('.timeline-bullet, .timeline-content').removeClass('is-hidden').addClass('fade-in');
                });
            }
        });
    </script>

<?php get_footer() ?>