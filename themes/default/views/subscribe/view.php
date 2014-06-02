<?php
$this->breadcrumbs=array(
	'Subscribes'=>array('index'),
	$model->id,
);

<h1>View Subscribe #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'node_id',
		'status',
		'sort',
		'create_time',
		'update_time',
	),
)); ?>
