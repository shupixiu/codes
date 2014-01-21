<?php

export_csv();
function export_csv() {
    $filename = date('YmdHis').".csv";//文件名
     header("Content-type:text/csv");
    //header("Content-type:APPLICATION/OCTET-STREAM");  这个头也没问题
    header("Content-Disposition:attachment;filename=".$filename);
    header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
    header('Expires:0');
    header('Pragma:public');
	$title = '书ID,书名,不知道'."\n"; //栏目名称
    echo formatExportContent($title,get_export_data());
}

    /**
     *  组织数据为导出需要的格式
     *  @author  bfsun
     *  @param   string   $title           导出文件中的标题   格式： $title = '书ID,书名'."\n"
     *            array   $outDataArr       需要转换的数据    eg : array(
     *                                                                   0=>array(
                                                                                   "xxxx" =>"xxxx"
     *                                                                            )
     *                                                                  )
     *  @return  string $data   string（标签+数据）   拼接好的内容;
     */
function formatExportContent($title,$outDataArr)
{
       $data  = iconv('utf-8','gbk',$title); //栏目名称
        foreach($outDataArr as $val){
            $size_result = count($val);
            $subkey      = 0;
            foreach($val as $subVal){
                $subkey++;
                if($subkey!==$size_result){
                    $data .=iconv('utf-8','gbk',$subVal) .",";
                }else{
                    $data .=iconv('utf-8','gbk',$subVal) ."\n";
                }
            }
        }
        return $data;
}


function get_export_data() {
	$res=array(
	  0 =>array(
		         "name"   => 0,
			     "option" => 1,
				 "time" => 2
	            ),
	  1 =>array(
		         "name" => 0,
			     "option" => 1,
		         "time" =>"叔知道",
	            )					
	);
    return $res;
}


