<?php
	echo $this->Form->create('Node', array('url' => array('admin' => false, 'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'search', 'class' => 'form-search')));
	$this->Form->unlockField('q');
	echo $this->Form->input('q', array(
		'label' => false,
		'class' => 'form-control',
		'placeholder' => __('Search'),
		'div' => 'input-group',
		'tooltip' => array(
			'data-title' => __('Search'),
			'data-placement' => 'left',
		),
		'after' => '<span class="input-group-btn">'.$this->Form->button('Search', array(
			'class' => 'btn btn-info',
		)).'</span>'
	));
	echo $this->Form->end();
?>
