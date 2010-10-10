<?php foreach ($posts as $post): ?>
	<div class="post">
		<h2><a href="<?php echo post_url($post['url_title'], $post['date_posted']);?>"><?php echo $post['title'];?></a> <?php if ($post['sticky'] == 1): ?> <img src="<?php echo base_url()?>application/views/admin/static/images/icons/sticky.gif" /> <?php endif; ?></h2>
		<div class="descr"><?php echo strftime('%B %d, %Y', strtotime($post['date_posted']));?> <?php echo lang('by');?> <?php echo $post['display_name'];?></div>
		<?php echo $post['excerpt'];?>
		
		<?php if ($post['content']): ?>
			<br /><br /><a href="<?php echo post_url($post['url_title'], $post['date_posted']);?>"><?php echo lang('read_more');?></a><br /><br />
		<?php endif; ?>
		<p class="info">
			<?php if ($links = $this->system_library->generate_social_bookmarking_links(post_url($post['url_title'], $post['date_posted']), $post['title'])): ?>
				<?php echo lang('add_to'); ?> <?php echo $links; ?><br />
			<?php endif; ?>
			<?php echo lang('posted_in');?> <?php echo categories_url($post['categories']); ?> | <a href="<?php echo post_url($post['url_title'], $post['date_posted']);?>#comments"><?php echo $post['comment_count'];?> <?php echo lang('comments');?> »</a>
		</p>
	</div>
<?php endforeach; ?>