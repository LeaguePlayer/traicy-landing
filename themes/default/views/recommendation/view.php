<?php
$this->breadcrumbs=array(
	'Recommendations'=>array('index'),
	$model->id,
);

<h1>View Recommendation #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'text',
		'status',
		'sort',
		'create_time',
		'update_time',
	),
)); ?>
