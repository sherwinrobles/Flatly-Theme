<?php
if (empty($options)) {
	$options = array();
}

if(!empty($menu['threaded'])){
	echo $this->Custom->nestedLinks($menu['threaded'], $options);
}	