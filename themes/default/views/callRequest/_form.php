<?php $form=$this->beginWidget('CActiveForm', array(
'id'=>'callRequest-form',
'action'=>Yii::app()->createUrl('//calLRequest/create'),

'enableAjaxValidation'=>false,)); ?>
 
    <a href="#" class="close"></a>
    <h2>Перезвоните мне</h2>
 
    <?php echo CHtml::hiddenField('email') ?>

    <div class="row">
        <?php echo $form->textField($model,'name', array('placeholder' => 'Имя*')) ?>
    </div>
 
<div class="row">
        <?php echo $form->textField($model,'phone', array('placeholder' => 'Телефон*')) ?>
    </div>
  
    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <? echo CHtml::submitButton('Отправить', array(
            'ajax'=>array(
                'type'=>'POST',
                'url'=>Yii::app()->createUrl('callRequest/create'),
                'success'=>'function(data) {
                    $("#callRequest-form").html(data);
                    setTimeout(
                      function() 
                      {
                        $(".overlay").fadeOut(500);
                        $(".modal").fadeOut(500);
                      }, 3000);
                }',
            )
        )); ?>
    </div>
 
<?php $this->endWidget(); ?>