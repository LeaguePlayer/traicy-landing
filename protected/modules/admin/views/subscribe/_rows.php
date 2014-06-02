	<?php echo $form->textFieldControlGroup($model,'email',array('class'=>'span8','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'node_id',array('class'=>'span8')); ?>

	<?php echo $form->dropDownListControlGroup($model, 'status', Subscribe::getStatusAliases(), array('class'=>'span8', 'displaySize'=>1)); ?>
