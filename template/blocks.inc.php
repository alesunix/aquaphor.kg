<?php
# Дополнительные блоки данных
# Добавляйте сколько угодно. Не забудьте вставить переменную в design.inc.php или на страницу в папке content/

$catalog = <<<catalog
<div class='well well-small'>
<font size=4px color="#001517" face="Arial"><strong><a href="/catalog.html">Каталог водоочистителей Аквафор</a></strong></font>
<hr>
<style>
   .sign00 {
    display: flex;
	flex-wrap: wrap;
	margin: 0 auto;
	white-space: nowrap;
	text-align: center;
	
    width: 21%; height: 340px; /* Размеры */
    float: initial; /* Выравнивание */
	display: inline-block; /* выровнять блоки по горизонтали */
	vertical-align: middle; /* (для дочерних) при добавлении контента сохраняет блоки на одной вертикальной плоскости */
	white-space: nowrap; /* предотвращает падение последнего элемента на следующую строку */
	overflow: hidden; /* предотвращает растягивание блока в IE6 */
    border: 1px solid #cecece; /* Параметры рамки */
	border-radius: 15px; /* Радиус скругления */
    padding: 0px;   /* Поля внутри блока */
    margin: 1px 3px 1px; /* Отступы вокруг */
    background: #ffffff; /* Цвет фона */ 
	-webkit-box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);
-moz-box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);
box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);/* Параметры тени */

    filter: alpha (Opacity=25);
    opacity: 1;
    -moz-transition: all 1s ease-in-out; /* эффект перехода для Firefox до версии 16.0 */
    -webkit-transition: all 1s ease-in-out; /* эффект перехода для Chrome до версии 26.0, Safari, Android и iOS */
    -o-transition: all 1s ease-in-out; /* эффект перехода для Opera до версии 12.10 */
    transition: all 1s ease-in-out; /* эффект перехода для других браузеров */
}
.sign00:hover {
    filter: alpha (Opacity=100);
    opacity: 1;
	-webkit-box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);
-moz-box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);
box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);


   }
   .sign00 figcaption {
    margin: 0 auto 0px; /* Отступы вокруг абзаца */
   }
  </style>
  
  <!--[if lt IE 9]>
   <script>
    document.createElement('figure');
    document.createElement('figcaption');
   </script>
  <![endif]-->
  
  
<center>
<figure class="sign00"><a href="/catalog/filters.html"><img src="/i/filterkuvshin.jpg" alt="Фильтры - Кувшины"><figcaption><br><b><font color=#004BA0>Фильтры - Кувшины</font></a><hr><small><font color=#0063BA>&#187;</font> Питьевая вода из кувшина<br><font color=#0063BA>&#187;</font> Не требует установки<br>&nbsp;&nbsp;&nbsp;и подключения<br><font color=#0063BA>&#187;</font> Компактные и удобные<br><font color=#0063BA>&#187;</font> Доступные по цене</small></b></figcaption></figure>
<figure class="sign00"><a href="/catalog/bigfilters.html"><img src="/i/filterswater.jpg" alt="Фильтры для питьевой воды"><figcaption><br><b><font color=#004BA0>Фильтры для питьевой воды</font></a><hr><small><font color=#0063BA>&#187;</font> Отдельный кран для<br> &nbsp;&nbsp;&nbsp; питьевой воды<br><font color=#0063BA>&#187;</font> Находится под мойкой<br><font color=#0063BA>&#187;</font> Несколько степеней<br> &nbsp;&nbsp;&nbsp;очистки воды</small></b></figcaption></figure>
<figure class="sign00"><a href="/catalog/predfilters.html"><img src="/i/cleaner.jpg" alt="Предочистка воды во всей квартире"><figcaption><br><b><font color=#004BA0>Предочистка воды во<br> всей квартире</font></a><hr><small><font color=#0063BA>&#187;</font> Чистая вода на кухне и в ванной<br><font color=#0063BA>&#187;</font> Защита бытовой техники<br><font color=#0063BA>&#187;</font> Находится на входе<br> &nbsp;&nbsp;&nbsp;труб в квартиру</small></b></figcaption></figure>
<figure class="sign00"><a href="/catalog/nasadki.html"><img src="/i/nasadki.jpg" alt="Насадки на кран"><figcaption><br><b><font color=#004BA0>Насадки на кран</font></a><hr><small><font color=#0063BA>&#187;</font> Очищают воду из крана<br> &nbsp;&nbsp;&nbsp;до питьевой<br><font color=#0063BA>&#187;</font> Легко подключаются<br><font color=#0063BA>&#187;</font> Подходят для поездок</small></b></figcaption></figure>
</center>
</div><!--/well -->
catalog;

