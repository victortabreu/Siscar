<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CaronasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="caronas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'local_saida') ?>

    <?= $form->field($model, 'local_destino') ?>

    <?= $form->field($model, 'preco') ?>

    <?= $form->field($model, 'contato') ?>

    <?php // echo $form->field($model, 'data_saida') ?>

    <?php // echo $form->field($model, 'user_fk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
