<?php

class CallRequestController extends FrontController
{
    public function filters() {
        return array(
            'ajaxOnly + create',
        );
    }

	public function actionCreate() {
		$model = new CallRequest;

        if(isset($_POST['CallRequest'])) {
        	if (isset($_POST['email']) && ! empty($_POST['email'] ))
        		die(); 
	        $model->attributes=$_POST['CallRequest'];
	        if($model->validate())
	        {
	        	$model->save();
	        	
	        	$message = 'Имя: '.$model->name.'<br />';
	        	$message = 'Телефон: '.$model->phone.'<br />';
	        	mail(Yii::app()->config->get('admin.email'), 'Заказ звонка', $message);

	           	echo 'Спасибо, мы свяжемся с Вами в скором времени.';
	           	Yii::app()->end();
	        }
	    }
	    Yii::app()->clientScript->scriptMap=array('jquery.yiiactiveform.js'=>false,'jquery.js'=>false,);
	    $this->render('_form',array('model'=>$model));
	}
}
