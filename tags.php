<?php
/**
 * 标签页面
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
$this->widget('Widget_Metas_Tag_Cloud', array('sort'=>'count', 'ignoreZeroCount'=>false, 'desc'=>true, 'limit'=>10000))->to($tags);
?>

<article>
<ul>

<?php while($tags->next()): ?>
    <li><a href="<?php echo $tags->permalink ?>"><?php echo $tags->name ?></a></li>
<?php endwhile; ?>

</ul>
</article>

<?php
$this->need('footer.php');
?>
