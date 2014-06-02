	<?php echo $form->textFieldControlGroup($model,'name',array('class'=>'span8','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'email',array('class'=>'span8','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'phone',array('class'=>'span8','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'company',array('class'=>'span8','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'count',array('class'=>'span8')); ?>

	<?php echo $form->textFieldControlGroup($model,'isAdvice',array('class'=>'span8')); ?>

	<?php echo $form->textFieldControlGroup($model,'isSubscribe',array('class'=>'span8')); ?>

	<?php echo $form->textFieldControlGroup($model,'node_id',array('class'=>'span8')); ?>

	<?php echo $form->dropDownListControlGroup($model, 'status', Prereg::getStatusAliases(), array('class'=>'span8', 'displaySize'=>1)); ?>
