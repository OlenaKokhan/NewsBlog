<?php
/* @var $this NewsController */

$this->breadcrumbs=array(
	$category->title,
);
?>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>News::findAllByCategoryId($category->id),
    'itemView'=>'_viewNews',
)); ?>