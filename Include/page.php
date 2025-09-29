<?php
/**
 *-------------------------翻页类----------------------*
 */
class PageClass
{
    private $myde_count;       // 总记录数
    var $myde_size;            // 每页记录数
    private $myde_page;        // 当前页
    private $myde_page_count;  // 总页数
    private $page_url;         // 页面 URL
    private $page_i;           // 起始页
    private $page_ub;          // 结束页
    var $page_limit;

    /**
     * 构造函数
     *
     * @param int $myde_count 总记录数
     * @param int $myde_size 每页记录数
     * @param int $myde_page 当前页
     * @param string $page_url 页面 URL
     */
    function __construct($myde_count = 0, $myde_size = 1, $myde_page = 1, $page_url)
    {
        $this->myde_count = $this->numeric($myde_count);
        $this->myde_size = $this->numeric($myde_size);
        $this->myde_page = $this->numeric($myde_page);
        $this->page_limit = ($this->myde_page * $this->myde_size) - $this->myde_size;

        $this->page_url = $page_url;

        if ($this->myde_page < 1) $this->myde_page = 1;

        if ($this->myde_count < 0) $this->myde_page = 0;

        $this->myde_page_count = ceil($this->myde_count / $this->myde_size);

        if ($this->myde_page_count < 1) $this->myde_page_count = 1;

        if ($this->myde_page > $this->myde_page_count) $this->myde_page = $this->myde_page_count;

        $this->page_i = $this->myde_page - 2;
        $this->page_ub = $this->myde_page + 2;

        if ($this->page_i < 1) {
            $this->page_ub = $this->page_ub + (1 - $this->page_i);
            $this->page_i = 1;
        }

        if ($this->page_ub > $this->myde_page_count) {
            $this->page_i = $this->page_i - ($this->page_ub - $this->myde_page_count);
            $this->page_ub = $this->myde_page_count;

            if ($this->page_i < 1) $this->page_i = 1;
        }
    }

    /**
     * 判断是否为数字
     *
     * @param mixed $id 输入值
     * @return int 返回合法的数字
     */
    private function numeric($id)
    {
        if (strlen($id)) {
            if (!preg_match("/^[0-9]+$/", $id)) { // 替换 ereg() 为 preg_match()
                $id = 1;
            } else {
                $id = substr($id, 0, 11);
            }
        } else {
            $id = 1;
        }
        return $id;
    }

    /**
     * 地址替换
     *
     * @param int $page 页码
     * @return string 替换后的 URL
     */
    private function page_replace($page)
    {
        return str_replace("{page}", $page, $this->page_url);
    }

    /**
     * 首页链接
     *
     * @return string 首页 HTML
     */
    private function myde_home()
    {
        if ($this->myde_page != 1) {
            return "    <a class=\"num\" href=\"" . $this->page_replace(1) . "\" title=\"首页\">首页</a>\n";
        } else {
            return "    <a class=\"num\">首页</a>\n";
        }
    }

    /**
     * 上一页链接
     *
     * @return string 上一页 HTML
     */
    private function myde_prev()
    {
        if ($this->myde_page != 1) {
            return "<a class=\"num\" href=\"" . $this->page_replace($this->myde_page - 1) . "\">上一页</a></li>\n";
        } else {
            return "    <a class=\"num\">上一页</a>\n";
        }
    }

    /**
     * 下一页链接
     *
     * @return string 下一页 HTML
     */
    private function myde_next()
    {
        if ($this->myde_page != $this->myde_page_count) {
            return "    <a class=\"num\" href=\"" . $this->page_replace($this->myde_page + 1) . "\" title=\"下一页\">下一页</a>\n";
        } else {
            return "    <a class=\"num\">下一页</a>\n";
        }
    }

    /**
     * 尾页链接
     *
     * @return string 尾页 HTML
     */
    private function myde_last()
    {
        if ($this->myde_page != $this->myde_page_count) {
            return "    <a class=\"num\" href=\"" . $this->page_replace($this->myde_page_count) . "\" title=\"尾页\">尾页</a>\n";
        } else {
            return "    <a class=\"num\">尾页</a>\n";
        }
    }

    /**
     * 输出分页 HTML
     *
     * @param string $id 分页容器 ID
     * @return string 分页 HTML
     */
    function myde_write($id = 'page')
    {
        $str = "<div id=\"" . $id . "\" class=\"pages\">\n  <ul>\n  ";

        $str .= "  <a>总记录 : " . $this->myde_count . "</a>\n";

        //$str .= "    <a>" . $this->myde_page . "</a>/<a>" . $this->myde_page_count . "</a>\n";

        $str .= $this->myde_home();

        $str .= $this->myde_prev();

        for ($page_for_i = $this->page_i; $page_for_i <= $this->page_ub; $page_for_i++) {
            if ($this->myde_page == $page_for_i) {
                $str .= "    <span class=\"current\">" . $page_for_i . "</span>\n";
            } else {
                $str .= "    <a class=\"prev\" href=\"" . $this->page_replace($page_for_i) . "\" title=\"第" . $page_for_i . "页\">";
                $str .= $page_for_i . "</a>\n";
            }
        }

        $str .= $this->myde_next();
        $str .= $this->myde_last();

        $str .= "  </ul>\n  <div class=\"page_clear\"></div>\n</div>";

        return $str;
    }
}
/*-------------------------实例--------------------------------*
$page = new PageClass(1000, 5, $_GET['page'], '?page={page}'); // 用于动态
$page = new PageClass(1000, 5, $_GET['page'], 'list-{page}.html'); // 用于静态或者伪静态
$page->myde_write(); // 显示
*/
?>