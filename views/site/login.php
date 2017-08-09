<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="fh5co-hero" class="js-fullheight" style="background-image: url(/images/hero_bg.jpg);" data-next="yes">
    <div class="container">
        <div class="fh5co-intro js-fullheight">
            <div class="fh5co-intro-text">
                <div class="container site-login margin-t-50">
                    <div id="form-container">
                        <p>Введите логин и пароль:</p>
                        <?php
                        $form = ActiveForm::begin([
                                    'id' => 'login-form',
                                    'layout' => 'horizontal',
                                    'fieldConfig' => [
                                        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
                                    ],
                        ]);
                        ?>
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Логин') ?>
                        <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>
                        <?=
                        $form->field($model, 'rememberMe')->checkbox([
                            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        ])->label('Запомнить меня')
                        ?>
                        <div class="form-group">
                            <div class="col-lg-offset-1 col-lg-11">
                        <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                            </div>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
