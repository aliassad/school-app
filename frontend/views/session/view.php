<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Session */
?>
<div class="session-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'created_at',
        ],
    ]) ?>

</div>
