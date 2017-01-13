<?php
/* @var $this UserController */
/* @var $model User */

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        'id'=>array(
            'name'=>'id',
            'headerHtmlOptions'=>array('width'=>30),
        ),
		'username',
		'email',
		'password',
		'role' => array(
            'name' => 'role',
            'value' => '($data->role==1)?"User":"Admin"',
            'filter' => array(2=>"Admin", 1=>"User"),
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
