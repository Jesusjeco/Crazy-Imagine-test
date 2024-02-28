<?php
$footer_data = get_field('footer_data', 'option');
?>
<footer>
    <div class="wrapper">
        <div class="first_column">
            <img src="<?= $footer_data['logo']['url'] ?>" alt="">
        </div>
        <div class="second_column">
            <?= $footer_data['second_column'] ?>
        </div>
        <div class="third_column"><?= $footer_data['third_column'] ?></div>
        <div class="fourth_column"><?= $footer_data['fourth_column'] ?></div>
    </div>
    <hr>
    <div class="copyright">&copy; 2020 Grill How. All rights reserved. Privacy Policy</div>
</footer>
<?php wp_footer() ?>
</body>

</html>