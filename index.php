<!-- Plantation HTMLacademy -->
<!-- https://pixso.net/app/editor/gW1IfegRasN6_acm0dApsg  -->

<?php get_header( ) ?>

    <main class="container">

        <!-- Cover  -->
        <section class="cover">
            <div class="cover__content">
                <h1 class="cover__head"><?= CFS()->get('cover_head') ?></h1>
                <p class="cover__text"><?= CFS()->get('cover_text') ?></p>
                <div class="cover__buttons">
                    <a class="cover__primary" href="catalog">Каталог</a>
                    <a class="cover__secondary" href="#contacts">Связаться</a>
                </div>
            </div>

            <div class="cover__photo">
                <picture>
                    <source media="(max-width: 380px)" srcset="/wp-content/uploads/2025/05/illustration-380.jpg">
                    <source media="(max-width: 540px)" srcset="/wp-content/uploads/2025/05/illustration-380.jpg">
                    <source media="(max-width: 768px)" srcset="/wp-content/uploads/2025/05/illustration-380.jpg">
                    <source media="(max-width: 912px)" srcset="/wp-content/uploads/2025/05/illustration-912.jpg">
                    <source media="(max-width: 1024px)" srcset="/wp-content/uploads/2025/05/illustration-1024.jpg">
                    <img src ="/wp-content/uploads/2025/05/illustration.webp" alt="Plantation Cover">
                </picture>
            </div>
        </section>

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
                        <!-- <div class="catalog__link"><?= $row['catalog_link'] ?></div> Это не совсем верный вариант! -->
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>
        </section>

        <!-- Actions -->
        <section class="actions">
            <h2 class="actions__head">Акции</h2>

            <div class="actions__cards">

                <a class="action__card" id="action1" href="<?= CFS()->get('action1_link') ?>">
                    <div>
                        <div class="action__content">
                            <h4 class="action__caption"><?= CFS()->get('action1_head') ?></h4>
                            <p class="action__text"><?= CFS()->get('action1_text') ?></p>
                        </div>
                    </div>
                </a>
                
                <a class="action__card" id="action2" href="<?= CFS()->get('action2_link') ?>">
                    <div>
                        <div class="action__content">
                            <h4 class="action__caption"><?= CFS()->get('action2_head') ?></h4>
                            <p class="action__text"><?= CFS()->get('action2_text') ?></p>
                        </div>
                    </div>
                </a>

                <a class="action__card" id="action3" href="<?= CFS()->get('action3_link') ?>">
                    <div>
                        <div class="action__content">
                            <h4 class="action__caption"><?= CFS()->get('action3_head') ?></h4>
                            <p class="action__text"><?= CFS()->get('action3_text') ?></p>
                        </div>
                    </div>
                </a>
                
            </div>
        </section>

    </main>

    <!-- Кнопка Вверх, внизу страницы  -->
    <a href="#top">
        <div class="scroll-to-top">
            <img src="/wp-content/uploads/2025/05/eco-energy.svg" alt="К началу страницы" title="К началу страницы">
        </div>
    </a>
    <script src="/wp-content/themes/stretch-test/button-to-top.js"></script>

<?php get_footer( ) ?>

</body>

</html>


