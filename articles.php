<?php
/**
 * 归档页面
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($articles);

// 初始化年、月、是否存在文章等参数,方便后面构建html标签
$year   = 0;
$month  = 0;
$has    = 0;

// 构建最外层的div标签
$html   = '<div id="archives">';

// 循环获取文章详情并构建html标签
while($articles->next()) {
    // 标记是否存在文章,为了构建最后的结束标签做铺垫
    if ($has == 0) $has = 1;

    // 拿到当前数据的年、月方便与上一条数对比,做html标签结构
    $_year  = date('Y', $articles->created);
    $_month = date('m', $articles->created);

    // 如果跳年、跳月则补上结束标签(排除了首次循环),最后一条数据是不会满足这个条件的,得在循环结束后补上结束标签
    if ($month != $_month && $month > 0) $html .= '</ul></li>';
    if ($year != $_year && $year > 0) $html .= '</ul>';

    // 首次循环或跳年将满足这个条件
    if ($year != $_year) {
        $year = $_year;
        $html .= '<h3 class="al_year">' . $year . ' 年</h3>';
        $html .= '<ul class="al_mon_list">';
    }

    // 首次循环或跳月将满足这个条件
    if ($month != $_month) {
        $month = $_month;
        $html .= '<li><span class="al_mon">' . $month . ' 月</span>';
        $html .= '<ul class="al_post_list">';
    }

    // 内容标签
    // $html .= '<li>' . date('d日: ', $articles->created) . '<a href="' . $articles->permalink . '">' . $articles->title . '</a> <em>(' . $articles->commentsNum . ')</em></li>';
    $html .= '<li>' . date('d日: ', $articles->created) . '<a href="' . $articles->permalink . '">' . $articles->title . '</a></li>';
}

// 构建最后的结束标签
if ($has == 1) {
    $html .= '</ul></li></ul></div>';
} else {
    $html .= '</div>';
}

echo $html;
$this->need('footer.php');
