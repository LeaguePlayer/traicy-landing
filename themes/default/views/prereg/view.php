<?php
$this->breadcrumbs=array(
	'Preregs'=>array('index'),
	$model->name,
);

<h1>View Prereg #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		'phone',
		'company',
		'count',
		'isAdvice',
		'isSubscribe',
		'node_id',
		'status',
		'sort',
		'create_time',
		'update_time',
	),
)); ?>
