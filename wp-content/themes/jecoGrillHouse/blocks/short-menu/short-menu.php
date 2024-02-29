<link rel="stylesheet" href="<?= BLOCKS_STYLES_PATH ?>short-menu/short-menu.css">

<?php
$block_data = get_field('block_data');
$link = $block_data['button'];

$short_menu_query_data = [
    "post_types" => "food",
    "posts_per_page" => $block_data['posts_per_page'],
    "post_categories" => $block_data['categories'],
];
$short_menu_query = get_query($short_menu_query_data);
?>
<div class="short-menu">
    <div class="wrapper">

        <?php
        if ($short_menu_query->have_posts()) : ?>
            <div class="items">
                <?php
                while ($short_menu_query->have_posts()) :
                    $short_menu_query->the_post();

                    $the_id = get_the_ID();
                    $title = get_the_title();
                    $excerpt = get_the_excerpt();
                    $permalink = get_the_permalink();
                    $thumbnail_url = get_the_post_thumbnail_url();
                    $thumbnail_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?? get_post(get_post_thumbnail_id())->post_title;
                    $price = get_field('price', $the_id); ?>
                    <div class="item">
                        <div class="left">
                            <a href="<?= $permalink ?>">
                                <img src="<?= $thumbnail_url ?>" alt="<?= $thumbnail_alt ?>">
                            </a>
                        </div>
                        <div class="right">
                            <div class="title">
                                <a href="<?= $permalink ?>">
                                    <?= $title ?>
                                </a>
                            </div>
                            <div class="excerpt"><?= $excerpt ?></div>
                            <div class="price"><?= $price ?></div>
                        </div>
                    </div>
                <?php
                endwhile; ?>
            </div>
        <?php
        endif;
        ?>

        <?php

        if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <div class="button-wrapper">
                <a class="button button-primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

            </div>
        <?php endif; ?>
    </div>
</div>