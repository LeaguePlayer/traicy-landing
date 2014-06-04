<?php

class RecommendationController extends FrontController
{
    public function filters() {
        return array(
            'ajaxOnly + create',
        );
    }

	public function actionCreate() {
		$model = new Recommendation;

        if(isset($_POST['Recommendation'])) {
        	if (isset($_POST['email']) && ! empty($_POST['email'] ))
        		die(); 
	        $model->attributes=$_POST['Recommendation'];
	        if($model->validate())
	        {
	        	$model->save();
	        	
	        	$message = 'E-mail: '.$model->email."\r\n";
	        	$message = 'Текс: '.$model->text."\r\n";
	        	mail(Yii::app()->config->get('admin.email'), 'Была отправлена рекомендация', $message);

	        	mail($model->email, 'Вам рекомендуют посетить мероприятие Брайана Трейси', $model->text);

	           	echo 'ok';
	           	Yii::app()->end();
	        }
	    }
	    Yii::app()->clientScript->scriptMap=array('jquery.yiiactiveform.js'=>false,'jquery.js'=>false,);
	    $this->renderPartial('_form',array('model'=>$model, 'formId' => md5(rand())));
	}
}
