<?php

/**
 * Template Name: Twitch Template
 */

get_header();

$url = get_template_directory_uri() . '/public/images/';
$defaultHeader = $url . 'pageheader.jpg';
$borderBg = "url('{$url}divisionbgborder.jpg')";

include(get_template_directory() . '/assets/partials/navbar.php'); ?>

<section class="page">
    <div class="sectioncontentcontainer" style="width: 100% !important; margin-top: -30px;">

        <div id="twitchembed" style="height: 75vh;"></div>

        <div class="section-title" style="text-align: center;">
            <h1>Stream Schedule</h1>
        </div>

        <div class="section table100 ver1" style="display: flex;">
            <?php include_once('assets/partials/twitch_schedule.html'); ?>
        </div>
    </div>
</section>

<style>
    .ver1 {
        cursor: default
    }

    td, th {
        padding: 10px
    }

    .table100.ver1 th {
        text-transform: uppercase
    }

    .table100.ver1 .hov-column-ver1, .table100.ver1 .row100:hover {
        background-color: rgba(255, 255, 255, .1)
    }

    .table100.ver1 .hov-column-head-ver1 {
        background-color: #484848 !important
    }

    .table100.ver1 .row100 td:hover {
        background-color: rgba(255, 255, 255, .1);
        color: #fff
    }
</style>

<! Load the Twitch embed script >
<script src="https://embed.twitch.tv/embed/v1.js"></script>

<script>
  !function (a) {
    a('.column100').on('mouseover', function () {
      var n = a(this).parent().parent().parent(), e = a(this).parent().parent(), t = a(n).data('vertable') + '',
        o = a(this).data('column') + '';
      a(e).find('.' + o).addClass('hov-column-' + t), a(n).find('.row100.head .' + o).addClass('hov-column-head-' + t);
    }), a('.column100').on('mouseout', function () {
      var n = a(this).parent().parent().parent(), e = a(this).parent().parent(), t = a(n).data('vertable') + '',
        o = a(this).data('column') + '';
      a(e).find('.' + o).removeClass('hov-column-' + t), a(n).find('.row100.head .' + o).removeClass('hov-column-head-' + t);
    });
  }(jQuery);
</script>

<script type="text/javascript">
  new Twitch.Embed('twitchembed', {
    width: '100%',
    height: '100%',
    channel: 'clanaodstream',
    theme: 'dark',
  });
</script>

<?php get_footer() ?>