$reviews = <<<reviews
<div class='well well-small'>

  <style>
   .sign0 {
    width: 23%; height: 100%; /* Размеры */
    float: initial; /* Выравнивание */
	display: inline-block; /* выровнять блоки по горизонтали */
	vertical-align: middle; /* (для дочерних) при добавлении контента сохраняет блоки на одной вертикальной плоскости */
	white-space: nowrap; /* предотвращает падение последнего элемента на следующую строку */
	overflow: hidden; /* предотвращает растягивание блока в IE6 */
    border: 1px solid #cecece; /* Параметры рамки */
	border-radius: 15px; /* Радиус скругления */
    padding: 0px;   /* Поля внутри блока */
    margin: 1px 3px 1px; /* Отступы вокруг */
    background: #ffffff; /* Цвет фона */ 
	-webkit-box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);
-moz-box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);
box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);/* Параметры тени */

    filter: alpha (Opacity=25);
    opacity: 1;
    -moz-transition: all 1s ease-in-out; /* эффект перехода для Firefox до версии 16.0 */
    -webkit-transition: all 1s ease-in-out; /* эффект перехода для Chrome до версии 26.0, Safari, Android и iOS */
    -o-transition: all 1s ease-in-out; /* эффект перехода для Opera до версии 12.10 */
    transition: all 1s ease-in-out; /* эффект перехода для других браузеров */
}
.sign0:hover {
    filter: alpha (Opacity=100);
    opacity: 1;
	-webkit-box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);
-moz-box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);
box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);
   }
   .sign0 figcaption {
    margin: 0 auto 0px; /* Отступы вокруг абзаца */
   }
  </style>
  
  <!--[if lt IE 9]>
   <script>
    document.createElement('figure');
    document.createElement('figcaption');
   </script>
  <![endif]-->
 
<center>
<figure class="sign0"><a href="http://tlc.ccs.kg" target="_blank"><img src="/i/reklam1.png" alt="TLC-EXPRESS"></a><figcaption></figcaption></figure>
<figure class="sign0"><a href="http://ccs.kg" target="_blank"><img src="/i/waterboss.jpg" alt="Спецсвязь"></a><figcaption></figcaption></figure>
<figure class="sign0"><a href="/catalog/bigfilters.html"><img src="/i/morion.jpg" alt="Морион"></a><figcaption></figcaption></figure>
<figure class="sign0"><a href="#1"><img src="/i/call.jpg" alt="Звонок"></a><figcaption></figcaption></figure>

</center>
</div><!--/well -->
reviews;

$catalog2 = <<<catalog2
<div class='well well-small'>
<center><font size=4px color="#001517" face="Arial"><strong>Оборудование для коттеджей и офисов а также сменные модули и сопутствующие товары</strong></font>
<hr>
<style>
   .sign1 {
    width: 21%; height: 340px; /* Размеры */
    float: initial; /* Выравнивание */
	display: inline-block; /* выровнять блоки по горизонтали */
	vertical-align: middle; /* (для дочерних) при добавлении контента сохраняет блоки на одной вертикальной плоскости */
	white-space: nowrap; /* предотвращает падение последнего элемента на следующую строку */
	overflow: hidden; /* предотвращает растягивание блока в IE6 */
    border: 1px solid #cecece; /* Параметры рамки */
	border-radius: 15px; /* Радиус скругления */
    padding: 0px;   /* Поля внутри блока */
    margin: 1px 3px 1px; /* Отступы вокруг */
    background: #ffffff; /* Цвет фона */ 
	-webkit-box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);
-moz-box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);
box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);/* Параметры тени */

    filter: alpha (Opacity=25);
    opacity: 1;
    -moz-transition: all 1s ease-in-out; /* эффект перехода для Firefox до версии 16.0 */
    -webkit-transition: all 1s ease-in-out; /* эффект перехода для Chrome до версии 26.0, Safari, Android и iOS */
    -o-transition: all 1s ease-in-out; /* эффект перехода для Opera до версии 12.10 */
    transition: all 1s ease-in-out; /* эффект перехода для других браузеров */
}
.sign1:hover {
    filter: alpha (Opacity=100);
    opacity: 1;
	-webkit-box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);
