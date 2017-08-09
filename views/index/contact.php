<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
?>
<article class="col-xs-12 col-lg-6">
    <div class="row margin-null">
        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
        <div class="alert alert-success">
            Вы успешно подписались на рассылку.
        </div>
        <?php else: ?>
            <?php $form = ActiveForm::begin([
                'id' => 'contact-form', 
                'options' => ['class' => 'form-horizontal'], 
                'fieldConfig' => [ 
                    'template' => "<div class=\"col-lg-3\">{label}</div>\n<div class=\"col-lg-9\">{input}</div>\n<div class=\"col-lg-12 col-lg-offset-3 \">{error}</div>"
                ],
            ]); ?>
            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'email') ?>

            <div class="form-group">
                <?= Html::submitButton('Отправить сообщение', ['class' => 'btn btn-primary waves-effect btn-color-orange btn-color-orange-long', 'name' => 'contact-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        <?php endif; ?>
    </div>
</article>