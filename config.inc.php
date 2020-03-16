<?php
# Общие настройки
$config							= array();
$config['sitelink']				= 'http://aquaphor.kg/'; # URL сайта, со слэшем на конце
$config['sitename']				= 'ОсОО Аквафор плюс'; # Заголовок сайта
$config['slogan']				= '<a href="/index.html"><img src="http://aquaphor.kg/i/logo.png"></a>Фильтры для очистки воды и системы очистки Аквафор
								   <p align="right"><font size=2px>Адрес: г. Бишкек, ул. Киевская 77 (у остановки здания Илбирс) <br>
								   <font size=2px>Телефон: (0312) 900 - 410;&thinsp;(0700) 419 - 000;&thinsp;(0551) 445 - 344;&thinsp;(0772) 539 - 348;&thinsp;(0707) 554-130</p></font>'; # Слоган
$config['encoding']				= 'utf-8'; # Кодировка

$config['template']				= 'info'; # Шаблон

# Настройки доступа
$config['login']				= 'admin'; # Логин админа
$config['password']				= 'Qaz159753'; # Пароль админа

# Настройки доступа в закрытую зону
$config['access_login']			= 'admin'; # Логин
$config['access_password']		= 'Qaz159753'; # Пароль

### ОТПРАВКА СООБЩЕНИЙ ###

# Настройка отправки сообщений
$config['secretWord']					= 'sdfsdfgaghah'; # Секретное слово для генерации антиспама
$config['email']['receiver']			= 'filterra.kg@gmail.com'; # E-mail адрес, на который отправляется сообщение
$config['email']['subject']				= 'Письмо с сайта «' . $config['sitename'] . '»'; # Тема письма обратной связи

# Настройка формы
$config['form']['feedback']['subject']	= true; # Обязательно ли поле «Тема письма»

# Уведомления
$config['form']['feedbackSent']			= 'Сообщение отправлено администратору. Спасибо!<br>Сейчас вы будете перенаправлены на главную страницу.'; # Сообщение отправлено
$config['form']['notSent']				= 'Извините, письмо не было отправлено. Пожалуйста, повторите отправку.'; # Неудачная отправка
$config['form']['isSpam']				= 'Если вы видите данное сообщение, то скорее всего у вас отключен JavaScript. Включите его для отправки или просто отошлите письмо на ' . $config['email']['receiver']; # СПАМ?!
$config['form']['emptyEmail']			= 'Извините, e-mail не введён либо его формат неверен.'; # Нет мыла!
$config['form']['emptyName']			= 'Извините, имя не введено либо его формат неверен.'; # Нет имени!
$config['form']['emptyTopic']			= 'Извините, вы забыли указать тему письма.'; # Нет темы!
$config['form']['emptyMessage']			= 'Перед отправкой напишите сообшение.'; # Нет сообщения!