<?php
/* @var $this UserController */
/* @var $model User */

$this->menu=array(
    array('label'=>'List User', 'url'=>array('index')),
    array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
); ?>

<h1>Change password #<?php echo $model->id; ?></h1>

<?php
    echo CHtml::form();
    echo CHtml::passwordField('password');
    echo CHtml::submitButton('Update password');
    echo CHtml::endForm();
?>