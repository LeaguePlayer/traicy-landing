<?php
$this->breadcrumbs=array(
	'Call Requests'=>array('index'),
	$model->name,
);

<h1>View CallRequest #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'phone',
		'node_id',
		'status',
		'sort',
		'create_time',
		'update_time',
	),
)); ?>
