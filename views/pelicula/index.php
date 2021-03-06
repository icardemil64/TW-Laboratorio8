<?php

use yii\helpers\Html;
use yii\grid\GridView;
$temp = Yii::$app->getRequest()->getQueryParam('idp');
/* @var $this yii\web\View */
/* @var $searchModel app\models\PeliculaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peliculas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelicula-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pelicula', ['create', 'temp' => $temp], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idPelicula',
            'titulo',
            'duracion',
            'idioma',
            'estreno',
            //'Director_idDirector',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
