<?php

class SubscribeController extends FrontController
{
    public function filters() {
        return array(
            'ajaxOnly + create',
        );
    }

	public function actionCreate() {
		$model = new Subscribe;

        if(isset($_POST['Subscribe'])) {
        	if (isset($_POST['email']) && ! empty($_POST['email'] ))
        		die(); 
	        $model->attributes=$_POST['Subscribe'];
	        if($model->validate())
	        {
	        	$model->save();
	        	
	        	$message = 'E-mail: '.$model->email.'<br />';
	        	mail(Yii::app()->config->get('admin.email'), 'Подписка на дополнительные материалы', $message);

	           	echo 'ok';
	           	Yii::app()->end();
	        }
	    }
	    Yii::app()->clientScript->scriptMap=array('jquery.yiiactiveform.js'=>false,'jquery.js'=>false,);
	    $this->renderPartial('_form',array('model'=>$model, 'formId' => md5(rand())));
	}
}
