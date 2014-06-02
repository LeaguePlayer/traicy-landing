<?php

	$cs = Yii::app()->clientScript;
	$cs->registerCssFile($this->getAssetsUrl().'/css/normalize.css');
	$cs->registerCssFile($this->getAssetsUrl().'/css/flipclock.css');
	$cs->registerCssFile($this->getAssetsUrl().'/css/jquery-ui.css');
	$cs->registerCssFile($this->getAssetsUrl().'/js/vendor/slick/slick.css');
	$cs->registerCssFile($this->getAssetsUrl().'/css/main.css?v=2');

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
	        clock.setTime('.((strtotime('1.07.2014')-time())).');
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
                        <span class="month">Июнь</span>
                        <span class="day">02</span>
                        <span class="weekday">Понедельник</span>
                    </div>
                    <div class="info">
                        <address>г. Москва</address>
                        <div class="phone"> 
                            <span class="code">8 800</span> 100 46 35
                        </div>
                        <div class="email">
                            <a href="#">mb@mb-events.ru</a>
                        </div>
                    </div>
                </div>

                <div class="phone-request">
                    <a href="#" class="button" role="modal-trigger" data-modal="#header_phone_request">Заказать звонок</a>
                </div>

                <div class="sponsors">
                    <a href="http://www.mb-events.ru/" target="_blank"><img src="<?= $this->getAssetsUrl(); ?>/img/mbe.png" alt=""></a>
                    <a href="http://www.tracyacademy.com" target="_blank"><img src="<?= $this->getAssetsUrl(); ?>/img/bta.png" alt=""></a>
                </div>

                <div class="info">
                    <div class="wrapper">
                        <h1>
                            <em>Авторский семинар Брайана Трейси</em> «Искусство управления»
                        </h1>
                        <p>
                            <span class="wrapper">
                                Эффективные инструменты достижения результатов
                            </span>
                        </p>
                    </div>
                </div>

                <div class="promo">
                    <em>Ранняя регистрация!</em>
                    Скидки на все категории билетов до 20% <br>    
                    Действительны до 30 июня 2014
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
                    <a href="#reviews">Отзывы<span class="dot"></span></a>
                </li>
                <li>
                    <a href="#participants">Участники<span class="dot"></span></a>
                </li>
                <li>
                    <a href="#" role="modal-trigger" data-modal="#partner_offer">Стать партнёром<span class="dot"></span></a>
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
                        <div class="text">
                            <em>Как может измениться Ваша жизнь:</em>
                            <ul>
                                <li>сможете достигать больших результатов за меньший промежуток времени </li>
                                <li>сможете сфокусироваться на самом важном</li>
                                <li>снизите уровень стресса и повысите качество Вашей жизни</li>
                                <li>станете больше отдыхать и проводить времени с семьей</li>
                            </ul>
                            <em>Что Вы получите:</em>
                            <ul>
                                <li>10-20 новых идей для развития себя и бизнеса</li>
                                <li>19 инструментов управления временем, повышения эффективности управления и мотивации сотрудников</li>
                                <li>эффективную и высоко- мотивированную команду, если возьмете ключевых сотрудников с собой на семинар</li>
                            </ul>
                        </div>
                    </div>
                    <div class="choice right">
                        <h3>«Для сотрудников»</h3>
                        <img src="<?= $this->getAssetsUrl(); ?>/img/for-whom2.png" alt="">
                        <div class="text">
                            <em>Какие проблемы решает семинар:</em>
                            <ul>
                                <li>низкая эффективность работы </li>
                                <li>невыполнение заданий в срок  </li>
                                <li>низкий уровень делегирования  </li>
                            </ul>
                            <em>Что будут уметь и знать сотрудники:</em>
                            <ul>
                                <li>эффективно планировать свою работу и расставлять приоритеты </li>
                                <li>ставить задачи и управлять сложными проектами  </li>
                                <li>определять, что делать, что делегировать, а от чего отказаться в пользу результата  </li>
                            </ul>
                        </div>    
                    </div>
                </div>
                <div class="text">
                    <em>Знаете ли Вы, что в среднем Вы или Ваш сотрудник использует менее 50% своего потенциала?</em>
                    <p>Станьте самым результативным руководителем в Вашей компании или отрасли! Рост эффективности Вашей компании после семинара будет зависеть от того, сколько и каких сотрудников Вы возьмете вместе с собой на этот семинар.</p>
                    <em>Стоимость участия <1% от стоимости идей, которые Вы узнаете на семинаре.</em>
                </div>
                <blockquote>
                    <img src="<?= $this->getAssetsUrl(); ?>/img/for-whom3.jpg" alt="">
                    <h3>Марк Кукушкин</h3>
                    <div class="role">Директор "BEST T&D Group"</div>
                    <div class="text">
                       Семинары Брайана создают особую бизнес-среду, которая цепляет каждого участника. Лично я много знал из того материала, что давал Брайан Трейси в Москве, но помимо этого я записал более 20 новых идей для своего бизнеса и развития!
                    </div>
                </blockquote>   
            </div>
        </section>

        <section class="youllknow">
            <div class="wrap">
                <h2 id="youllknow">Содержание семинара</h2>
                <div class="content">
                    <div class="video novideo">
                        <!--<div class="videowrapper">
                            <iframe src="//player.vimeo.com/video/93371928" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
                        </div>-->
                        <img src="<?= $this->getAssetsUrl(); ?>/img/shema.png" alt="">
                    </div>
                    <p>
                        Семинар Брайана Трейси <em>«Искусство управления: эффективные инструменты достижения результатов»</em> поможет вам развить навыки повышения эффективности управления с целью достижения выдающихся бизнес-результатов. Семинар cодержит 7 практичных инструментов повышения результатов работы менеджера и членов его команды. Эти семь инструментов объединены автором в единую и хорошо отлаженную систему, применение которой позволяет удвоить результаты работы за короткий промежуток времени. 
                    </p>
                    <h3>Вы узнаете:</h3>
                    <ul>
                        <li>семь основных навыков мышления успешных руководителей</li>
                        <li>подходы и инструменты управления временем для руководителя</li>
                        <li>методы удвоения результативности работы</li>
                        <li>постановка персональных и командных целей</li>
                        <li>искусство создания высокоэффективной команды и ее мотивации</li>
                        <li>способы повышения эффективности работы команды</li>
                        <li>делегирование и максимальное использование потенциала сотрудников</li>
                    </ul>
                </div>
                <div class="buttons">
                    <a href="#" class="button calendar"><span>Добавить в календарь</span></a>
                    <a href="<?= $this->getAssetsUrl(); ?>/brochure.pdf" class="button download" target="_blank"><span>Скачать брошюру</span></a>
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

      <!--  <section class="history">
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
        </section>-->

        <script type="text/javascript">
            terms = [
                {
                    title: 'VIP',
                    count: 0,
                    price: 31500,
                },
                {
                    title: 'Престиж',
                    count: 0,
                    price: 15300,
                },
                {
                    title: 'Бизнес',
                    count: 0,
                    price: 11000,
                },
                {
                    title: 'Стандарт',
                    count: 0,
                    price: 8700,
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
                                <td><del><em>36 000</em> руб</del><em>31 500</em> руб</td>
                                <td><del><em>18 000</em> руб</del><em>15 300</em> руб</td>
                                <td><del><em>14 000</em> руб</del><em>11 000</em> руб</td>
                                <td><del><em>10 000</em> руб</del><em>8 700</em> руб</td>
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
                                </div>
                                <div class="row wide action">
                                    <div class="l">
                                        Оформите покупку сегодня и <em>получите скидку 15%</em> от базовой цены
                                    </div>
                                    <div class="r">
                                        <p>
                                            <a href="http://tracyacademy22.ticketforevent.com/" class="blue button">Купить</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--
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
                <a href="<?= $this->getAssetsUrl(); ?>/brochure.pdf" class="button download" target="_blank"><span>Скачать брошюру</span></a>
            </div>
        </section>-->

        <section class="participants">
            <div class="wrap">
                <h2 id="participants">Приглашенные участники</h2>
                <div class="carousel">
                    <div class="item">
                        <div>
                            <img src="<?= $this->getAssetsUrl(); ?>/img/part1.png" alt="" class="image">
                        </div>
                        <div class="name">
                            Марк Кукушкин
                        </div>
                        <div class="role">
                            Директор "BEST T&D Group"
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <img src="<?= $this->getAssetsUrl(); ?>/img/part2.png" alt="" class="image">
                        </div>
                        <div class="name">
                            Олег Пронин
                        </div>
                        <div class="role">
                            Генеральный директор "Пересвет-Инвест"
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <img src="<?= $this->getAssetsUrl(); ?>/img/part3.png" alt="" class="image">
                        </div>
                        <div class="name">
                            Павел Вербняк
                        </div>
                        <div class="role">
                            Основатель и руководитель проекта "Успешное мышление"
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
                        <a href="http://www.kia.ru/" target="_blank"><img src="<?= $this->getAssetsUrl(); ?>/img/kia.gif" alt="KIA Motors в России"></a>
                    </div>
                    <div class="item">
                        <a href="http://www.incom.ru/" target="_blank"><img src="<?= $this->getAssetsUrl(); ?>/img/incom.gif" alt="Агентство ИНКОМ-Недвижимость"></a>
                    </div>
                    <div class="item">
                        <a href="http://ibishotel.ibis.com/ru/russia/index.shtml" target="_blank"><img src="<?= $this->getAssetsUrl(); ?>/img/ibis.gif" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="http://www.sberbank.ru/" target="_blank"><img src="<?= $this->getAssetsUrl(); ?>/img/sber.gif" alt=""></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="reviews">
            <div class="wrap">
                <h2 id="reviews">Отзывы</h2>
                <div class="review">
                    <img src="<?= $this->getAssetsUrl(); ?>/img/review1.png" alt="">
                    <h3>Радислав Гандапас</h3>
                    <div class="role">самый титулованный бизнес-тренер России</div>
                    <div class="text">Брайан Трейси - не просто человек-легенда, или Гуру бизнеса. Он сам иронически относится к подобным определениям. В первую очередь, это человек, создавший, развивший сотни компаний по всему миру. Его опыт бесценен, знания глубоки и манера их передачи - легка и очень эффективна.</div>
                </div>
                <div class="another">
                    <h2>Другие отзывы:</h2>
                    <div class="reviews">
                        <div class="wrapper">
                             <div class="review">
                                <img src="<?= $this->getAssetsUrl(); ?>/img/review2.jpg" alt="">
                                <h3>Стив Пейн</h3>
                                <div class="role">владелец и медицинский директор клиники OMD</div>
                                <div class="text">Способность Брайана вселять уверенность в себя и его практические методы достижения личного и бизнес-успеха поражают. Брайан последовательно фокусировал и направлял мою работу во время программы. Брайан глубоко повлиял на мою жизнь, что впоследствии помогло измениться не только мне, но и некоторым пациентам моей клиники.</div>
                            </div>
                        </div>
                        <div class="wrapper">
                             <div class="review">
                                <img src="<?= $this->getAssetsUrl(); ?>/img/review3.jpg" alt="">
                                <h3>Джей Абрахам</h3>
                                <div class="role">президент и SEO Abraham Group</div>
                                <div class="text">Одна из самых лучших программ, которую я видел, чтобы преобразовать существующую компанию в стратегическую "электростанцию", которая сможет стабильно генерировать прибыль на рынке.</div>
                            </div>
                        </div>
                        <div class="wrapper">
                             <div class="review">
                                <img src="<?= $this->getAssetsUrl(); ?>/img/review4.jpg" alt="">
                                <h3>Издательство «Аудио-Консалт»</h3>
                                <div class="text">Брайан очень хорошо понимает, что не существует универсальной техники успеха, подходящей каждому участнику. Он не ожидает, что Вы попадете под один из разработанных им шаблонов. Программа очень гибкая и скорее она будет подстраиваться под конкретного человека.</div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews">
                        <div class="wrapper">
                             <div class="review">
                                <img src="<?= $this->getAssetsUrl(); ?>/img/review5.jpg" alt="">
                                <h3>Маршал Голдсмит</h3>
                                <div class="role">один из лучших коучей по версии WALL STREET JOURNAL</div>
                                <div class="text">Эти идеи действительно работают! Брайан Трейси - один из лучших преподавателей успеха в мире. Никто не даст Вам больше практических советов, чем он.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <!--  <section class="additional">
            <div class="wrap">    
                <h2>Как будет проходить мероприятие</h2>
                <div class="email-request">
                    <? //$this->renderPartial('//subscribe/_form', array('model' => $this->forms['subscribe'], 'formId' => 'subscribe_form')); ?>
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
        </section>-->

        <section class="map">
            <h2>Место проведения</h2>
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
                                Измени мышление, и ты изменишь свою жизнь.   
                            </div>
                            <div class="author">
                                Брайан Трейси
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
                                Умение слушать приносит много пользы, которой никогда не принесет умение говорить. Нет лучшего метода, чтобы возбудить доверие людей, чем внимательно выслушать то, что хочет высказать собеседник.
                            </div>
                            <div class="author">
                                Брайан Трейси
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
                               Никто не лучше вас. Никто не умнее вас. Просто они раньше начали.
                            </div>
                            <div class="author">
                                Брайан Трейси
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
                    <li class="hidden">
                        <blockquote>
                            <div class="text">
                                Если хочешь получить то, что никогда не имел, стань тем, кем никогда не был.
                            </div>
                            <div class="author">
                                Брайан Трейси
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
                    <li class="hidden">
                        <blockquote>
                            <div class="text">
                               Когда Бог хочет сделать вам подарок, он заворачивает его в проблему. И чем больше подарок, тем в большую проблему он его заворачивает.
                            </div>
                            <div class="author">
                                Брайан Трейси
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
                    <li class="hidden">
                        <blockquote>
                            <div class="text">
                               Единственное, чем вы можете полностью управлять, — это ваши мысли. Пользуйтесь ими правильно.
                            </div>
                            <div class="author">
                                Брайан Трейси
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
                    <li class="hidden">
                        <blockquote>
                            <div class="text">
                               Вы не можете подарить то, чего у вас нет; вы не можете сделать счастливыми других, если сами несчастливы.
                            </div>
                            <div class="author">
                                Брайан Трейси
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
                    <li class="hidden">
                        <blockquote>
                            <div class="text">
                               Если делать то, что делают другие преуспевающие люди, то в конечном счете вы придете к тем же результатам, которых достигли эти преуспевающие люди.
                            </div>
                            <div class="author">
                                Брайан Трейси
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
                    <li class="hidden">
                        <blockquote>
                            <div class="text">
                              У каждого человека есть способности, благодаря которым он может достичь фантастических результатов в определенной сфере деятельности.
                            </div>
                            <div class="author">
                                Брайан Трейси
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
                    <li class="hidden">
                        <blockquote>
                            <div class="text">
                                Непрерывное обучение — ключ к успеху в XXI столетии. Пожизненная учеба — это минимальное требование для успеха в вашей (а также в любой другой) сфере деятельности.
                            </div>
                            <div class="author">
                                Брайан Трейси
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
                    <a href="#" class="moreQuotes"><span>Посмотреть ещё цитаты</span></a>
                </div>
            </div>
        </section>

        <section class="share">
            <div class="wrap">
                <h2>Порекомендуйте нас друзьям</h2>
                <ul class="social">
                    <li>
                        <a target="_blank" class="fb" href="http://www.facebook.com/sharer/sharer.php?u=<?= Yii::app()->getBaseUrl(true);?>"></a>
                    </li>
                    <li>
                        <a href="http://vkontakte.ru/share.php?url=<?= Yii::app()->getBaseUrl(true);?>" target="_blank" class="vk"></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://twitter.com/intent/tweet?text=Текст&url=<?= Yii::app()->getBaseUrl(true);?>
" class="tw"></a>
                    </li>
                </ul>
                <div class="title">
                    У Вас есть <em>друг или коллега</em>, которому может быть интересно данное мероприятие?
                    <em>Отправьте</em> рекомендацию и <em>презентационные материалы</em> прямо сейчас!
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

        <section class="companies">
            <div class="wrap">
                <h2>Партнеры</h2>
                <div class="carousel">
                    <div class="item">
                        <a href="http://www.kia.ru/" target="_blank"><i></i><img src="<?= $this->getAssetsUrl(); ?>/img/kia.gif" alt="KIA Motors в России"></a>
                    </div>
                    <div class="item">
                        <a href="http://www.incom.ru/" target="_blank"><i></i><img src="<?= $this->getAssetsUrl(); ?>/img/incom.gif" alt="Агентство ИНКОМ-Недвижимость"></a>
                    </div>
                    <div class="item">
                        <a href="http://ibishotel.ibis.com/ru/russia/index.shtml" target="_blank"><i></i><img src="<?= $this->getAssetsUrl(); ?>/img/ibis.gif" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="http://www.sberbank.ru/" target="_blank"><i></i><img src="<?= $this->getAssetsUrl(); ?>/img/sber.gif" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="http://www.oratorica.ru/" target="_blank"><i></i><img src="<?= $this->getAssetsUrl(); ?>/img/oratorika.gif" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="http://rucubes.com/" target="_blank"><i></i><img src="<?= $this->getAssetsUrl(); ?>/img/cubes.gif" alt=""></a>
                    </div>
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
                            <li><a href="http://www.tracyacademy.com" target="_blank">Академия Брайана Трейси</a></li>
                            <li><a href="http://tracyacademy.com/site/seminars" target="_blank">Ближайшие мероприятия</a></li>
                            <li><a href="http://tracyacademy.com/courses" target="_blank">Видео-обучение от Брайана Трейси</a></li>
                            <li><a href="http://accelerator.tracyacademy.com/" target="_blank">Специальный курс "Акселераторы продаж" </a></li>
                            <li><a href="#" role="modal-trigger" data-modal="#partner_offer_footer">Партнёрам</a></li>
                        </ul>
                    </nav>
                    <div class="actions">
                        <a href="#" role="modal-trigger" data-modal="#footer_phone_request">Заказать звонок</a>
                        <a href="#" role="modal-trigger" data-modal="#footer_ask">Задать вопрос</a>
                    </div>
                </div>
                <div class="about">
                   <!-- ООО  Брайан Трейси создал «систему успеха», которая сначала называлась «Семинар Феникса». В 1985 году он выпустил переработанный вариант<br> этого семинара на аудио- кассетах под названием «Психология достижений».-->
                </div>
            </div>
        </footer>

        <div class="stuck">
            <div class="social">
                <p>Следите за нами</p>
                <ul>
                    <li class="fb"><a href="https://www.facebook.com/tracyacademy" target="_blank"></a></li>
                    <li class="vk"><a href="https://vk.com/tracyacademy" target="_blank"></a></li>
                    <li class="tw"><a href="https://twitter.com/tracyacademy" target="_blank"></a></li>
                </ul>
            </div>
            <!--<div class="cart">
                <p class="total">
                    от <em>32 000</em> р.
                </p>
                <a href="#" class="button blue">Купить</a>
            </div>-->
        </div>

        <div class="modal" id="header_phone_request" data-bottom="-34" data-right="0">
            <? $this->renderPartial('//callRequest/_form', array('model' => $this->forms['callRequest'], 'formId' => 'header_phone_request_form')); ?>
        </div>

        <div class="modal arrow-left" id="header_ask" data-bottom="-30" data-left="0">
            <? $this->renderPartial('//question/_form', array('model' => $this->forms['question'], 'formId' => 'header_ask_form')); ?>
        </div>

        <div class="modal arrow-bottom" id="footer_phone_request" data-top="-240" data-right="0">
            <? $this->renderPartial('//callRequest/_form', array('model' => $this->forms['callRequest'], 'formId' => 'footer_phone_request_form')); ?>
        </div>

        <div class="modal arrow-bottom" id="footer_ask" data-top="-405" data-right="0">
            <? $this->renderPartial('//question/_form', array('model' => $this->forms['question'], 'formId' => 'footer_ask_form')); ?>
        </div>

        <div class="modal arrow-left wide" id="header_prebuy" data-bottom="-30" data-left="66">
            <? $this->renderPartial('//prereg/_form', array('model' => $this->forms['prereg'], 'formId' => 'header_prebuy_form')); ?>
        </div>

        <div class="modal wide" id="prices_prebuy" data-bottom="-30" data-right="0">
            <? $this->renderPartial('//prereg/_form', array('model' => $this->forms['prereg'], 'formId' => 'prices_prebuy_form')); ?>
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
                    <button type="submit" class="button" id="buy-trigger">Купить</button>
                </div>
            </form>
        </div>

        <div class="modal superwide noarrow" id="partner_offer" data-bottom="-30">
            <a href="#" class="close"></a>
            <h2>Предложение по сотрудничеству</h2>
            <p>Академии Брайана Трейси в России приглашает Вас к сотрудничеству в рамках проведения семинара мирового эксперта Брайана Трейси «Искусство управления: эффективные инструменты достижения результатов» 22 ноября 2014 г. Это будет уже 3-й семинар в г. Москве за последние 2 года, который мы делаем вместе с Брайаном Трейси:</p>
            <ul>
                <li><em>2012 год</em> — программа мини-МВА «Как совершить прорыв в бизнесе для руководителей и собственников» (170 человек);</li>
                <li><em>2013 год</em> — «Как достичь успеха в продажах» (650 человек).</li>
            </ul>
            <p><em>Цель семинара</em> - развить навыки повышения эффективности управления с целью достижения выдающихся бизнес-результатов.</p>
            <p><em>Семинар содержит:</em> 7 практичных инструментов повышения результатов работы менеджера и членов его команды. Эти семь инструментов объединены автором в единую и хорошо отлаженную систему, применение которой позволяет удвоить результаты работы за короткий промежуток времени.</p>
            <p><em>Целевая аудитория семинара:</em> Директора компаний, руководители подразделений, менеджеры, руководители проектов и перспективные специалисты, перед которыми стоят сложные бизнес-задачи.</p>
            <p><em>Количество участников:</em> 950 человек.</p>
            <p><em>Дата и место проведения:</em> 22 ноября 2014 г., Москва, Проспект Мира 150 гостиница "Космос", Большой зал конгрессов.</p>
            <p>Академия Брайана Трейси открыта к обсуждению любых видов сотрудничества и готова при Вашем эффективном участии предоставить Вам более широкий спектр рекламных возможностей, таких как, продажа Вашей продукции или услуг в холле, показ видео-роликов во время перерывов, розыгрыш призов от Вашей компании, выделение статуса партнера и многое другое.</p>
            <p>Мы будем рады Вашему интересу и готовы обсудить варианты сотрудничества!</p>
            <p class="italic">
                <strong>С уважением,</strong>
                <em>коллектив Академии Брайана Трейси</em>
            </p>
            <p class="italic"><em>8-800-100-46-35</em></p>
            <p class="italic"><a href="mailto:mb@mb-events.ru">mb@mb-events.ru</a></p>
        </div>

        <div class="modal superwide noarrow" id="partner_offer_footer" data-top="-700">
            <a href="#" class="close"></a>
            <h2>Предложение по сотрудничеству</h2>
            <p>Академии Брайана Трейси в России приглашает Вас к сотрудничеству в рамках проведения семинара мирового эксперта Брайана Трейси «Искусство управления: эффективные инструменты достижения результатов» 22 ноября 2014 г. Это будет уже 3-й семинар в г. Москве за последние 2 года, который мы делаем вместе с Брайаном Трейси:</p>
            <ul>
                <li><em>2012 год</em> — программа мини-МВА «Как совершить прорыв в бизнесе для руководителей и собственников» (170 человек);</li>
                <li><em>2013 год</em> — «Как достичь успеха в продажах» (650 человек).</li>
            </ul>
            <p><em>Цель семинара</em> - развить навыки повышения эффективности управления с целью достижения выдающихся бизнес-результатов.</p>
            <p><em>Семинар содержит:</em> 7 практичных инструментов повышения результатов работы менеджера и членов его команды. Эти семь инструментов объединены автором в единую и хорошо отлаженную систему, применение которой позволяет удвоить результаты работы за короткий промежуток времени.</p>
            <p><em>Целевая аудитория семинара:</em> Директора компаний, руководители подразделений, менеджеры, руководители проектов и перспективные специалисты, перед которыми стоят сложные бизнес-задачи.</p>
            <p><em>Количество участников:</em> 950 человек.</p>
            <p><em>Дата и место проведения:</em> 22 ноября 2014 г., Москва, Проспект Мира 150 гостиница "Космос", Большой зал конгрессов.</p>
            <p>Академия Брайана Трейси открыта к обсуждению любых видов сотрудничества и готова при Вашем эффективном участии предоставить Вам более широкий спектр рекламных возможностей, таких как, продажа Вашей продукции или услуг в холле, показ видео-роликов во время перерывов, розыгрыш призов от Вашей компании, выделение статуса партнера и многое другое.</p>
            <p>Мы будем рады Вашему интересу и готовы обсудить варианты сотрудничества!</p>
            <p class="italic">
                <strong>С уважением,</strong>
                <em>коллектив Академии Брайана Трейси</em>
            </p>
            <p class="italic"><em>8-800-100-46-35</em></p>
            <p class="italic"><a href="mailto:mb@mb-events.ru">mb@mb-events.ru</a></p>
        </div>

    </body>
</html>
