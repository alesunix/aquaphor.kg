<?php

# Данные о странице
$title = 'Новости Аквафор';
$keywords = 'Новости,вода,экология,фильтры';
$description = 'Новости о воде о экологии о фильтрах Аквафор';
$template = 'info';
$page_blocks = 'poleznye_news';

# Содержание страницы

$content = <<<EOF
<style>
   .poleznye_news {

    float: center; /* Выравнивание */
	display: inline-block; /* выровнять блоки по горизонтали */
	vertical-align: middle; /* (для дочерних) при добавлении контента сохраняет блоки на одной вертикальной плоскости */
	white-space: nowrap; /* предотвращает падение последнего элемента на следующую строку */
	overflow: hidden; /* предотвращает растягивание блока в IE6 */
    border: 3px solid #fff; /* Параметры рамки */
	border-radius: 3px; /* Радиус скругления */
    padding: 1px; /* Поля внутри блока */
    margin: 1px 1px 1px; /* Отступы вокруг */
    background: rgb(243, 251, 255); /* Цвет фона */ 
	 box-shadow:
   0 1px 4px rgba(0, 0, 0, .3),
   -23px 0 20px -23px rgba(0, 0, 0, .8),
   23px 0 20px -23px rgba(0, 0, 0, .8),
   0 0 40px rgba(0, 0, 0, .1) inset; /* Параметры тени */
   }
   .poleznye_news figcaption {
    margin: 0 auto 0px; /* Отступы вокруг абзаца */
   }
  </style>
  
  <!--[if lt IE 9]>
   <script>
    document.createElement('figure');
    document.createElement('figcaption');
   </script>
  <![endif]-->
<br> 
<center>
<figure class="poleznye_news"><img src="/i/poleznye_news.jpg" alt=""></a></figure>
</center>

<hr>
<a href="/news/test_germany.html"><img src="/i/laboratory.jpg" width=100 align=right alt="Фильтр Аквафор — первый в Германии"><b>Фильтр Аквафор — первый в Германии</a></b>
<figcaption><small>
«Штифтунг Варентест» — организация, которая уже больше 50 лет защищает интересы рядового потребителя в Германии. 
Немцы очень щепетильно относятся к тому, на что тратят свои деньги, и прислушиваются к экспертным заключениям «Штифтунг Варентест».
Институт уже не раз доказал свою беспристрастность и профессионализм. Даже если плохого качества товар обнаруживают у известного бренда, результаты все равно публикуются. 
Недовольные правдой производители подают в суд, чтобы оспорить результаты, но «Штифтунг Варентест» всегда выигрывает.
<br>
<a href="/news/test_germany.html" title>подробнее</a>
</small></figcaption><hr>

