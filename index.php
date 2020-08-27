<?php
/**
 * 这是 Typecho 系统的一套皮肤
 * 
 * @package Typecho Theme 
 * @author John Doe
 * @version 1.0
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<header>
    <h1><?php $this->options->title() ?></h1>
</header>
<article>
	<ul>
	<?php while($this->next()): ?>
		<li>
			<span><?php $this->date('Y/m/d'); ?></span>
			<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
		</li>
	<?php endwhile; ?>
	</ul>

    <?php $this->pageNav('Prev', 'Next'); ?>
</article><!-- end #main-->

<?php $this->need('footer.php'); ?>
