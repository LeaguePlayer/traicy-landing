<?php
/* @var $this RecommendationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recommendations',
);

$this->menu=array(
	array('label'=>'Create Recommendation', 'url'=>array('create')),
	array('label'=>'Manage Recommendation', 'url'=>array('admin')),
);
?>

<h1>Recommendations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
