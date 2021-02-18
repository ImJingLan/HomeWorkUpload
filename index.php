<?php
header("Content-type:text/html;charset=utf-8");    //设置编码
$time1=strtotime(date("Y-m-d H:i:s"));                         //获取当前时间
$time2=strtotime("2021-2-18 19:00:00");//设置截止时间  年-月-日 时:分:秒
$time3 = $time2-$time1;;//当前时间-截止时间,如为负数就超时了.
$name=array("不要改这个","学生1","学生2");//学生姓名,按学号排，一定要从第二个项目写第一个学生的名字
$n=2;//有几个学生
if($time3<0)//到时后
    echo('
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>作业提交系统</title>
        
	</head>
	
	<body style="text-align:center;">
	    
		<h1>作业提交系统</h1>
		
		<hr style="border:1 dashed #987cb9" width="80%" color=#987cb9 SIZE=1>
        
        <strong>
            <h3 style="red">提交通道已关闭</h3>
        </strong>
        
        <hr style="border:1 dashed #987cb9" width="80%" color=#987cb9 SIZE=1>
        
        <h2><strong>可重复提交,重复提交将覆盖之前的文件，将以最后一次提交的文件为准<br><br><span style="color: red">祝同学们假期愉快</span></strong></h2>
        
        <hr style="border:1 dashed #987cb9" width="80%" color=#987cb9 SIZE=1>

        <h2>作业完成情况：<a href="./ov.php">总览</a>&ensp;&ensp;<a href="./list.php">列表</a></h2>
        <hr style="border:1 dashed #987cb9" width="80%" color=#987cb9 SIZE=1>
        <footer>
		    <p>Copyright © 2021 ImJingLan , All rights reserved.</p>
		</footer>

	</body>
	
</html>
');

else 
echo('
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>2020-2021学年度上学期寒假实践作业提交系统</title>
        
	</head>
	
	<body style="text-align:center;">
	    
		<h1>2020-2021学年度上学期寒假实践作业提交系统</h1>
		
	    
		<hr style="border:1 dashed #987cb9" width="80%" color=#987cb9 SIZE=1>
        
        <strong>
        <form action="./FileServer/fileSystem.php" method="post" enctype="multipart/form-data">
			<h3 style="color: red">请上传格式为 <strong>.doc</strong> 或者 <strong>.docx</strong> 的文件</h3>
			<select name="num" style="width:150px;height:40px; font-size:120%">');
			for($i=1;$i<=$n;$i++)//输出学生选择框
                {
                        echo '<option value ="'.$i.'">'.$i.'号 '.$name[$i].'</option>';
                }
			echo('</select><br><br>
			<input type="hidden" name="MAX_FILE_SIZE" value="25000000" />
			<input type="file" name="myDocument[]" size="25" maxlength="100" accept="application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" style="width:300px;height:35px; font-size:120%"><br><br>
			<input type="submit" value="提交" style="width:100px;height:60px;font-size:110%">
		</form>
        </strong>
        
        <hr style="border:1 dashed #987cb9" width="80%" color=#987cb9 SIZE=1>
        
        <h2><strong>可重复提交,重复提交将覆盖之前的文件，将以最后一次提交的文件为准<br><br><span style="color: red">祝同学们假期愉快</span></strong></h2>
        
        <hr style="border:1 dashed #987cb9" width="80%" color=#987cb9 SIZE=1>
		
        <h2>作业提交情况查询：<a href="check.php">点我进入</a></h2>
        <hr style="border:1 dashed #987cb9" width="80%" color=#987cb9 SIZE=1>
        <h2>作业完成情况：<a href="./ov.php">总览</a>&ensp;&ensp;<a href="./list.php">列表</a></h2>
        <hr style="border:1 dashed #987cb9" width="80%" color=#987cb9 SIZE=1>
        <footer>
		    <p>Copyright © 2021 ImJingLan , All rights reserved.</p>
		</footer>

	</body>
	
</html>
');

 

?>