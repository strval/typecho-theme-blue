<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<header>
    <h1>404 - <?php _e('页面没找到'); ?></h1>
</header>
<article>
    <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
    <form method="post">
        <p><input type="text" name="s" class="text" autofocus /></p>
        <p><button type="submit" class="submit"><?php _e('搜索'); ?></button></p>
    </form>
</article><!-- end #content-->

<?php $this->need('footer.php'); ?>
