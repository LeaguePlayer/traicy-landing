<?php

/**
* This is the model class for table "{{subscribe}}".
*
* The followings are the available columns in table '{{subscribe}}':
    * @property integer $id
    * @property string $email
    * @property integer $node_id
    * @property integer $status
    * @property integer $sort
    * @property string $create_time
    * @property string $update_time
*/
class Subscribe extends Material
{
    public function tableName()
    {
        return '{{subscribe}}';
    }


    public function rules()
    {
        return array(
            array('node_id, status, sort', 'numerical', 'integerOnly'=>true),
            array('email', 'length', 'max'=>255),
            array('email', 'required'),
            array('email', 'email'),
            array('create_time, update_time', 'safe'),
            // The following rule is used by search().
            array('id, email, node_id, status, sort, create_time, update_time', 'safe', 'on'=>'search'),
        );
    }


    public function relations()
    {
        return array(
        );
    }


    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'email' => 'E-mail',
            'node_id' => 'Ссылка на раздел',
            'status' => 'Статус',
            'sort' => 'Вес для сортировки',
            'create_time' => 'Дата создания',
            'update_time' => 'Дата последнего редактирования',
        );
    }


    public function behaviors()
    {
        return CMap::mergeArray(parent::behaviors(), array(
			'CTimestampBehavior' => array(
				'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'create_time',
                'updateAttribute' => 'update_time',
                'setUpdateOnCreate' => true,
			),
        ));
    }

    public function search()
    {
        $criteria=new CDbCriteria;
		$criteria->compare('id',$this->id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('node_id',$this->node_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('sort',$this->sort);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
        $criteria->order = 'sort';
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }


}
