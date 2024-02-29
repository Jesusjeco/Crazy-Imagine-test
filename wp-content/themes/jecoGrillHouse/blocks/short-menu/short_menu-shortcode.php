<link rel="stylesheet" href="<?= BLOCKS_STYLES_PATH ?>short-menu/short-menu-shortcode.css">

<?php
$short_menu_query_data = [
    "post_type" => "food",
    "posts_per_page" => ($args['posts_per_page'] ?? 4),
    "post_categories" => ($args['categories'] ?? null),
    'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
];
$short_menu_query = new WP_Query($short_menu_query_data);

$total_pages  = $short_menu_query->max_num_pages;
$current_page = max(1, get_query_var('paged'));
?>
<div class="short_menu_shortcode">
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
                <nav class="pagination">
                    <?php
                    echo paginate_links(
                        array(
                            'base'    => get_pagenum_link(1) . '%_%',
                            'format'  => '/page/%#%', // Change to match your URL structure if needed.
                            'current' => $current_page,
                            'total'   => $total_pages,
                            'prev_text' => '< Previous',
                            'next_text' => 'Next >'
                        )
                    );
                    ?>
                </nav>
            </div>
        <?php
        endif;
        ?>
    </div>
</div>