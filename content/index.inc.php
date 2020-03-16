<?php

# Данные о странице
$title = 'Аквафор плюс в Бишкеке Фильтры и системы для очистки воды | Аквафор';
$keywords = 'Аквафор,Фильтр,Вода,Бишкек';
$description = 'Официальный сайт ОсОО Аквафор плюс продажа фильтров и доставка по Бишкеку и всему Кыргызстану';
$template = 'info';
$page_blocks = 'catalog, reviews, news';

# Содержание страницы
$content = <<<EOF



<!-- Cлайдер -->
<!doctype html>
<html>
<head>
<!-- HTML -->
<left>
<div id="dva">
<a href="#1"id="dvaF"><img src="/i/baner3.jpg" alt="семья и чистая вода"/><strong>График работы по будням с 9:00 до 18:00   Суббота с 10:00 до 17:00</strong></a>
<a href="/catalog/bigfilters.html"><img src="/i/baner6.jpg" alt="Морион"/><strong>График работы по будням с 9:00 до 18:00   Суббота с 10:00 до 17:00</strong></a>
<a href="/news/test_germany.html"><img src="/i/baner8.jpg" alt="Здоровье"/><strong>График работы по будням с 9:00 до 18:00   Суббота с 10:00 до 17:00</strong></a>
<a href="/news/water_info.html"><img src="/i/baner5.jpg" alt="Вся правда о воде"/><strong>График работы по будням с 9:00 до 18:00   Суббота с 10:00 до 17:00</strong></a>

<!--<a href="/news/water_info.html"><img src="/i/xmain-image.png" alt="Кувшин прованс"/><strong>График работы по будням с 9:00 до 18:00   Суббота с 10:00 до 17:00</strong></a>-->

  <div>
    <button type="button" value="0">1</button>
    <button type="button" value="1">2</button>
    <button type="button" value="2">3</button>
	<button type="button" value="3">4</button>
	<button type="button" value="4">5</button>
  </div>
</div>
</left>
<style>
#dva,
#dva #dvaF {  /* все картинки будут той же высоты, что первая */
  position: relative;
  height: auto;
  z-index: 2;
}
#dva a {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}
#dva img {
  /* можно прописать max-width и max-height */
  display: block;
  height: 100%;
  width: 100%;
}
#dva strong {  /* стиль текста, его помещать не обязательно строго снизу */
  position: absolute;
  bottom: 0;
  left: 0;
  width: 96%;
  padding: 2%;
  background: rgba(83, 137, 171, 0.56);
}
#dva div {  /* расположение кнопок */
  position: absolute;
  top: 0;
  right: 1em;
  z-index: 3;
}
#dva button {  /* стиль кнопок */
  //height: .8em;
  //width: .8em;
  //padding: 0;
  //border: none;
  border-radius: 100%;
}
#dva button:nth-of-type(1) {
  opacity: 0.4;
}
</style>

<script>
window.requestAnimationFrame = (function () { // для поддержки requestAnimationFrame всеми браузерами
        return window.requestAnimationFrame ||
               function (callback) {
                   return window.setTimeout(callback, 1000 / 60);
               };
})();
// функция слайдера
function slider(f, img, button, V, Vo) {
  var iii = 0,
      start = null,
      clear = 0;
  function step(time) {
    if (start === null) start = time;
    var progress = time - start;
    if (progress > V) {
      start = null;
      for (var i=0; i<img.length; i++) {
        img[i].style.zIndex = "0";
        button[i].style.opacity = "1";
      }
      img[iii].style.zIndex = "1";
      iii = ((iii != (img.length - 1)) ? (iii + 1) : 0);
      img[iii].style.zIndex = "2";
      img[iii].style.opacity = "0";
      button[iii].style.opacity = ".4";
    } else if(img[iii].style.opacity != "") {
      img[iii].style.opacity = ((progress/Vo < 1) ? (progress/Vo) : 1);
    }
    if(clear != "0" && progress > Vo) {} else {requestAnimationFrame(step);}
  }
  requestAnimationFrame(step);
  f.onmouseenter = function() { if(clear == "0") clear = "1"; }  // при наведении на слайдер
  f.onmouseleave = function() { if(clear == "1") {clear = "0"; requestAnimationFrame(step);} }  // курсор убран со слайдера
  for (var j=0; j<button.length; j++) {  // при нажатии кнопок
    button[j].onclick = function() {
      clear = "2";
      for (var i=0; i<img.length; i++) {
        img[i].style.zIndex = "0";
      }
      img[this.value].style.zIndex = "2";
      img[this.value].style.opacity = "1";
      for (var k=0; k<button.length; k++) {
        button[k].style.opacity = ((button[k] == this) ? '.4' : '1');
      }
    }
  }
}
// вызов функции слайдера
 var f = document.getElementById('dva'),
    a = f.getElementsByTagName('a'),
    button = f.getElementsByTagName('div')[0].getElementsByTagName('button');
  slider(f, a, button, '5000', '1000');
</script>
</html>


EOF;
			