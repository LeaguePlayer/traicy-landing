<?php $form=$this->beginWidget('CActiveForm', array(
'id'=>$formId,
'action'=>Yii::app()->createUrl('//subscribe/create'),

'enableAjaxValidation'=>false,)); ?>
 
    <div class="title">
        Хотите получить дополнительные <br/ >материалы с мероприятия? <br/><em>Оставьте ваш e-mail</em>
    </div>
    <div class="form">
        <div class="column"><?php echo $form->emailField($model,'email', array('placeholder' => 'E-mail*')) ?></div>
        <div class="column">
        <? echo CHtml::submitButton('Отправить', array(
            'ajax'=>array(
                'type'=>'POST',
                'url'=>Yii::app()->createUrl('//subscribe/create'),
                'success'=>'function(data) {
                    if (data == "ok") {
                        data = "<div class=\'title\'>Вы подписаны на дополнительные материалы.</div>";
                    }
                    $("#'.$formId.'").html(data);
                }',
            )
        )); ?>
        </div>
    </div>

 
<?php $this->endWidget(); ?>