<div class="nodes">
	<h2><?php echo $title_for_layout; ?></h2>

	<?php
		if (count($nodes) == 0) {
			echo __('No items found.');
		}
	?>

	<?php
		foreach ($nodes as $node):
			$this->Nodes->set($node);
	?>
	<div id="node-<?php echo $this->Nodes->field('id'); ?>" class="node node-type-<?php echo $this->Nodes->field('type'); ?>">
		<h2><?php echo $this->Html->link($this->Nodes->field('title'), $this->Nodes->field('url')); ?></h2>
		<?php
			echo $this->Nodes->info();
			echo $this->Nodes->body();
			echo $this->Nodes->moreInfo();
		?>
	</div>
	<?php
		endforeach;
	?>

	<div class="bs-example">
		<ul class="pagination">
			<li>
				<?php echo $this->Paginator->first('← first'); ?>
			</li>
			<li>
				<?php echo $this->Paginator->prev('← prev'); ?>
			</li>
			<li>
				<?php echo $this->Paginator->numbers(); ?>
			</li>
			<li>	
				<?php echo $this->Paginator->next('next →'); ?>
			</li>
			<li>
				<?php echo $this->Paginator->last('last →'); ?>
			</li>
		</ul>
	</div>
</div>