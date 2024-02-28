<link rel="stylesheet" href="<?= BLOCKS_STYLES_PATH ?>the-best-meal/the-best-meal.css">
<?php
$block_id = $block['id'];
$block_data = get_field('block_data');
?>

<div class="the-best-meal <?= $block_id ?>">
    <div class="wrapper">
        <div class="left">
            <p class="first-title"><?= $block_data['first_title'] ?></p>
            <h2 class="second-title"><?= $block_data['second_title'] ?></h2>
            <div class="first-image">
                <img src="<?= $block_data['first_image']['url'] ?>" alt="">
            </div>
        </div> 
        <div class="right">
            <div class="second-image">
                <img src="<?= $block_data['second_image']['url'] ?>" alt="">
            </div>
            <div class="content"><?= $block_data['content'] ?></div>
            <div class="link">
                <?php
                if ($link = $block_data['link']) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
        </div>


    </div>
</div>