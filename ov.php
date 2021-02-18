<?php
    header("Content-type=text/html;charset=utf-8");
    $time1=date("Y年m月d日 H时i分s秒");
    $name=array("Error","董航聿","顿佳麒","傅晓煜","韩林峰","何源","黄程霖","黄浩然","黄积权","黄诗睿","黄彦凯","陈天翔","赖语墨","李浚铭","李炫霖","刘航宇","刘嘉盛","刘明亮","陆天霖","覃绍帅","韦佳昕","韦嘉政","韦经尧","徐晗曦","杨新宇","叶帅舟","钟泽辉","周宇","朱雨泽","白兰清玉","陈丽西","陈颖欣","董思思","顾馨悦","黄稚晴","霍琪琪","江冉月","李旭蕾","刘芷萱","卢雨娜","陆佳悦","莫羽淳","裴缘","彭佳欣","邱欣妍","区晓澜","宋依娜","覃金爱","覃凌湘","韦超悦","韦嘉琦","韦苏洪","吴浩源","杨葳妮","张佳怡","周桂宇","宋海翠","吴嘉欣","董静仪");
    $tupload=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
    for($i=1;$i<=58;$i++)
    {
        $doc =  "./FileServer/VwNAzOx71Aq/".$i." ".$name[$i].".doc";
        $docx =  "./FileServer/VwNAzOx71Aq/".$i." ".$name[$i].".docx";
        if(file_exists($doc) || file_exists($docx))
        {
            $tupload[$i]=1;
            continue;
        }
        else
        {
            $tupload[$i]=0;
        }
    }
    echo "<h1 style=\"text-align:center; color: #009940;\">已提交<br></h1><h3 style=\"text-align:center;\">(截止到 ".$time1.")</h3>"."<h2 style=\"text-align:center;\">";
    $uploado=0;
    for($i=1;$i<=58;$i++)
    {
        if($tupload[$i]==1)
        {
            echo $name[$i]."&ensp;&ensp;";
            $uploado++;
        }
        
    }
    if($uploado==0)
        echo "暂无";
    else
    {
        
        if($uploado>0&&$uploado<58)
            echo "<br><br>已提交 <span style=\"color: #009940;\">".$uploado."</span> 人";
        if($uploado==58)
            echo "<br><br>所有人已经完成提交";
    }
    echo "</h2><br><h1 style=\"text-align:center;color: red\" >未提交<br></h1><h3 style=\"text-align:center;\">(截止到 ".$time1.")</h3>"."<h2 style=\"text-align:center;\">";
    $unuploado=0;
    for($i=1;$i<=58;$i++)
    {
        if($tupload[$i]==0)
        {
            echo $name[$i]."&ensp;&ensp;";
            $unuploado++;
        }
    }
    if($unuploado==0)
        echo "已全部提交";
    else
        echo "<br><br>剩余 <span style=\"color: red\">".$unuploado."</span> 人未提交";
    echo "</h2>";
    echo '<h2 style="text-align:center; color:#FF3030">查看列表:<a href="./list.php">点我</a></h2>';
    
?>