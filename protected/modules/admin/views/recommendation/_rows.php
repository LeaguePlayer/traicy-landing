	<?php echo $form->textFieldControlGroup($model,'email',array('class'=>'span8','maxlength'=>255)); ?>

	<?php echo $form->textAreaControlGroup($model,'text',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->dropDownListControlGroup($model, 'status', Recommendation::getStatusAliases(), array('class'=>'span8', 'displaySize'=>1)); ?>
