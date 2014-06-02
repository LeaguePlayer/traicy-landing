<?php $form=$this->beginWidget('CActiveForm', array(
'id'=>'question-form',
'action'=>Yii::app()->createUrl('//question/create'),

'enableAjaxValidation'=>false,)); ?>
 
    <a href="#" class="close"></a>
    <h2>Есть вопрос?</h2>
 
    <?php echo CHtml::hiddenField('email') ?>

    <div class="row">
        <?php echo $form->textField($model,'name', array('placeholder' => 'Имя*')) ?>
    </div>

    <div class="row">
        <?php echo $form->emailField($model,'email', array('placeholder' => 'E-mail*')) ?>
    </div>
 
    <div class="row">
        <?php echo $form->textField($model,'phone', array('placeholder' => 'Телефон*')) ?>
    </div>
 
    <div class="row">
        <?php echo $form->textArea($model,'text', array('placeholder' => 'Вопрос*')) ?>
    </div>
  
    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <? echo CHtml::submitButton('Отправить', array(
            'ajax'=>array(
                'type'=>'POST',
                'url'=>Yii::app()->createUrl('question/create'),
                'success'=>'function(data) {
                    $("#question-form").html(data);
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
