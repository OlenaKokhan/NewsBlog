<h2>Leave comment</h2>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'comment-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'text'); ?>
        <?php echo $form->textArea($model,'text',array('maxlength'=>255)); ?>
        <?php echo $form->error($model,'text'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Comment'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->