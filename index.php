<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

    <meta charset="utf-8">

    <title>Chivas</title>
    <meta name="description" content="">

    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Libs -->

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

    <!-- Styles -->

    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/swiper.min.css">

</head>

<body<? if (!$isConfirm_18): ?> class="no-confirm" <? endif; ?>>

<input type="hidden" id="is_guest" value="<?= (int)Yii::$app->user->isGuest; ?>" />
<input type="hidden" id="prev_action" value="<?= (isset($prevAction) ? $prevAction : '') ?>" />

<? if (!$isConfirm_18): ?>
    <section class="popup_desc">
        <div class="container">
            <div class="header__promo">
                <div class="row">
                    <div class="col col-6">
                        <a href="#" class="logo">
                            <img src="img/logo_white.png" alt="CHIVAS">
                        </a>

                        <div class="popup_promo">
                            Приветствуем вас на официальном <br>
                            сайте проекта Chivas Challenge!
                        </div>
                        <div class="popup_question">
                            Вам есть 18 лет?
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-4">
                        <div class="popup_btn_wrap">
                            <a href="#" class="js-popup_no">Нет</a>
                            <a href="#" class="colored js-popup_yes">Да</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-6">
                        <div class="popup_promo">
                            ДЛЯ ВХОДА НА САЙТ ВЫ ДОЛЖНЫ БЫТЬ <br>
                            СОВЕРШЕННОЛЕТНИМ
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="popup_alert desk">

        </div>

        <img src="img/desc_alert.png" alt="" class="mobile popup_alert_mobile">
    </section>
<? endif; ?>

<header>
    <div class="container">
        <div class="top_panel">
            <div class="row">
                <div class="col col-12 ">
                    <div class="top_panel__wrap">
                        <div class="top_panel__left">
                            <ul >
                                <li class="tr">
                                    <a href="http://www.pernod-ricard-rouss.com/brands/brand-chivas/" target="_blank">
                                        <i class="chivas_icon"></i>
                                    </a>
                                </li>
                                <li class="tr">
                                    <a href="https://www.facebook.com/ChivasRegalRussia/" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="tr">
                                    <a href="https://www.instagram.com/chivasregalrussia/" target="_blank">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="top_panel__right">

                            <? if (Yii::$app->user->isGuest): ?>
                                <a href="#popup_main" class="js-popup" onclick="popup_tabs.switchTab(1)">Войти</a> / <a href="#popup_main" id="menu_registration_link" class="js-popup" onclick="popup_tabs.switchTab(0)">Регистрация</a>
                            <? else: ?>
                                <? if($userTeams): ?> <a href="#popup_team_info" class="js-popup">Личный кабинет</a> / <? endif; ?> <a href="<?= Url::to(['site/logout']); ?>">Выйти</a>
                            <? endif; ?>

                        </div>

                        <? if (Yii::$app->user->isGuest): ?>
                            <a href="#popup_main" class="mobile js-popup" onclick="popup_tabs.switchTab(1)">
                                <img src="img/icons/icon_person.png" alt="">
                            </a>
                        <? else: ?>
                            <? if($userTeams): ?>
                                <a href="#popup_team_info" class="mobile js-popup"">
                                <img src="img/icons/icon_person.png" alt="">
                                </a>
                            <? endif; ?>
                        <? endif; ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="header__promo">
            <div class="row">
                <div class="col col-7">
                    <a href="#" class="logo">
                        <img src="img/logo_white.png" alt="CHIVAS">
                    </a>
                    <div class="header_promo__text">
                        Мы верим в то, что движущей силой успеха является команда,
                        <br>
                        также как купаж является ключевым для создания хорошего виски.
                        <br>
                        Мы верим в то, что двигателем будущего являются предприниматели.
                        <br>
                        Миссия Chivas Regal – помочь стартапам, формирующим завтрашний день.
                    </div>

                    <div class="header_promo__video_popup">
                        <a href="#" class="js-scroll-to" data-to=".video">
                            <img src="img/icons/icon_play.png" alt=">">
                            <span>Смотреть видео</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="chance">
    <div class="container">
        <img src="img/icons/chivas2.png" alt="star" class="db-c">
        <!-- <img src="img/icons/icon_logo_mobile.png" alt="star" class="db-c mobile"> -->
        <div class="row">
            <div class="col col-10">
                <p class="chance_text">
                    Chivas Challenge – это конкурс для предпринимателей с возможностью выступить перед инвесторами с презентацией своего проекта и выиграть
                </p>
                <div class="chance_price">
                    5 000 000<sup class="chance_star">*</sup> <span>рублей.</span>
                </div>
                <div class="chance_note">* с учетом всех налогов</div>
            </div>
        </div>
    </div>
