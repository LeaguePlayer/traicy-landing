<?php

class PreregController extends FrontController
{
    public function filters() {
        return array(
            'ajaxOnly + create',
        );
    }

	public function actionCreate() {
		$model = new Prereg;

        if(isset($_POST['Prereg'])) {
        	if (isset($_POST['email']) && ! empty($_POST['email'] ))
        		die(); 
	        $model->attributes=$_POST['Prereg'];
	        if($model->validate())
	        {
	        	$model->save();
	        	
	        	$message = '';
	        	$message .= 'Имя: '.$model->name.'<br />';
	        	$message .= 'E-mail: '.$model->email.'<br />';
	        	$message .= 'Телефон: '.$model->phone.'<br />';
	        	if ($model->company) {
	        		$message .= 'Компания: '.$model->company.'<br />';
	        	}
	        	if ($model->count) {
	        		$message .= 'Количество участников: '.$model->count.'<br />';
	        	}
	        	if ($model->isAdvice) {
	        		$message .= 'Да, мне нужен совет по проезду и гостинице.'.'<br />';
	        	}
	        	else {
	        		$message .= 'Нет, мне не нужен совет по проезду и гостинице.'.'<br />';
	        	}
	        	if ($model->isSubscribe) {
	        		$message .= 'Да, мне интересны новости и акции по этому мероприятию'.'<br />';
	        	}
	        	else {
	        		$message .= 'Нет, мне не интересны новости и акции по этому мероприятию'.'<br />';
	        	}
	        	mail(Yii::app()->config->get('admin.email'), 'Предварительная регистрация', $message);

	           	echo 'ok';
	           	Yii::app()->end();
	        }
	    }
	    Yii::app()->clientScript->scriptMap=array('jquery.yiiactiveform.js'=>false,'jquery.js'=>false,);
	    $this->render('_form',array('model'=>$model));
	}
}
