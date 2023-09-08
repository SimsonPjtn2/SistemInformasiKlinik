<?php
/* @var $this ObatController */
/* @var $model Obat */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_obat'); ?>
		<?php echo $form->textField($model,'id_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_obat'); ?>
		<?php echo $form->textField($model,'nama_obat',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'petunjuk_pemakaian'); ?>
		<?php echo $form->textField($model,'petunjuk_pemakaian',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kandungan'); ?>
		<?php echo $form->textField($model,'kandungan',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->