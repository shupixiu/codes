<?php
$x ="D:/WAMP/WWW/svnd3sc/d3sc/Lib/ScoreFrame";
$arr =get_files($x);
echo "<pre>";
print_r($arr);
echo  "</pre>";
/**
 * ��ȡ��ǰĿ¼����Ŀ¼�µ������ļ�
 * @param string $dir ·����
 * @return array �����ļ���·������
 */
function get_files($dir) {
    $files = array();
 
    if (!is_dir($dir)) {
        return $files;
    }
 
    $d = dir($dir);
    while (false !== ($file = $d->read())) {
        if ($file != '.' && $file != '..') {
            $filename = $dir . "/"  . $file;
 
            if(is_file($filename)) {
                $files[] = $filename;
            }else {
                $files = array_merge($files, get_files($filename));
            }
        }
    }
    $d->close();
    return $files;
}

