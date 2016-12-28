<div class="apply-form">
    <h2>Select the division you're interested in</h2>
    <select name="divisions" id="divisions-form">
        <?php foreach ($divisions as $post): setup_postdata($post); ?>
            <option value="<?= meta('abbreviation'); ?>">
                <?= $post->post_title; ?>
            </option>
        <?php endforeach;
        wp_reset_postdata(); ?>
    </select>
</div>