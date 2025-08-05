<?php get_header( ) ?>

<?php
/* Template Name: Single Card */
?>

<html>
    <body>
        <main class="container">

            <div class="product__card"> 
                        <img class="product__image" src="<?= CFS()->get('product_image') ?>" alt=" ">
                        <div class="catalog__content">
                            <h4 class="catalog__caption"><?= CFS()->get('product_header') ?></h4>
                            <p class="catalog__text"><?= CFS()->get('product_text') ?></p>
                            <h5 class="catalog__price"><?= CFS()->get('product_price') ?></h5>
                            <a class="product__link" href="<?= CFS()->get('product_link') ?>"></a>
                        </div>
            </div>
        </main>
    </body>
</html>

<?php get_footer( ) ?>
