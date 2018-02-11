<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Students */
?>
<div class="students-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'father_name',
            'cnic',
            'rollno',
            'gender',
            'address:ntext',
            'phone',
            [
                'label' => 'Class',
                'value' => ((\app\models\Classes::find()->where(['id'=> $model->class_id])->one()))?(\app\models\Classes::find()->where(['id'=> $model->class_id])->one())->getAttribute('name'):null
            ],
            'class_medium',
             [
                    'label' => 'Session',
                 'value' => ((\app\models\Session::find()->where(['id'=> $model->session_id])->one()))?(\app\models\Classes::find()->where(['id'=> $model->session_id])->one())->getAttribute('name'):null
            ],
            'created_at',
        ],
    ]) ?>

</div>
