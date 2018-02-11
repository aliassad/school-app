<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string $name
 * @property string $father_name
 * @property string $cnic
 * @property string $rollno
 * @property string $gender
 * @property string $address
 * @property string $phone
 * @property int $class_id
 * @property string $class_medium
 * @property int $session_id
 * @property string $created_at
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'father_name', 'cnic', 'rollno', 'gender', 'address', 'phone', 'class_medium'], 'required'],
            [['gender', 'address', 'class_medium'], 'string'],
            [['class_id', 'session_id'], 'integer'],
            [['created_at'], 'safe'],
            [['name', 'father_name', 'cnic', 'rollno', 'phone'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'father_name' => 'Father Name',
            'cnic' => 'Cnic',
            'rollno' => 'Rollno',
            'gender' => 'Gender',
            'address' => 'Address',
            'phone' => 'Phone',
            'class_id' => 'Class',
            'class_medium' => 'Class Medium',
            'session_id' => 'Session',
            'created_at' => 'Created At',
        ];
    }
}
