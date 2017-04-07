<section class="primary-footer with-shadow">
    <div class="section-content-container">
        <div class="section-blurb">
            <div class="logo">
                <img src="<?= get_template_directory_uri() ?>/public/images/official-logo.png"/>
            </div>
            <div class="blurb-text">
                <h1>About The Angels of Death</h1>
                <p>The Angels of Death is a community of players founded in 1999 based on a core set of conduct that aims to promote decency and provide a comfortable environment to play with thousands of other likeminded members. .</p>
                <p>With nearly 3000 members globally there is always someone to play alongside when you want.</p>
            </div>
        </div>
    </div>

    <div class="section-content-container">
        <div class="announcements footer-section">
            <h1>Clan Announcements</h1>
            <?php do_shortcode('[show_clan_announcements url=https://www.clanaod.net/forums/external.php?type=RSS2&forumids=102]') ?>
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

        <div class="site-meta footer-section full-width centered">
            <ul>
                <li>Copyright &copy; <?php echo "2001 - " . date(Y) ?> Angels of Death. All rights reserved.</li>
                <li><a href="#">Privacy</a></li>
            </ul>
        </div>
    </div>
</section>

<?php wp_footer(); ?>

</body>
</html>
