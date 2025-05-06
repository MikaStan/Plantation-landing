# Plantation-landing
My next educational pet project. This is a one-page site of a fictitious online store of house plants.

RU
Очередной мой учебный pet проект. Это одностраничный сайт вымышленного интернет-магазина домашних растений – макет был взят из бесплатной вводной части курса "Дизайн для фронтендеров" от HTML-Academy https://htmlacademy.ru/levelup/design). Ссылка на макет https://www.figma.com/design/kUaHTwE67qAGzhTQJ6ZmTK/08-_-04-Solution-Final?node-id=3-34&p=f или, алтернативно, https://pixso.net/app/editor/gW1IfegRasN6_acm0dApsg
1. По сути, это даже не лендинг, а главная страница интернет-магазина. Поэтому в моих планах далее сделать, для данной моей учебной работы, одну страницу товара из каталога и одну страницу акций – а также страницу заказа.
2. Важно отметить. В исходном макете всё вроде неплохо – но! если посмотреть на отступы между логическими разделами(секциями), то они, отступы, достаточно малы, и к тому же не одинаковы! Например, у секции Каталог margin-bottom: 72 px; а у секции Акции margin-bottom: 98 px; . Но нужно помнить правило
"Расстояние между секциями – не менее 110-120 px (оптимально 130-140 px)".
Поэтому я увеличил у обоих секций это значение до 120px.
3. Я убрал у <main> фон background: var(--gray-10) – так страница выглядит как цельная, а не разбитая на серые блоки.
4. Я убрал тень "шапки", а сам header сделал серого цвета (background: var(--gray-15);), так страница лучше выглядит – сразу видно чёткое разделение хэдера от остального контента.
5. Вёрстка полностью адаптивная. Однако тут важно отметить, что дизайнер сделал в Figma всего 2 макета: десктоп на 1440px и мобильный на 348px (при этом во втором явные ошибки в футере и первом экране). Поэтому вёрстку для других, промежуточных экранов – а также для самого маленького экрана 380px, я делал достаточно вольготно.
6. В дополнение к оригинальному макету, я добавил и сверстал кнопку Вверх (для неё я нашёл готовый код JavaScript и всего лишь немного изменил его под свои условия. Также замечу, что, на сегодня, я знаю только самые начальные основы JS).
7. В вёрстке активно применял модули grid и flex, CSS переменные (для цветов), относительные единицы измерения % и vw, а классы старался писать по методологии БЭМ.
8. Вёрстка кроссбраузерная. По крайней мере, протестирована в четырёх основных браузерах – Chrome, Opera, Mozilla Firefox и Microsoft Edge.
9. Напоследок замечу, что эта вёрстка не pixel perfect – при работе я не использовал одноименный браузерный плагин, а всего лишь руководствовался правилами веб-дизайна, в частности правилом внутреннего и внешнего.

ENG
My next educational pet project. This is a one-page site of a fictitious online store of house plants - the layout was taken from the free introductory part of the course "Design for Frontenders" from HTML-Academy https://htmlacademy.ru/levelup/design ). Link to the layout https://www.figma.com/design/kUaHTwE67qAGzhTQJ6ZmTK/08-_-04-Solution-Final?node-id=3-34&p=f or, alternatively, https://pixso.net/app/editor/gW1IfegRasN6_acm0dApsg 
1. In fact, this is not even a landing page, but the main page of the online store. Therefore, in my future plans for this academic work of mine, I will make one product page from the catalog and one promotions page - as well as an order page.
2. It is important to note. In the original layout, everything seems to be fine - but! if you look at the indents between logical sections, they are quite small, and not the same! For example, the Catalog section has margin-bottom: 72 px; and the Actions section has margin-bottom: 98 px; . But you need to remember the rule
"The distance between sections is at least 110-120 px (optimally 130-140 px)".
Therefore, I increased this value to 120px for both sections.
3. I removed the background from <main> background: var(--gray-10) - this way the page looks whole, and not broken into gray blocks.
4. I removed the "header" shadow, and made the header itself gray (background: var(--gray-15);), this way the page looks better - you can immediately see the clear separation of the header from the rest of the content.
5. The layout is fully adaptive. However, it is important to note that the designer made only 2 layouts in Figma: desktop at 1440px and mobile at 348px (with the second one having obvious errors in the footer and the first screen). Therefore, I did the layout for other, intermediate screens - as well as for the smallest screen of 380px, quite freely.
6. In addition to the original layout, I added and laid out the Up button (I found ready-made JavaScript code for it and only slightly changed it to suit my conditions. I will also note that, today, I only know the most basic basics of JS).
7. In the layout, I actively used the grid and flex modules, CSS variables (for colors), relative units of measurement % and vw, and tried to write classes using the BEM methodology. 
8. The layout is cross-browser. At least tested in four main browsers - Chrome, Opera, Mozilla Firefox and Microsoft Edge.
9. Finally, I will note that this layout is not pixel perfect - when working, I did not use the browser plugin of the same name, but simply followed the rules of web design, in particular the rule of internal and external.
