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
    </div>
</section>


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
