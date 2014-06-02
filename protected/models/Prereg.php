<?php

/**
* This is the model class for table "{{prereg}}".
*
* The followings are the available columns in table '{{prereg}}':
    * @property integer $id
    * @property string $name
    * @property string $email
    * @property string $phone
    * @property string $company
    * @property integer $count
    * @property integer $isAdvice
    * @property integer $isSubscribe
    * @property integer $node_id
    * @property integer $status
    * @property integer $sort
    * @property string $create_time
    * @property string $update_time
*/
class Prereg extends Material
{
    public function tableName()
    {
        return '{{prereg}}';
    }


    public function rules()
    {
        return array(
            array('count, isAdvice, isSubscribe, node_id, status, sort', 'numerical', 'integerOnly'=>true),
            array('name, email, phone, company', 'length', 'max'=>255),
            array('name, email, phone', 'required'),
            array('email', 'email'),
            array('create_time, update_time', 'safe'),
            // The following rule is used by search().
            array('id, name, email, phone, company, count, isAdvice, isSubscribe, node_id, status, sort, create_time, update_time', 'safe', 'on'=>'search'),
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
            'name' => 'Имя',
            'email' => 'E-mail',
            'phone' => 'Телефон',
            'company' => 'Компания',
            'count' => 'Количество участников',
            'isAdvice' => 'Нужен совет по проезду и гостинице?',
            'isSubscribe' => 'Мне интересны новости и акции по этому мероприятию',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('count',$this->count);
		$criteria->compare('isAdvice',$this->isAdvice);
		$criteria->compare('isSubscribe',$this->isSubscribe);
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
