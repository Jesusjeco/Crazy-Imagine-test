<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php is_front_page() ? the_title() : wp_title(''); ?>
    </title>
    <?php wp_head() ?>

    <link rel="stylesheet" href="<?= STYLES_PATH . "default.css" ?>">
</head>

<body>
    <?php
    $header_data = get_field('header_data', 'option');
    ?>
    <header>
        <div class="wrapper">
            <div class="logo">
                <a href="<?= get_home_url() ?>">
                    <img src="<?= $header_data['logo']['url'] ?>" alt="<?= $header_data['logo']['alt'] ?>">
                </a>
            </div>
            <div class="menu">
                <?php clean_custom_menus(); ?>
            </div>
        </div>
    </header>