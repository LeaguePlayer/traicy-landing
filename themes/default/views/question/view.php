<?php
$this->breadcrumbs=array(
	'Questions'=>array('index'),
	$model->name,
);

<h1>View Question #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'phone',
		'email',
		'text',
		'node_id',
		'status',
		'sort',
		'create_time',
		'update_time',
	),
)); ?>
