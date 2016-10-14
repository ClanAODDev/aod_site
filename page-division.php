<?php

require('header.php');
require('./assets/partials/navbar.php');

$divisions = require('./data/divisions.php');
$division = $divisions[0]; // BF

?>

    <section class="division bf">
        <div class="section-content-container">

            <div class="sub-nav">
                <ul>
                    <li><a class="smooth-scroll" href="#general">General</a></li>
                    <li><a class="smooth-scroll" href="#apply-to-division">Apply to division</a></li>
                </ul>
            </div>

            <div id="general" class="game-header">
                <div class="game bf"></div>
                <h1>Battlefield Division</h1>
            </div>

            <div class="game-description section-sub-section">
                <p>Ubi est bi-color barcas? Est clemens triticum, cesaris. Sunt vigiles visum fatalis, dexter calcariaes. Indexs sunt classiss de primus humani generis. Rumor, fiscina, et nix. Solems assimilant in lotus quadrata! Fermiums sunt nomens de castus calcaria.Peritus xiphiass ducunt ad classis.</p>

                <p>Cur ignigena studere?Potus cito ducunt ad altus domina. Acipenser, solem, et vox. Fatalis, secundus historias foris resuscitabo de lotus, bassus solem. A falsis, capio rusticus omnia. Magisters cadunt!Assimilant mechanice ducunt ad albus lanista. Pol.Sunt voxes visum bassus, noster indictioes.</p>
            </div>

            <!-- makeshift iteration of leadership -->
            <?php
            /**
            <div class="command-staff sub-section">
                <h2 id="command-staff">Command Staff</h2>
                <?php foreach ($division['leaders'] as $member): ?>
                    <div class="member">
                        <div class="name <?= strtolower($member['rank']) ?>">
                            <?= "{$member['rank']} {$member['name']}" ?>
                        </div>
                        <div class="position"><?= $member['position'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
             **/
            ?>

            <div class="apply section-sub-section">
                <h2 id="apply-to-division">Apply to division</h2>
                <p>In order to be eligible for membership in the Battlefield division, you must meet the following criteria:</p>
                <ul class="bulleted">
                    <li>Be at least 16 years of age</li>
                    <li>Be on TeamSpeak whenever you are ingame</li>
                    <li>Wear AOD tags while you are ingame</li>
                    <li>Contribute to the forums once a month to maintain activity</li>
                </ul>

                <div class="section--centered">
                    <a href="#" class="call-to-action-button">Apply</a>
                </div>
            </div>
        </div>
    </section>

<?php require('footer.php'); ?>