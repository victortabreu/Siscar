<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usermodel */

$this->title = 'Cadastrar Usuário';
$this->params['breadcrumbs'][] = ['label' => 'Usermodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usermodel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
