<?php $form=$this->beginWidget('CActiveForm', array(
'id'=>$formId,
'action'=>Yii::app()->createUrl('//prereg/create'),

'enableAjaxValidation'=>false,)); ?>
 

    <?php echo CHtml::hiddenField('email') ?>

    <div class="row">
        <?php echo $form->emailField($model,'email', array('placeholder' => 'Введите E-mail*')) ?>
    </div>
    <div class="row">
        <?php echo $form->textArea($model,'text', array('placeholder' => 'Текст рекомендации')) ?>
    </div>
    <div class="row">
        <div class="row">
        <? echo CHtml::submitButton('Отправить', array(
            'id' => $formId.'b',
            'name' => $formId.'b',
        )); ?>
        <script type="text/javascript">
            jQuery('body').on('click','#<?= $formId."b";?>',function(){jQuery.ajax({'type':'POST','url':'/recommendation/create','success':function(data) {
                    if (data == "ok") {
                        alert('Ваша рекомендация была успешно отправлена.');
                        jQuery.ajax({'type':'POST','url':'/recommendation/create','success':function(data) {
                            $("#<?= $formId;?>").html(data);
                        }});
                    }
                    else {
                        $("#<?= $formId;?>").html(data);
                    }
                },'cache':false,'data':jQuery(this).parents("form").serialize()});return false;});

        </script>
    </div>
    </div>

 
<?php $this->endWidget(); ?>