-moz-box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);
box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);
   }
   .sign1 figcaption {
    margin: 0 auto 0px; /* Отступы вокруг абзаца */
   }
  </style>
  
  <!--[if lt IE 9]>
   <script>
    document.createElement('figure');
    document.createElement('figcaption');
   </script>
  <![endif]-->

<center>
<figure class="sign1"><a href="/catalog/watercleaner.html"><img src="/i/kotedj_water.jpg" alt="Чистая вода в коттедже"><figcaption><br><b><font color=#004BA0>Чистая вода в коттедже</font></a><hr><small><font color=#0063BA>&#187;</font> Очистка воды из скважины<br> &nbsp;&nbsp;&nbsp;и колодца<br><font color=#0063BA>&#187;</font> Системы умягчения<br> и обезжелезивания<br><font color=#0063BA>&#187;</font> Долгий срок службы</small></b></figcaption></figure>
<figure class="sign1"><a href="/catalog/office.html"><img src="/i/office_water.jpg" alt="Чистая вода в офисе"><figcaption><br><b><font color=#004BA0>Чистая вода в офисе</font></a><hr><small><font color=#0063BA>&#187;</font> Свежая питьевая вода<br><font color=#0063BA>&#187;</font> В офисе, школе, крупной <br>организации<br><font color=#0063BA>&#187;</font> Долгий срок службы</small></b></figcaption></figure>
<figure class="sign1"><a href="http://www.aquaphor.ru/filters/cartridge" target="_blank"><img src="/i/moduli.jpg" alt="Сменные модули"><figcaption><br><b><font color=#004BA0>Сменные модули</font></a><hr><small><font color=#0063BA>&#187;</font> Картриджи для фильтров<br><font color=#0063BA>&#187;</font> Материалы для регенерации<br><font color=#0063BA>&#187;</font> Мембраны и минерализаторы</small></b></figcaption></figure>
<figure class="sign1"><a href="http://www.aquaphor.ru/filters/related_products" target="_blank"><img src="/i/tovary.jpg" alt="Сопутствующие товары"><figcaption><br><b><font color=#004BA0>Сопутствующие товары</font></a><hr><small><font color=#0063BA>&#187;</font> Краны для питьевой воды<br><font color=#0063BA>&#187;</font> Материалы для установки<br> и обслуживания<br><font color=#0063BA>&#187;</font> Комплекты для повышения<br> давления</small></b></figcaption></figure>
</center>
</div><!--/well -->
catalog2;

$newsblock = <<<newsblock
<div class='well well-small'>
<style>
   .sign2 {
    width: 22%; height: 145px; /* Размеры */
    float: initial; /* Выравнивание */
	display: inline-block; /* выровнять блоки по горизонтали */
	vertical-align: middle; /* (для дочерних) при добавлении контента сохраняет блоки на одной вертикальной плоскости */
	white-space: nowrap; /* предотвращает падение последнего элемента на следующую строку */
	overflow: hidden; /* предотвращает растягивание блока в IE6 */
    border: 1px solid #cecece; /* Параметры рамки */
	border-radius: 15px; /* Радиус скругления */
    padding: 0px;   /* Поля внутри блока */
    margin: 1px 3px 1px; /* Отступы вокруг */
    background: #ffffff; /* Цвет фона */ 
	-webkit-box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);
-moz-box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);
box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);/* Параметры тени */

    filter: alpha (Opacity=25);
    opacity: 1;
    -moz-transition: all 1s ease-in-out; /* эффект перехода для Firefox до версии 16.0 */
    -webkit-transition: all 1s ease-in-out; /* эффект перехода для Chrome до версии 26.0, Safari, Android и iOS */
    -o-transition: all 1s ease-in-out; /* эффект перехода для Opera до версии 12.10 */
    transition: all 1s ease-in-out; /* эффект перехода для других браузеров */
}
.sign2:hover {
    filter: alpha (Opacity=100);
    opacity: 1;
	-webkit-box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);
-moz-box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);
box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);
   }
   .sign2 figcaption {
    margin: 0 auto 0px; /* Отступы вокруг абзаца */
   }
  </style>
  
  <!--[if lt IE 9]>
   <script>
    document.createElement('figure');
    document.createElement('figcaption');
   </script>
  <![endif]-->
