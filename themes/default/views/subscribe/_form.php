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
            'id' => $formId.'b',
            'name' => $formId.'b',
        )); ?>
        <script type="text/javascript">
            jQuery('body').on('click','#<?= $formId."b";?>',function(){jQuery.ajax({'type':'POST','url':'/subscribe/create','success':function(data) {
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
    </div>

 
<?php $this->endWidget(); ?>