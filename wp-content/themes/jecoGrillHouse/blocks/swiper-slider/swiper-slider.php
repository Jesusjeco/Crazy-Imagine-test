<link rel="stylesheet" href="<?= BLOCKS_STYLES_PATH ?>swiper-slider/swiper-slider.css">
<link rel="stylesheet" href="<?= STYLES_PATH ?>swiper/swiper.css">


<?php
$block_data = get_field('block_data');

$short_menu_query_data = [
    "post_types" => $block_data['post_type'],
    "posts_per_page" => $block_data['post_per_page'],
];
$short_menu_query = get_query($short_menu_query_data);
?>

<div class="swiper-slider">
    <div class="wrapper">
        <!-- Swiper -->
        <?php
        if ($short_menu_query->have_posts()) : ?>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    while ($short_menu_query->have_posts()) :
                        $short_menu_query->the_post();
                        $title = get_the_title();
                        $thumb_url = get_the_post_thumbnail_url();
                    ?>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="<?= $thumb_url ?>" alt="">
                            </div>
                            <h2 class="title"><?= $title ?></h2>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="arrows">
                    <a class="swiper-button-prev"> <<< </a>
                    <a class="swiper-button-next"> >>> </a>
                </div>
            </div>
        <?php
        endif; ?>
    </div>
</div>
<!-- Initialize Swiper -->
<script src="<?= SCRIPTS_PATH ?>swiper/swiper-bundle.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 15,
        watchOverflow: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            481: {
                slidesPerView: 2,
            },
            769: {
                slidesPerView: 3,
            },
            1201: {
                spaceBetween: 20,
                slidesPerView: 4,
            },
            1401: {
                spaceBetween: 30,
                slidesPerView: 4,
            },
        },
    });
</script>