<h3><?php echo lang('archives'); ?></h3>

<ul class="sidemenu">
	<?php if (($archive = $this->archive_library->get_archive())): ?>
		<?php foreach ($archive as $archive_item): ?>
			<li><a href="<?php echo archive_url($archive_item['url']); ?>"><?php echo $archive_item['date_posted']; ?></a> (<?php echo $archive_item['posts_count']; ?>)</li>
		<?php endforeach; ?>
	<?php endif; ?>			
</ul>