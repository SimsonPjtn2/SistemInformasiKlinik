<?php
/* @var $this ObatController */
/* @var $model Obat */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'obat-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_obat'); ?>
		<?php echo $form->textField($model,'id_obat'); ?>
		<?php echo $form->error($model,'id_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_obat'); ?>
		<?php echo $form->textField($model,'nama_obat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'petunjuk_pemakaian'); ?>
		<?php echo $form->textField($model,'petunjuk_pemakaian',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'petunjuk_pemakaian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kandungan'); ?>
		<?php echo $form->textField($model,'kandungan',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'kandungan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->