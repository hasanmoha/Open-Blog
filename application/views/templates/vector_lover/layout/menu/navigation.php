<ul>
	<?php if (($navigation = $this->navigation_library->get_navigation())): ?>
		<?php foreach ($navigation as $navigation_item): ?>
			<li><a href="<?php echo ($navigation_item['external'] == 0) ? site_url($navigation_item['url']) : $navigation_item['url']; ?>" title="<?php echo $navigation_item['description']; ?>"><?php echo $navigation_item['title']; ?></a></li>
		<?php endforeach; ?>
	<?php endif; ?>		
</ul>