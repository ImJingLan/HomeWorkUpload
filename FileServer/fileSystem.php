<?php
       header("Content-type=text/html;charset=utf-8");
        if (empty($_POST)) {
            exit("提交的表单数据超过post_max_size的配置");
        }
        // 转存post提交的各个变量
        $num = $_POST['num'];
        $username = $_POST['username'];
        $arr = $_FILES['myDocument'];
        $file =array();
        
        $name=array("Error","董航聿","顿佳麒","傅晓煜","韩林峰","何源","黄程霖","黄浩然","黄积权","黄诗睿","黄彦凯","陈天翔","赖语墨","李浚铭","李炫霖","刘航宇","刘嘉盛","刘明亮","陆天霖","覃绍帅","韦佳昕","韦嘉政","韦经尧","徐晗曦","杨新宇","叶帅舟","钟泽辉","周宇","朱雨泽","白兰清玉","陈丽西","陈颖欣","董思思","顾馨悦","黄稚晴","霍琪琪","江冉月","李旭蕾","刘芷萱","卢雨娜","陆佳悦","莫羽淳","裴缘","彭佳欣","邱欣妍","区晓澜","宋依娜","覃金爱","覃凌湘","韦超悦","韦嘉琦","韦苏洪","吴浩源","杨葳妮","张佳怡","周桂宇","宋海翠","吴嘉欣","董静仪");
        
        for ($i=0; $i < count($arr['name']); $i++) { 
            $file[$i]['name'] = $arr['name'][$i];
            $file[$i]['type'] = $arr['type'][$i];
            $file[$i]['tmp_name'] = $arr['tmp_name'][$i];
            $file[$i]['error'] = $arr['error'][$i];
            $file[$i]['size'] = $arr['size'][$i];
        }
        
    //跳转
    
    
        for ($i=0; $i < count($file); $i++) 
        {
            $low=substr($file[$i]['name'], strpos($file[$i]['name'], "."));
            if($low==".docx"||$low==".doc")
            {
                switch ($file[$i]['error']) 
                {
                    default:
                        echo "Failed upload";
                    case 0:          
                        $fileName = $file[$i]['name'];
                        $fileTemp = $file[$i]['tmp_name'];
                        // 文件名称合成：uploads目录下，学号+姓名+文件后缀
                        // 其中文件后缀使用了php字符串处理的几个方法，主要是通过判断"."的位置获取后缀名
                        $destination = "VwNAzOx71Aq/" . $num . " " . $name[$num] .  $low;
                        move_uploaded_file($fileTemp, $destination);
                        echo '<h1 style=" text-align:center; color :green">上传成功</h1>';
                        echo('<meta http-equiv=\'refresh\' content="2; url=../">');
                        break;
                    case 1:
                        echo "php.ini upload_max_filesize is to small";
                        echo('<meta http-equiv=\'refresh\' content="5; url=../">');
                        break;
                    case 2:
                        echo "上传文件过大";
                        echo('<meta http-equiv=\'refresh\' content="2; url=../">');
                        break;
                    case 3:
                        echo "only part is ok";
                        echo('<meta http-equiv=\'refresh\' content="2; url=../">');
                        break;
                    case 4:
                        echo "你还没有选择需要上传的文件哦";
                        echo('<meta http-equiv=\'refresh\' content="2; url=../">');
                        break;
                } 
            }
            else
            {
                echo '<h1 style=" text-align:center; color :red">请检查你的格式</h1>';
                echo '<h2 style=" text-align:center; color :red">此格式不符合作业格式要求</h2>';
                echo '<h2 style=" text-align:center; color :red">作业格式要求为&ensp;.doc&ensp;或&ensp;.docx&ensp;格式</h2>';
                echo '<h2 style=" text-align:center; color :red">你上传的格式为&ensp;'. $low .  '&ensp;格式</h2>';
                echo('<meta http-equiv=\'refresh\' content="6; url=../">');
            }
        }  
?>