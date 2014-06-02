<?php

class QuestionController extends FrontController
{

    public function filters() {
        return array(
            'ajaxOnly + create',
        );
    }

	public function actionCreate() {
		$model = new Question;

        if(isset($_POST['Question'])) {
        	if (isset($_POST['email']) && ! empty($_POST['email'] ))
        		die(); 
	        $model->attributes=$_POST['Question'];
	        if($model->validate())
	        {
	        	$model->save();
	        	
	        	$message = '';
	        	$message .= 'Имя: '.$model->name.'<br />';
	        	$message .= 'Телефон: '.$model->phone.'<br />';
	        	$message .= 'E-mail: '.$model->email.'<br />';
	        	$message .= 'Текст: '.$model->text.'<br />';
	        	mail(Yii::app()->config->get('admin.email'), 'Вопрос', $message);

	           	echo 'ok';
	           	Yii::app()->end();
	        }
	    }
	    Yii::app()->clientScript->scriptMap=array('jquery.yiiactiveform.js'=>false,'jquery.js'=>false,);
	    $this->renderPartial('_form',array('model'=>$model));
	}

}
