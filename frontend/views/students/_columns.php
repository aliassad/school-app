<?php
use yii\helpers\Url;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
         [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'id',
     ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'name',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'father_name',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'cnic',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'rollno',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'gender',
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'address',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'phone',
    // ],

    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'class_id',
        'value' => function ($data) {
            $class = \app\models\Classes::find()->where(['id' => $data['class_id']])->one();
            return ($class == null)? null:$class->getAttribute('name');
        },
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'class_medium',
    // ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'session_id',
        'value' => function ($data) {
            $session = \app\models\Session::find()->where(['id' => $data['session_id']])->one();
            return ($session == null)? null:$session->getAttribute('name');
        },
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'created_at',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   