<?php $form=$this->beginWidget('CActiveForm', array(
'id'=>$formId,
'action'=>Yii::app()->createUrl('//prereg/create'),

'enableAjaxValidation'=>false,)); ?>
 
    <a href="#" class="close"></a>
    <h2>Предварительная регистрация</h2>
 
    <?php echo CHtml::hiddenField('email') ?>

    <div class="row">
        <?php echo $form->textField($model,'name', array('placeholder' => 'Имя*')) ?>
    </div>
 
    <div class="row columns">
        <div class="column"><?php echo $form->textField($model,'email', array('placeholder' => 'E-mail*')) ?></div>
        <div class="column"><?php echo $form->textField($model,'phone', array('placeholder' => 'Телефон*')) ?></div>
    </div>

    <div class="row">
        <?php echo $form->textField($model,'company', array('placeholder' => 'Компания')) ?>
    </div>

    <div class="row">
        <?php echo $form->numberField($model,'count', array('placeholder' => 'Количество участников', 'min' => 0)) ?>
    </div>

    <div class="row">
        <p>
            <?php echo $form->checkBox($model,'isAdvice') ?> <?php echo $form->label($model,'isAdvice') ?>
        </p>
        <p>
            <?php echo $form->checkBox($model,'isSubscribe', array('checked' => 'checked')) ?> <?php echo $form->label($model,'isSubscribe') ?>
        </p>
    </div>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <? echo CHtml::submitButton('Отправить', array(
            'ajax'=>array(
                'type'=>'POST',
                'url'=>Yii::app()->createUrl('//prereg/create'),
                'success'=>'function(data) {
                    if (data == "ok") {
                        data = "Спасибо, мы свяжемся с Вами в скором времени.";
                        setTimeout(
                          function() 
                          {
                            $(".overlay").fadeOut(500);
                            $(".modal").fadeOut(500);
                          }, 3000);
                    }
                    $("#'.$formId.'").html(data);
                }',
            )
        )); ?>
    </div>
 
<?php $this->endWidget(); ?>