<div class="mates form">
	<?= $this->Form->create($mate) ?>
	<fieldset>
		<legend><?= __('Add mate') ?></legend>
		<?= $this->Form->input('matename') ?>
		<?= $this->Form->input('password') ?>
		<?= $this->Form->input('role', [
		'options' => ['admin' => 'Admin', 'mate' => 'mate']
		]) ?>
	</fieldset>
	<?= $this->Form->button(__('Submit')); ?>
	<?= $this->Form->end() ?>
</div>
