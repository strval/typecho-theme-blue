<?php
/**
 * 分类页面
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
$this->widget('Widget_Metas_Category_List')->to($categories);
?>

<header>
	<h1><?php $this->title() ?></h1>
</header>

<article>
<ul>

<?php while($categories->next()): ?>
    <li><a href="<?php echo $categories->permalink ?>"><?php echo $categories->name ?></a></li>
<?php endwhile; ?>

</ul>
</article>

<?php
$this->need('footer.php');
?>
