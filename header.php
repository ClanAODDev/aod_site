<!DOCTYPE html>
<html lang="en">
<head>
    <title>ClanAOD.net <?php echo ( ! is_front_page()) ? "| " . get_the_title() : ''; ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css?v=0.1.2" />

    <script src="<?= get_template_directory_uri() . '/assets/js/modernizr.js' ?>"></script>

    <?php include(get_template_directory() . '/assets/partials/favicons.php'); ?>
    <?php include(get_template_directory() . '/assets/partials/site-meta.php'); ?>
    <?php
    $channel = (new ClanAOD\Twitch('clanaodstream'))->getChannel();
    $status = is_null($channel->stream) ? "offline" : 'online';
    ?>

    <?php wp_head(); ?>
</head>
<body data-twitch-status="<?= $status ?>" <?php body_class() ?>>
<?php do_shortcode('[commo]'); ?>
<?php include(get_template_directory() . '/assets/forms/applyForm.php'); ?>
