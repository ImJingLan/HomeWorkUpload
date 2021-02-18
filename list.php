<?php
    header("Content-type=text/html;charset=utf-8");
    $time1=date("Y年m月d日 H时i分s秒");
    $name=array("不要改这个","学生1","学生2");//学生姓名,按学号排，一定要从第二个项目写第一个学生的名字
	$tupload=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);//存是否交了，0：未交,1：交了
	$n=2;//有几个学生
    $weijiao=0;$jiao=0;
   for($i=1;$i<=58;$i++)
    {   
        
        $doc =  "./FileServer/VwNAzOx71Aq/".$i." ".$name[$i].".doc";
        $docx =  "./FileServer/VwNAzOx71Aq/".$i." ".$name[$i].".docx";
        if(!file_exists($doc) && !file_exists($docx))
        {
            $weijiao++;
			$tupload[$i]=0;
        }
        else {$tupload[$i]=1;$jiao++;}
    }
    echo "<h1 style=\"text-align:center;\"><strong>未提交 <span style=\"color: red\">".$weijiao."</span> 人</strong></h1><h3 style=\"text-align:center;\">(截止到 ".$time1.")</h3>";
    for($i=1;$i<=58;$i++)
    {
        if(!$tupload[$i])
        {
            echo "<h2 style=\"text-align:center;\">".$i.'号 '.$name[$i]."       ";
            echo '<span style="color: red">未提交</span></h2>';
        }
    }
    echo '<br>';
    echo "<h1 style=\"text-align:center;\"><strong>已提交 <span style=\"color: #009940\">".$jiao."</span> 人</strong></h1>";
    for($i=1;$i<=58;$i++)
    {   
        if($tupload[$i])
        {
            echo "<h2 style=\"text-align:center;\">".$i.'号 '.$name[$i]."       ";
            echo '<span style="color: #009940">已提交</span></h2>';
        }
        
    }
?>