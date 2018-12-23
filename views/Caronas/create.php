<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Caronas */

$this->title = 'Cadastrar nova Carona';
$this->params['breadcrumbs'][] = ['label' => 'Caronas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caronas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
