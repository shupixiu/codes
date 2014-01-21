<?php

/**
 *  导出excel方法，这里有个问题：就是在一些情况下可能在打开导出的文件
 *  时会有 "***格式与文件扩展名指定的格式不一致**" 的提示，不过点 "是"
 *  打开的会还是没有什么问题。还没找到怎么不让这个提示出来.....
 *
 */
     echo export();
	function export() {
	    //header("content-Type:text/html; charset=gbk");
		$exportName = date('Y-m-d',time()).'_'.time().'.xls';
		header("Content-type:application/vnd.ms-excel;");
		header("Content-Disposition:attachment;filename=".$exportName);
		// 		header("Content-Transfer-Encoding: binary");
		echo '<meta http-equiv="Content-Type" content="text/html; charset=gbk" />';
		
		echo $table = '<table>';
		echo $table = '<thead><tr><th>'.iconv('utf-8','gbk','关键词').'</th><th>'
		     .iconv('utf-8','gbk','广称').'</th><th>'.iconv('utf-8','gbk','投放时间').'</th><th>'
			 .iconv('utf-8','gbk','广告类型').'</th><th>'.iconv('utf-8','gbk','投放状态').'</th></tr></thead>';
		echo $table = '<tbody>';
				
				echo '<tr><td>';
				echo 1;
				echo '</td><td>';
				echo 2;
				echo '</td><td>';
				echo 3;
				echo '</td><td>';
				echo 4;
				echo "</td><td>";
				echo 5;
				echo '</td></tr>';
			/*}
		}*/
		
		echo '</tbody></table>';
		exit;
	}





?>