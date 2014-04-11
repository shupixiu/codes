<?php
/* 
 *  简单的demo说明了exception的流程
 */
function test11(){
 throw new Exception('Uncaught Exception');
 echo 1111;                       
}
try{
	test11();
	echo 222;                     
}catch(Exception $e){
  echo 3333;
}
echo 444;

//最终输出结果  3333444




/*
 //这个是用默认设置的方法来处理没有进行try{}catch{}捕捉的异常
function exception_handler($exception) {
  echo $exception->getMessage();
}
set_exception_handler('exception_handler');
function test11(){
 throw new Exception('1');
 echo 2;                           //不执行
}
test11();
echo 3;                            //不执行

//输出结果为 1
*/