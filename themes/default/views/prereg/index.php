<?php
/* @var $this PreregController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Preregs',
);

$this->menu=array(
	array('label'=>'Create Prereg', 'url'=>array('create')),
	array('label'=>'Manage Prereg', 'url'=>array('admin')),
);
?>

<h1>Preregs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
