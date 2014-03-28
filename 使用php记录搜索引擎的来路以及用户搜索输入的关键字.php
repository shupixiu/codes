<?php
function recordUrlKeywords($url) {
    $spider = array('baidu.'=>'百度', 'google.'=>'谷歌', 'soso.'=>'搜搜', 'sogou.'=>'搜狗', 'www.so.com'=>'360');
    $q = array('百度'=>'/wd=([^&]*)/i', '谷歌'=>'/q=([^&]*)/i', '360'=>'/q=(.*)/i', '搜狗'=>'/query=([^&]*)/i', '搜搜'=>'/w=([^&]*)/i');
    // http://3aj.cn/
    foreach($spider as $k=>$v) {
        if (strpos($url, $k)) {
            preg_match("{$q[$v]}", $url, $b);
            if (($v=='搜搜') || ($v=='搜狗')) {
                $keywords = iconv('GBK', 'UTF-8', urldecode($b[1]));
            } else {
                $keywords = urldecode($b[1]);
            }
                echo "来自{$v}的关键字:".$keywords;
        }
    }
}
$url = $_SERVER['HTTP_REFERER'];  // 获取网站来源地址
recordUrlKeywords($url);
?>