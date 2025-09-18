<?php
/**
 *-------------------------Page Class----------------------*
 */
class PageClass
{
    private $myde_count;       // Total record count
    var $myde_size;            // Records per page
    private $myde_page;        // Current page
    private $myde_page_count;  // Total pages
    private $page_url;         // Page URL
    private $page_i;           // Start page
    private $page_ub;          // End page
    var $page_limit;

    /**
     * Constructor
     *
     * @param int $myde_count Total record count
     * @param int $myde_size Records per page
     * @param int $myde_page Current page
     * @param string $page_url Page URL
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
     * Check if the value is numeric
     *
     * @param mixed $id Input value
     * @return int Returns a valid number
     */
    private function numeric($id)
    {
        if (strlen($id)) {
            if (!preg_match("/^[0-9]+$/", $id)) { // Replace ereg() with preg_match()
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
     * Page URL replacement
     *
     * @param int $page Page number
     * @return string Replaced URL
     */
    private function page_replace($page)
    {
        return str_replace("{page}", $page, $this->page_url);
    }

    /**
     * First page link
     *
     * @return string First page HTML
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
     * Previous page link
     *
     * @return string Previous page HTML
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
     * Next page link
     *
     * @return string Next page HTML
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
     * Last page link
     *
     * @return string Last page HTML
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
     * Output pagination HTML
     *
     * @param string $id Pagination container ID
     * @return string Pagination HTML
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
/*-------------------------A real example--------------------------------*
$page = new PageClass(1000, 5, $_GET['page'], '?page={page}'); // For dynamic
$page = new PageClass(1000, 5, $_GET['page'], 'list-{page}.html'); // For static or pseudo-static
$page->myde_write(); // Display
*/
?>