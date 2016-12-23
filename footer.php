<section class="primary-footer with-shadow">
    <div class="section-content-container">
        <div class="section-blurb">
            <div class="logo">
                <img src="<?= get_template_directory_uri() ?>/public/images/official-logo.png"/>
            </div>
            <div class="blurb-text">
                <h1>About The Angels of Death</h1>
                <p>Elevatus de noster gallus, magicae cacula! All of those powerdrains will be lost in collision courses
                    like galaxies in pressures. Vortexs peregrinatione in grandis aboa!</p>
                <p>Demolitione placidus era est. Germanus brabeutas ducunt ad victrix. Demissio brevis quadra est.
                    Pol.</p>
            </div>
        </div>
    </div>

    <div class="section-content-container">
        <div class="announcements footer-section">
            <h1>Clan Announcements</h1>
            <?php do_shortcode('[show_clan_announcements url=http://www.clanaod.net/forums/external.php?type=RSS2&forumids=102]') ?>
        </div>

        <div class="sitemap footer-section qtr-width">
            <h1>Site Map</h1>

            <div class="sitemap-links">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer_sitemap_nav',
                ]);
                ?>
            </div>

            <div class="social-media">

                <ul class="soc">
                    <li>
                        <a class="soc-twitter" target="_blank"
                           href="https://twitter.com/officialclanaod"></a></li>
                    <li>
                        <a class="soc-facebook" target="_blank"
                           href="https://www.facebook.com/groups/613636715314339/"></a>
                    </li>
                    <li>
                        <a class="soc-steam" target="_blank"
                           href="http://steamcommunity.com/groups/clanaod"></a></li>
                    <li>
                        <a class="soc-youtube" target="_blank"
                           href="http://bit.ly/2dKbL9I"></a></li>
                    <li>
                        <a class="soc-twitch soc-icon-last" target="_blank"
                           href="https://www.twitch.tv/clanaodstream"></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-section full-width twitter-feed">
            <?php do_shortcode('[twitter-feed]'); ?>
        </div>

        <!--
        <div class="site-meta footer-section full-width centered">
            <ul>
                <li>Copyright &copy; 2001-2016 Angels of Death. All rights reserved.</li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Sitemap</a></li>
            </ul>
        </div>
        -->

    </div>
</section>

<?php wp_footer(); ?>

</body>
</html>
