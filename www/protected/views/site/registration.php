<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Registration';
$this->breadcrumbs=array(
	'Registration',
);
?>

<h1>Registration</h1>

<?php if(Yii::app()->user->hasFlash('registration')): ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('registration'); ?>
    </div>

<?php else: ?>

<p>Please fill out the following form:</p>

<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'user-form',
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'username'); ?>
        <?php echo $form->textField($model,'username',array('size'=>40,'maxlength'=>50)); ?>
        <?php echo $form->error($model,'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email',array('size'=>40,'maxlength'=>60)); ?>
        <?php echo $form->error($model,'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password',array('size'=>40,'maxlength'=>50)); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <?php if(CCaptcha::checkRequirements()): ?>
        <div class="row">
            <?php echo $form->labelEx($model,'verifyCode'); ?>
            <div>
                <?php $this->widget('CCaptcha'); ?>
                <?php echo $form->textField($model,'verifyCode'); ?>
            </div>
            <div class="hint">Please enter the letters as they are shown in the image above.
                <br/>Letters are not case-sensitive.</div>
            <?php echo $form->error($model,'verifyCode'); ?>
        </div>
    <?php endif; ?>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Registration'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
<?php endif; ?>