</section>

<section class="tabs">

    <div class="container">
        <div class="tab_controll ">
            <a href="#" class=" tr">
                <span>О проекте</span>
                <span class="mobile js-menu_down"><i class="fa fa-angle-down"></i></span>
            </a>
            <a href="#" class="tr ">
                <span>Правила участия</span>
                <span class="mobile js-menu_down"><i class="fa fa-angle-down"></i></span>
            </a>
            <a href="#" class="tr openslide">
                <span>Жюри и призы</span>
                <span class="mobile js-menu_down"><i class="fa fa-angle-down"></i></span>
            </a>
        </div>
    </div>
    <div class="tab_contents">
        <div class="tab_content">
            <div class="tab_content__left">
                <div class="tab_content__left_content">
                    <span class="gold-color">1 ЭТАП:</span> Онлайн конкурс<br>
                    <ul>
                        <li>Подайте заявку на сайте</li>
                        <li>Эксперт РБК выберет 5 команд-участников</li>
                        <li>Финалист будет выбран экспертом РБК и зрителями по итогам конкурса</li>
                    </ul>
                    <br>
                    <span class="gold-color">2 ЭТАП:</span> Финал конкурса<br>
                    <ul>
                        <li>Финалист-победитель первого этапа и 4 команды, отобранные венчурными инвесторами, представят свои проекты на финальном мероприятии в Москве.</li>
                        <li>Оценивать проекты будет панель жюри и зрители.</li>
                        <li>Победитель получит - <span class="gold-color">5 000 000* РУБЛЕЙ</span></li>
                    </ul>

                    <p class="note_text">* С учетом всех налогов</p>

                    <? if (Yii::$app->user->isGuest): ?>
                        <a class="btn_flat js-popup" href="#popup_main" " onclick="popup_tabs.switchTab(0)"><span>Зарегистрироваться</span></a>
                    <? else: ?>
                        <a href="#" class="btn_flat js-scroll-to" data-to=".form"><span>Оставить заявку</span></a>
                    <? endif; ?>
                </div>
            </div>
            <div class="tab_content__right" style="background-image: url(img/img_tab_1.jpg);">
                <!-- <img src="img/tab_img_test.jpg" alt="test img"> -->
            </div>
        </div>
        <div class="tab_content">
            <div class="tab_content__left">
                <div class="tab_content__left_content">
                    Претендент на участие в отборочном туре конкурса должен иметь:
                    <p>
                    <ul>
                        <li>Стартап в категории «инновации для улучшения жизни людей»</li>
                        <li>Прототип продукта и бизнес-план</li>
                        <li>Команду от 2 до 5 человек</li>
                        <li>Заявку на сайте от лица капитана*</li>
                    </ul>
                    </p>
                    <br>
                    <p>
                        <a href="#" class="gold-color">Полные правила конкурса</a>
                    </p>
                    <p class="note_text">
                        * Капитаном команды считается участник, оставивший заявку.<br>
                        Капитан представляет свою команду на всех этапах конкурса.
                    </p>
                </div>
            </div>
            <div class="tab_content__right" style="background-image: url(img/img_tab_2.jpg);">
                <!-- <img src="img/tab_img_test.jpg" alt="test img"> -->
            </div>
        </div>
        <div class="tab_content">
            <div class="tab_content__left">
                <div class="tab_content__left_content">
                    Жюри конкурса — это известные инвесторы и предприниматели.
                    <br><br>
                    <span class="gold-color">I ЭТАП:</span> Онлайн-конкурс.<br>
                    <p>Эксперт от РБК Николай Гришин и зрители выберут финалиста из пяти команд.</p>
                    <br>
                    <span class="gold-color">II ЭТАП:</span> Финал конкурса.<br>
                    <p>Победителя выберут: Глеб Давидюк, Сергей Азатян, Ольга Ускова, Александр Бородич, Николай Гришин, а также онлайн-зрители и гости финального мероприятия.</p>
                    <br>
                    Главный приз конкурса — <span class="gold-color">5 000 000 РУБЛЕЙ*</span> на финансирование стартапа победителя.
                    <br>
                    <p class="note_text">* С учетом всех налогов</p>
                </div>
            </div>
            <div class="tab_content__right">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url(img/jury/1.jpg)">
                            <div class="jury_info">
                                <span>Ольга Ускова</span>
                                <p>Президент <br> группы компаний Cognitive Technologies </p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image:url(img/jury/2.jpg)">
                            <div class="jury_info">
                                <span>Николай Гришин</span>
                                <p>Руководитель <br> направления «Свое дело», редакция РБК</p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image:url(img/jury/3.jpg)">
                            <div class="jury_info">
                                <span>Александр Бородич</span>
                                <p>Основатель <br> Universa Blockchain Platform</p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image:url(img/jury/4.jpg)">
                            <div class="jury_info">
                                <span>Сергей Азатян</span>
                                <p>Сооснователь и управляющий <br> партнер Inventure Partners</p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image:url(img/jury/5.jpg)">
                            <div class="jury_info">
                                <span>Глеб Давидюк</span>
                                <p>Управляющий <br> партнер iTech Capital</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="video">
    <div class="container" id="video_container">
        <img src="img/icons/icon_video.png" alt="video" class="db-c">

        <!--        <img src="img/video_test.jpg" alt="video" class="video_player">-->
        <div class="video_block">
            <div id="video-placeholder"></div>
            <!--            <iframe width="auto" height="auto" src="https://www.youtube.com/embed/TsSiUYmP6qo" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>-->
        </div>
    </div>
