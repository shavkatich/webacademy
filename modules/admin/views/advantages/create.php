<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Advantages */

$this->title = Yii::t('app', 'Create Advantages');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Advantages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advantages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
