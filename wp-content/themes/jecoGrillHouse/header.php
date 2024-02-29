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
    <!-- <link rel="stylesheet" href="<?= STYLES_PATH . "bootstrapNavbar.css" ?>"> -->
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

    <!-- <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="<?= get_home_url() ?>"><img src="<?= $header_data['logo']['url'] ?>" alt="<?= $header_data['logo']['alt'] ?>">
                    </a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> -->