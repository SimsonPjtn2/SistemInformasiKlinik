<?php
/* @var $this ObatController */
/* @var $data Obat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_obat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_obat), array('view', 'id'=>$data->id_obat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_obat')); ?>:</b>
	<?php echo CHtml::encode($data->nama_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('petunjuk_pemakaian')); ?>:</b>
	<?php echo CHtml::encode($data->petunjuk_pemakaian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kandungan')); ?>:</b>
	<?php echo CHtml::encode($data->kandungan); ?>
	<br />


</div>