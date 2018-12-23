<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CaronasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Caronas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caronas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'local_saida',
            'local_destino',
            'preco',
            'contato',
            //'data_saida',
            //'user_fk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
