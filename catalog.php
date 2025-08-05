<?php
/* Template Name: Catalog */
?>

<?php get_header( ) ?>

<html>

<body>
    
    <main class="container">

<!-- Catalog -->
        <section class="catalog">
            <h2 class="catalog__head">Каталог</h2>

            <div class="catalog__cards">
                <?php
                $loop = CFS()->get('catalog');
                foreach ($loop as $row) {
                    ?>
                <div class="catalog__card"> 
                    <img class="catalog__image" src="<?= $row['catalog_image'] ?>" alt=" ">
                    <div class="catalog__content">
                        <h4 class="catalog__caption"><?= $row['catalog_caption'] ?></h4>
                        <p class="catalog__text"><?= $row['catalog_text'] ?></p>
                        <h5 class="catalog__price"><?= $row['catalog_price'] ?></h5>
                        <a class="catalog__link" href="<?= $row['catalog_link']['url'] ?>">Подробнее</a>
                        <!-- <div class="catalog__link"><?= $row['catalog_link'] ?></div> -->
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>
        </section>
    
    </main>

                <?php wp_footer( ); ?>
</body>

</html>

<?php get_footer( ) ?>
