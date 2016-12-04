<?php

/**
 * Template Name: History Template
 */

get_header(); ?>

<?php include(get_template_directory() . '/assets/partials/navbar.php'); ?>

<div id="cd-timeline" class="cd-container">
    <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
            <img src="<?php echo get_template_directory_uri() . "/public/images/cd-icon-picture.svg"?>" alt="Picture">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content">
            <h2>Title of section 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
            <span class="cd-date">Jan 14</span>
        </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-movie bounce-in">
            <img src="<?php echo get_template_directory_uri() . "/public/images/cd-icon-movie.svg" ?>" alt="Movie">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content bounce-in">
            <h2>Title of section 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
            
            <span class="cd-date">Jan 18</span>
        </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture bounce-in">
            <img src="<?php echo get_template_directory_uri() . "/public/images/cd-icon-picture.svg" ?>" alt="Picture">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content bounce-in">
            <h2>Title of section 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
            
            <span class="cd-date">Jan 24</span>
        </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-location bounce-in">
            <img src="<?php echo get_template_directory_uri() . "/public/images/cd-icon-picture.svg" ?>" alt="Picture">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content bounce-in">
            <h2>Title of section 4</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
            
            <span class="cd-date">Feb 14</span>
        </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-location bounce-in">
            <img src="<?php echo get_template_directory_uri() . "/public/images/cd-icon-picture.svg" ?>" alt="Picture">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content bounce-in">
            <h2>Title of section 5</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
            
            <span class="cd-date">Feb 18</span>
        </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-movie bounce-in">
            <img src="<?php echo get_template_directory_uri() . "/public/images/cd-icon-picture.svg" ?>" alt="Picture">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content bounce-in">
            <h2>Final Section</h2>
            <p>This is the content of the last section</p>
            <span class="cd-date">Feb 26</span>
        </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->
</div>

<?php get_footer() ?>