<a href="/news/cooler.html"><img src="/i/cooler.jpg" width=100 align=right alt="Чем опасна вода из кулера"><b>Чем опасна вода из кулера</a></b>
<figcaption><small>
Знаете ли вы, что воду для кулера разливают в многооборотную тару, которую не всегда тщательно дезинфицируют, а саму воду, бывает, берут прямо из-под крана?
От летней жары в офисе не спасает порой даже кондиционер. Напротив, системы кондиционирования нередко «сушат» воздух в помещении. 
Как следствие — хочется пить много и часто. Но будьте осторожны! Офисный кулер, а точнее вода в нём, может таить немало опасностей.
Будьте осторожны и следите за гигиеной на рабочем месте!
<br>
<a href="/news/cooler.html" title>подробнее</a>
</small></figcaption><hr>
<a href="/news/water_info.html"><img src="/i/water_info.jpg" width=100 align=right alt="Вся правда о воде"><b>Правда о воде</a></b>
<figcaption><small>
Человеческий организм на 60-70%, а младенческий на 80% состоит из воды. 
Пятимесячный плод состоит из воды на 94%(по этой причине для беременных девушек употреблять высококачественную воду особо важно). 
Вода доставляет в клетки организма питательные материалы (витамины, минеральные соки) и уносит отходы жизнедеятельности. 
Помимо этого, вода принимет участие в ходе терморегуля-ции и дыхания. 
<br>
<a href="/news/water_info.html" title>подробнее</a>
</small></figcaption><hr>
<a href="/news/water_live.html"><img src="/i/water_live.jpg" width=100 align=right alt="Вода, идеальная для жизни и развития"><b>Вода, идеальная для жизни и развития</a></b><figcaption><small>Юные биологи из Петербурга проверили, как живые организмы реагируют на качество воды. 
В воде из-под крана листовому салату совсем плохо, в бутилированной - не многим лучше. 
Так какая вода идеальна для жизни? Результаты эксперимента опубликовала газета “Комсомольская правда” в апреле 2016.
<br>
<a href="/news/water_live.html">подробнее</a>
</small></figcaption><hr>
<a href="/news/water_live2.html"><img src="/i/news2.jpg" width=100 align=right alt="Жизнь без чистой воды – реальность для жителей стран Третьего мира"><b>Какую воду пьют люди в разных странах?</a></b><figcaption><small>Каждый год Организация объединенных наций проводит Всемирный День воды, чтобы привлечь внимание к проблемам водных ресурсов в разных странах. В 2016 году отчет о ситуации с водой на планете будет объявлен 24 марта в Париже и 29 марта в Нью-Йорке. А пока мы выбрали факты и цифры о питьевой воде в России и мире.
<br>
<a href="/news/water_live2.html">подробнее</a>
</small></figcaption><hr>
<a href="/news/water_tea.html"><img src="/i/tea.png" width=100 align=right alt="Как превратить чай в лекарство?"><b>Как превратить чай в лекарство?</a></b><figcaption><small>Ещё с древних времён китайские мудрецы утверждали, что чай – одно из самых лучших лекарств. Ведь чай имеет противовирусный и противовоспалительный эффекты, очищает сосуды, снижает холестерин и поддерживает молодость кожи. Список полезных свойств чая можно перечислять долго.
<br>
<a href="/news/water_tea.html">подробнее</a>
</small></figcaption><hr>
<a href="/news/water_bactery.html"><img src="/i/Bakterija_l.jpg" width=100 align=right alt="Вода из-под крана распространяет больше микробов, чем унитаз"><b>Вода из-под крана распространяет больше микробов, чем унитаз</a></b><figcaption><small>Ученые из Калифорнийского университета выяснили, от чего воздух в жилом помещении загрязняется бактериями сильнее всего. Для исследоваения выбрали 29 домов в Сан-Франциско. Сначала ученые определяли виды и колличество бактерий: на коврах, шторках и полотенцах, в холодильнике, на кафельной плитке, в раковине, в водопроводной воде и в других местах.
<br>
<a href="/news/water_bactery.html">подробнее</a>
</small></figcaption><hr>
<a href="/news/water_alergy.html"><img src="/i/water_alergy.jpg" width=100 align=right alt="Вода из-под крана - источник аллергии"><b>Вода из-под крана - источник аллергии</a></b><figcaption><small>Американские учёные обнаружили возможную причину возникновения аллергии. Исследование, опубликованное в журнале «Annals of Allergy, Asthma and Immunology», подтвердило, что иммунный дисбаланс связан с накоплением в организме дихлорфенола – вещества, образующегося при хлорировании воды.
<br>
<a href="/news/water_alergy.html">подробнее</a>
</small></figcaption><hr>
<a href="/news/water_proverit.html"><img src="/i/proverit2.jpg" width=100 align=right alt="7 способов определить качество воды в домашних условиях"><b>7 способов определить качество воды в домашних условиях</a></b><figcaption><small>Самый простой эксперимент для определения качества воды - оценка по внешнему виду и по вкусу. Вода должна быть прозрачной, без осадка, без химического или какого-либо другого запаха. 
<br>
<a href="/news/water_proverit.html">подробнее</a>
</small></figcaption><hr>
<a href="/news/water_nakip.html"><img src="/i/chainik3.jpg" width=100 align=right alt="Какой вред для организма человека наносит накипь"><b>Какой вред для организма человека наносит накипь</a></b><figcaption><small>В некоторых материалах, которые пропагандируют пользу неочищенной воды, утверждается, что присутствующие в ней примеси совершенно безвредны. Кальций, например, используется для «строительства» зубной эмали. 
<br>
<a href="/news/water_nakip.html">подробнее</a>
</small></figcaption><hr>
<a href="/news/water_child.html"><img src="/i/water_child.jpg" width=100 align=right alt="Вода из-под крана провоцирует ожирение у детей"><b>Вода из-под крана провоцирует ожирение у детей</a></b><figcaption><small>Российские ученые выяснили, что вода из-под крана повышает риск развития ожирения у детей. 
Обмен веществ нарушается из-за хлора, который добавляют в воду на очистных станциях. 
Хлорирование воды применяют в России повсеместно как защиту от бактерий. 
Пока не придумали другого настолько же надежного и дешевого способа обеззараживать воду в муниципальном водоснабжении. 
Однако уже десятки научных исследований доказывают: постоянно пить такую воду вредно. 
<br>
<a href="/news/water_child.html">подробнее</a>
</small></figcaption><hr>

EOF;