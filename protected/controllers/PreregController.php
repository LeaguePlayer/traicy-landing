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
	        	$message .= 'Имя: '.$model->name."\r\n";
	        	$message .= 'E-mail: '.$model->email."\r\n";
	        	$message .= 'Телефон: '.$model->phone."\r\n";
	        	if ($model->company) {
	        		$message .= 'Компания: '.$model->company."\r\n";
	        	}
	        	if ($model->count) {
	        		$message .= 'Количество участников: '.$model->count."\r\n";
	        	}
	        	if ($model->isAdvice) {
	        		$message .= 'Да, мне нужен совет по проезду и гостинице.'."\r\n";
	        	}
	        	else {
	        		$message .= 'Нет, мне не нужен совет по проезду и гостинице.'."\r\n";
	        	}
	        	if ($model->isSubscribe) {
	        		$message .= 'Да, мне интересны новости и акции по этому мероприятию'."\r\n";
	        	}
	        	else {
	        		$message .= 'Нет, мне не интересны новости и акции по этому мероприятию'."\r\n";
	        	}
	        	mail(Yii::app()->config->get('admin.email'), 'Предварительная регистрация', $message);

	           	echo 'ok';
	           	Yii::app()->end();
	        }
	    }
	    Yii::app()->clientScript->scriptMap=array('jquery.yiiactiveform.js'=>false,'jquery.js'=>false,);
	    $this->renderPartial('_form',array('model'=>$model, 'formId' => md5(rand())));
	}
}
