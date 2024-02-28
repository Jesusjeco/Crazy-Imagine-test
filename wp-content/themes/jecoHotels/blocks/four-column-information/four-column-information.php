<link rel="stylesheet" href="<?= BLOCKS_STYLES_PATH ?>four-column-information/four-column-information.css">
<?php
$block_id = $block['id'];
$block_data = get_field('block_data');
?>

<div class="four-column-information <?= $block_id ?>">
    <div class="wrapper">

        <?php if ($block_data['columns']) :
            foreach ($block_data['columns'] as $column) : ?>
                <div class="column">
                    <p class="title"><?= $column['title'] ?></p>
                    <div class="content"><?= $column['content'] ?></div>
                </div>
        <?php
            endforeach;
        else :
            echo "No columns added";
        endif; ?>
    </div>
</div>