<center>
<figure class="sign2"><a href="/tours/test.html"><img src="/i/doma.png" alt="дом"></a></figure>
<figure class="sign2"><a href="/tours/test.html"><img src="/i/proizvodstvo.png" alt="производство"></a></figure>
<figure class="sign2"><a href="/tours/test.html"><img src="/i/medical.png" alt="медицина"></a></figure>
<figure class="sign2"><a href="/tours/test.html"><img src="/i/selhoz.png" alt="сельхоз"></a></figure>
<figure class="sign2"><a href="/tours/test.html"><img src="/i/otdyh.png" alt="отдых"></a></figure>
</center>
</div><!--/well -->
newsblock;

$stock = <<<stock
<div class='well well-small'>
<style>
   .sign3 {
    width: 240px; height: 145px; /* Размеры */
    float: center; /* Выравнивание */
	display: inline-block; /* выровнять блоки по горизонтали */
	vertical-align: middle; /* (для дочерних) при добавлении контента сохраняет блоки на одной вертикальной плоскости */
	white-space: nowrap; /* предотвращает падение последнего элемента на следующую строку */
	overflow: hidden; /* предотвращает растягивание блока в IE6 */
    border: 3px solid #fff; /* Параметры рамки */
	border-radius: 3px; /* Радиус скругления */
    padding: 1px; /* Поля внутри блока */
    margin: 1px 1px 1px; /* Отступы вокруг */
    background: #ffffff; /* Цвет фона */ 
	box-shadow:
   0 1px 4px rgba(0, 0, 0, .3),
   -23px 0 20px -23px rgba(0, 0, 0, .8),
   23px 0 20px -23px rgba(0, 0, 0, .8),
   0 0 40px rgba(0, 0, 0, .1) inset;  /* Параметры тени */
   }
   .sign3 figcaption {
    margin: 0 auto 0px; /* Отступы вокруг абзаца */
   }
  </style>
  
  <!--[if lt IE 9]>
   <script>
    document.createElement('figure');
    document.createElement('figcaption');
   </script>
  <![endif]-->
<center>
<figure class="sign3"><a href="/stock.html"><img src="/i/stock1.jpg" alt="акция"></a></figure>
<figure class="sign3"><a href="/stock.html"><img src="/i/stock2.jpg" alt="акция2"></a></figure>
</center>
</div><!--/well -->
stock;

$news = <<<news
<div class='well well-small'>
<a href="/news/poleznye_news.html"><font size=4px color="#001517" face="Arial"><strong>Полезные новости</strong></font></a>
<hr>
<style>
   .sign4 {
    width: 22%; height: 265px; /* Размеры */
    float: initial; /* Выравнивание */
	display: inline-block; /* выровнять блоки по горизонтали */
	vertical-align: middle; /* (для дочерних) при добавлении контента сохраняет блоки на одной вертикальной плоскости */
	white-space: nowrap; /* предотвращает падение последнего элемента на следующую строку */
	overflow: hidden; /* предотвращает растягивание блока в IE6 */
    border: 1px solid #cecece; /* Параметры рамки */
	border-radius: 15px; /* Радиус скругления */
    padding: 0px;   /* Поля внутри блока */
    margin: 1px 3px 1px; /* Отступы вокруг */
    background: #ffffff; /* Цвет фона */ 
	-webkit-box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);
-moz-box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);
box-shadow: 0px 9px 5px -4px rgba(0,0,0,0.46);/* Параметры тени */

    filter: alpha (Opacity=25);
    opacity: 1;
    -moz-transition: all 1s ease-in-out; /* эффект перехода для Firefox до версии 16.0 */
    -webkit-transition: all 1s ease-in-out; /* эффект перехода для Chrome до версии 26.0, Safari, Android и iOS */
    -o-transition: all 1s ease-in-out; /* эффект перехода для Opera до версии 12.10 */
    transition: all 1s ease-in-out; /* эффект перехода для других браузеров */
}
.sign4:hover {
    filter: alpha (Opacity=100);
    opacity: 1;
	-webkit-box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);
-moz-box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);
box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.46);
   }
   .sign4 figcaption {
    margin: 0 auto 0px; /* Отступы вокруг абзаца */
   }
  </style>
  
  <!--[if lt IE 9]>
   <script>
    document.createElement('figure');
    document.createElement('figcaption');
   </script>
  <![endif]-->
