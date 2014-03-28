<?php
$x ="D:/WAMP/WWW/svnd3sc/d3sc/Lib/ScoreFrame";
/*
$arr =get_files($x);
echo "<pre>";
print_r($arr);
echo  "</pre>";
*/
rrmdir($x);

 function rrmdir($dir) { 
   if (is_dir($dir)) { 
     $objects = scandir($dir); 
     foreach ($objects as $object) { 
       if ($object != "." && $object != "..") { 
        // if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object); 
		echo $object;
       } 
     } 
     reset($objects); 
    // rmdir($dir); 
   } 
 } 


/**
 * 获取当前目录及子目录下的所有文件
 * @param string $dir 路径名
 * @return array 所有文件的路径数组
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
 
            /**********/
            if(is_file($filename)) {
                $files[] = $filename;
            }else {
                $files = array_merge($files, get_files($filename));
            }
            /************/
           
			/**  
			 *  感觉上面的注释内的代码可以这样写->测试了下输出也是一样的
			 *  $files = array_merge($files, get_files($filename));
			 *  
			 */

        }
    }
    $d->close();
    return $files;
}

