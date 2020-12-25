<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<header>
    <h1><?php $this->title() ?></h1>
</header>
<article>
    <?php $this->content(); ?>

    <ul class="page-navigator">
        <li>Prev: <?php $this->thePrev('%s','NULL'); ?></li>
        <li>Next: <?php $this->theNext('%s','NULL'); ?></li>
    </ul>
</article><!-- end #main-->

<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
