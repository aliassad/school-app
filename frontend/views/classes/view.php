<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Classes */
?>
<div class="classes-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'fee',
            'created_at',
        ],
    ]) ?>

</div>
