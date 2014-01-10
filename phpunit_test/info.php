<?php

   require_once('D:/WAMP/PEAR/pear/PHPUnit/Framework/TestCase.php'); 
   require_once('calculator.php') ;
require_once('remoteConnect.php') ;

    class calculatorTest extends PHPUnit_Framework_TestCase 
    { 
        //public $o; 
        //开始的时候初始化一个待测试类 
        function setUp() 
        { 
            $this->o = new calculator(); 
        } 
        //最后消亡的时候清除掉这个类 
        function tearDown() { 
                unset($this->o); 
        } 
        function testadd() 
        { 
            $r = $this->o->add(1,2); 
            $e = 3; 
            //assertEquals和assertTrue基本一样，不过这个返回的参数更加详细 
            //这里的1+2肯定等于3，我们故意写错看下他的反应。注意这里是故意写错，实际测试时，这些结果必须是完全正确的，因为它的功能就是检测类方法是否正确。 
            $this->assertEquals($r,$e); 
        } 
        function testadd2() 
        { 
            $r = $this->o->add(102,106); 
            $e = 208; 
            $this->assertTrue($r == $e); 
        } 

		public function testConnectionIsValid()  
        {  
        // test to ensure that the object from an fsockopen is valid  
           $connObj = new RemoteConnect();  
           $serverName = 'www.baidu.com';  
           $this->assertTrue($connObj->connectToServer($serverName) !== false);  
        } 
         
    } 



?>