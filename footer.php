    <?php wp_head(  ); ?>

<footer>
        <!-- Contacts & Feedback -->
        <div class="container footer">
            <h2 class="footer__head"><a id="contacts"></a>Контакты</h2>

            <div class="footer__columns">
                <div class="footer__contacts">
                    <div class="footer__address">
                        <h4>Адрес магазина</h4>
                        <p><?= CFS()->get('footer_address') ?></p>
                    </div>
                    <div class="footer__phone">
                        <h4>Телефон</h4>
                        <p><a class="footer__link" href="tel:<?= CFS()->get('footer_phone') ?>"><?= CFS()->get('footer_phone') ?></a></p>
                    </div>
                    <div class="footer__email">
                        <h4>E-mail</h4>
                        <p><a class="footer__link" href="mailto:<?= CFS()->get('footer_email') ?>"><?= CFS()->get('footer_email') ?></a></p>
                    </div>

                    <?php
                $loop = CFS()->get('footer_socials');
                foreach ($loop as $row) {
                    ?>
                    <div class="footer__social">
                        <h4>Соцсети</h4>
                        <div class="footer__social_icons">
                            <a href="<?= $row['footer_social1']['url'] ?>"><img src="/wp-content/uploads/2025/05/telegram.svg" alt="telegram" target="<?= $row['footer_social1']['target'] ?>"></a>
                            <a href="<?= $row['footer_social2']['url'] ?>"><img src="/wp-content/uploads/2025/05/youtube.svg" alt="youtube" target="<?= $row['footer_social2']['target'] ?>"></a>
                            <a href="<?= $row['footer_social3']['url'] ?>"><img src="/wp-content/uploads/2025/05/vk.svg" alt="vk" target="<?= $row['footer_social3']['target'] ?>"></a>
                        </div>
                    </div>
                    <?php
                }
                ?>
                </div>

                <div class="footer__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3993.621817401018!2d30.317862969157705!3d59.96846004930196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0KDQvtGB0YHQuNGPLCDQsy4g0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LMsINC90LDQsS4gUNC10LrQuCDQmtCw0YDQv9C-0LLQutC4LCA1INC60L7RgNC_0YPRgSDQnw!5e0!3m2!1sru!2sru!4v1737200882726!5m2!1sru!2sru"
                        width="460" height="352" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <img src="/wp-content/uploads/2025/05/map.png" alt="Карта" id="map">
                    <!-- В случае если Google карта не загрузится, показать взамен картинку - но пока я это не доработал! -->
                </div>

                <div class="footer__feedback">
                    <h4 class="footer__feedback-head">Обратная связь</h4>
                    <?php the_content(); ?> <!-- form Contact Form 7 "Footer Feedback Form" -->
                </div>
            </div>
        </div>
    </footer>

    <!-- Мобильное меню, на экранах 540 и меньше -->
    <div class="container">
        <div class="footer__mobile">
            <div class="footer__mobile_item">
                <p><a class="footer__link-mobile" href="catalog/"><img src="/wp-content/uploads/2025/05/catalog-mobile.svg" alt="Каталог"><br>Каталог</a></p>
            </div>
            <div class="footer__mobile_item">
                <p><a class="footer__link-mobile" href="actions/"><img src="/wp-content/uploads/2025/05/actions-mobile.svg" alt=""><br>Акции</a></p>
            </div>
            <div class="footer__mobile_item">
                <p><a class="footer__link-mobile" href="#contacts"><img src="/wp-content/uploads/2025/05/contacts-mobile.svg" alt=""><br>Контакты</a></p>
            </div>
        </div>

    </div>

        <?php wp_footer( ); ?>