</section>

<section class="form">
    <div class="container">
        <img src="img/icons/icon_form.png" alt="" class="db-c">
        <div class="title_wrap">
            <h2 class="simple_title">Оставить заявку</h2>
        </div>
        <div class="row">
            <div class="col col-8">
                <form class="main_form" id="team_form" method="post" action="<?= Url::to(['site/add-team']) ?>">
                    <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>">

                    <p class="form_label">Название команды (Стартапа)</p>
                    <input class="main_form__simple_inp required-field" type="text" name="team_name">

                    <p class="form_label">ФИО Членов команды</p>
                    <div class="main_form__team_wrap">
                        <div class="numbered_inp">
                            <span>1.</span>
                            <input type="text" name="team_member[]">
                        </div>
                        <div class="numbered_inp">
                            <span>2.</span>
                            <input type="text" name="team_member[]">
                        </div>
                    </div>
                    <div class="main_form__team_add">
                        <a href="#" class="js-add_member add_member"><span>Добавить участника</span> +</a>
                        <span class="add_member__label desk">от 2 до 5 участников</span>
                        <span class="add_member__label mobile">от 2 до 5</span>
                    </div>
                    <p class="form_label">Контакт для связи</p>
                    <input class="main_form__simple_inp required-field" type="tel" name="contact" id="phone_contact" placeholder="+7 (---) --- -- --">

                    <p class="form_label"> Тема стартапа (проекта)</p>
                    <input class="main_form__simple_inp required-field" type="text" name="theme" maxlength="300">

                    <p class="form_label"> Как ваш проект повлияет на улучшение жизни людей?</p>
                    <input class="main_form__simple_inp required-field" type="text" name="description">

                    <p class="form_label">Ссылка на облачное хранение с материалами стартапа</p>
                    <input class="main_form__simple_inp required-field" type="text" name="link">

                    <label class="rules_label">
                        <input type="checkbox" name="rules" class="hidden rules_checkbox">
                        <span class="fake_chebox"></span>
                        <span>Ознакомлен с <a href="#">правилами активности</a> и <a href="#">пользовательским соглашением</a></span>
                    </label>

                    <input type="submit" name="sumbit_form" class="btn_flat black" value="Отправить">
                </form>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <img src="img/logo_white.png" alt="CHIVAS" width="120" class="db-c">
        <div class="social_line">
            <ul >
                <li class="tr">
                    <a href="http://www.pernod-ricard-rouss.com/brands/brand-chivas/" target="_blank">
                        <i class="chivas_icon_white"></i>
                    </a>
                </li>
                <li class="tr">
                    <a href="https://www.facebook.com/ChivasRegalRussia/" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="tr">
                    <a href="https://www.instagram.com/chivasregalrussia/" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>

        <p class="send_question">Задать вопрос: <a href="mailto:cc@progressiongroup.ru">cc@progressiongroup.ru</a></p>
    </div>
