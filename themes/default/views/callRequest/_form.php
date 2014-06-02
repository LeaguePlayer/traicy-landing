<?php $form=$this->beginWidget('CActiveForm', array(
'id'=>$formId,
'action'=>Yii::app()->createUrl('//callRequest/create'),

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
            'id' => $formId.'b',
            'name' => $formId.'b',
        )); ?>
        <script type="text/javascript">
            jQuery('body').on('click','#<?= $formId."b";?>',function(){jQuery.ajax({'type':'POST','url':'/callRequest/create','success':function(data) {
                    if (data == "ok") {
                        data = "Спасибо, мы свяжемся с Вами в скором времени.";
                        setTimeout(
                          function() 
                          {
                            $(".overlay").fadeOut(500);
                            $(".modal").fadeOut(500);
                          }, 3000);
                    }
                    $("#<?= $formId;?>").html(data);
                },'cache':false,'data':jQuery(this).parents("form").serialize()});return false;});

        </script>
    </div>
 
<?php $this->endWidget(); ?>