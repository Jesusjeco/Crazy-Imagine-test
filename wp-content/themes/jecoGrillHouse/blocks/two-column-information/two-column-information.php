<link rel="stylesheet" href="<?= BLOCKS_STYLES_PATH ?>two-column-information/two-column-information.css">
<?php
$block_id = $block['id'];
$block_data = get_field('block_data');
?>

<div class="two-column-information <?= $block_id ?>">
    <div class="wrapper">
        <div class="left">
            <img src="<?= $block_data['image']['url'] ?>" alt="">
        </div>
        <div class="right">
            <h3 class="title1"><?= $block_data['title'] ?></h3>
            <h2 class="title2"><?= $block_data['title_2'] ?></h2>
            <div class="content"><?= $block_data['content'] ?></div>
        </div>
    </div>
</div>