</footer>

<div class="hidden">
    <input type="hidden" class="fb-auth-url" value="<?= Url::to(['/site/auth', 'authclient' => 'facebook']) ?>" />
    <input type="hidden" class="vk-auth-url" value="<?= Url::to(['/site/auth', 'authclient' => 'vkontakte']) ?>" />

    <div id="popup_main" class="popup_main">
        <div class="popup_header">
            <a href="#" onclick="popup_tabs.switchTab(0)">Регистрация</a>
            <a href="#" onclick="popup_tabs.switchTab(1)">Вход</a>
        </div>
        <div class="popup_content">
            <div class="popup_social">
                <div class="popup_social__left">
                    С помощью аккаунта <br>
                    в социальных сетях
                </div>
                <div class="popup_social__right">
                    <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="vk"><i class="fa fa-vk"></i></a>
                </div>
            </div>
            <div class="popup_delim">
                <span>Или</span>
            </div>


            <form class="popup_reg_form" id="form-signup" method="post" action="<?= Url::to(['site/signup']) ?>">
                <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>">
                <input type="hidden" name="source" class="form-control" />
                <input type="hidden" name="source_id" class="form-control"  />
                <input type="hidden" name="source_link" class="form-control"  />

                <div class="popup_reg_inputs">
                    <input type="text" name="name" class="required-field form-control" placeholder="Имя">
                    <input type="text" name="lastname" class="required-field form-control" placeholder="Фамилия">
                </div>
                <p class="popup_birthday_label">Дата рождения</p>
                <div class="popup_birthday">
                    <input type="text" placeholder="ГГГГ" name="year" class="required-field form-control" maxlength="4" >
                    <input type="text" placeholder="ММ" name="month" class="required-field form-control" maxlength="2" >
                    <input type="text" placeholder="ДД" name="day" class="required-field form-control" maxlength="2" >
                </div>
                <div class="popup_reg_inputs">
                    <input type="email" name="email" class="required-field form-control" placeholder="E-mail">
                    <input type="password" name="password" class="required-field" placeholder="Пароль">
                    <input type="password" name="r_password" class="required-field" placeholder="Повторите пароль">
                </div>
                <label class="rules_label popup_edition">
                    <input type="checkbox" name="rules" class="hidden rules_checkbox">
                    <span class="fake_chebox"></span>
                    <span>
						Я принимаю условия <a href="#">обработки моих персональных данных</a>
					</span>
                </label>
                <input type="submit" class="btn_flat submit_enter" value="Зарегистрироваться" >
                <a href="#" onclick="popup_tabs.switchTab(2)" class="recovery_link">Восстановить пароль</a>
            </form>
        </div>
        <div class="popup_content">
            <div class="popup_social">
                <div class="popup_social__left">
                    С помощью аккаунта <br>
                    в социальных сетях
                </div>
                <div class="popup_social__right">
                    <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="vk"><i class="fa fa-vk"></i></a>
                </div>
            </div>
            <div class="popup_delim">
                <span>Или</span>
            </div>

            <form class="popup_reg_form" id="form-login" method="post" action="<?= Url::to(['site/login']) ?>">
                <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>">

                <div class="popup_reg_inputs">
                    <input type="text" name="email" class="required-field" placeholder="email">
                    <input type="password" name="password" class="required-field" placeholder="Пароль">
                </div>
                <input type="submit" class="btn_flat submit_enter" name="submit_enter" value="Войти" >
                <a href="#" onclick="popup_tabs.switchTab(2)" class="recovery_link">Восстановить пароль</a>
            </form>
        </div>
        <div class="popup_content">
            <div class="popup_social">
                <div class="popup_social__left">
                    С помощью аккаунта <br>
                    в социальных сетях
                </div>
                <div class="popup_social__right">
                    <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="vk"><i class="fa fa-vk"></i></a>
                </div>
            </div>
            <div class="popup_delim">
                <span>Или</span>
            </div>
            <form class="popup_reg_form" id="form-reset-password" method="post"  action="<?= Url::to(['site/reset-password']) ?>">
                <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>">
                <div class="popup_reg_inputs">
                    <input type="text" name="email" placeholder="email">
                </div>
                <input type="submit" class="btn_flat submit_enter" name="submit_enter" value="Восстановить" >
            </form>
        </div>
    </div>

    <div id="popup_submit" class="popup_submit popup_main">
        <div class="popup_header popup_title">
            <p>Подписаться на рассылку</p>
        </div>
        <div class="popup_simple_content">
            <div class="popup_reg_inputs">
                <input type="email" name="email" placeholder="email">
            </div>
            <label class="rules_label popup_edition">
                <input type="checkbox" name="rules" class="hidden rules_checkbox">
                <span class="fake_chebox"></span>
                <span>
					Я принимаю условия <a href="#">обработки моих персональных данных</a>
				</span>
            </label>
            <input type="submit" class="btn_flat submit_enter" name="submit_subscribe" value="Подписаться" >
        </div>
    </div>

    <div id="popup_reg_done" class="simple_popup_alert popup_main">
        <div class="popup_simple_content">
            <p>
                Мы вышлем Вам письмо <br>
                о подтверждении аккаунта на указанный e-mail

            </p>

            <a class="btn_flat popup_close"><span>Хорошо</span></a>
        </div>
    </div>

    <div id="popup_auth_fail" class="simple_popup_alert popup_main">
        <div class="popup_simple_content">
            <p>
                Чтобы подать заявку <br>
                на участие в конкурсе необходимо авторизоваться

            </p>

            <a class="btn_flat popup_close"><span>Хорошо</span></a>
        </div>
    </div>

    <div id="popup_request_done" class="simple_popup_alert popup_main">
        <div class="popup_simple_content">
            <p>
                Спасибо, ваша заявка успешно загружена!
                Мы сообщим вам о результатах отборочного тура после
                31 января

            </p>

            <a class="btn_flat popup_close"><span>Хорошо</span></a>
        </div>
    </div>

    <div id="popup_confirm_email" class="simple_popup_alert popup_main">
        <div class="popup_simple_content">
            <p>
                Спасибо за регистрацию

            </p>

            <a class="btn_flat popup_close"><span>Хорошо</span></a>
        </div>
    </div>

    <div id="popup_resetpassword_done" class="simple_popup_alert popup_main">
        <div class="popup_simple_content">
            <p>
                Ваш пароль отправлен на почту, указанную при регистрации

            </p>

            <a class="btn_flat popup_close"><span>Хорошо</span></a>
        </div>
    </div>


    <? if ($userTeams): ?>
        <div id="popup_team_info" class="simple_popup_alert popup_main">
            <div class="popup_simple_content">
                <? foreach($userTeams as $userTeam): ?>
                    <div class="team_block">
                        <div class="field_header">Команда</div>
                        <p><?= $userTeam->team_name; ?></p>

                        <div class="field_header">Статус заявки</div>
                        <p class="team_status_<?= $userTeam->status; ?>""><?= $userTeam->getStatusText(); ?></p>

                        <div>
                            <?= $userTeam->theme ?>
                        </div>
                        <div>
                            <a href="<?= $userTeam->link ?>" target="_blank" class="gold-color">Ссылка на материалы</a>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    <? endif; ?>

    <? if ($errorMessages): ?>
        <div id="popup_errors" class="simple_popup_alert popup_main">
            <div class="popup_simple_content">
                <? foreach($errorMessages as $message): ?>
                    <div><?= $message; ?></div>
                <? endforeach; ?>
            </div>
        </div>
    <? endif; ?>

</div>

<div class="loader">
    <div class="loader_inner"></div>
</div>

<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->

<script src="libs/jquery/jquery-1.11.2.min.js"></script>
<script src="libs/waypoints/waypoints.min.js"></script>
<script src="libs/animate/animate-css.js"></script>
<script src="libs/maskedinput/jquery.maskedinput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script src="https://www.youtube.com/iframe_api"></script>
<script src="js/swiper.min.js"></script>
<script src="js/common.js"></script>
<script src="js/auth.js"></script>

</body>
</html>