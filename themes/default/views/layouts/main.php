<?php

	$cs = Yii::app()->clientScript;
	$cs->registerCssFile($this->getAssetsUrl().'/css/normalize.css');
	$cs->registerCssFile($this->getAssetsUrl().'/css/flipclock.css');
	$cs->registerCssFile($this->getAssetsUrl().'/css/jquery-ui.css');
	$cs->registerCssFile($this->getAssetsUrl().'/js/vendor/slick/slick.css');
	$cs->registerCssFile($this->getAssetsUrl().'/css/main.css');

	$cs->registerScriptFile($this->getAssetsUrl().'/js/vendor/modernizr-2.6.2.min.js', CClientScript::POS_HEAD);
	$cs->registerScriptFile($this->getAssetsUrl().'/js/vendor/jquery-1.11.0.min.js', CClientScript::POS_END);
	$cs->registerScriptFile($this->getAssetsUrl().'/js/vendor/flipclock.min.js', CClientScript::POS_END);
	$cs->registerScriptFile($this->getAssetsUrl().'/js/vendor/jquery-ui.min.js', CClientScript::POS_END);
	$cs->registerScriptFile($this->getAssetsUrl().'/js/vendor/slick/slick.min.js', CClientScript::POS_END);
	$cs->registerScriptFile('//maps.google.com/maps/api/js?v=3.13&amp;sensor=false&amp;libraries=geometry', CClientScript::POS_END);
	$cs->registerScriptFile($this->getAssetsUrl().'/js/vendor/gmaps.js', CClientScript::POS_END);
	$cs->registerScriptFile($this->getAssetsUrl().'/js/vendor/jquery.customSelect.min.js', CClientScript::POS_END);
	$cs->registerScriptFile($this->getAssetsUrl().'/js/vendor/jquery.scrollTo.min.js', CClientScript::POS_END);
	$cs->registerScriptFile($this->getAssetsUrl().'/js/vendor/jquery.localScroll.min.js', CClientScript::POS_END);
    $cs->registerScriptFile($this->getAssetsUrl().'/js/vendor/jquery.sticky.js', CClientScript::POS_END);
	$cs->registerScriptFile($this->getAssetsUrl().'/js/vendor/accounting.min.js', CClientScript::POS_END);
	$cs->registerScriptFile($this->getAssetsUrl().'/js/main.js', CClientScript::POS_END);
	$cs->registerScript('clock',
		'$(document).ready(function(){
	        clock.setTime(15786);
	        clock.start();
	    });'
	, CClientScript::POS_END);
	
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">Вы используете <strong>устаревший</strong> браузер. Пожалуйста, <a href="http://browsehappy.com/">обновите свой браузер</a> для комфортной работы в интернете.</p>
        <![endif]-->

        <div class="overlay"></div>

        <header>
            <div class="wrap">
                <div class="contacts">
                    <div class="date">
                        <span class="month">Ноябрь</span>
                        <span class="day">22</span>
                        <span class="weekday">Суббота</span>
                    </div>
                    <div class="info">
                        <address>г. Москва</address>
                        <div class="phone"> 
                            <span class="code">8 800</span> 100 46 35
                        </div>
                        <div class="email">
                            <a href="#">exmpl@gmail.com</a>
                        </div>
                    </div>
                </div>

                <div class="phone-request">
                    <a href="#" class="button" role="modal-trigger" data-modal="#header_phone_request">Заказать звонок</a>
                </div>

                <div class="sponsors">
                    <a href="#"><img src="<?= $this->getAssetsUrl(); ?>/img/mbe.png" alt=""></a>
                    <a href="#"><img src="<?= $this->getAssetsUrl(); ?>/img/bta.png" alt=""></a>
                </div>

                <div class="info">
                    <div class="wrapper">
                        <h1>
                            <em>Семинар Брайана Трейси</em> «Искусство управления»
                        </h1>
                        <p>
                            <span class="wrapper">
                                7 практических инструментов повышения результатов<br /> работы менеджера и членов его команды
                            </span>
                        </p>
                    </div>
                </div>

                <div class="promo">
                    Скидка на все категории билетов <em>30% Промо-код: SKIDKA</em>
                </div>

                <div class="timer">
                    <p>До конца акции осталось</p>
                    <div class="clock"></div>
                </div>

                <div class="actions">
                    
                    <div class="ask">
                        <a href="#" class="button" role="modal-trigger" data-modal="#header_ask">Задать вопрос</a>
                    </div>

                    <span>или</span>

                    <div class="buy">
                        <a href="#" class="button disabled" role="modal-trigger" data-modal="#header_prebuy">Купить</a>
                    </div>
                </div>
                <div class="light"></div>
                <div class="tracy"></div>
            </div>
            <div class="top"></div>
        </header>

        <nav class="menu">
            <ul>
                <li>
                    <a href="#youllknow">Описание<span class="dot"></span></a>
                </li>
                <li>
                    <a href="#speakers">О спикере<span class="dot"></span></a>
                </li>
                <li>
                    <a href="#prices">Условия и цены<span class="dot"></span></a>
                </li>
                <li>
                    <a href="#programm">Программа<span class="dot"></span></a>
                </li>
                <li>
                    <a href="#reviews">Отзывы и рекомендации<span class="dot"></span></a>
                </li>
                <li>
                    <a href="#participants">Участники мероприятия<span class="dot"></span></a>
                </li>
            </ul>
        </nav>

        <section class="forwhom">
            <div class="wrap">
                <h2>Подходит для</h2>
                <div class="choices">
                    <div class="choice left">
                        <h3>«Для руководителей»</h3>
                        <img src="<?= $this->getAssetsUrl(); ?>/img/for-whom1.png" alt="">
                        <div class="text">В России две известные беды, когда первая беда дорога не простая, а железная, а вторая путешествует по ней с камерой, вдоль родины создавшей эти горести получается третья — плохое российское кино. В то время когда в интернете можно прославится за любую глупость и когда </div>
                    </div>
                    <div class="choice right">
                        <h3>«Для сотрудников»</h3>
                        <img src="<?= $this->getAssetsUrl(); ?>/img/for-whom2.png" alt="">
                        <div class="text">В России две известные беды, когда первая беда дорога не простая, а железная, а вторая путешествует по ней с камерой, вдоль родины создавшей эти горести получается третья — плохое российское кино. В то время когда в интернете можно прославится за любую глупость и когда </div>
                    </div>
                </div>
                <div class="text">
                    В России две известные беды, когда первая беда дорога не простая, а железная, а вторая путешествует по ней с камерой, вдоль родины создавшей эти горести получается третья — плохое российское кино. В то время когда в интернете можно прославится за любую глупость и когда человек в первую очередь достает телефон для того чтобы сначала включить функцию видеозаписи, а затем лишь позвонить на помощь, создается подобное кино, такое же ужасное как и вся эта тенденция. И как бы создатели не нахваливали свой фильм, лучше он от этого не станет, ведь каждая лягушка хвалит свое болото.
                </div>
                <blockquote>
                    <img src="<?= $this->getAssetsUrl(); ?>/img/for-whom3.png" alt="">
                    <h3>Радислав Гандапас</h3>
                    <div class="text">
                        В России две известные беды, когда первая беда дорога не простая, а железная, а вторая путешествует по ней с камерой, вдоль родины создавшей эти горести получается третья — плохое российское кино. В то время когда в интернете можно прославится за любую глупость и когда человек в первую очередь достает телефон для того чтобы сначала включить функцию видеозаписи, а затем лишь позвонить на помощь.
                    </div>
                </blockquote>   
            </div>
        </section>

        <section class="youllknow">
            <div class="wrap">
                <h2 id="youllknow">Вы узнаете</h2>
                <div class="content">
                    <div class="video">
                        <div class="videowrapper">
                            <iframe src="//player.vimeo.com/video/93371928" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
                        </div>
                    </div>
                    <ul>
                        <li>семь основных навыков мышления успешных руководителей</li>
                        <li>подходы и инструменты управления временем для руководителя</li>
                        <li>методы удвоения результативности работы</li>
                        <li>постановка персональных и командных целей</li>
                        <li>искусство создания высокоэффективной команды и ее мотивации</li>
                        <li>способы повышения эффективности работы команды</li>
                        <li>делегирование и максимальное использование потенциала сотрудников</li>
                    </ul>
                    <p>
                        Семинар Брайана Трейси <em>«Искусство управления: эффективные инструменты достижения результатов»</em> поможет вам развить навыки повышения эффективности управления с целью достижения выдающихся бизнес-результатов. Семинар cодержит 7 практичных инструментов повышения результатов работы менеджера и членов его команды. Эти семь инструментов объединены автором в единую и хорошо отлаженную систему, применение которой позволяет удвоить результаты работы за короткий промежуток времени. 
                    </p>
                </div>
                <div class="buttons">
                    <a href="#" class="button calendar"><span>Добавить в календарь</span></a>
                    <a href="#" class="button download disabled"><span>Скачать программу</span></a>
                </div>
            </div>
        </section>

        <section class="speakers">
            <div class="wrap">
                <h2 id="speakers">Спикеры</h2>
                <ul class="items">
                    <li class="current">
                        <a href="#" class="bookmark">
                            <img src="<?= $this->getAssetsUrl(); ?>/img/speaker1.jpg" alt="">
                            Брайан Трейси
                        </a>
                        <div class="content">
                            <div class="gradient">
                                <h3>Кто такой Брайан Трейси?</h3>
                                <p><em>Брайан Трейси</em> – автор и ведущий семинара является одним из всемирно известных Гуру и авторитетных тренеров по системному развитию бизнеса в настоящий момент. Брайан лично работал с руководителями высшего звена и собственниками небольших и крупных компаний во всем мире. Все, что Вы изучите в этой программе, опробовано, проверено и доказано в реальных компаниях и ситуациях.</p>
                                <p>Брайан Трейси обладает учёными степенями бакалавра и магистра в области коммерции, автором более 50 книг на тему эффективности, тайм-менеджмента, лидерства и  развития бизнеса.</p>
                                <div class="books">
                                    <h3>Книги</h3>
                                    <div class="carousel">
                                        <div class="item">
                                            <a href="#">
                                                <img src="<?= $this->getAssetsUrl(); ?>/img/book1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="<?= $this->getAssetsUrl(); ?>/img/book2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="<?= $this->getAssetsUrl(); ?>/img/book3.png" alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="<?= $this->getAssetsUrl(); ?>/img/book2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="<?= $this->getAssetsUrl(); ?>/img/book3.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clients">
                                    <h3>Клиенты</h3>
                                    <div class="carousel">
                                        <div class="item">
                                            <a href="#">
                                                <img src="<?= $this->getAssetsUrl(); ?>/img/client1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="<?= $this->getAssetsUrl(); ?>/img/client2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="<?= $this->getAssetsUrl(); ?>/img/client3.png" alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="<?= $this->getAssetsUrl(); ?>/img/client4.png" alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="<?= $this->getAssetsUrl(); ?>/img/client5.png" alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="<?= $this->getAssetsUrl(); ?>/img/client6.png" alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="<?= $this->getAssetsUrl(); ?>/img/client7.png" alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <img src="<?= $this->getAssetsUrl(); ?>/img/client8.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="video">
                                <a href="#"><img src="<?= $this->getAssetsUrl(); ?>/img/video-traicy.jpg" alt=""></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="history">
            <div class="wrap">
                <h2>История мероприятия спикера <em>в России и СНГ</em></h2>
                <ul class="times">
                    <li><a href="#">2012<i></i></a></li>
                    <li class="active"><a href="#">Апрель 2013<i></i></a></li>
                    <li><a href="#">Октябрь 2013<i></i></a></li>
                    <li><a href="#">Март 2014<i></i></a></li>
                    <li><a href="#">Сегодня<i></i></a></li>
                    <li><a href="#">Ноябрь 2014<i></i></a></li>
                    <li><a href="#">2015<i></i></a></li>
                </ul>
                <div class="content">
                    <i class="pointer"></i>
                    <div class="left">
                        <div class="title">
                            <h3>Кто такой Брайан Трейси?</h3>
                            <div class="date">22.12.2013</div>
                            <div class="city">г. Москва</div>
                        </div>
                        <div class="text">
                            <p>В 1981 году Брайан Трейси создал «систему успеха», которая сначала называлась «Семинар Феникса». В 1985 году он выпустил переработанный вариант этого семинара на аудио- кассетах под названием «Психология достижений».</p>
                            <p>Трейси является автором более 45 книг. Он написал и выпустил более 300 аудио – и видео- учебных программ. Одна из основных задач - помочь любому человеку, независимо от рода его деятельности и финансового положения, добиться успехов. Программа «Психология достижений» стала мировым бестселлером и была переведена на 20 языков.</p>
                            <p>Книга Брайана Трейси «Достижение максимума» вошла в список 50 классических книг о мотивации и лидерстве «50 Success Classics»[1] (2004). Брайан Трейси обладает учёными степенями</p>
                        </div>
                        <ul class="features">
                            <li>
                                200 человек
                                <i class="icon peoples"></i>
                            </li>
                            <li>
                                10 городов
                                <i class="icon city"></i>
                            </li>
                            <li>
                                3 спикера
                                <i class="icon speaker"></i>
                            </li>
                            <li>
                                <a href="">
                                    Посмотреть
                                    <i class="icon video"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="photos">
                        <div class="carousel">
                            <div class="item">
                                <img src="<?= $this->getAssetsUrl(); ?>/img/photo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="<?= $this->getAssetsUrl(); ?>/img/photo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="<?= $this->getAssetsUrl(); ?>/img/photo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="<?= $this->getAssetsUrl(); ?>/img/photo1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript">
            terms = [
                {
                    title: 'VIP',
                    count: 0,
                    price: 36000,
                },
                {
                    title: 'Престиж',
                    count: 0,
                    price: 18000,
                },
                {
                    title: 'Бизнес',
                    count: 0,
                    price: 14000,
                },
                {
                    title: 'Стандарт',
                    count: 0,
                    price: 10000,
                },
            ];
            discounts = [
                {
                    min: 5,
                    val: 5,
                },
                {
                    min: 10,
                    val: 10,
                },
                {
                    min: 20,
                    val: 15,
                },
                {
                    min: 50,
                    val: 20,
                },
            ];
        </script>
        <section class="prices">
            <div class="wrap">
                <h2 id="prices">Условия и цены</h2>
                <div class="container">
                    <div class="left">
                        <table>
                            <tr>
                                <th>Категория</th>
                                <th>VIP</th>
                                <th>Престиж</th>
                                <th>Бизнес</th>
                                <th>Стандарт</th>
                            </tr>
                            <tr>
                                <td>Удаленность от сцены</td>
                                <td>1-2 ряд</td>
                                <td>1-2 ряд</td>
                                <td>—</td>
                                <td>—</td>
                            </tr>
                            <tr>
                                <td>VIP-обед с Брайаном</td>
                                <td>Да</td>
                                <td>—</td>
                                <td>—</td>
                                <td>—</td>
                            </tr>
                            <tr>
                                <td>Сертификат о прохождении обучения</td>
                                <td>Да</td>
                                <td>Да</td>
                                <td>—</td>
                                <td>—</td>
                            </tr>
                            <tr>
                                <td>Книги с автографом авторов</td>
                                <td>Да</td>
                                <td>Да</td>
                                <td>—</td>
                                <td>—</td>
                            </tr>
                            <tr>
                                <td>Фотосессия с ведущими</td>
                                <td>Закрытая</td>
                                <td>Закрытая</td>
                                <td>—</td>
                                <td>—</td>
                            </tr>
                            <tr>
                                <td>Автограф-сессия</td>
                                <td>Закрытая</td>
                                <td>Закрытая</td>
                                <td>Общая</td>
                                <td>Общая</td>
                            </tr>
                            <tr>
                                <td>Тетрадь с материалами и уражнениями</td>
                                <td>Да</td>
                                <td>Да</td>
                                <td>Да</td>
                                <td>Да</td>
                            </tr>
                            <tr>
                                <td>Оборудование синхронного перевода</td>
                                <td>Да</td>
                                <td>Да</td>
                                <td>Да</td>
                                <td>Да</td>
                            </tr>
                            <tr>
                                <td>Цена:</td>
                                <td><em>30 000</em> руб</td>
                                <td><em>14 700</em> руб</td>
                                <td><em>10 500</em> руб</td>
                                <td><em>8 300</em> руб</td>
                            </tr>
                        </table>
                        <div class="action">
                            <div class="help">
                                <div class="c">
                                    Не готовы принять решение сейчас? Пройдите предварительную регистрацию и сохраните для себя сегодняшние условия
                                </div>
                            </div>
                            <div class="button-holder">
                                <a href="№" class="button blue" role="modal-trigger" data-modal="#prices_prebuy"><span>Предварительная<br> регистрация</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="form">
                            <form action="#">
                                <div class="row info">
                                    *Скидка зависит от количества билетов
                                </div>
                                <div class="row order">
                                    <label for="type">Заказ билетов:</label>
                                    <div class="select">
                                        <select name="type" id="type">
                                            <option value="empty">Категория</option>
                                            <option value="0">VIP</option>
                                            <option value="1">Престиж</option>
                                            <option value="2">Бизнес</option>
                                            <option value="3">Стандарт</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="inputs">
                                    <div class="row">
                                        <label for="count">Количество билетов:</label>
                                        <div class="slider"></div>
                                    </div>
                                    <div class="row fright">
                                        <label for="">Указать вручную кол-во:</label>
                                        <input type="number" value="1" min="1" max="100" name="count" id="count" value="count">
                                    </div>
                                    <div class="row discount fright">
                                        <label for="">Скидка за кол-во бил.:</label>
                                        <input type="text" value="0%" name="discount" id="discount" disabled>
                                    </div>
                                    <div class="row fright">
                                        <label for="">Старая цена:</label>
                                        <input type="text" name="oldprice" id="oldprice" disabled>
                                    </div>
                                    <div class="row wide subsum">
                                        Цена со скидкой: <input type="text" class="disabled" name="newprice" id="newprice" disabled>
                                    </div>
                                    <div class="row calc">
                                        <a href="#" class="blue button" id="calc">Посчитать скидку</a>
                                    </div>
                                </div>
                                <div class="total">
                                    <div class="row">
                                        <p class="choice">
                                            <i></i>Вы выбрали:
                                        </p>
                                    </div>
                                    <div class="row wide action">
                                        <div class="l">
                                            Оформите покупку сегодня и <em>получите скидку 15%</em> от базовой цены
                                        </div>
                                        <div class="r">
                                            <p>
                                                <a href="#" class="blue button" role="modal-trigger" data-modal="#prices-buy">Купить</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="programm">
            <h2 id="programm">Программа мероприятия</h2>
            <div class="content">
                <div class="rule">
                    <ul>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule1.png"><span>00:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>01:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>02:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>03:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>04:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>05:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>06:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>07:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>08:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>09:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>10:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>11:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>12:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>13:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>14:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>15:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>16:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>17:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>18:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>19:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>20:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>21:00</span></li>
                        <li><img src="<?= $this->getAssetsUrl(); ?>/img/rule.png"><span>22:00</span></li>
                        <li class="last"><img src="<?= $this->getAssetsUrl(); ?>/img/rule2.png"><span>23:00</span></li>
                        <div class="events">
                            <div class="item up gray" style="width: 250px; left: 61px;"><span>Сон</span></div>
                            <div class="item up yellow" style="width: 200px; left: 350px;"><span>Регистрация <br>Нетворкинг</span></div>
                            <div class="item up green" style="width: 50px; left: 561px;"><span>Обед</span></div>
                            <div class="item up gray" style="width: 250px; right: 66px;"><span>Сон</span></div>

                            <div class="item down green" style="width: 150px; left: 400px;"><span>Кофе-брейк</span></div>
                            <div class="item down red" style="width: 100px; left: 561px;"><span>Регистрация <br>Нетворкинг</span></div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="buttons">
                <a href="#" class="button calendar"><span>Добавить в календарь</span></a>
                <a href="#" class="button download"><span>Скачать программу</span></a>
            </div>
        </section>

        <section class="participants">
            <div class="wrap">
                <h2 id="participants">Приглашенные участники</h2>
                <div class="carousel">
                    <div class="item">
                        <img src="<?= $this->getAssetsUrl(); ?>/img/part1.png" alt="" class="image">
                        <div class="name">
                            Александр Иванов
                        </div>
                        <div class="role">
                            ген. директор холдинга "Газпром"
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?= $this->getAssetsUrl(); ?>/img/part2.png" alt="" class="image">
                        <div class="name">
                            Александр Иванов
                        </div>
                        <div class="role">
                            ген. директор холдинга "Газпром"
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?= $this->getAssetsUrl(); ?>/img/part3.png" alt="" class="image">
                        <div class="name">
                            Александр Иванов
                        </div>
                        <div class="role">
                            ген. директор холдинга "Газпром"
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?= $this->getAssetsUrl(); ?>/img/part4.png" alt="" class="image">
                        <div class="name">
                            Александр Иванов
                        </div>
                        <div class="role">
                            ген. директор холдинга "Газпром"
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?= $this->getAssetsUrl(); ?>/img/part2.png" alt="" class="image">
                        <div class="name">
                            Александр Иванов
                        </div>
                        <div class="role">
                            ген. директор холдинга "Газпром"
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?= $this->getAssetsUrl(); ?>/img/part1.png" alt="" class="image">
                        <div class="name">
                            Александр Иванов
                        </div>
                        <div class="role">
                            ген. директор холдинга "Газпром"
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="companies">
            <div class="wrap">
                <h2>Приглашенные компании</h2>
                <div class="carousel">
                    <div class="item">
                        <a href="#"><img src="<?= $this->getAssetsUrl(); ?>/img/c1.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="<?= $this->getAssetsUrl(); ?>/img/c2.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="<?= $this->getAssetsUrl(); ?>/img/c3.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="<?= $this->getAssetsUrl(); ?>/img/c4.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="<?= $this->getAssetsUrl(); ?>/img/c5.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="<?= $this->getAssetsUrl(); ?>/img/c6.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="<?= $this->getAssetsUrl(); ?>/img/c4.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="<?= $this->getAssetsUrl(); ?>/img/c3.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="reviews">
            <div class="wrap">
                <h2 id="reviews">Отзывы</h2>
                <div class="review">
                    <img src="<?= $this->getAssetsUrl(); ?>/img/review1.png" alt="">
                    <h3>Семён Семёнович Артаков</h3>
                    <div class="role">ген. директор холдинга ОАО "Звездочка"</div>
                    <div class="text">В России две известные беды, когда первая беда дорога не простая, а железная, а вторая путешествует по ней с камерой, вдоль родины создавшей эти горести получается третья — плохое российское кино. В то время когда в интернете можно прославится за любую глупость и когда человек в первую очередь достает телефон для того чтобы сначала включить функцию видеозаписи, а затем лишь позвонить на помощь, создается подобное кино, такое же ужасное как и вся эта тенденция. И как бы создатели не нахваливали свой фильм, лучше он от этого не станет, ведь каждая лягушка хвалит свое болото.</div>
                </div>
                <div class="another">
                    <h2>Другие отзывы:</h2>
                    <div class="reviews">
                        <div class="wrapper">
                             <div class="review">
                                <img src="<?= $this->getAssetsUrl(); ?>/img/review2.jpg" alt="">
                                <h3>Семён Семёнович Артаков</h3>
                                <div class="role"> ОАО "Звездочка"</div>
                                <div class="text">В России две известные беды, когда первая беда дорога не простая, а железная, а вторая путешествует по ней с камерой, вдоль родины создавшей эти </div>
                            </div>
                        </div>
                        <div class="wrapper">
                             <div class="review">
                                <img src="<?= $this->getAssetsUrl(); ?>/img/review2.jpg" alt="">
                                <h3>Семён Семёнович Артаков</h3>
                                <div class="role"> ОАО "Звездочка"</div>
                                <div class="text">В России две известные беды, когда первая беда дорога не простая, а железная, а вторая путешествует по ней с камерой, вдоль родины создавшей эти </div>
                            </div>
                        </div>
                        <div class="wrapper">
                             <div class="review">
                                <img src="<?= $this->getAssetsUrl(); ?>/img/review2.jpg" alt="">
                                <h3>Семён Семёнович Артаков</h3>
                                <div class="role"> ОАО "Звездочка"</div>
                                <div class="text">В России две известные беды, когда первая беда дорога не простая, а железная, а вторая путешествует по ней с камерой, вдоль родины создавшей эти </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="additional">
            <div class="wrap">    
                <h2>Как будет проходить мероприятие</h2>
                <div class="email-request">
                    <div class="title">
                        Хотите получить дополнительные <br/ >материалы с мероприятия? <br/><em>Оставьте ваш e-mail</em>
                    </div>
                    <div class="form">
                        <form action="#">
                            <div class="column"><input type="email" placeholder="Введите Ваш E-mail"></div>
                            <div class="column"><button class="button">Отправить</button></div>
                        </form> 
                    </div>
                </div>
                <div class="materials">
                    <div class="text">
                        <h3>Дополнительные материалы</h3>
                        <p>В 1981 году Брайан Трейси создал «систему успеха», которая сначала называлась «Семинар Феникса». В 1985 году он выпустил переработанный вариант этого семинара на аудио- кассетах под названием «Психология достижений».</p>
                        <p>Трейси является автором более 45 книг. Он написал и выпустил более 300 аудио – и видео- учебных программ. Одна из основных задач - помочь любому человеку, независимо от рода его деятельности и финансового положения, добиться успехов. Программа «Психология </p>
                        <ul class="links">
                            <li><a href="#">Скачать рабочие материалы</a></li>
                            <li><a href="#">Скачать презентацию</a></li>
                            <li><a href="#">Файл</a></li>
                        </ul>
                        <a href="#" class="button">Скачать</a>
                    </div>
                    <div class="video">
                        <div class="videowrapper">
                            <iframe src="//player.vimeo.com/video/93371928" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="map">
            <h2>Карта места проведения</h2>
            <div class="map" id="map">
                
            </div>
        </section>

        <section class="quotes">
            <div class="wrap">
                <h2>Цитаты</h2>
                <ul class="quotes">
                    <li>
                        <blockquote>
                            <div class="text">
                                В России две известные беды, когда первая беда дорога не простая, а железная, а вторая путешествует по ней с камерой, вдоль родины создавшей эти 
                            </div>
                            <div class="author">
                                Радислав Гандапас
                            </div>
                        </blockquote>
                        <ul class="social">
                            <li>
                                <a href="#" class="tw"></a>
                            </li>
                            <li>
                                <a href="#" class="fb"></a>
                            </li>
                            <li>
                                <a href="#" class="vk"></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <blockquote>
                            <div class="text">
                                В России две известные беды, когда первая беда дорога не простая, а железная, а вторая путешествует по ней с камерой, вдоль родины создавшей эти 
                            </div>
                            <div class="author">
                                Радислав Гандапас
                            </div>
                        </blockquote>
                        <ul class="social">
                            <li>
                                <a href="#" class="tw"></a>
                            </li>
                            <li>
                                <a href="#" class="fb"></a>
                            </li>
                            <li>
                                <a href="#" class="vk"></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <blockquote>
                            <div class="text">
                                В России две известные беды, когда первая беда дорога не простая, а железная, а вторая путешествует по ней с камерой, вдоль родины создавшей эти 
                            </div>
                            <div class="author">
                                Радислав Гандапас
                            </div>
                        </blockquote>
                        <ul class="social">
                            <li>
                                <a href="#" class="tw"></a>
                            </li>
                            <li>
                                <a href="#" class="fb"></a>
                            </li>
                            <li>
                                <a href="#" class="vk"></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="next">
                    <a href="#"><span>Посмотреть ещё цитаты</span></a>
                </div>
            </div>
        </section>

        <section class="share">
            <div class="wrap">
                <h2>Порекомендуйте нас друзьями</h2>
                <ul class="social">
                    <li>
                        <a href="#" class="fb"></a>
                    </li>
                    <li>
                        <a href="#" class="vk"></a>
                    </li>
                    <li>
                        <a href="#" class="tw"></a>
                    </li>
                </ul>
                <div class="title">
                    <em>Введите текст рекомендации и E-mail</em>,<br />
                    на которые отправятся приглашения<br>
                    с презентацией мероприятия
                </div>
                <div class="form">
                    <form action="">
                        <div class="row">
                            <input type="email" placeholder="Введите E-mail">
                        </div>
                        <div class="row">
                            <textarea placeholder="Текст рекомендации"></textarea>
                        </div>
                        <div class="row">
                            <button class="button">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <footer>
            <div class="wrap">
                <div class="top">
                    <div class="logo">
                        <div class="copyright">
                            © 2014 Академия <em>Брайна Трейси</em>
                        </div>
                        <div class="phone">
                            +7 800 <em>100 46 35</em>
                        </div>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="#">Все партнеры</a></li>
                            <li><a href="#">Видео уроки</a></li>
                            <li><a href="#">Акселератор продаж</a></li>
                            <li><a href="#">Стать инфопартнером</a></li>
                            <li><a href="#">Другие мероприятия</a></li>
                            <li><a href="#">Стать спонсором</a></li>
                        </ul>
                    </nav>
                    <div class="actions">
                        <a href="#" role="modal-trigger" data-modal="#footer_phone_request">Заказать звонок</a>
                        <a href="#" role="modal-trigger" data-modal="#footer_ask">Задать вопрос</a>
                    </div>
                </div>
                <div class="about">
                    ООО  Брайан Трейси создал «систему успеха», которая сначала называлась «Семинар Феникса». В 1985 году он выпустил переработанный вариант<br> этого семинара на аудио- кассетах под названием «Психология достижений».
                </div>
            </div>
        </footer>
