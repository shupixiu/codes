 <?php
 /**
  * ��php�ֲ��require_once��ժ���Ĵ���Ƭ��
  * ����Ĳ���˼·�ܺ�
  */
 $start_time = microtime(true);
   
 /*
  * Uncomment one at a time and run test below.
  * sql_servers.inc only contains define() statements.
  */
 
 require ('D:\test.php');
 //require ('../../includes/example.com/code/conf/sql_servers.inc');
 //require_once ('/www/includes/example.com/code/conf/sql_servers.inc');
 //require_once ('../../includes/example.com/code/conf/sql_servers.inc');
 
 $end_time = microtime(true);
 
 $handle = fopen("temp/results", "ab+");
 fwrite($handle, ($end_time - $start_time) . "\n");
 fclose($handle);
