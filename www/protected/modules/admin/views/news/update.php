<?php
/* @var $this NewsController */
/* @var $model News */

$this->menu=array(
	array('label'=>'Manage News', 'url'=>array('index')),
	array('label'=>'Create News', 'url'=>array('create'))
);
?>

<h1>Update News <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>