<link rel="stylesheet" href="<?= BLOCKS_STYLES_PATH ?>main-banner/main-banner.css">
<?php
$block_id = $block['id'];
$block_data = get_field('block_data');
$background_image = $block_data['background_image']['url'] ?? "";
$classes = "";
$classes .= <<<ITEM
    .$block_id{
        background-image: url($background_image);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    ITEM;

//Choosing the title color
$title_color = $block_data['main_title_color'] ?? "#000000";
?>

<!-- Printing the block dinamic styles -->
<style>
    <?= $classes; ?>
</style>
<div class="main-banner <?= $block_id ?>" id="<?= $block_id ?>">
    <div class="wrapper">
        <h1 style="color: <?= $title_color ?>;"><?= $block_data['main_title'] ?></h1>
        <?php if ($block_data['button']) :
            $link = $block_data['button'];
            $link_url = esc_url($link['url']);
            $link_title = esc_html($link['title']);
            $link_target = $link['target'] ? $link['target'] : '_self';
            $link_target =  esc_attr($link_target);
        ?>
            <div class="button-wrapper">
                <a class="button button-primary" href="<?= $link_url ?>" target="<?= $link_target ?>"><?= $link_title ?></a>
            </div>
        <?php endif; ?>
    </div>
</div>