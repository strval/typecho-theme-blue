<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article>
    <?php $this->content(); ?>
    <ol class="page-navigator">
        <li>Prev: <?php $this->thePrev('%s','Null'); ?></li>
        <li>Next: <?php $this->theNext('%s','Null'); ?></li>
    </ol>
</article>

<?php $this->need('footer.php'); ?>
