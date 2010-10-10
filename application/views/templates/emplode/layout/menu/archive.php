<div class="box">
	<div class="box_title"><?php echo lang('archives');?></div>
	<div class="box_content">
		<ul>
			<?php if (($archive = $this->archive_library->get_archive())):  ?>
				<?php foreach ($archive as $archive_item): ?>
					<li><a href="<?php echo archive_url($archive_item['url']); ?>"><?php echo $archive_item['date_posted']; ?> (<?php echo $archive_item['posts_count']; ?>)</a></li>
				<?php endforeach; ?>
			<? endif; ?>
		</ul>
	</div>
</div>