<!--
        <div class="stuck">
            <div class="social">
                <p>Следите за нами</p>
                <ul>
                    <li class="fb"><a href="#"></a></li>
                    <li class="vk"><a href="#"></a></li>
                    <li class="tw"><a href="#"></a></li>
                </ul>
            </div>
            <div class="cart">
                <p class="total">
                    от <em>32 000</em> р.
                </p>
                <a href="#" class="button blue">Купить</a>
            </div>
        </div>
-->
        <div class="modal" id="header_phone_request" data-bottom="-34" data-right="0">
            <form action="#">
                <a href="#" class="close"></a>
                <h2>Перезвоните мне</h2>
                <div class="row">
                    <input type="text" placeholder="Имя*">
                </div>
                <div class="row">
                    <input type="text" placeholder="Телефон*">
                </div>
                <div class="row">
                    <button type="submit" class="button">Отправить</button>
                </div>
            </form>
        </div>

        <div class="modal arrow-left" id="header_ask" data-bottom="-30" data-left="0">
            <form action="#">
                <a href="#" class="close"></a>
                <h2>Задать вопрос</h2>
                <div class="row">
                    <input type="text" placeholder="Имя*">
                </div>
                <div class="row">
                    <input type="email" placeholder="E-mail*">
                </div>
                <div class="row">
                    <input type="text" placeholder="Телефон*">
                </div>
                <div class="row">
                    <textarea placeholder="Вопрос*"></textarea> 
                </div>
                <div class="row">
                    <button type="submit" class="button">Отправить</button>
                </div>
            </form>
        </div>

        <div class="modal arrow-bottom" id="footer_phone_request" data-top="-240" data-right="0">
            <form action="#">
                <a href="#" class="close"></a>
                <h2>Перезвоните мне</h2>
                <div class="row">
                    <input type="text" placeholder="Имя*">
                </div>
                <div class="row">
                    <input type="text" placeholder="Телефон*">
                </div>
                <div class="row">
                    <button type="submit" class="button">Отправить</button>
                </div>
            </form>
        </div>

        <div class="modal arrow-bottom" id="footer_ask" data-top="-405" data-right="0">
            <form action="#">
                <a href="#" class="close"></a>
                <h2>Задать вопрос</h2>
                <div class="row">
                    <input type="text" placeholder="Имя*">
                </div>
                <div class="row">
                    <input type="email" placeholder="E-mail*">
                </div>
                <div class="row">
                    <input type="text" placeholder="Телефон*">
                </div>
                <div class="row">
                    <textarea placeholder="Вопрос*"></textarea> 
                </div>
                <div class="row">
                    <button type="submit" class="button">Отправить</button>
                </div>
            </form>
        </div>

        <div class="modal arrow-left wide" id="header_prebuy" data-bottom="-30" data-left="66">
            <form action="#">
                <a href="#" class="close"></a>
                <h2>Предварительная регистрация</h2>
                <div class="row">
                    <input type="text" placeholder="Имя*">
                </div>
                <div class="row columns">
                    <div class="column"><input type="email" placeholder="E-mail*"></div>
                    <div class="column"><input type="text" placeholder="Телефон*"></div>
                </div>
                <div class="row">
                    <input type="text" placeholder="Компания">
                </div>
                <div class="row">
                    <input type="number" placeholder="Количество участников">
                </div>
                <div class="row">
                    <p>
                        <input type="checkbox" name="advise" id="advise"><label for="advise">Нужен совет по проезду и гостинице?</label>
                    </p>
                    <p>
                        <input type="checkbox" name="notifications" id="notifications" checked><label for="notifications">Мне интересны новости и акции по этому мероприятию</label>
                    </p>
                </div>
                <div class="row">
                    <button type="submit" class="button">Отправить</button>
                </div>
            </form>
        </div>

        <div class="modal wide" id="prices_prebuy" data-bottom="-30" data-right="0">
            <form action="#">
                <a href="#" class="close"></a>
                <h2>Предварительная регистрация</h2>
                <div class="row">
                    <input type="text" placeholder="Имя*">
                </div>
                <div class="row columns">
                    <div class="column"><input type="email" placeholder="E-mail*"></div>
                    <div class="column"><input type="text" placeholder="Телефон*"></div>
                </div>
                <div class="row">
                    <input type="text" placeholder="Компания">
                </div>
                <div class="row">
                    <input type="number" placeholder="Количество участников">
                </div>
                <div class="row">
                    <p>
                        <input type="checkbox" name="advise" id="advise"><label for="advise">Нужен совет по проезду и гостинице?</label>
                    </p>
                    <p>
                        <input type="checkbox" name="notifications" id="notifications" checked><label for="notifications">Мне интересны новости и акции по этому мероприятию</label>
                    </p>
                </div>
                <div class="row">
                    <button type="submit" class="button">Отправить</button>
                </div>
            </form>
        </div>

        <div class="modal" id="prices-buy" data-bottom="-30" data-right="0">
            <form action="#">
                <a href="#" class="close"></a>
                <div class="help">Чтобы получить скидку введите промокод в системе наших партнеров Ticketforevent.com</div>
                <div class="row promo">
                    <label for="">Промокод:</label>
                    <input type="text" value="SKIDKA" disabled="">
                </div>
                <div class="hint">* Нажав на кнопку «Купить Вы будете переадресованны на сайт наших партнеров ticketforevent.com, где можете оформить покупку билетов на мероприятие </div>
                <div class="row">
                    <button type="submit" class="button">Купить</button>
                </div>
            </form>
        </div>

    </body>
</html>
