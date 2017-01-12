<?php
/* @var $this UserController */
/* @var $model User */

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Change Password', 'url'=>array('password', 'id'=>$model->id)),
);
?>

<h1>Update User <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>