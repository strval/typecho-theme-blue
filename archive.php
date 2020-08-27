<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <header>
        <h1><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h1>
    </header>
    <article>
        <?php if ($this->have()): ?>
        <ul>
    	<?php while($this->next()): ?>
            <li>
                <span><?php $this->date('Y/m/d'); ?></span>
                <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
            </li>
    	<?php endwhile; ?>
        </ul>
        <?php else: ?>
            <h2><?php _e('没有找到内容'); ?></h2>
        <?php endif; ?>

        <?php $this->pageNav('Prev', 'Next'); ?>
    </article><!-- end #main -->

	<?php $this->need('footer.php'); ?>
