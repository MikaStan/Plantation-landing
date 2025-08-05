<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <meta name="description" content="Это одностраничный сайт вымышленного интернет-магазина домашних растений – макет был взят из бесплатной вводной части курса Дизайн для фронтендеров от HTML-Academy">
    <?php wp_head(  ); ?>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="header">

                <div class="header__logo">
                    <a href="<?= get_home_url( ); ?>"><h4>Плантация</h4></a>
                </div>
    
                <nav class="header__nav">
                    <a class="header__link" href="catalog">Каталог</a>
                    <a class="header__link" href="actions">Акции</a>
                    <a class="header__link" href="#contacts">Контакты</a>
                </nav>
                
                <div class="header__bag">
                    <a class="header__bag-link" href="/basket"><img src="/wp-content/uploads/2025/05/bag.svg" alt="Корзина"></a>
                </div>
            
            </div>

        </div>
        
    </header>
