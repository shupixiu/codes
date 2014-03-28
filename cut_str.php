<?php
$str = "##aA������#";
$str2 = "111fsfs����";
$str3 = "������111fsfs����";
$str4 = "����a��A����111fs";  

echo cut_str($str,5);
echo "<br>";
echo cut_str($str2,5);
echo "<br>";
echo cut_str($str3,5);
echo "<br>";
echo cut_str($str4,5);

function cut_str($sourcestr,$cutlength) 
{ 
   $returnstr=''; 
   $i=0; 
   $n=0; 
   $str_length=strlen($sourcestr);//�ַ������ֽ��� 
   while (($n<$cutlength) and ($i<=$str_length)) 
   { 
      $temp_str=substr($sourcestr,$i,1); 
      $ascnum=Ord($temp_str);//�õ��ַ����е�$iλ�ַ���ascii�� 
      if ($ascnum>=224)    //���ASCIIλ����224��
      { 
         $returnstr=$returnstr.substr($sourcestr,$i,3); //����UTF-8����淶����3���������ַ���Ϊ�����ַ�         
         $i=$i+3;            //ʵ��Byte��Ϊ3
         $n++;            //�ִ����ȼ�1
      }
      elseif ($ascnum>=192) //���ASCIIλ����192��
      { 
         $returnstr=$returnstr.substr($sourcestr,$i,2); //����UTF-8����淶����2���������ַ���Ϊ�����ַ� 
         $i=$i+2;            //ʵ��Byte��Ϊ2
         $n++;            //�ִ����ȼ�1
      }
      elseif ($ascnum>=65 && $ascnum<=90) //����Ǵ�д��ĸ��
      { 
         $returnstr=$returnstr.substr($sourcestr,$i,1); 
         $i=$i+1;            //ʵ�ʵ�Byte���Լ�1��
         $n++;            //�������������ۣ���д��ĸ�Ƴ�һ����λ�ַ�
      }
      else                //��������£�����Сд��ĸ�Ͱ�Ǳ����ţ�
      { 
         $returnstr=$returnstr.substr($sourcestr,$i,1); 
         $i=$i+1;            //ʵ�ʵ�Byte����1��
         $n=$n+0.5;        //Сд��ĸ�Ͱ�Ǳ���������λ�ַ���...
      } 
   } 
     
	 
	   if ($str_length>$cutlength){
          $returnstr = $returnstr . "...";//��������ʱ��β������ʡ�Ժ�
      }
    return $returnstr; 
}