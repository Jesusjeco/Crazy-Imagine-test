<link rel="stylesheet" href="<?= BLOCKS_STYLES_PATH ?>newsletter/newsletter.css">
<?php
$block_id = $block['id'];
$block_data = get_field('block_data');
?>

<div class="newsletter <?= $block_id ?>">
    <div class="wrapper">
        <div class="title_1"><?= $block_data['title_1'] ?></div>
        <div class="title_2"><?= $block_data['title_2'] ?></div>
        <!-- <div class="newsletter_shortcode"><?= $block_data['newsletter_input_shortcode'] ?></div> -->
        <div class="newsletter-form">
            <input type="email" placeholder="Your email">
            <button class="button button-form">Subscribe</button>
        </div>
    </div>
</div>