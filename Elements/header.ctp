<div class="navbar navbar-default navbar-fixed-top">
	 <div class="container">
		<div class="navbar-header">
			<?php echo $this->Html->link(Configure::read('Site.title'), '/', array('class' => 'navbar-brand')); ?>
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>		
				
		<div class="navbar-collapse collapse" id="navbar-main" style="height: 0px; ">
					<?php
						echo $this->Custom->menu('main', array('dropdown' => true));
					?>
					<?php if ($this->Session->read('Auth.User.id')): ?>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">
								<?php echo sprintf(__("You are logged in as: %s"), $this->Session->read('Auth.User.username')); ?>
							</a>
						</li>
						<li>
							<?php echo $this->Html->link(__("Log out"), array('plugin' => 'users', 'controller' => 'users', 'action' => 'logout')); ?>
						</li>
					</ul>
					<?php endif; ?>
				
			
		</div>
	</div>	
</div>

