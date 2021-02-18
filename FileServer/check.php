<?php
    header("Content-type=text/html;charset=utf-8");
    if (empty($_POST)) {
        exit("提交的表单数据超过post_max_size的配置");
    }
    // 转存post提交的各个变量
    $num = $_POST['num'];
    $name=array("Error","董航聿","顿佳麒","傅晓煜","韩林峰","何源","黄程霖","黄浩然","黄积权","黄诗睿","黄彦凯","陈天翔","赖语墨","李浚铭","李炫霖","刘航宇","刘嘉盛","刘明亮","陆天霖","覃绍帅","韦佳昕","韦嘉政","韦经尧","徐晗曦","杨新宇","叶帅舟","钟泽辉","周宇","朱雨泽","白兰清玉","陈丽西","陈颖欣","董思思","顾馨悦","黄稚晴","霍琪琪","江冉月","李旭蕾","刘芷萱","卢雨娜","陆佳悦","莫羽淳","裴缘","彭佳欣","邱欣妍","区晓澜","宋依娜","覃金爱","覃凌湘","韦超悦","韦嘉琦","韦苏洪","吴浩源","杨葳妮","张佳怡","周桂宇","宋海翠","吴嘉欣","董静仪");
    
    $doc =  "./VwNAzOx71Aq/".$num." ".$name[$num].".doc";
    $docx =  "./VwNAzOx71Aq/".$num." ".$name[$num].".docx";


    if(file_exists($doc))
    {
        echo "<h1>你的作业已提交</h1><h3>文件名为：".$num." ".$name[$num].".doc"."</h1>";
        echo('<meta http-equiv=\'refresh\' content="3; url=../">');
    }
    else
    {
        if(file_exists($docx))
        {
            echo '<h1><span style="color : green">你的作业已提交</span><br>文件名为：'.$num." ".$name[$num].".docx"."</h1>";
            echo('<meta http-equiv=\'refresh\' content="2; url=../">');
        }
        else
        {
            echo "<h1 style=\"color:red\">你的作业还没有提交<br></h1>";
            echo "<h2>解决方法如下<br></h2>";
            echo "<h3><li>1.重新提交<br></li></h3>";
            echo "<h3><li>2.检查文件名是否为 .doc 或者 .docx 格式<br></li></h3>";
            echo "<h3><li>3.若两项都不能解决问题,请私信QQ:2310933302<br></li></h3>";
            echo '<h2><span style="color:red" id="second">5</span>秒钟后跳转至2020-2021学年度上学期寒假实践作业提交系统，如不跳转点击<a href="../">这里</a></h2>';
            echo('<meta http-equiv=\'refresh\' content="10; url=../">');
        }
        
    }
    
?>