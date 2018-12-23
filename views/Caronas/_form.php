<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Caronas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="caronas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'local_saida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'local_destino')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preco')->textInput() ?>

    <?= $form->field($model, 'contato')->textInput() ?>

    <?= $form->field($model, 'data_saida')->textInput() ?>

    <?= $form->field($model, 'user_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
