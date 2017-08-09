<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="7YvIRqzFhwNwKBHXVawLLQsprwC6YLDbSiHNtFRF2xM" />
    <meta name="description" content="Курсы по созданию сайтов в ташкенте, обучение веб-разработке в Ташкенте">
    <meta name="keywords" content="курсы по созданию сайтов в ташкенте, веб сайт, вебсайт, сайт, веб-верстальщик, веб-мастер, html-верстальщик, фронтенд-разработчик, php программист, html, css, git, github, jquery, bootstrap, gulp, less, php, yii2, препроцессоры компьютерные курсы в ташкенте, как создать сайт, компьютерные курсы в ташкенте">
    <?= Html::csrfMetaTags() ?>
    <title>Курсы по созданию сайтов в Ташкенте</title>
    <?php $this->head() ?>
</head>
<body id="body">
<?php $this->beginBody() ?>
    <header>
        <!-- Loader -->
        <div id="fh5co-page">
            <section id="fh5co-header">
                <div class="container">
                    <nav role="navigation">
                        <ul class="pull-left left-menu">
                            <li><?= Html::a('Курсы', ['/site/courses'])?></li>
                            <li><?= Html::a('Цены', ['/site/pricing'])?></li>
                        </ul>
                        <h1 id="fh5co-logo"><a href="<?= '/'?>">webacademy<span>.</span>uz</a></h1>
                        <ul class="pull-right right-menu">
                            <?php if(Yii::$app->user->isGuest):?>
                                <li><?= Html::a('Войти', ['/site/login'], ['class' => 'nav-item-child nav-item-hover', /*'data-toggle' => 'modal',*/ 'data-target' => '#login'])?></li>
                                <li class="fh5co-cta-btn"><?= Html::a('Регистрация', ['/site/signup'], ['class' => 'nav-item-child nav-item-hover', /*'data-toggle' => 'modal',*/ 'data-target' => '#sign-up'])?>
                            <?php else:?>
                                <li><?= Html::a('Выйти ( ' . Yii::$app->user->identity->username . ' )', ['/site/logout'], ['class' => 'nav-item-child nav-item-hover', 'data-method' => 'POST'])?></li>
                            <?php endif;?>
                                <li class="dropdown lang hidden-xs">
                                    <?php $currUrl = Yii::$app->getRequest()->getUrl(); ?>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?= Yii::t('app', 'Chose Language')?> <span class="caret"></span> </a>
                                    <ul class="dropdown-menu" role="menu" id="dropdown-menu">
                                        <li><a href="<?= '/ru' . preg_replace('/\/(en|ru|uz)\//i', '/', $currUrl) ?>">Русский</a></li>
                                        <li><a href="<?= '/uz' . preg_replace('/\/(en|ru|uz)\//i', '/', $currUrl) ?>">Узбекча</a></li>
                                    </ul>
                                </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
    </header>

    <?= $content ?>

    <section id="fh5co-subscribe">
        <div class="container">
            <h3 class="animate-box"><label for="email"><?= Yii::t('app', 'Newsletter')?></label></h3>
            <form action="#" method="post" class="animate-box">
                <i class="fh5co-icon icon-paper-plane"></i>
                <input type="email" class="form-control" placeholder="Введите ваш email" id="email" name="email">
                <input type="submit" value="Подписаться" class="btn btn-primary">
            </form>
        </div>
        
    </section>
    <!-- END #fh5co-subscribe -->
    <!-- End Contact -->
    <footer id="fh5co-footer">
        <div class="container">
            <div class="row row-bottom-padded-md">
                <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
                    <div class="fh5co-footer-widget">
                        <img src="/images/logo.png" width="150">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
                    <div class="fh5co-footer-widget">
                        <h3>Компания</h3>
                        <ul class="fh5co-links">
                            <li><?= Html::a('Наши курсы', ['/site/courses'])?>
                            <li><?= Html::a('Чему мы обучаем?', ['/site/index/#ourCourses'])?>
                            <li><?= Html::a('Наши преимущества', ['/site/index/#advantages'])?>
                            <li><?= Html::a('Отзывы учеников', ['/site/index/#reviews'])?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
                    <div class="fh5co-footer-widget">
                        <h3>Контакты</h3>
                        <p>
                            <a href="mailto:n.shamil@mail.ru">n.shamil@mail.ru</a> <br>
                            г. Ташкент, Юнусабадский район,  <br>
                            ул. Ш. Рашидова 16, бизнес центр "Poytaht".<br>
                            <a href="tel:+998977370507">+99897 737-05-07</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
                    <div class="fh5co-footer-widget">
                        <h3>Мы в социальных сетях</h3>
                        <ul class="fh5co-social mb-20">
                            <li><?= Html::a('<i class="icon-facebook"></i>', Url::to('https://www.facebook.com/webacademy.uz/'), ['target' => '_blank'])?></li>
                            <li><?= Html::a('<i class="icon-instagram"></i>', Url::to('https://www.instagram.com/webacademy.uz/'), ['target' => '_blank'])?></li>
                            <li><?= Html::a('<i class="icon-vk"></i>', Url::to('https://vk.com/webacademy_uz/'), ['target' => '_blank'])?></li>
                        </ul>
                    </div>
                    <div class="ya_counter">
                        <!-- Yandex.Metrika informer --> <a href="https://metrika.yandex.ru/stat/?id=41315769&amp;from=informer" target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/41315769/3_0_FFFFFFFF_FFFFFFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="41315769" data-lang="ru" /></a> <!-- /Yandex.Metrika informer --> <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter41315769 = new Ya.Metrika({ id:41315769, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/41315769" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
                    </div>
                </div>
            </div>

        </div>
        <div class="fh5co-copyright animate-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="fh5co-left"><small>Курсы по созданию сайтов в Ташкенте.</small></p>
                        <p class="fh5co-right"><small class="fh5co-right">&copy; 2016-2017. Все права защищены.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END #fh5co-footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>