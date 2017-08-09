<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AdminAsset;
use yii\helpers\Url;

AdminAsset::register($this);
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
<body>
<?php $this->beginBody() ?>
<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

    <!--
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag
    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    <?= Html::img('@web/img/logo-75.png')?>
                </a>
            </div>
            <ul class="nav">
                <li class="active"><?= Html::a('<i class="pe-7s-graph"></i> Основные показатели', ['default/index'])?></li>
                <li><?= Html::a('<i class="pe-7s-user"></i> Пользователи', ['user/index'])?></li>
                <li><?= Html::a('<i class="pe-7s-note2"></i> Список курсов', ['courses/index'])?></li>
                <li><?= Html::a('<i class="pe-7s-paper"></i> Отзывы', ['reviews/index'])?></li>
                <li><?= Html::a('<i class="pe-7s-science"></i> Программы', ['programming/index'])?></li>
                <li><?= Html::a('<i class="pe-7s-marker"></i> Преимущества', ['advantages/index'])?></li>
                <li><?= Html::a('<i class="pe-7s-bell"></i> Контакты', ['contacts/index'])?></li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <p class="pull-left">Добро пожаловать: <b><?= strtoupper(Yii::$app->user->identity->username)?></b></p>
                <p><?= Html::a('Выйти', ['/site/logout'], ['class' => 'pull-right', 'data-method' => 'POST'])?></p>
               <!-- <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret"></b>
                                    <span class="notification">5</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <?php //echo Html::a('<i class="fa fa-search"></i>')?>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">Account</a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>-->
            </div>
        </nav>

        <div class="container-fluid"><?= $content ?></div>
        
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <?= Html::a('На главную', ['/site/index'], ['class' => 'pull-left'])?>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2017 <a href="<?= Url::to('http://webacademy.uz')?>">Вебакадемия</a>
                </p>
            </div>
        </footer>

    </div>
</div>    

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
