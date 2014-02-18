<?php
//Another simple way to recursively delete a directory that is not empty: 
// $dir 是要删除的目录
 function rrmdir($dir) { 
   if (is_dir($dir)) { 
     $objects = scandir($dir); 
     foreach ($objects as $object) { 
       if ($object != "." && $object != "..") { 
         if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object); 
       } 
     } 
     reset($objects); 
     rmdir($dir); 
   } 
 }
 


 //在上面基础上改写了个遍历目录和文件的方法,这个要比上一次找到的那个遍历好理解
 function bianli($dir) { 
   if (is_dir($dir)) { 
     $objects = scandir($dir); 
     foreach ($objects as $object) { 
       if ($object != "." && $object != "..") { 
        // if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object); 
		echo "<br>";
		echo $object;
		echo "<br>";
		if(filetype($dir."/".$object) == "dir")
		{ 
		  bianli($dir."/".$object);
		}
       } 
     } 
     reset($objects); 
     // rmdir($dir); 
   } 
 } 
 