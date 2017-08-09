<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="fh5co-hero" class="js-fullheight" style="background-image: url(/images/hero_bg.jpg);" data-next="yes">
    <div class="container">
        <div class="fh5co-intro js-fullheight">
            <div class="fh5co-intro-text">
                <div class="container site-signup margin-t-50">
                    <p>Заполните форму регистрации:</p>
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'layout' => 'horizontal',
                        'fieldConfig' => [
                            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                            'labelOptions' => ['class' => 'col-lg-1 control-label'],
                        ],
                    ]); ?>
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Логин') ?>
                        <?= $form->field($model, 'email')->textInput()->label('Email') ?>
                        <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>
                        <div class="form-group">
                            <div class="col-lg-offset-1 col-lg-11">
                                <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>
                            </div>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>