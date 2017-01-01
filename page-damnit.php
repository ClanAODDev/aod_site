<?php

/**
 * Template Name: Damnit
 */
get_header();

?>

<style>

    body {
        background-color: #0b0808;
        font-family: MuseoSans, serif;
        height: 100vh;
        width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .wrap {
        display: flex; /* or inline-flex */
        flex-direction: column; /* or usually or row */
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
    }

    .wrap > div {
        margin: 50px 0;
    }


</style>

<div class="wrap" style="background: url('<?= get_template_directory_uri() ?>/public/images/broke.jpg') no-repeat;">
    <h1>404</h1>
    <p><strong>Kid_A</strong> must have broken something...</p>
</div>
