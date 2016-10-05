<?php

require('header.php');
require('./assets/partials/navbar.php');

$divisions = [
    ['name' => 'Battlefield', 'members' => 409, 'abbreviation' => 'bf'],
    ['name' => 'Battlefront', 'members' => 198, 'abbreviation' => 'swb'],
    ['name' => 'Planetside 2', 'members' => 512, 'abbreviation' => 'ps2'],
    ['name' => 'Warframe', 'members' => 274, 'abbreviation' => 'wf'],
    ['name' => 'Tom Clancy', 'members' => 167, 'abbreviation' => 'tc'],
    ['name' => 'Jedi Knight', 'members' => 167, 'abbreviation' => 'jk'],
    ['name' => 'Overwatch', 'members' => 238, 'abbreviation' => 'ow'],
    ['name' => 'Warcraft', 'members' => 69, 'abbreviation' => 'wow'],
];

?>

<section class="lobby-hero">
    <div class="content-container">
        <h1>Gaming Divisions</h1>
        <p class="short-width">Divisions are the lifeblood of the Angels of Death. As such, the leadership invests a
            great deal of
            effort
            and time into vetting each individual game for its worthiness for inclusion as an active division in the
            community.</p>

        <div class="divisions-list">
            <div class="collection">
                <?php foreach ($divisions as $division): ?>
                    <div class="item game-button <?= $division['abbreviation'] ?>">
                        <div class="title"><?= $division['name'] ?></div>
                        <div class="members"><?= $division['members'] ?> members</div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>


<?php require('./assets/partials/footer.php'); ?>
