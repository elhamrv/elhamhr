<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $emp_id
 * @property string $name
 * @property string $familly
 * @property string $address
 * @property int $unit_id
 * @property string $email
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unit_id'], 'required'],
            [['unit_id'], 'integer'],
            [['name', 'familly'], 'string', 'max' => 45],
            [['address'], 'string', 'max' => 225],
            [['email'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'emp_id' => Yii::t('app', 'Emp ID'),
            'name' => Yii::t('app', 'Name'),
            'familly' => Yii::t('app', 'Familly'),
            'address' => Yii::t('app', 'Address'),
            'unit_id' => Yii::t('app', 'Unit ID'),
            'email' => Yii::t('app', 'Email'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return EmployeeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EmployeeQuery(get_called_class());
    }
    
    
    public  function model_unit()
    {
       return Unit::findOne($this->unit_id);
    }
}