<center>
<figure class="sign4"><a href="/news/water_info.html"><img class="animate" src="/i/water_info.jpg" alt="Вся правда о воде"><figcaption><small><b>Вся правда о воде</small></b></a></figcaption></figure>
<figure class="sign4"><a href="/news/water_live.html"><img class="animate" src="/i/water_live.jpg" alt="Вода, идеальная для жизни и развития"><figcaption><small><b>Вода, идеальная для жизни и<br> развития</b></small></a></figcaption></figure>
<figure class="sign4"><a href="/news/water_live2.html"><img class="animate" src="/i/news2.jpg" alt="Жизнь без чистой воды – реальность для жителей стран Третьего мира"><figcaption><small><b>Жизнь без чистой воды – <br>реальность для жителей стран <br>Третьего мира</b></small></a></figcaption></figure>
<figure class="sign4"><a href="/news/water_tea.html"><img class="animate" src="/i/tea.png" alt="Как превратить чай в лекарство?"><figcaption><small><b>Как превратить чай <br>в лекарство?</small></b></a></figcaption></figure>
</center>

<hr>
<center>

</center>

</div><!--/well -->
news;

$waterboss = <<<waterboss
<div class='well well-small'>
<h1><font color="#001517" face="Arial"><strong>Умягчители (смягчители) воды WaterBoss</strong></font></h1>
<hr>
<style>
   .sign5 {
    width: 245px; height: 400px; /* Размеры */
    float: center; /* Выравнивание */
	display: inline-block; /* выровнять блоки по горизонтали */
	vertical-align: middle; /* (для дочерних) при добавлении контента сохраняет блоки на одной вертикальной плоскости */
	white-space: nowrap; /* предотвращает падение последнего элемента на следующую строку */
	overflow: hidden; /* предотвращает растягивание блока в IE6 */
    border: 3px solid #fff; /* Параметры рамки */
	border-radius: 3px; /* Радиус скругления */
    padding: 1px; /* Поля внутри блока */
    margin: 1px 1px 1px; /* Отступы вокруг */
    background: #ffffff; /* Цвет фона */ 
	box-shadow:
   0 1px 4px rgba(0, 0, 0, .3),
   -23px 0 20px -23px rgba(0, 0, 0, .8),
   23px 0 20px -23px rgba(0, 0, 0, .8),
   0 0 40px rgba(0, 0, 0, .1) inset;  /* Параметры тени */
   }
   .sign5 figcaption {
    margin: 0 auto 0px; /* Отступы вокруг абзаца */
   }
  </style>
  
  <!--[if lt IE 9]>
   <script>
    document.createElement('figure');
    document.createElement('figcaption');
   </script>
  <![endif]-->
<center><small>
<figure class="sign5"><a href="/news/waterboss.html"><img src="/i/watermax.jpg" alt="watermax"></a><figcaption>
Фильтр и умягчитель премиум класса<br> 
для обработки воды во всем доме. <br>
Оснащен дополнительным резервуаром <br>
с несколькими отсеками для реагентов, что <br>
дает Вам возможность решать широкий <br>
спектр проблем с водой. <br>
Обладает механизмами легкой и<br> 
экономичной регенерации и самоочистки.</figcaption></figure>

<figure class="sign5"><a href="/news/waterboss.html"><img src="/i/Waterboss 700.jpg" alt="Waterboss 700"></a><figcaption>
Аквафор WaterBoss 700–это универсальная установка, <br> 
объединяющая в себе механический <br> 
самоочищающийся фильтр, <br> 
обезжелезиватель и умягчитель воды. <br> 
Благодаря технологическим особенностям <br> 
системы, WaterBoss превосходит обычные <br> 
умягчители воды по всем <br> 
основным показателям.</figcaption></figure>
<figure class="sign5"><a href="/news/waterboss.html"><img src="/i/Waterboss 900.jpg" alt="Waterboss 900"></a><figcaption>
Самоочищающаяся система фильтрации <br>
твердых примесей, содержания железа и <br>
водный умягчитель для обработки воды <br>
всего дома. Удобен для больших семей. <br>
Отсутствует необходимость замены фильтров. <br>
Простой процесс регенерации - <br>
потребуется только 3 кг соли,<br>
100-125 л воды и полчаса времени. <br>
Также решает проблемы железистости воды.</figcaption></figure>
</center></small>
</div><!--/well -->
waterboss;
