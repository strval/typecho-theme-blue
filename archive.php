<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article>
	<?php if ($this->have()): ?>
		<ul>
			<?php while($this->next()): ?>
				<li>
					<span><?php $this->date('Y-m-d'); ?></span>
					<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
				</li>
			<?php endwhile; ?>
		</ul>
		<?php $this->pageNav('Prev', 'Next'); ?>
	<?php else: ?>
        <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
	<?php endif; ?>
</article>

<?php $this->need('footer.php'); ?>
